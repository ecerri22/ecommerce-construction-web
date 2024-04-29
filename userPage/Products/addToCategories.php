<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once('DisplayFunctions.php'); // Include the display functions
        if(isset($_POST['dddat'])){
        $category = $_POST['dddat'];
        }
    
        $_SESSION['categories'][] = $category;

    }
    else{
       echo '<script>console.log("outta here!" );</script>';
    }

?>