<?php

use Core\App;
use Core\Database;
use Models\Statistic;


$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Core\\App.php", $path);
$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Core\\Container.php", $path);
$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Core\\Database.php", $path);
$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Models\\statistic.php", $path);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $id = $_POST['id'];

    if(is_null(App::container())){
        App::setContainer(new \Core\Container());
        App::container()->bind('Core\Database', function () {
            $path = __DIR__;
            $config = require str_replace("public\\Thanas\\javascript", "app\\config.php", $path);
            return new Database($config);
        });
    }

    $query = "DELETE FROM statistics WHERE id = ?";
    $params = [$id];
    App::container()->resolve('Core\Database')->query($query, $params)->get();

}


?>