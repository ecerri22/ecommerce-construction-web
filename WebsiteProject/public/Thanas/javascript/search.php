
<?php

use Models\Product;
use Pages\AllProductsView;
$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Models\\product.php", $path);
$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Pages\\AllProductsView.php", $path);
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if(isset($_POST['dat']))
    $data = $_POST['dat']; // Get the data sent from JavaScript
    else 
    $data = "";
    $data = trim($data); // Remove any whitespace from the beginning and end of the data
    $data = htmlspecialchars($data);
    $page = new AllProductsView(json_decode($_POST['page'],true)); // Get the page sent from JavaScript
    if(isset($_POST['user']))
    $user = $_POST['user'];
    else
    $user = false;
    if(isset($_POST['userid']))
    $userid = $_POST['userid'];
    else
    $userid = (-1);
    $changedids = json_decode($_POST['changed'],true); // Get the changed ids sent from JavaScript
    if($data == "Reset" || $data == "Mumbo Jumbo") // If the data is empty, display all products
    {
        $products = array();
        foreach($page->arr as $product)
        {
            $prod = new Product($product['id'],$product['name'], $product['price'], $product['image'],"#", $product['category'], $product['minidescription']);
            $prod->user_id = $user;
            echo '<script>console.log("'.$prod->user_id.'");</script>';
            $products[] = $prod;
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
        $products[] = new Product($product['id'],$product['name'], $product['price'], $product['image'],"/productDetails?productID=".$product["id"], $product['minidescription'], $product['category'],$user, $product['isincart'], $userid);
        if(in_array($product['id'], $changedids))
        {
            $products[count($products)-1]->isincart = true;
        }
    }

    $page->display_products($products); // Display the products
}
else{
    header("Location: /error"); // Redirect to the products page
}

?>