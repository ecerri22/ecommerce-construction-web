<?php

use Core\App;
use Models\Product;
use Core\Database;
use Core\Container;
include_once 'C:\\xampp\\htdocs\\ecommerce-construction-web\\WebsiteProject\\app\\Core\\App.php';
include_once 'C:\\xampp\\htdocs\\ecommerce-construction-web\\WebsiteProject\\app\\Core\\Database.php';
include_once 'C:\\xampp\\htdocs\\ecommerce-construction-web\\WebsiteProject\\app\\Core\\Container.php';
include_once "C:\\xampp\\htdocs\\ecommerce-construction-web\\WebsiteProject\\app\Models\\product.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $userId = $_POST['userid'];
    $productId = $_POST['productid'];
    
    
    
    echo "Product added to cart";

}else{
    header("Location: /");
}
?>