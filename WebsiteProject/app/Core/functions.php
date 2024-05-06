<?php

use Core\Response;

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '<pre>';

    die();
}

function urlUI($value)
{
    return $_SERVER["REQUEST_URI"] === $value;
}

function base_path($path)
{
    return  BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path("app/views/" . $path);
}

function abort($code = 404)
{
    http_response_code($code);
    // require base_path("app/views/{$code}.php");
}

function redirect($path)
{
    header("location: {$path}");
    exit();
}

