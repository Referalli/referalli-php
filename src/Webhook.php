<?php

declare(strict_types=1);

namespace Referalli;

use Referalli\Events\Topics;
use Referalli\Events\WebhookEvent;
use Referalli\Exception\WebhookVerificationException;

/**
 * Verify and parse webhook deliveries (Standard Webhooks signatures). Use the
 * raw body exactly as received (file_get_contents('php://input')).
 *
 * The signature is "v1," + base64 HMAC-SHA256 of "{webhook-id}.{webhook-timestamp}.{raw body}",
 * keyed with the base64 after "whsec_". It is compared in constant time, and deliveries more than
 * $toleranceSec (default 300) from now, in either direction, are rejected.
 */
final class Webhook
{
    public const TOLERANCE_SEC = 300;

    /**
     * True when $rawBody was signed with one of $secrets within the tolerance.
     * $headers maps header names (any case) to values. Pass two secrets while you rotate one.
     *
     * @param array<string, string|list<string>> $headers
     * @param string|list<string> $secrets
     */
    public static function verify(string $rawBody, array $headers, string|array $secrets, ?int $now = null, int $toleranceSec = self::TOLERANCE_SEC): bool
    {
        return self::problem($rawBody, $headers, $secrets, $now, $toleranceSec) === null;
    }

    /**
     * Verify a delivery and return its event, typed by topic (see Events\Topics).
     *
     * @param array<string, string|list<string>> $headers
     * @param string|list<string> $secrets
     * @throws WebhookVerificationException
     */
    public static function constructEvent(string $rawBody, array $headers, string|array $secrets, ?int $now = null, int $toleranceSec = self::TOLERANCE_SEC): WebhookEvent
    {
        $problem = self::problem($rawBody, $headers, $secrets, $now, $toleranceSec);
        if ($problem !== null) {
            throw new WebhookVerificationException($problem);
        }
        try {
            $raw = json_decode($rawBody, true, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            throw new WebhookVerificationException('the body is not JSON: ' . $e->getMessage());
        }
        if (!is_array($raw) || !isset($raw['topic']) || !is_string($raw['topic'])) {
            throw new WebhookVerificationException('the body is not a webhook event');
        }
        $class = Topics::CLASSES[$raw['topic']] ?? WebhookEvent::class;
        return $class::fromArray($raw);
    }

    /**
     * @param array<string, string|list<string>> $headers
     * @param string|list<string> $secrets
     */
    private static function problem(string $rawBody, array $headers, string|array $secrets, ?int $now, int $toleranceSec): ?string
    {
        $h = [];
        foreach ($headers as $k => $v) {
            $name = strtolower(str_replace('_', '-', (string) $k));
            $h[str_starts_with($name, 'http-') ? substr($name, 5) : $name] = is_array($v) ? (string) ($v[0] ?? '') : (string) $v;
        }
        $id = $h['webhook-id'] ?? '';
        $ts = $h['webhook-timestamp'] ?? '';
        $sig = $h['webhook-signature'] ?? '';
        if ($id === '' || $ts === '' || $sig === '') {
            return 'missing webhook-id, webhook-timestamp or webhook-signature header';
        }
        if (!ctype_digit($ts)) {
            return 'webhook-timestamp is not a unix timestamp';
        }
        if (abs(($now ?? time()) - (int) $ts) > $toleranceSec) {
            return 'webhook-timestamp is outside the tolerance (replayed or clock skew)';
        }
        $provided = array_filter(explode(' ', $sig), static fn ($p) => str_starts_with($p, 'v1,'));
        foreach ((array) $secrets as $secret) {
            $key = str_starts_with($secret, 'whsec_') ? base64_decode(substr($secret, 6)) : $secret;
            $expected = 'v1,' . base64_encode(hash_hmac('sha256', "{$id}.{$ts}.{$rawBody}", (string) $key, true));
            foreach ($provided as $p) {
                if (hash_equals($expected, $p)) {
                    return null;
                }
            }
        }
        return 'no signature matches the secret';
    }
}
