<?php

      namespace Pages;

use Models\Product;
use Pages\AllProductsView;
      include_once "C:\\xampp\\htdocs\\ecommerce-construction-web\\WebsiteProject\\app\Models\\product.php";
      include_once "C:\\xampp\\htdocs\\ecommerce-construction-web\\WebsiteProject\\app\\Pages\\AllProductsView.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $data = $_POST['dat']; // Get the data sent from JavaScript
    $data = trim($data); // Remove any whitespace from the beginning and end of the data
    $data = htmlspecialchars($data);
    $page = new AllProductsView(json_decode($_POST['page'],true)); // Get the page sent from JavaScript
    if($data == "Reset" || $data == "Mumbo Jumbo") // If the data is empty, display all products
    {
        $products = array();
        foreach($page->arr as $product)
        {
            $products[] = new Product($product['id'],$product['name'], $product['price'], $product['image'],"#", $product['category'], $product['minidescription']);
        }
        $page->display_products($products);
        return;
    }
    if(isset($_POST['categories']))
    {
        $categories = $_POST['categories']; 
    }
    else{
        $categories = array();
    }
    $nrofcategories = count($categories); // Get the number of categories
    $minprice = 0;
    $maxprice = $_POST['maxprice'] * 10; // Get the maximum price
    // Loop through products to find matches
    foreach ($page->arr as $product) {
        $nameDistance = levenshtein($data, $product['name']);
        $descriptionDistance = levenshtein($data, $product['minidescription']);
        
         // If the name is a better match, add to matches
        if ($nameDistance <= $descriptionDistance/25 || str_contains($product['name'], $data)) {
            if(str_contains($product['name'], $data))
            {
                $nameDistance = 0;
            }
            if($nameDistance <= 4)
            {
                if((in_array($product["category"], $categories) || $nrofcategories == 0) && $product['price'] >= $minprice && $product['price'] <= $maxprice)
                {
                    $matches[] = ['product' => $product, 'distance' => $nameDistance];
                }
                
            }
            
        }
        // If the description is a better match, add to matches
        else {
            if(str_contains($product['minidescription'], $data))
            {
                $descriptionDistance = 0;
            }
            if($descriptionDistance <= 100)
            {
                if((in_array($product["category"], $categories) || $nrofcategories == 0) && $product['price'] >= $minprice && $product['price']<= $maxprice)
                {
                    $matches[] = ['product' => $product, 'distance' => $descriptionDistance];
                }
            }
        }
}

    // Sort the matches
    if(isset($matches)){
    usort($matches, function($a, $b) {
        return $a['distance'] - $b['distance'];
    });
    }
    else{
        $matches = array();
    }
    // Extract the sorted products
    
    $products = array();
    foreach(array_map(function($match) {
        return $match['product'];
    }, $matches) as $product) {
        $products[] = new Product($product['id'],$product['name'], $product['price'], $product['image'],"#", $product['minidescription'], $product['category']);
    }

    $page->display_products($products); // Display the products
}
else{
    header("Location: http://localhost/ecommerce-construction-web/userPage/Products/Products.php"); // Redirect to the products page
}

?>