<?php

namespace Pages;

class MyOrdersView {
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
            
            <link rel="stylesheet" href="Irvi/orderList.css" />

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src = "Irvi/popReview.js"></script>

    
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
                            <a href="/myAccount">
                                <button class="user-profile-btn header-btn">
                                    <i class="fas fa-user"></i>
                                </button>
                            </a>

                            <!-- wishlist icon -->
                            <a href="/wishlist">
                                <button class="user-wishlist-btn header-btn">
                                    <i class="fas fa-heart"></i> 
                                </button>
                            </a>

                            <!-- shopping bag icon  -->
                            <a href="/shoppingCart">
                                <button class="user-shopping-bag-btn header-btn">
                                    <i class="fas fa-shopping-cart"></i> 
                                </button>
                            </a>
                        </div>

                    </div>
                    <div class="lower-bar">
                        <ul class="tabs-list">
                            <li>
                                <a href="/" class="tab-link tab-link-active">Home</a>
                            </li>
                            <li>
                                <a href="/allProducts" class="tab-link">Products</a>
                            </li>
                            <li>
                                <a href="/aboutUs" class="tab-link">About Us</a>
                            </li>
                            <li>
                                <a href="/helpAdvice" class="tab-link">Help & Advice</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
        <?php
    }

    public function renderContent() {
        ?>
         <div class="content ">
        <div class="container py-4">
            <h1 class="heading">Order History</h1>
            <!-- Example invoice panel -->
            <div class="card mb-4">
              <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <div>
                  <h2 class="h5 m-0">Order #12345</h2>
                  <p class="text-muted m-0">Date: Jan 1, 2024</p>
                </div>
                <div>
                  <p class="text-muted m-0">Total: $100.00</p>
                </div>
              </div>
              <div class="card-body">
                <!-- Invoice items -->
                <div class="d-flex align-items-center mb-3">
                  <div class="flex-shrink-0 me-3">
                    <img src="https://via.placeholder.com/64" alt="Product Image" class="img-fluid rounded" style="width: 64px; height: 64px;">
                  </div>
                  <div class="flex-grow-1 me-3">
                    <p class="m-0">Product Name2</p>
                    <p class="text-muted m-0">Quantity: 2</p>
                  </div>
                  <div class=" col-xl-0">
                    <div>
                      <p class="m-0">$50.00</p>
                      
                    </div>
                    <div>
                      <button type="button" class="btn btn-link"  data-toggle="modal" data-target="#reviewModal">Write review</button>
                      
                    </div>
                  </div>
                  
                </div>
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-shrink-0 me-3">
                      <img src="https://via.placeholder.com/64" alt="Product Image" class="img-fluid rounded" style="width: 64px; height: 64px;">
                    </div>
                    <div class="flex-grow-1 me-3">
                      <p class="m-0">Product Name1</p>
                      <p class="text-muted m-0">Quantity: 2</p>
                    </div>
                    <div class=" col-xl-0">
                      <div>
                        <p class="m-0">$50.00</p>
                        
                      </div>
                      <div>
                        <button type="button" class="btn btn-link"  data-toggle="modal" data-target="#reviewModal">Write review</button>
                        
                      </div>
                    </div>
                  </div>
                <!-- Additional invoice items can be added here -->
              </div>
              
            </div>

            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <div>
                  <h2 class="h5 m-0">Order #12345</h2>
                  <p class="text-muted m-0">Date: Jan 1, 2024</p>
                </div>
                <div>
                  <p class="text-muted m-0">Total: $100.00</p>
                </div>
              </div>
              <div class="card-body">
                <!-- Invoice items -->
                <div class="d-flex align-items-center mb-3">
                  <div class="flex-shrink-0 me-3">
                    <img src="https://via.placeholder.com/64" alt="Product Image" class="img-fluid rounded" style="width: 64px; height: 64px;">
                  </div>
                  <div class="flex-grow-1 me-3">
                    <p class="m-0">Product Name1</p>
                    <p class="text-muted m-0">Quantity: 2</p>
                  </div>
                  <div class=" col-xl-0">
                    <div>
                      <p class="m-0">$50.00</p>
                      
                    </div>
                    <div>
                      <button type="button" class="btn btn-link"  data-toggle="modal" data-target="#reviewModal">Write review</button>
                      
                    </div>
                  </div>
                </div>
                <!-- Additional invoice items can be added here -->
              
            </div>

            <!-- Additional invoice panels can be added here -->
          </div>
    </div>



    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="reviewModalLabel">Write a Review</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  
                  <div class="mb-3">
                      <label for="rating" class="form-label">Rating</label>
                      <select class="form-select" id="rating">
                          <option value="1">1 Star</option>
                          <option value="2">2 Stars</option>
                          <option value="3">3 Stars</option>
                          <option value="4">4 Stars</option>
                          <option value="5">5 Stars</option>
                      </select>
                  </div>
                  <div class="mb-3">
                      <label for="comment" class="form-label">Comment</label>
                      <textarea class="form-control" id="comment" rows="3"></textarea>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Submit Review</button>
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