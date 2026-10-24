<?php

declare(strict_types=1);

// Unit tests: retry policy, options, webhooks and the README samples. php tests/test_client.php
require __DIR__ . '/../autoload.php';

use Referalli\Client;
use Referalli\Events\ReferralCreatedEvent;
use Referalli\Events\Topics;
use Referalli\Events\WebhookEvent;
use Referalli\Exception\WebhookVerificationException;
use Referalli\Version;
use Referalli\Webhook;

$failures = 0;
function check(bool $ok, string $what): void
{
    global $failures;
    if (!$ok) {
        $failures++;
        echo "FAIL {$what}\n";
    }
}

$secret = 'whsec_' . base64_encode('0123456789abcdef0123456789abcdef');
function sign(string $body, string $secret, ?int $ts = null): array
{
    $ts ??= time();
    $sig = base64_encode(hash_hmac('sha256', "msg_1.{$ts}.{$body}", base64_decode(substr($secret, 6)), true));
    return ['Webhook-Id' => 'msg_1', 'Webhook-Timestamp' => (string) $ts, 'Webhook-Signature' => "v1,{$sig}"];
}

// constructEvent returns the topic's class.
$body = json_encode(['id' => 'evt_1', 'topic' => 'referral.created', 'orgId' => 'org_1', 'livemode' => false, 'createdAt' => '2026-10-21T12:00:00Z', 'data' => ['partnerId' => 'ptr_1']]);
$event = Webhook::constructEvent($body, sign($body, $secret), [$secret]);
check($event instanceof ReferralCreatedEvent, 'typed event class');
check($event->data()['partnerId'] === 'ptr_1' && $event->orgId === 'org_1' && $event->livemode === false, 'event fields');
check(in_array('referral.created', Topics::ALL, true), 'topics list');

// Unknown topics fall back to the base class; bad signatures and stale timestamps throw.
$unknown = '{"id":"evt_2","topic":"brand.new","data":{}}';
check(get_class(Webhook::constructEvent($unknown, sign($unknown, $secret), $secret)) === WebhookEvent::class, 'base event');
foreach ([[sign($body, $secret), 'whsec_b3RoZXI='], [sign($body, $secret, time() - 301), $secret]] as [$headers, $s]) {
    try {
        Webhook::constructEvent($body, $headers, $s);
        check(false, 'should have thrown');
    } catch (WebhookVerificationException) {
    }
}
check(Webhook::verify($body, sign($body, $secret, 1000), $secret, 1200), 'explicit now');
check(!Webhook::verify($body . ' ', sign($body, $secret), $secret), 'tampered body');
$server = [];
foreach (sign($body, $secret) as $k => $v) {
    $server['HTTP_' . strtoupper(str_replace('-', '_', $k))] = $v;
}
check(Webhook::verify($body, $server, $secret), '$_SERVER-style headers');

// withOptions copies; mode validated.
$client = new Client('rk_test_1');
$fast = $client->withOptions(['timeout' => 1, 'mode' => 'test']);
check($fast->timeout() === 1.0 && $fast->mode() === 'test' && $client->timeout() === 30.0 && $client->mode() === null, 'withOptions');
try {
    new Client('k', Client::DEFAULT_BASE_URL, ['mode' => 'prod']);
    check(false, 'bad mode accepted');
} catch (\InvalidArgumentException) {
}
check(Version::VERSION === '0.2.0', 'version');

// README samples: every block lints and calls real methods.
$readme = file_get_contents(__DIR__ . '/../README.md');
preg_match_all('/```php\n(.*?)```/s', $readme, $m);
check(count($m[1]) >= 5, 'README has samples');
foreach ($m[1] as $i => $block) {
    $tmp = tempnam(sys_get_temp_dir(), 'readme') . '.php';
    file_put_contents($tmp, $block);
    exec(escapeshellarg(PHP_BINARY) . ' -l ' . escapeshellarg($tmp) . ' 2>&1', $out, $code);
    unlink($tmp);
    check($code === 0, "README block {$i} lints");
    preg_match_all('/\$(?:client|fast)->(\w+)\(/', $block, $calls);
    foreach ($calls[1] as $method) {
        check(method_exists(Client::class, $method), "Client::{$method} exists");
    }
    preg_match_all('/^use (Referalli\\\\[\w\\\\]+);/m', $block, $uses);
    foreach ($uses[1] as $class) {
        check(class_exists($class), "{$class} exists");
    }
    preg_match_all("/->call\\('(\\w+)'/", $block, $ops);
    foreach ($ops[1] as $op) {
        check(isset(Client::OPERATIONS[$op]), "operation {$op} exists");
    }
}

echo $failures === 0 ? "ok\n" : "{$failures} failure(s)\n";
exit($failures === 0 ? 0 : 1);
