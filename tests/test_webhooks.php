<?php

// Checks Referalli\Webhook::verify against the shared vectors: php tests/test_webhooks.php [vectors.json]
require __DIR__ . '/../autoload.php';

$path = $argv[1] ?? __DIR__ . '/vectors.json';
$cases = json_decode(file_get_contents($path), true)['cases'];
$failed = 0;
foreach ($cases as $c) {
    if (Referalli\Webhook::verify($c['body'], $c['headers'], $c['secrets'], $c['now']) !== $c['valid']) {
        echo "FAIL {$c['name']}\n";
        $failed++;
    }
}
echo (count($cases) - $failed) . '/' . count($cases) . " passed\n";
exit($failed ? 1 : 0);
