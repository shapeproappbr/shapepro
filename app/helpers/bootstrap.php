<?php

define('ROOT', dirname(__DIR__, 2));

// Carregar .env
$envFile = ROOT . '/.env';
if (file_exists($envFile)) {
    foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (str_starts_with(trim($line), '#') || !str_contains($line, '=')) continue;
        [$k, $v] = explode('=', $line, 2);
        $_ENV[trim($k)] = trim($v);
    }
}

date_default_timezone_set('America/Sao_Paulo');

session_start();

// Autoloader simples
spl_autoload_register(function (string $class): void {
    $map = [
        'DB'         => ROOT . '/app/helpers/DB.php',
        'Auth'       => ROOT . '/app/helpers/Auth.php',
        'Request'    => ROOT . '/app/helpers/Request.php',
        'Response'   => ROOT . '/app/helpers/Response.php',
        'View'       => ROOT . '/app/helpers/View.php',
        'Upload'     => ROOT . '/app/helpers/Upload.php',
        'Audit'      => ROOT . '/app/helpers/Audit.php',
        'Alert'      => ROOT . '/app/helpers/Alert.php',
        'Controller' => ROOT . '/app/helpers/Controller.php',
    ];
    if (isset($map[$class])) {
        require_once $map[$class];
        return;
    }
    $paths = [
        ROOT . '/app/models/' . $class . '.php',
        ROOT . '/app/controllers/' . $class . '.php',
        ROOT . '/app/services/' . $class . '.php',
        ROOT . '/app/middleware/' . $class . '.php',
    ];
    foreach ($paths as $path) {
        if (file_exists($path)) { require_once $path; return; }
    }
});

require_once ROOT . '/app/helpers/functions.php';
