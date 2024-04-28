<?php
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('Classes.php'); // Include the Product class
    $data = $_POST["data"]; // Get the data sent from JavaScript
    $data = strtolower($data); // Convert the data to lowercase
    $data = trim($data); // Remove any whitespace from the beginning and end of the data
    $data = htmlspecialchars($data); // Remove any slashes from the data
    $products = array();
    foreach(Product::$products as $product) {
        if($product->price == (int)$data) {
            array_push($product);
        }
    }
    if(count(Product::$products) == 0) {
        echo "No products found";
    } else {
        return json_encode($products); // Send the products back to JavaScript (this will be the response to the AJAX request
    }
}
?>