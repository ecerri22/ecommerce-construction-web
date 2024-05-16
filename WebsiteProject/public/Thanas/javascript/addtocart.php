<?php

use Core\App;

$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Models\\product.php", $path);
$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Core\\App.php", $path);
$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Core\\Container.php", $path);
$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Core\\Controller.php", $path);
$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Core\\Database.php", $path);
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $userId = $_POST['userid'];
    $productId = $_POST['productid'];
    
    $query="INSERT INTO carts(quantity, user_id, product_id) 
                             VALUES (?, ?, ?)";
        $params=[
            $quantity=1,
            $userId,
            $productId
        ];   
        App::container()->resolve('Core\Database')->query($query, $params)->get();        
    
    echo "Product added to cart";

}else{
    header("Location: /");
}
?>