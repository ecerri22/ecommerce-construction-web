<?php

use Core\App;
use Core\Database;
use Core\Container;


$path = __DIR__;
include_once str_replace("public\\Rosela", "app\\Core\\App.php", $path);
$path = __DIR__;
include_once str_replace("public\\Rosela", "app\\Core\\Container.php", $path);
$path = __DIR__;
include_once str_replace("public\\Rosela", "app\\Core\\Database.php", $path);

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(is_null(App::container())){
        App::setContainer(new \Core\Container());
        App::container()->bind('Core\Database', function () {
            $path = __DIR__;
            $config = require str_replace("public\\Rosela", "app\\config.php", $path);
            return new Database($config);
        });
    }

    $product_id = $_POST['product_id'];
    $user_id = $_POST['user_id'];

    $query = "DELETE FROM wishlists WHERE product_id = ? AND user_id = ?";
    $params = [$product_id, $user_id];
    App::container()->resolve('Core\Database')->query($query, $params)->get();

}

?>