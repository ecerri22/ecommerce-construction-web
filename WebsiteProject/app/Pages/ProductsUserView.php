<?php


    


    use Models\product2;
    session_start();

    class ProductsPage{

        public function __construct()
        {
            session_start();
            //this just makes some products which will later be taken from the database.
            new Product("Cotton Tee", 1, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "White","T-shirt");
            new Product("Tool Set", 2, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Red","Hand-tools");
            new Product("Power Drill", 3, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Blue","Power-tools");
            new Product("Wood Planks", 4, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Green","Materials");
            new Product("Screws Pack", 5, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Yellow","Hardware");
            new Product("Excavator", 6, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Purple","Construction Machinery");
            new Product("Safety Helmet", 7, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Orange","Safty And Personal Protection");
            new Product("Wrench Set", 8, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Pink","Hand-tools");
            new Product("Circular Saw", 9, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Brown","Power-tools");
            new Product("Cement Bag", 10, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Gray","Materials");
            new Product("Nails Pack", 11, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Black","Hardware");
            new Product("Bulldozer", 12, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "White","Construction Machinery");
            new Product("Safety Goggles", 13, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Red","Protects your eyes");
            new Product("Hammer", 14, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Blue","Hand tool for nailing");
            new Product("Angle Grinder", 15, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Green","For cutting and grinding");
            new Product("Steel Rods", 16, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Yellow","Strong construction material");
            new Product("Bolts Pack", 17, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Purple","Secure your structures");
            new Product("Crane", 18, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Orange","Lifts heavy objects");
            new Product("Safety Gloves", 19, "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg", "#", "Pink","Protects your hands");
            //end of making products
            $_SESSION['productslist'] = Product::getProductsArray();
            $_SESSION['updatedproductslist'] = Product::getProductsArray();
        }

        public function render()
        {
            $this->display_head();
            $this->display_sidebar();
            $this->display_products();
        }
    function display_head()
    {
        ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Web</title>
    
    <link rel="stylesheet" href="../../public/Thanasstyle.css" />
    <link rel="stylesheet" href="../../public/Thanasproducts.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="WebsiteProject\public\Thanas\javascript\functions2.js"></script>
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
                    <button class="btn-search header-btn" onclick="Search()">
                        <i class="fas fa-search"></i>
                    </button>
                </div>

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
                    <h3>Searching Options</h3>
                </div>
                <button class="clear-btn" onclick="clearSearch()">Clear</button>
                <div class="sidebar-content">
                    <h3 style="margin-bottom: 30px">Categories</h3>
                    <div class="sidebar-list">
                            <a href="#" class="sidebar-link" onclick="toggleButtonColorOnPress(this);">Hand-tools</a>
                            <a href="#" class="sidebar-link" onclick="toggleButtonColorOnPress(this);">Power-tools</a>
                            <a href="#" class="sidebar-link" onclick="toggleButtonColorOnPress(this);">Materials</a>
                            <a href="#" class="sidebar-link" onclick="toggleButtonColorOnPress(this);">Hardware</a>
                            <a href="#" class="sidebar-link" onclick="toggleButtonColorOnPress(this);">Construction Machinery</a>
                            <a href="#" class="sidebar-link" onclick="toggleButtonColorOnPress(this);">Saftey And Personal Protection</a>
                    </div>
                    <div class="price-fliter">
                        <h3 style = "margin-top: 20px; margin-bottom : 20px;">Filter By Price</h3>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
        
    function display_products()
    {
        echo '<div id="products" class="products-container">';
        echo '<div class="products">';
        foreach($_SESSION['updatedproductslist'] as $product)
        {
            $product->display();
        }
        echo '</div>';
        echo '</div></div>';
    }
    public function display_footer(){
        ?>
            </body>
            </html>
            <?php
    }
}
?>