<?php
require_once __DIR__."/vendor/autoload.php";
use Pecee\SimpleRouter\SimpleRouter;

define('BASE_URL', __DIR__);
define('VIEWS', __DIR__.'/views/');

require_once 'routes/route.php';

SimpleRouter::setDefaultNamespace('\Demo\Controllers');
SimpleRouter::start();

