<?php

namespace Core\Middleware;

class Middleware {
    //const so it cannot be modified
    public const MAP = [
        'guest' => Guest::class,
        'auth' => Auth::class
    ];

    public static function check($route){
        //use self for static/const
        //if the route exists (its either guest or auth)
        //set the middleware as that class
        $middleware = self::MAP[$route] ?? false;

        //if false throw exception
        if(!$middleware){
            throw new \Exception("there is no match for key {$route['middleware']}");
        }

        //create instance of either guest or app
        //do what handle func defines (checks if user is logged in or not)
        (new $middleware)->handle();
    }
}