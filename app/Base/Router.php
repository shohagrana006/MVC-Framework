<?php 

namespace App\Base;
use Pecee\SimpleRouter\SimpleRouter;
use Closure;
use Exception;
use Pecee\Exceptions\InvalidArgumentException;
use Pecee\Http\Middleware\BaseCsrfVerifier;
use Pecee\Http\Request;
use Pecee\Http\Response;
use Pecee\Http\Url;
use Pecee\SimpleRouter\ClassLoader\IClassLoader;
use Pecee\SimpleRouter\Exceptions\HttpException;
use Pecee\SimpleRouter\Handlers\CallbackExceptionHandler;
use Pecee\SimpleRouter\Handlers\IEventHandler;
use Pecee\SimpleRouter\Route\IGroupRoute;
use Pecee\SimpleRouter\Route\ILoadableRoute;
use Pecee\SimpleRouter\Route\IPartialGroupRoute;
use Pecee\SimpleRouter\Route\IRoute;
use Pecee\SimpleRouter\Route\RouteController;
use Pecee\SimpleRouter\Route\RouteGroup;
use Pecee\SimpleRouter\Route\RoutePartialGroup;
use Pecee\SimpleRouter\Route\RouteResource;
use Pecee\SimpleRouter\Route\RouteUrl;

class Router extends SimpleRouter{
    
}