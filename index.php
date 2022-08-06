<?php
require_once __DIR__."/vendor/autoload.php";
use Pecee\SimpleRouter\SimpleRouter;

require_once 'routes/route.php';

SimpleRouter::setDefaultNamespace('\Demo\Controllers');
SimpleRouter::start();

