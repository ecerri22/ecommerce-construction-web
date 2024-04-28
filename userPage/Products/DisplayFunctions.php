<?php

    include_once('Classes.php');
    function display_head()
    {
        ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Web</title>
    
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="products.css" />
    <script src="../javascript/functions.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header class="">
        <div class="header-container">
            <div class="upper-bar">
                <!-- logo -->
                <a href="#" class="logo">
                    <h3>LOGO</h3>
                </a>

                <!-- center search bar-->
                <form action="#" class="search-bar">
                    <input type="text" class="input-search" placeholder="Search...">
                    <button class="btn-search header-btn" onclick="callPHPFunction();">
                        <i class="fas fa-search"></i>
                    </button>
                </form>

                <!-- right side -->
                <div class="header-user-btns">
                    <!-- user icon -->
                    <button class="user-profile-btn header-btn ">
                        <i class="fas fa-user"></i>
                    </button>

                    <!-- wishlist icon -->
                    <button class="user-wishlist-btn header-btn">
                        <i class="fas fa-heart"></i> 
                    </button>

                    <!-- shopping bag icon  -->
                    <button class="user-shopping-bag-btn header-btn">
                        <i class="fas fa-shopping-cart"></i> 
                    </button>
                </div>

            </div>
            <div class="lower-bar">
                <ul class="tabs-list">
                    <li>
                        <a href="#" class="tab-link "onclick="changefocus(this)">Home</a>
                    </li>
                    <li>
                        <a href="#" class="tab-link tab-link-active" onclick="changefocus(this)">Products</a>
                    </li>
                    <li>
                        <a href="../AboutUs/AboutUs.html" class="tab-link" onclick="changefocus(this)">About Us</a>
                    </li>
                    <li>
                        <a href="#" class="tab-link" onclick="changefocus(this)">Help & Advice</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="contentss">

        <?php
    }

    function display_sidebar()
    {
        ?>
        <div class="sidebar">
            <div class="sidebar-container">
                <div class="sidebar-header">
                    <h3>Categories</h3>
                </div>
                <div class="sidebar-content">
                    <div class="sidebar-list">
                            <a href="#" class="sidebar-link">Hand tools</a>
                            <a href="#" class="sidebar-link">Power Tools</a>
                            <a href="#" class="sidebar-link">Materials</a>
                            <a href="#" class="sidebar-link">Hardware</a>
                            <a href="#" class="sidebar-link">Construction Machinery</a>
                            <a href="#" class="sidebar-link">Saftey And Personal Protection</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    function display_products()
    {
        echo '<div class="products-container">';
        echo '<div class="products">';
        $products = array(new Product("Basic Tee", 1, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","T-shirt"),
        new Product("Basic Tee", 2, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Hand-tools"),
        new Product("Basic Tee", 3, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Power-tools"),
        new Product("Basic Tee", 4, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Materials"),
        new Product("Basic Tee", 5, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Hardware"),
        new Product("Basic Tee", 6, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Construction Machinery"),
        new Product("Basic Tee", 7, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Safty And Personal Protection"),
        new Product("Basic Tee", 8, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Hand-tools"),
        new Product("Basic Tee", 9, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Power-tools"),
        new Product("Basic Tee", 10, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Materials"),
        new Product("Basic Tee", 11, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Hardware"),
        new Product("Basic Tee", 12, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Construction Machinery"),
        new Product("Basic Tee", 13, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Safty And Personal Protection"),
        new Product("Basic Tee", 14, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Hand-tools"),
        new Product("Basic Tee", 15, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Power-tools"),
        new Product("Basic Tee", 16, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Materials"),
        new Product("Basic Tee", 17, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Hardware"),
        new Product("Basic Tee", 18, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Construction Machinery"),
        new Product("Basic Tee", 19, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Safty And Personal Protection"),);
        foreach(Product::$products as $product)
        {
            $product->display();
        }
        echo '</div>';
        echo '</div></div>';
    }
?>