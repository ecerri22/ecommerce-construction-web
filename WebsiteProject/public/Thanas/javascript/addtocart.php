<?php

use Core\App;
use Core\Database;

$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Core\\App.php", $path);
$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Core\\Container.php", $path);
$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Core\\Database.php", $path);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $product_id = $_POST['product_id'];
    $quantity = 1;

    if(is_null(App::container())){
        App::setContainer(new \Core\Container());
        App::container()->bind('Core\Database', function () {
            $config = require "C:\\xampp\\htdocs\\ecommerce-construction-web\\WebsiteProject\\app\\config.php";
            return new Database($config);
        });
    }
    $user_id = $_POST['user_id'];
    $query = "SELECT * FROM carts WHERE user_id = ? AND product_id = ?";
    $params = [$user_id, $product_id];
    $result = App::container()->resolve('Core\Database')->query($query, $params)->get();
    if ($result) {
    $query = "UPDATE carts SET quantity = ? WHERE user_id = ? AND product_id = ?";
        $params = [$quantity, $user_id, $product_id];
        App::container()->resolve('Core\Database')->query($query, $params)->get();
    } else {
        $query = "INSERT INTO carts(quantity, user_id, product_id) VALUES (?, ?, ?)";
        $params = [1, $user_id, $product_id];
        App::container()->resolve('Core\Database')->query($query, $params)->get();
    }
}
else
{
    header("Location: /allProducts");
}
?>