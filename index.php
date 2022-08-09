<?php
require_once __DIR__."/vendor/autoload.php";
use Pecee\SimpleRouter\SimpleRouter;

// for env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('BASE_URL', __DIR__);
define('VIEWS', __DIR__.'/views');
define('BASE_DIR', env('BASE_DIR'));


require_once 'routes/route.php';

// for routes
SimpleRouter::setDefaultNamespace('\Demo\Controllers');
SimpleRouter::start();


