<?php

declare(strict_types=1);

namespace Referalli;

use Referalli\Exception\ApiConnectionException;
use Referalli\Exception\ApiException;
use Referalli\Exception\ErrorClasses;

/**
 * Server-side client. Keep the rk_ key on your server.
 *
 * Every operation has a method named after its operationId (postLinks,
 * getPartners, ...). Writes carry an Idempotency-Key (generated unless you
 * pass idempotencyKey:) that is reused across retries. Idempotent requests
 * are retried on 429, 5xx and network errors with exponential backoff and
 * jitter, honoring Retry-After. Requests are pinned to Version::API_VERSION.
 *
 * The `mode` option ('test' or 'live') asserts the key's mode on every
 * request: the API refuses a request whose key is in the other mode.
 */
class Client
{
    use Operations;

    public const DEFAULT_BASE_URL = 'https://referalli.com';
    private const RETRY_STATUSES = [429, 500, 502, 503, 504];
    /** Methods that are safe to retry without an idempotency key. */
    private const IDEMPOTENT_METHODS = ['GET', 'HEAD', 'PUT', 'DELETE', 'OPTIONS'];
    /** Writes that get a generated Idempotency-Key when you don't pass one. */
    private const KEYED_METHODS = ['POST', 'PATCH'];
    private const MAX_RETRY_DELAY = 30.0;

    private string $baseUrl;
    private float $timeout;
    private ?string $mode;
    private int $maxRetries;
    private float $retryBaseDelay;
    private string $apiVersion;
    /** @var array<string, string> */
    private array $defaultHeaders;

    /**
     * @param array{timeout?: int|float, maxRetries?: int, retryBaseDelay?: float, apiVersion?: string, mode?: 'test'|'live'|null, defaultHeaders?: array<string, string>} $options
     */
    public function __construct(private ?string $apiKey = null, string $baseUrl = self::DEFAULT_BASE_URL, array $options = [])
    {
        $this->baseUrl = rtrim($baseUrl, '/');
        $this->timeout = (float) ($options['timeout'] ?? 30);
        $this->mode = $options['mode'] ?? null;
        if (!in_array($this->mode, [null, 'test', 'live'], true)) {
            throw new \InvalidArgumentException("mode must be 'test', 'live' or null");
        }
        $this->maxRetries = $options['maxRetries'] ?? 3;
        $this->retryBaseDelay = $options['retryBaseDelay'] ?? 0.5;
        $this->apiVersion = $options['apiVersion'] ?? Version::API_VERSION;
        $this->defaultHeaders = $options['defaultHeaders'] ?? [];
    }

    /**
     * A copy of this client with some options changed: $client->withOptions(['timeout' => 5])->getPartners().
     *
     * @param array{timeout?: int|float, maxRetries?: int, retryBaseDelay?: float, apiVersion?: string, mode?: 'test'|'live'|null, baseUrl?: string} $options
     */
    public function withOptions(array $options): self
    {
        return new self($this->apiKey, $options['baseUrl'] ?? $this->baseUrl, [
            'timeout' => $options['timeout'] ?? $this->timeout,
            'maxRetries' => $options['maxRetries'] ?? $this->maxRetries,
            'retryBaseDelay' => $options['retryBaseDelay'] ?? $this->retryBaseDelay,
            'apiVersion' => $options['apiVersion'] ?? $this->apiVersion,
            'mode' => array_key_exists('mode', $options) ? $options['mode'] : $this->mode,
            'defaultHeaders' => $this->defaultHeaders,
        ]);
    }

    public function timeout(): float
    {
        return $this->timeout;
    }

    public function mode(): ?string
    {
        return $this->mode;
    }

    /**
     * Call any operation by its id (see Operations::OPERATIONS) through its method.
     *
     * @param array<string, string> $path
     * @param array<string, mixed> $query
     */
    public function call(string $operationId, array $path = [], array $query = [], ?array $body = null, ?string $idempotencyKey = null): mixed
    {
        [, , $pathParams, $queryParams, $hasBody, , $method, $pathNames] = self::OPERATIONS[$operationId];
        $named = [];
        foreach ($pathParams as $i => $wire) {
            $named[$pathNames[$i]] = $path[$wire];
        }
        foreach ($query as $wire => $value) {
            $named[$queryParams[$wire]] = $value;
        }
        if ($hasBody) {
            $named['body'] = $body;
        }
        $named['idempotencyKey'] = $idempotencyKey;
        return $this->{$method}(...$named);
    }

