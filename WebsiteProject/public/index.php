<?php

use Core\Router;

session_start();

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "vendor/autoload.php";

require BASE_PATH . 'app/Core/functions.php';

require base_path('app/bootstrap.php');

$router = new Router();

$routes = require base_path('app/routes.php');

$url = parse_url($_SERVER["REQUEST_URI"])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($url, $method);