<?php

namespace Core;

use Core\Middleware\Middleware;

class Router
{
    protected $routes = [];

    public function add($method, $url, $controller, $function)
    {
        $this->routes[] = [
            'url' => $url,
            'controller' => $controller,
            'method' => $method,
            'middleware'=> NULL,

            'function' => $function
        ];

        return $this;
    }

    public function get($url, $controller, $function)
    {
        return $this->add('GET', $url, $controller, $function);
    }

    public function post($url, $controller, $function)
    {
        return $this->add('POST', $url, $controller, $function);
    }

    public function delete($url, $controller, $function)
    {
        return $this->add('DELETE', $url, $controller, $function);
    }

    public function patch($url, $controller, $function)
    {
        return $this->add('PATCH', $url, $controller, $function);
    }

    public function put($url, $controller, $function)
    {
        return $this->add('PUT', $url, $controller, $function);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////
    public function route($url, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['url'] === $url && $route['method'] === strtoupper($method)) {
                $controller = new $route['controller']();
                $function = $route['function'];
                return $controller->$function();
            }
        }
        $this->abort();
    }

    public function only($key){
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        return $this;
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////
    function abort($code = 404)
    {
        http_response_code($code);
        // require base_path("app/views/{$code}.php");
    }
}