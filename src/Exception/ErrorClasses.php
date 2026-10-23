<?php

// Code generated from the Referalli OpenAPI document. DO NOT EDIT.
// Changes belong in the generator, which overwrites this file.

declare(strict_types=1);

namespace Referalli\Exception;

/** Error code => exception class. */
final class ErrorClasses
{
    public const MAP = [
        'validation_error' => ValidationError::class,
        'mode_mismatch' => ModeMismatchError::class,
        'bad_request' => BadRequestError::class,
        'unauthorized' => AuthenticationError::class,
        'step_up_required' => StepUpRequiredError::class,
        'payment_required' => PaymentRequiredError::class,
        'forbidden' => PermissionDeniedError::class,
        'webhooks_disabled' => WebhooksDisabledError::class,
        'sso_required' => SsoRequiredError::class,
        'access_suspended' => AccessSuspendedError::class,
        'not_found' => NotFoundError::class,
        'conflict' => ConflictError::class,
        'idempotency_in_progress' => IdempotencyInProgressError::class,
        'replay' => ReplayError::class,
        'live_mode_only' => LiveModeOnlyError::class,
        'test_mode_only' => TestModeOnlyError::class,
        'test_mode_unsupported' => TestModeUnsupportedError::class,
        'gone' => GoneError::class,
        'idempotency_key_reused' => IdempotencyKeyReusedError::class,
        'payload_too_large' => PayloadTooLargeError::class,
        'connection_paused' => ConnectionPausedError::class,
        'rate_limited' => RateLimitedError::class,
        'internal_error' => InternalServerError::class,
        'atlas_error' => AtlasError::class,
        'sso_provider_error' => SsoProviderError::class,
        'sso_not_configured' => SsoNotConfiguredError::class,
    ];
}
