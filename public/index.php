<?php

define('APP_PATH', dirname(__DIR__));

require_once APP_PATH . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use App\Core\App;

$app = new App();
$app->start();
