<?php

namespace Core\Middleware;

class Middleware {
    public const MAP = [
        'guest' => Guest::class,
        'auth' => Auth::class,
        'role' => Role::class
    ];

    public static function check($route) {
        $middleware = self::MAP[$route] ?? false;

        if (!$middleware) {
            throw new \Exception("There is no match for key {$route['middleware']}");
        }

        (new $middleware)->handle();
    }
}