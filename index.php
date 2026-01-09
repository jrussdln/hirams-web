<?php
phpinfo();

define('LARAVEL_START', microtime(true));

require __DIR__ . '/hirams-backend/vendor/autoload.php';

$app = require_once __DIR__ . '/hirams-backend/bootstrap/app.php';

$app->handleRequest(
    Illuminate\Http\Request::capture()
);

