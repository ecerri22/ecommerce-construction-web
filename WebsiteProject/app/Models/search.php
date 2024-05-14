<?php
    use Models\Product;
use Pages\AllProductsView;
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $data = $_POST['dat']; // Get the data sent from JavaScript
    $data = trim($data); // Remove any whitespace from the beginning and end of the data
    $data = htmlspecialchars($data);
    $page = new AllProductsView(json_decode($_POST['page'],true)); // Get the page sent from JavaScript

    if($data == "Reset" || $data == "Mumbo Jumbo") // If the data is empty, display all products
    {
        $page->display_products($page);
        return;
    }
    $products = $_SESSION['productslist']; // Get the products array
    if(isset($_POST['categories']))
    {
        $categories = $_POST['categories']; 
    }
    else{
        $categories = array();
    }
    $nrofcategories = count($categories); // Get the number of categories

    if(isset($_SESSION['minprice']) && isset($_SESSION['maxprice'])){
        $minprice = $_SESSION['minprice']; // Get the minimum price
        $maxprice = $_SESSION['maxprice']; // Get the maximum price
    }
    else{
        $minprice = 0;
        $maxprice = 1000000;
    }
    // Loop through products to find matches
    foreach ($products as $product) {
        $nameDistance = levenshtein($data, $product->getName());
        $descriptionDistance = levenshtein($data, $product->getMinidescription());
        
         // If the name is a better match, add to matches
        if ($nameDistance <= $descriptionDistance || str_contains($product->getName(), $data)) {
            if(str_contains($product->getName(), $data))
            {
                $nameDistance = 0;
            }
            if($nameDistance <= 3)
            {
                if((in_array($product->getCategory(), $categories) || $nrofcategories == 0) && $product->getPrice() >= $minprice && $product->getPrice() <= $maxprice)
                {
                    $matches[] = ['product' => $product, 'distance' => $nameDistance];
                }
                
            }
            
        }
        // If the description is a better match, add to matches
        else {
            if(str_contains($product->getMinidescription(), $data))
            {
                $descriptionDistance = 0;
            }
            if($descriptionDistance <= 3)
            {
                if((in_array($product->getCategory(), $categories) || $nrofcategories == 0) && $product->getPrice() >= $minprice && $product->getPrice() <= $maxprice)
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
    
    $page->display_products(array_map(function($match) {
        return $match['product'];
    }, $matches)); // Display the products

}
else{
    header("Location: http://localhost/ecommerce-construction-web/userPage/Products/Products.php"); // Redirect to the products page
}

?>