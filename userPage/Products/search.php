<?php
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('Classes.php'); // Include the Product class
    include_once('DisplayFunctions.php'); // Include the display functions  
    $data = $_POST['dat']; // Get the data sent from JavaScript
    $data = trim($data); // Remove any whitespace from the beginning and end of the data
    $data = htmlspecialchars($data);
    if($data == "Reset" || $data == "Mumbo Jumbo") // If the data is empty, display all products
    {
        $_SESSION['updatedproductslist'] = $_SESSION['productslist'];
        display_products();
        return;
    }
    $products = $_SESSION['productslist']; // Get the products array
    $categories = $_SESSION['categories']; 
    echo "<script>console.log('Debug Objects: " . json_encode($categories) . "' );</script>";
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
            if($nameDistance <= 4)
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
            if($descriptionDistance <= 4)
            {
                if((in_array($product->getCategory(), $categories) || $nrofcategories == 0) && $product->getPrice() >= $minprice && $product->getPrice() <= $maxprice)
                {
                    $matches[] = ['product' => $product, 'distance' => $descriptionDistance];
                }
            }
        }
}

    // Sort the matches
    usort($matches, function($a, $b) {
        return $a['distance'] - $b['distance'];
    });

    // Extract the sorted products
    $_SESSION['updatedproductslist'] = array_map(function($match) {
        return $match['product'];
    }, $matches);
    display_products(); // Display the products

}
else{
    header("Location: http://localhost/ecommerce-construction-web/userPage/Products/Products.php"); // Redirect to the products page
}

?>