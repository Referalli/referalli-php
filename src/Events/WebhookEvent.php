<?php

declare(strict_types=1);

namespace Referalli\Events;

/**
 * A webhook delivery: the envelope every topic shares. Webhook::constructEvent
 * returns the topic's subclass (ReferralCreatedEvent, ...; see Topics), or this
 * class for a topic this SDK predates.
 */
class WebhookEvent
{
    /**
     * @param array<string, mixed> $data
     * @param array<string, mixed> $raw
     */
    final public function __construct(
        public readonly string $id,
        public readonly string $topic,
        public readonly ?string $orgId,
        public readonly bool $livemode,
        public readonly ?string $createdAt,
        protected readonly array $data,
        public readonly array $raw,
    ) {
    }

    /** @param array<string, mixed> $raw */
    public static function fromArray(array $raw): static
    {
        return new static(
            (string) ($raw['id'] ?? ''),
            (string) $raw['topic'],
            isset($raw['orgId']) ? (string) $raw['orgId'] : null,
            (bool) ($raw['livemode'] ?? true),
            isset($raw['createdAt']) ? (string) $raw['createdAt'] : null,
            is_array($raw['data'] ?? null) ? $raw['data'] : [],
            $raw,
        );
    }

    /** @return array<string, mixed> */
    public function data(): array
    {
        return $this->data;
    }
}
