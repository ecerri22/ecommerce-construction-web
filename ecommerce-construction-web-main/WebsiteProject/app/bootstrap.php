<?php

use Core\App;
use Core\Database;
use Core\Container;

$container = new Container();

$container->bind('Core\Database', function () {
  $config = require base_path('app/config.php');
  return new Database($config);
});

App::setContainer($container);