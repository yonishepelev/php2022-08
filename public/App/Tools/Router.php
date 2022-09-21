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
    public static function setRoute($pattern, $callback){
        self::$routes[] = [
            'pattern'=>$pattern,
            'callback'=>$callback
        ];
    }
    public function goRoute($currentUri){
        foreach (self::$routes as $route){
            $pattern = "/^".preg_quote($route['pattern'],'/')."\/?$/";
            //print_rr ($pattern);
            $pattern = str_replace ('\{','{', $pattern);
            $pattern = str_replace ('\}','}', $pattern);
            $pattern = preg_replace  ("/\{[a-zA-Z]+\}/", '(.+)', $pattern);

            if (preg_match ($pattern, $currentUri, $matches) === 1){
              //  print_rr ($pattern);
              //  print_rr ($currentUri);
              //  print_rr ($matches);
                $route['callback']($matches);
                return;
            }
        }
        http_response_code (404);
        echo '404 Упс адрес не найден';

    }

}
