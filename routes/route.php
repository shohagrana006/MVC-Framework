<?php

use App\Base\Router;
use App\Controllers\UserController;
use App\Controllers\WelcomeController;


Router::get('/',[WelcomeController::class, 'hello']);
Router::get('/users',[UserController::class, 'index']);