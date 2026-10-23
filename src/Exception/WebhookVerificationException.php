<?php

declare(strict_types=1);

namespace Referalli\Exception;

/** A webhook delivery failed signature or timestamp verification, or isn't a JSON event. */
class WebhookVerificationException extends ReferalliException
{
}
