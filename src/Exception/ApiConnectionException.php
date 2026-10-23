<?php

declare(strict_types=1);

namespace Referalli\Exception;

/** The API could not be reached (network error or timeout), after retries. */
class ApiConnectionException extends ReferalliException
{
}
