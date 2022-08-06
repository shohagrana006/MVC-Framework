<?php

use App\Base\Router;
use App\Controllers\UserController;
use App\Controllers\WelcomeController;


Router::get('mvc_pattern/',[WelcomeController::class, 'hello']);
Router::get('mvc_pattern/users',[UserController::class, 'index']);