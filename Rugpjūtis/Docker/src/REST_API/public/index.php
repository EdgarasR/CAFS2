<?php

define('ROOT_PATH', dirname(__DIR__));

require_once ROOT_PATH . '/vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();

require_once ROOT_PATH . '/app/middleware.php';
require_once ROOT_PATH . '/app/router.php';

$app->run();