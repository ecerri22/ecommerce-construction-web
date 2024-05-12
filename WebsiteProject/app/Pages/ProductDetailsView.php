<?php

namespace Pages;

class ProductDetailsView {
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function render() {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <?php $this->renderHead(); ?>
        <body>
            <?php $this->renderHeader(); ?>
            <?php $this->renderContent(); ?>
            <?php $this->renderFooter(); ?>
        </body>
        </html>
        <?php
    }

    private function renderHead() {
        ?>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?= $this->title; ?></title>
            
            <link rel="stylesheet" href="Irvi/product.css" />

            <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

            <script src="product.js"></script>
        </head>
        <?php
    }

    private function renderHeader() {
        ?>
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
                            <button class="btn-search header-btn">
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
                                <a href="#" class="tab-link tab-link-active">Home</a>
                            </li>
                            <li>
                                <a href="#" class="tab-link">Products</a>
                            </li>
                            <li>
                                <a href="#" class="tab-link">About Us</a>
                            </li>
                            <li>
                                <a href="#" class="tab-link">Help & Advice</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
        <?php
    }

    public function renderContent() {
        ?>
         <div class="container">
        <div class="row">
            <div class="col-xl-6 ml-5 mb-2">
                <div class="product-photo">
                    <img src="https://www.dewalt.com/NAG/PRODUCT/IMAGES/HIRES/DWE6411/DWE6411_1.jpg?resize=530x530" class="prod" alt="..." style="max-height: 400px;">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="product-description">
                    <h1>Product Name</h1>
                    <p>4.5 
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star-half-alt text-warning"></i>
                        <i class="far fa-star text-warning"></i>
                        <a href="#reviews" class="link-product" id="reviewLink">(3 customer reviews)</a>
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lobortis quam. Nulla facilisi. Vestibulum et faucibus libero. Proin nec elit auctor, varius odio at, vestibulum ligula.</p>
                    
                    <p>Price: <span style="font-weight: bold; color: #333;">$XX.XX</span></p>

                    <div class="row">
                        <div class="col-md-4">
                            <input class="form-control" id="quantityTf" type="text" placeholder="Quantity">
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <button class="btn btn-success">Add to wishlist</button>
                        </div>
                    </div>
                    <div class="details">
                        <div class="row mt-1">
                            <p>Brand: 
                                <a href="#" class="link-product">Toshiba</a>
                            </p>
                        </div>
                        <div class="row mt-0">
                            <p>Categories: 
                                <a href="#" class="link-product">Power Tools</a>
                                <a href="#" class="link-product">Driller</a>
                            </p>
                        </div>
                        <div class="row mt-0">
                            <p>Material: 
                                <a href="#" class="link-product">Metal</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="reviews" class="mt-5">
            <h2>Customer Reviews</h2>
            <div class="review">
                <div class="rating">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half-alt text-warning"></i>
                </div>
                <p class="review-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lobortis quam. Nulla facilisi. Vestibulum et faucibus libero.</p>
                <p class="reviewer">- John Doe <span class="date">(April 29, 2024)</span></p>
            </div>
            
            <!-- Add reviews here -->
            <div class="review">
                <div class="rating">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                </div>
                <p class="review-content">Vestibulum nec ullamcorper urna. Fusce pulvinar, odio ut tempus consectetur, neque libero laoreet mi, vel finibus tortor velit vel mi.</p>
                <p class="reviewer">- Jane Smith <span class="date">(April 04, 2024)</span></p>
            </div>
        </div>
    </div>
    <?php
    }

    private function renderFooter() {
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