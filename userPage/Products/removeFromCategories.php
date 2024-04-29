<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $category = $_POST['category'];
        if(in_array($category, $_SESSION['categories']))
            unset($_SESSION['categories'][array_search($category, $_SESSION['categories'])]);
    }
    else{
        header("Location: Products.php");
    }

?>