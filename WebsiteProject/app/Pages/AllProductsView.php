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
                            <input type="text" class="input-search" placeholder="Search..." id = "searcher">
                            <?php
                            $istrue = 'false';
                            $id = "null";
                            if (isset($_SESSION["user"])) {
                                $istrue = true;
                                $id = $_SESSION["user"]["user_id"];
                            }
                            ?>
                            <button onclick='Search(<?php echo json_encode($this->arr) ?>,<?php echo $istrue ?>,<?php echo $id ?>)' class='btn-search header-btn'>
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

                            <form action="/login" method="POST">
                                <input type="hidden" name="_method" value="DELETE" />
                                <button class="logout-btn hero-btn">
                                    Log out
                                </button>
                            </form>
                            
                            <?php else : ?>
                            <!-- User is logged out -->
                            <div class="login-signup-btns">
                                <a href=/login>
                                    <button class="login-btn hero-btn">
                                        Login
                                    </button>
                                </a>

                                <a href=/signup>
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
                                <a href="/" class="tab-link <?= (urlUI('/')) ? 'tab-link-active' : ''; ?>" onclick="changefocus(this)">Home</a>
                            </li>
                            <li>
                                <a href="/allProducts" class="tab-link <?= (urlUI('/allProducts')) ? 'tab-link-active' : ''; ?>" onclick="changefocus(this)">Products</a>
                            </li>
                            <li>
                                <a href="/aboutUs" class="tab-link <?= (urlUI('/aboutUs')) ? 'tab-link-active' : ''; ?>" onclick="changefocus(this)">About Us</a>
                            </li>
                            <li>
                                <a href="/helpAdvice" class="tab-link <?= (urlUI('/helpAdvice')) ? 'tab-link-active' : ''; ?>" onclick="changefocus(this)">Help & Advice</a>
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
                    $istrue = 'false';
                    $id = "null";
                    if (isset($_SESSION["user"])) {
                        $istrue = true;
                        $id = $_SESSION["user"]["user_id"];
                    }
                    echo "<button class='clear-btn' onclick='clearSearch(".json_encode($this->arr).", ".$istrue.", ".$id.");'>Clear</button>";
                    ?>
                </div>
                <div class="sidebar-content">
                    <div class="dropdown">
                        <button class="dropdown-btn">
                            <p class="filter-type-title" style="margin:0rem;">Categories</p>
                            <i class="fas fa-chevron-down" style="color: #061538; font-size:1rem;"></i>
                        </button>
                        <div class="dropdown-content">
                            <?php
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).", ".$istrue.", ".$id.");'>Windows</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).", ".$istrue.", ".$id.");'>Electrical</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).", ".$istrue.", ".$id.");'>Steel Profiles</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).", ".$istrue.", ".$id.");'>Wood Materials</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).", ".$istrue.", ".$id.");'>Hydraulics</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).", ".$istrue.", ".$id.");'>Professional Work Tools</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).", ".$istrue.", ".$id.");'>Building Materials</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).", ".$istrue.", ".$id.");'>Roof Covers</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).", ".$istrue.", ".$id.");'>Isolation</a>";
                            echo "<a href='#' class='sidebar-link' onclick='toggleButtonColorOnPress(this,".json_encode($this->arr).", ".$istrue.", ".$id.");'>Packaging Materials</a>";
                            ?>
                        </div>
                    </div>
                    <div class="price-filter">
                        <p class="filter-type-title">Filter By Price</p>
                        <div class="slider-container">
                            <div style="display: flex; flex-direction:row; gap:1rem;">
                                <p>$0</p>
                                <input type="range" min="0" max="100" value="50" class="slider" id="mySlider">
                                <p>+</p>
                            </div>
                            <p>Price: <span id="sliderValue">$500</span></p>
                            <script>
                                var slider = document.getElementById("mySlider");
                                var sliderValue = document.getElementById("sliderValue");
    
                                timeout = null; // Initialize timeout variable
                                slider.oninput = function() {
                                    sliderValue.innerHTML = this.value * 10 + " $";
                                    clearTimeout(timeout); // Clear any existing timeout
                                    timeout = setTimeout(function() {
                                        // Call the search function after a delay of 500 milliseconds
                                        Search(<?php echo json_encode($this->arr); ?>, <?php echo isset($_SESSION['user']) ? 'true' : 'false'; ?>, <?php echo @$_SESSION['user']['user_id']; ?>);
                                    }, 500); // Adjust the delay time as needed
                                };
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var changed = [];
            function addtocart(userid, productid, button, isincart) {
                if (isincart) {
                    return;
                }
                $.ajax({
                    url: 'Thanas/javascript/addtocart.php',
                    type: 'POST',
                    data: {
                        product_id: productid,
                        user_id: userid,
                    },
                    success: function(response) {
                        changed.push(productid);
                        button.innerHTML = "Added To Cart";
                        button.style.backgroundColor = "blue";
                    }
                });
            }
    
            document.addEventListener("DOMContentLoaded", function() {
                var dropdownBtn = document.querySelector(".dropdown-btn");
                var dropdownContent = document.querySelector(".dropdown-content");
    
                dropdownBtn.addEventListener("click", function() {
                    dropdownContent.classList.toggle("show");
                });
            });
        </script>
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
        $footer = new Footer();
        $footer->render();
    }


}
