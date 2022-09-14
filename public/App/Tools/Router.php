<?php

namespace App\Tools;

class Router
{
    private static self $instance;
    private static array $routes;


    private function __construct()
    {

    }

    private function __clone()
    {

    }

    public static function getRouter(): self
    {
        if (empty( self::$instance )) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function getAllRoutes(): array
    {
        return self::$routes;
    }
    public static function setRoute($uri, $callback){
        self::$routes[] = [
            'uri'=>$uri,
            'callback'=>$callback
        ];
    }
    public function goRoute($currentUri){
        foreach (self::$routes as $route){
            if ($route['uri'] === $currentUri){
                $route['callback']();
                return;
            }
        }
        echo '404 Упс адрес не найден';

    }

}
