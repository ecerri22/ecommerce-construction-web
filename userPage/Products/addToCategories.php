<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $category = $_POST['category'];
        if(count($_SESSION['categories'])==0 || in_array($category, $_SESSION['categories']) == false)
            $_SESSION['categories'][] = $category;
    }
    else{
        header("Location: Products.php");
    }

?>