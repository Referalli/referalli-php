<?php

declare(strict_types=1);

namespace Referalli\Exception;

/** The API answered with an error. `$code` (errorCode) is stable; `$docsUrl` explains it. */
class ApiException extends ReferalliException
{
    /** @param array<string, string> $headers */
    public function __construct(
        public readonly int $status,
        public readonly string $errorCode,
        public readonly string $apiMessage,
        public readonly ?string $requestId = null,
        public readonly ?string $docsUrl = null,
        public readonly mixed $details = null,
        public readonly ?float $retryAfter = null,
        public readonly array $headers = [],
    ) {
        parent::__construct("{$errorCode} ({$status}): {$apiMessage}");
    }
}
