<?php

namespace Pages;
use Models\Product;
use Models\search;
use Core\App;


class AllProductsView {
    public $arr;

    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function render()
    {
        $this->display_head();
        $this->display_sidebar();
        $this->display_products($this->arr);
    }

    function display_head(){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Construction Web</title>
            
            <link rel="stylesheet" href="Thanas/style.css" />
            <link rel="stylesheet" href="Thanas/products.css" />
        
            <script src="Thanas/javascript/functions2.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                    <div class="search-bar">
                        <input type="text" name="product" id="searcher" class="input-search" placeholder="Search...">
                            <?php
                                echo "<button class='btn-search header-btn' onclick='Search(".json_encode($this->arr).")'>";
                            ?>
                            <i class="fas fa-search"></i>
                        </button>
                    </div>

                    <!-- right side -->
                    <div class="header-user-btns">
                        <?php if ($_SESSION['user'] ?? false) : ?>
                        <!-- User is logged in -->
                        <a href="/myAccount">
                            <button class="user-profile-btn header-btn">
                                <i class="fas fa-user"></i>
                            </button>
                        </a>

                        <a href="/wishlist">
                            <button class="user-wishlist-btn header-btn">
                                <i class="fas fa-heart"></i> 
                            </button>
                        </a>

                        <a href="/shoppingCart">
                            <button class="user-shopping-bag-btn header-btn">
                                <i class="fas fa-shopping-cart"></i> 
                            </button>
                        </a>
                        <?php else : ?>
                        <!-- User is logged out -->
                        <div class="login-signup-btns">
                            <a href=/login>
                                <button class="login-btn hero-btn">
                                    Login
                                </button>
                            </a>

                            <a href=/signUp>
                                <button class="signup-btn hero-btn">
                                    Signup
                                </button>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="lower-bar">
                    <ul class="tabs-list">
                        <li>
                            <a href="/" class="tab-link "onclick="changefocus(this)">Home</a>
                        </li>
                        <li>
                            <a href="/allProducts" class="tab-link tab-link-active" onclick="changefocus(this)">Products</a>
                        </li>
                        <li>
                            <a href="/aboutUs" class="tab-link" onclick="changefocus(this)">About Us</a>
                        </li>
                        <li>
                            <a href="/helpAdvice" class="tab-link" onclick="changefocus(this)">Help & Advice</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="contentss">

        <?php
    }

    function display_sidebar(){
        ?>
        <div class="sidebar">
            <div class="sidebar-container">
                <div class="sidebar-header">
                    <p class="filter-section-title">Filter by</p>
                    <?php
                    echo "<button class='clear-btn' onclick='clearSearch(".json_encode($this->arr).");'>Clear</button>";
                    ?>
                </div>
                <div class="sidebar-content">
                    <p class="filter-type-title">Categories</p>
                    <div class="sidebar-list">
                        <?php
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).");'>Windows</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).");'>Electrical</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).");'>Steel Profiles</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).");'>Wood Materials</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).");'>Hydraulics</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).");'>Professional Work Tools</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).");'>Building Materials</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).");'>Roof Covers</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).");'>Isolation</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).");'>Packaging Materials</a>";
                            ?>
                    </div>
                    <div class="price-fliter">
                        <p class="filter-type-title">Filter By Price</p>
                        <div class="slider-container">
                        <input type="range" min="0" max="100" value="50" class="slider" id="mySlider">
                        <p>Price: <span id="sliderValue">500$</span></p>
                        <script>
                                var slider = document.getElementById("mySlider");
                                var sliderValue = document.getElementById("sliderValue");

                                timeout = null; // Initialize timeout variable
                                slider.oninput = function() {
                                sliderValue.innerHTML = this.value * 10 + "$";
                                clearTimeout(timeout); // Clear any existing timeout
                                timeout = setTimeout(function() {
                                    // Call the search function after a delay of 500 milliseconds
                                    Search(<?php echo json_encode($this->arr); ?>);
                                }, 500); // Adjust the delay time as needed
                            };
                            </script>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php
    }
        
    public function display_products($products) {
        echo '<div id="products" class="products-container">';
        echo '<div class="products">';
        foreach($products as $product)
        {
            $product->display();
        }
        echo '</div>';
        echo '</div></div>';
    }

    public function display_footer(){
        ?>
            <footer class="footer">
                <div class="footer-content">
                    <a href="#" class="logo logo-footer">
                        <h3>LOGO</h3>
                    </a>
                    <ul class="footer-links ftlink-main">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                    <ul class="footer-links ftlink-account">
                        <li><a href="#">Create Account</a></li>
                        <li><a href="#">My account</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                    </ul>
                    <div class="footer-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>&copy; 2024 Company. All rights reserved.</p>
                </div>
            </footer> 
        <?php
    }

}