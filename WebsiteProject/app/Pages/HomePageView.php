<?php

namespace Pages;

class HomePageView {
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
            
            <link rel="stylesheet" href="Enia/eniaStyles.css" />

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
            <div class="hero-section">
                <h2 class="hero-head">Lorem ipsum dolor sit amet</h2>
                <p class="hero-descript">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, praesentium.</p>
                <div class="hero-btns">
                    <button class="hero-btn hero-abt-us">About Us</button>
                    <button class="hero-btn hero-products">Products</button>
                </div>
            </div>

            <div class="our-story">
                <div class="left-img">
                    <div class="composition">
                        <img src="/image/worker.jpg" alt="construction worker" class="composition-photo composition-photo-1">
                        <img src="/image/construction-workers.jpg" alt="construction workers" class="composition-photo composition-photo-2">
                    </div>
                </div>
                <div class="right-content">
                    <h3 class="right-content-header">Who are we</h3>
                    <h6 class="right-content-descript">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit earum doloribus numquam dolor vel architecto dolore quae qui pariatur. A veritatis dolorum accusantium laborum rerum molestias commodi itaque sapiente iusto dolorem unde pariatur doloribus, quisquam cupiditate alias deleniti, vel tempore asperiores nostrum quaerat? Similique soluta iure earum facilis doloremque obcaecati.</h6>
                    <button class=" hero-btn hero-products">Our history</button>
                </div>
            </div>

            <div class="featured-products">
                <div class="featured-text">
                    <h2 class="featured-heading">Featured Products</h2>
                    <button class="featured-btn hero-btn">See More &#8594</button>
                </div>
                <div class="featured-products-list">               
                    <div class="featured-product-container">
                        <img class="product-img" src="/image/Tools Market_Vidues gipsi me bateri.jpg" alt="Tool">
                        <a href="#">Tool Tool Tool</a>
                        <p>$14.99</p>
                    </div>

                    <div class="featured-product-container">
                        <img class="product-img" src="/image/KEAD_Sharre bango me disk 240V 2000W Worcraft MST20-255.jpg" alt="Tool">
                        <a href="#">Tool Tool Tool</a>
                        <p>$14.99</p>
                    </div>

                    <div class="featured-product-container">
                        <img class="product-img" src="/image/Albaelettrica_Sharre me disk Milwaukee.jpg" alt="Tool">
                        <a href="#">Tool Tool Tool</a>
                        <p>$14.99</p>
                    </div>
                </div>
            </div>

            <div class="latest-projects">
                <h2 class="projects-heading featured-heading">Latest Projects</h2>
                <div class="projects-list">

                    <div class="project-card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">
                                &nbsp;
                            </div>
                        </div>
                        <div class="card__side card__side--back ">
                            <p class="project-card-descript">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora beatae perspiciatis vel sunt eius laborum obcaecati aliquid. Facilis voluptas porro reiciendis amet nihil nesciunt quas impedit unde cumque quisquam? Ratione.</p>
                        </div> 
                    </div>
            
                    <div class="project-card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">
                                &nbsp;
                            </div>
                        </div>
                        <div class="card__side card__side--back ">
                            <p class="project-card-descript">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora beatae perspiciatis vel sunt eius laborum obcaecati aliquid. Facilis voluptas porro reiciendis amet nihil nesciunt quas impedit unde cumque quisquam? Ratione.</p>
                        </div> 
                    </div>
        
                    <div class="project-card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--3">
                                &nbsp;
                            </div>
                        </div>
                        <div class="card__side card__side--back ">
                            <p class="project-card-descript">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora beatae perspiciatis vel sunt eius laborum obcaecati aliquid. Facilis voluptas porro reiciendis amet nihil nesciunt quas impedit unde cumque quisquam? Ratione.</p>
                        </div> 
                    </div>
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

