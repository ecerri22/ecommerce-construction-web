<?php

namespace Pages;

use Models\Product;
use Models\User;

if (isset($_POST["Submit"])) {
  $stars = htmlspecialchars($_POST["rating"]);
  $description = htmlspecialchars($_POST["description"]);
  $userId = $_POST["userId"];
  $productId = $_POST["productId"];
  if (count(Product::getReview($productId, $userId)) == 1) {
    echo ' 
      <script>
        alert("You have already written a review about this product")
      </script>
    ';
  } else {
    Product::addReview(date('Y-m-d H:i:s'), $description, $stars, $userId, $productId, $userId);
  }
  unset($_POST["saveChangesButton"]);
  unset($_POST["rating"]);
  unset($_POST["description"]);
  unset($_POST["userId"]);
  unset($_POST["productId"]);
  

}



class MyOrdersView
{
  private $title;

  public function __construct($title)
  {
    $this->title = $title;
  }

  public function render()
  {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <?php $this->renderHead(); ?>

    <body>
      <?php $this->renderHeader(); ?>
      <?php $this->renderContent(User::getUser($_SESSION['user']['user_id']), User::getOrders($_SESSION['user']['user_id'])); ?>
      <?php $this->renderFooter(); ?>
    </body>

    </html>
    <?php
  }

  private function renderHead()
  {
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
      <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
      <script src="Irvi/popReview.js"></script>


    </head>
    <?php
  }

  private function renderHeader()
  {
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
    <?php
  }

  public function renderContent($user, $orders)
  {
    ?>
    <div class="content ">
      <div class="container py-4">
        <h1 class="heading">Order History</h1>
        <?php
        foreach ($orders as $order) {

          $total = 0;

          $orderInfo = Product::getOrderInfo($order['order_id']);

          for ($i = 0; $i < count($orderInfo); $i++) {
            $product = Product::getProduct($orderInfo[$i]['product_id']);
            $total += $product['price'] * $orderInfo[$i]['quantity'];
          }


          ?>
          <!-- Example invoice panel -->
          <div class="card mb-4">
            <div class="card-header bg-light d-flex justify-content-between align-items-center">
              <div>
                <h2 class="h5 m-0"><?= $order['order_id'] ?></h2>
                <p class="text-muted m-0"><?= $order['created_at'] ?></p>
              </div>
              <div>
                <p class="text-muted m-0">Status: <?= $order['status'] ?></p>

                <p class="text-muted m-0">Total: <?= $total ?></p>
              </div>
            </div>
            <div class="card-body">
              <!-- Invoice items -->
              <?php
              for ($i = 0; $i < count($orderInfo); $i++) {
                $product = Product::getProduct($orderInfo[$i]['product_id']);


                ?>
                <div class="d-flex align-items-center mb-3">
                  <div class="flex-shrink-0 me-3">
                    <img src="/Image/<?= $product['product_image'] ?>" alt="Product Image" class="img-fluid rounded"
                      style="width: 64px; height: 64px;">
                  </div>
                  <div class="flex-grow-1 me-3">
                    <p class="m-0"><?= $product['name'] ?></p>
                    <p class="text-muted m-0">Quantity: <?= $orderInfo[$i]['quantity']; ?></p>
                  </div>
                  <div class=" col-xl-0">
                    <div>
                      <p class="m-0">Price: <?= $product['price'] ?></p>

                    </div>
                    <?php if ($order['status'] == "Not delivered"): ?>
                      <div>
                        <button type="button" class="btn btn-link" onclick="alert('Order is not finished yet')">Write
                          review</button>
                      </div>
                    <?php else: ?>
                      <div>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#reviewModal">Write
                          review</button>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>





          <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="reviewModalLabel">Write a Review</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="" method="POST">
                    <input type="hidden" name="productId" value="<?= $product['product_id'] ?>">
                    <input type="hidden" name="userId" value="<?= $user['user_id'] ?>">

                    <div class="mb-3">
                      <label for="rating" name="rating" class="form-label">Rating</label>
                      <select required class="form-select" id="rating">
                        <option value="1">1 Star</option>
                        <option value="2">2 Stars</option>
                        <option value="3">3 Stars</option>
                        <option value="4">4 Stars</option>
                        <option value="5">5 Stars</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="comment" class="form-label">Comment</label>
                      <textarea required class="form-control" id="comment" name="description" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="submit">Submit Review</button>
                </div>
                </form>
            </div>
          </div>
        </div>
        <?php
              }
        }
  }

  private function renderFooter()
  {
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