<?php
$path = __DIR__;
$url = str_replace("public\\Thanas\\javascript", "app\\Pages\\addtocart.php", $path);; // Replace with your target URL
//The data you want to send via POST
$data = ['key' => 'value']; 
  
// Initialize cURL session 
$ch = curl_init(); 
  
// Set cURL options 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data)); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
  
// Execute cURL session 
$response = curl_exec($ch); 
  
// Check for cURL errors 
if ($response === false) { 
    die('Error occurred while fetching the data: ' 
        . curl_error($ch)); 
} 
  
// Close cURL session 
curl_close($ch); 
  
// Display the response 
echo $response; 
  
?>
