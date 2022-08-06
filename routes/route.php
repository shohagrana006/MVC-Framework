<?php

use App\Base\Router;
use App\Controllers\WelcomeController;

Router::get('mvc_pattern/',[WelcomeController::class, 'hello']);