    /**
     * Every item of a list operation, following next_cursor.
     *
     * @param array<string, string> $path
     * @param array<string, mixed> $query
     */
    public function listAll(string $operationId, array $path = [], array $query = []): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->call($operationId, $path, ['starting_after' => $cursor] + $query));
    }

    // --- transport -------------------------------------------------------

    private static function seg(string $value): string
    {
        return rawurlencode($value);
    }

    private function paginate(callable $fetch): \Generator
    {
        $cursor = null;
        while (true) {
            $page = $fetch($cursor);
            foreach ($page['data'] as $item) {
                yield $item;
            }
            if (empty($page['has_more']) || empty($page['next_cursor'])) {
                return;
            }
            $cursor = $page['next_cursor'];
        }
    }

    /** @param array<string, mixed> $query */
    private function request(string $method, string $path, array $query, ?array $body, ?string $idempotencyKey, string $kind): mixed
    {
        $url = $this->baseUrl . $path;
        $params = [];
        foreach ($query as $k => $v) {
            if ($v !== null) {
                $params[$k] = is_bool($v) ? ($v ? 'true' : 'false') : (string) $v;
            }
        }
        if ($params !== []) {
            $url .= '?' . http_build_query($params, '', '&', PHP_QUERY_RFC3986);
        }
        $headers = [
            'accept' => 'application/json',
            // Wire protocol: the API reads these header names.
            'referalli-version' => $this->apiVersion,
            'user-agent' => 'referalli-php/' . Version::VERSION,
        ] + $this->defaultHeaders;
        if ($this->mode !== null) {
            $headers['referalli-mode'] = $this->mode;
        }
        if ($this->apiKey !== null) {
            $headers['authorization'] = "Bearer {$this->apiKey}";
        }
        $payload = null;
        if ($body !== null) {
            // An empty PHP array is a JSON object here: every request body is an object.
            $payload = $body === [] ? '{}' : json_encode($body, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES);
            $headers['content-type'] = 'application/json';
        }
        if ($idempotencyKey !== null) {
            $headers['idempotency-key'] = $idempotencyKey;
        } elseif (in_array($method, self::KEYED_METHODS, true)) {
            $headers['idempotency-key'] = self::uuid();
        }
        // Only idempotent requests are retried: safe methods, or writes that carry an idempotency key.
        $retryable = in_array($method, self::IDEMPOTENT_METHODS, true) || isset($headers['idempotency-key']);

        for ($attempt = 0; ; $attempt++) {
            [$status, $resHeaders, $raw] = $this->send($method, $url, $headers, $payload);
            if ($status === 0) {
                if ($retryable && $attempt < $this->maxRetries) {
                    usleep((int) ($this->delay($attempt, null) * 1e6));
                    continue;
                }
                throw new ApiConnectionException("could not reach {$url}");
            }
            if ($status >= 200 && $status < 300) {
                if ($kind === 'text') {
                    return $raw;
                }
                if ($kind === 'empty' || $raw === '') {
                    return null;
                }
                return json_decode($raw, true, 512, JSON_THROW_ON_ERROR);
            }
            $retryAfter = self::retryAfter($resHeaders['retry-after'] ?? null);
            if (in_array($status, self::RETRY_STATUSES, true) && $retryable && $attempt < $this->maxRetries) {
                usleep((int) ($this->delay($attempt, $retryAfter) * 1e6));
                continue;
            }
            throw self::apiError($status, $raw, $resHeaders, $retryAfter);
        }
    }

    /**
     * @param array<string, string> $headers
     * @return array{0: int, 1: array<string, string>, 2: string}
     */
    private function send(string $method, string $url, array $headers, ?string $payload): array
    {
        $lines = '';
        foreach ($headers as $k => $v) {
            $lines .= "{$k}: {$v}\r\n";
        }
        $options = ['http' => ['method' => $method, 'header' => $lines, 'timeout' => $this->timeout, 'ignore_errors' => true, 'protocol_version' => 1.1]];
        $options['http']['header'] .= "connection: close\r\n";
        if ($payload !== null) {
            $options['http']['content'] = $payload;
        }
        $raw = @file_get_contents($url, false, stream_context_create($options));
        $status = 0;
        $resHeaders = [];
        foreach ($http_response_header ?? [] as $line) {
            if (preg_match('#^HTTP/\S+\s+(\d+)#', $line, $m)) {
                $status = (int) $m[1];
                $resHeaders = [];
            } elseif (str_contains($line, ':')) {
                [$k, $v] = explode(':', $line, 2);
                $resHeaders[strtolower(trim($k))] = trim($v);
            }
        }
        return [$raw === false && $status === 0 ? 0 : $status, $resHeaders, $raw === false ? '' : $raw];
    }

    private function delay(int $attempt, ?float $retryAfter): float
    {
        if ($retryAfter !== null) {
            return min(max(0.0, $retryAfter), self::MAX_RETRY_DELAY);
        }
        return min($this->retryBaseDelay * (2 ** $attempt), self::MAX_RETRY_DELAY) * (0.5 + mt_rand() / mt_getrandmax() * 0.5);
    }

    private static function retryAfter(?string $value): ?float
    {
        if ($value === null || $value === '') {
            return null;
        }
        if (is_numeric($value)) {
            return (float) $value;
        }
        $at = strtotime($value);
        return $at === false ? null : max(0.0, (float) ($at - time()));
    }

    /** @param array<string, string> $headers */
    private static function apiError(int $status, string $raw, array $headers, ?float $retryAfter): ApiException
    {
        $decoded = json_decode($raw, true);
        $err = is_array($decoded) && isset($decoded['error']) && is_array($decoded['error'])
            ? $decoded['error']
            : ['code' => 'http_error', 'message' => $raw !== '' ? $raw : "HTTP {$status}"];
        $code = (string) ($err['code'] ?? 'http_error');
        $class = ErrorClasses::MAP[$code] ?? ApiException::class;
        return new $class($status, $code, (string) ($err['message'] ?? ''), $err['requestId'] ?? ($headers['x-request-id'] ?? null),
            $err['docs_url'] ?? null, $err['details'] ?? null, $retryAfter, $headers);
    }

    private static function uuid(): string
    {
        $b = random_bytes(16);
        $b[6] = chr((ord($b[6]) & 0x0f) | 0x40);
        $b[8] = chr((ord($b[8]) & 0x3f) | 0x80);
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($b), 4));
    }
}
