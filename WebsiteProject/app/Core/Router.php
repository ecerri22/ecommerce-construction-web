<?php

namespace Core;

use Core\Middleware\Middleware;

class Router
{
    protected $routes = [];

    public function add($method, $url, $controller)
    {
        $this->routes[] = [
            'url' => $url,
            'controller' => $controller,
            'method' => $method,
            'middleware'=> NULL
        ];

        return $this;
    }

    public function get($url, $controller)
    {
        return $this->add('GET', $url, $controller);
    }

    public function post($url, $controller)
    {
        return $this->add('POST', $url, $controller);
    }

    public function delete($url, $controller)
    {
        return $this->add('DELETE', $url, $controller);
    }

    public function patch($url, $controller)
    {
        return $this->add('PATCH', $url, $controller);
    }

    public function put($url, $controller)
    {
        return $this->add('PUT', $url, $controller);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////
    public function route($url, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['url'] === $url && $route['method'] === strtoupper($method)) {
                if($route['middleware']){
                    // Middleware::check($route['middleware']);
                }
                return require base_path('app/controllers/' . $route['controller']);
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