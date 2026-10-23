<?php

declare(strict_types=1);

// PSR-4 autoloader for use without Composer: require 'path/to/sdk-php/autoload.php';
// (With Composer, `composer require referalli/referalli-php` wires this up for you.)
spl_autoload_register(static function (string $class): void {
    if (!str_starts_with($class, 'Referalli\\')) {
        return;
    }
    $file = __DIR__ . '/src/' . str_replace('\\', '/', substr($class, strlen('Referalli\\'))) . '.php';
    if (is_file($file)) {
        require $file;
    }
});
