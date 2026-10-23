# Referalli PHP SDK

The official PHP client for the [Referalli](https://referalli.com) API: attribution-first affiliate and referral programs.

- One method per API operation, with PHPStan/Psalm array shapes for every request and response (`Referalli\Models`).
- Retries with backoff, idempotency keys, timeouts, auto-paging generators and one exception class per error code.
- Webhook signature verification and typed webhook events.
- No dependencies beyond `ext-json` (and `ext-openssl` for HTTPS). PHP 8.1+.

Docs: <https://referalli.com/docs>.

## Install

```bash
composer require referalli/referalli-php
```

Without Composer, `require 'path/to/referalli-php/autoload.php';`.

## Quickstart

Keep the `rk_` API key on your server.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Referalli\Client;

$client = new Client(getenv('REFERALLI_API_KEY'));

// 1. Create a referral link for a partner
$link = $client->postLinks([
    'programId' => 'prg_123',
    'partnerId' => 'ptr_123',
    'destinationUrl' => 'https://example.com/pricing',
]);
echo $link['shortUrl'] ?? '', "\n";

// 2. Attribute a signup to the partner who referred it
$client->postReferralsAssociate(['programId' => 'prg_123', 'customerRef' => 'user_42', 'anonId' => 'anon_from_cookie']);

// 3. Track a conversion: a purchase your server has validated
$client->postMobilePurchases(['eventId' => 'order_1001', 'customerRef' => 'user_42', 'amountMinor' => 4900, 'currency' => 'usd']);
```

Verify a webhook delivery (plain PHP shown; pass the raw body exactly as received):

```php
<?php

use Referalli\Events\CommissionEarnedEvent;
use Referalli\Exception\WebhookVerificationException;
use Referalli\Webhook;

try {
    $event = Webhook::constructEvent(file_get_contents('php://input'), getallheaders(), getenv('REFERALLI_WEBHOOK_SECRET'));
} catch (WebhookVerificationException $e) {
    http_response_code(400);
    exit;
}
if ($event instanceof CommissionEarnedEvent) {
    error_log('commission ' . json_encode($event->data()));
}
http_response_code(204);
```

## Configuration

```php
<?php

use Referalli\Client;

$client = new Client('rk_live_...', 'https://referalli.com', [
    'timeout' => 30,       // seconds per attempt
    'maxRetries' => 3,     // retries for idempotent requests
    'mode' => 'live',      // optional: assert the key's mode ('test' or 'live')
]);

$fast = $client->withOptions(['timeout' => 5, 'maxRetries' => 0]); // a copy with some options changed
```

Requests are pinned to the API version this SDK was generated against (`Referalli\Version::API_VERSION`); pass `'apiVersion'` to pin another.

### Test mode

Use a test-mode key (`rk_test_...`) to work against your organization's test data. Pass `'mode' => 'test'` to make every request assert it: the API rejects a request whose key is in the other mode with `ModeMismatchError`. Webhook events carry `livemode`.

## Errors

Every API error throws a subclass of `Referalli\Exception\ApiException` named after its code (`ValidationError`, `NotFoundError`, `RateLimitedError`, ...), with `status`, `errorCode`, `apiMessage`, `requestId`, `docsUrl`, `details` and `retryAfter`. Network failures and timeouts throw `ApiConnectionException` after the retries run out. All of them extend `ReferalliException`.

```php
<?php

use Referalli\Client;
use Referalli\Exception\ApiException;
use Referalli\Exception\NotFoundError;
use Referalli\Exception\RateLimitedError;

$client = new Client('rk_live_...');
try {
    $client->getPartnersId('ptr_missing');
} catch (NotFoundError $e) {
    echo $e->errorCode, ' ', $e->status, ' ', $e->requestId, ' ', $e->docsUrl, "\n";
} catch (RateLimitedError $e) {
    echo 'retry after ', $e->retryAfter, "\n";
} catch (ApiException $e) {
    echo $e->errorCode, ': ', $e->apiMessage, "\n";
}
```

Retries: GET, PUT and DELETE requests, and writes carrying an `Idempotency-Key`, are retried on 429, 5xx and network errors with exponential backoff and jitter, honoring `Retry-After`. POST and PATCH requests always carry a key (generated unless you pass `idempotencyKey:`), reused across retries, so a retried write is applied once.

## Pagination

List methods return one page (`['data' => [...], 'has_more' => ..., 'next_cursor' => ...]`); their `Each` twin is a generator that follows the cursor.

```php
<?php

use Referalli\Client;

$client = new Client('rk_live_...');
$page = $client->getPartners(status: 'active', limit: 50);
$nextPage = $client->getPartners(status: 'active', limit: 50, startingAfter: $page['next_cursor']);

foreach ($client->getReferralsEach() as $referral) {
    echo $referral['id'], "\n";
}
```

## Webhooks

`Webhook::constructEvent($rawBody, $headers, $secrets)` checks the Standard Webhooks signature (`webhook-id`, `webhook-timestamp`, `webhook-signature`) in constant time, rejects deliveries more than 5 minutes old or ahead (`toleranceSec:`), and returns the topic's event class (`Referalli\Events\ReferralCreatedEvent`, ...; every topic is in `Referalli\Events\Topics::ALL`). Headers may be in any case, or `$_SERVER`-style (`HTTP_WEBHOOK_ID`). Pass an array of secrets while you rotate one. `Webhook::verify(...)` returns a bool instead of throwing.

```php
<?php

use Referalli\Webhook;

$ok = Webhook::verify(file_get_contents('php://input'), getallheaders(), ['whsec_current', 'whsec_previous']);
```

## Any operation by id

```php
<?php

use Referalli\Client;

$client = new Client('rk_live_...');
$partner = $client->call('getPartnersId', ['id' => 'ptr_123']);
foreach ($client->listAll('getPartners', [], ['status' => 'active']) as $item) {
    echo $item['id'], "\n";
}
```

## Versioning

This SDK follows semantic versioning; see [CHANGELOG.md](./CHANGELOG.md).

## License

MIT. See [LICENSE](./LICENSE).
