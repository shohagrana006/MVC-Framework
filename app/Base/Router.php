<?php 

namespace App\Base;

use Pecee\SimpleRouter\SimpleRouter;
use Pecee\Http\Request;
use Pecee\SimpleRouter\Route\IRoute;


class Router extends SimpleRouter{
    
    public static function get(string $url, $callback, array $settings = null): IRoute
    {
        $url = BASE_DIR.$url;
        return static::match([Request::REQUEST_TYPE_GET], $url, $callback, $settings);
    }

   
    public static function post(string $url, $callback, array $settings = null): IRoute
    {
        $url = BASE_DIR.$url;
        return static::match([Request::REQUEST_TYPE_POST], $url, $callback, $settings);
    }

    public static function put(string $url, $callback, array $settings = null): IRoute
    {
        $url = BASE_DIR.$url;
        return static::match([Request::REQUEST_TYPE_PUT], $url, $callback, $settings);
    }

   
    public static function patch(string $url, $callback, array $settings = null): IRoute
    {
        $url = BASE_DIR.$url;
        return static::match([Request::REQUEST_TYPE_PATCH], $url, $callback, $settings);
    }

   
    public static function options(string $url, $callback, array $settings = null): IRoute
    {
        $url = BASE_DIR.$url;
        return static::match([Request::REQUEST_TYPE_OPTIONS], $url, $callback, $settings);
    }

    
    public static function delete(string $url, $callback, array $settings = null): IRoute
    {
        $url = BASE_DIR.$url;
        return static::match([Request::REQUEST_TYPE_DELETE], $url, $callback, $settings);
    }
}