<?php
namespace Pages;

class LoginView {
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
            
            <link rel="stylesheet" href="Daniela/danielaStyles.css" />

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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

    private function renderContent() {
        ?>
            <div class="content">
        <h1 class="titleH1">Customer Login </h1>

        <div class="login-container">
            <form class="login-form">
                <p class="heading">Registered Customers </p>

                <div class="input-field">
                    <label for="email" class="labels">email address</label>
                    <input type="text" name="email"/>
                </div>

                <div class="input-field">
                    <label for="pass"class="labels">password</label>
                    <input type="password" name="pass"/>
                </div>

                <button type="submit" class="button">Login </button>
            </form>
            <div class="signup-part">
                <p class="heading">New Customers</p>
                <p class="info-signup">Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</p>
                <a href="signupForm.html" class="button create-acc-btn-login">Create An Account</a>
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