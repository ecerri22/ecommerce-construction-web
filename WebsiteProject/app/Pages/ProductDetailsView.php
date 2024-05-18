<?php

namespace Pages;

use Models\Product;
use Models\User;

class ProductDetailsView
{

    private $title;


    public function __construct($title)
    {
        $this->title = $title;
    }

    public function updatePage($userId)
    {
        if (isset($_POST['cartButton'])) {
            if ($userId == 'guest') {
                redirect('WebsiteProject\app\Pages\SignUpView.php');
            }
            $productId = $_GET['productID'];
            if (count(Product::getProductFromShoppingCart($productId, $userId)) == 0) {
                Product::addProductToShoppingCart($userId, $productId, $_POST['quantityTf']);
                echo ' 
                    <script>
                        alert("Product added in the cart");
                    </script>
                    ';
            } else {
                Product::updateProductFromShoppingCart($userId, $productId, $_POST['quantityTf']);
                echo ' 
                    <script>
                        alert("Cart updated");
                    </script>
                    ';

            }
            unset($_POST['cartButton']);
        }

        if (isset($_POST['wishlistButton'])) {
            if ($userId == 'guest') {
                redirect('WebsiteProject\app\Pages\SignUpView.php');
            }
            $productId = $_GET['productID'];
            if (count(Product::getProductFromWishList($productId, $userId)) == 0) {
                Product::addProductToWishlist($userId, $productId);
                echo ' 
                    <script>
                        alert("Product added in the wishlist");
                        $(`#cartButton`).Value=`Remove from wishlist`;
                    </script>
                    ';
            } else {
                Product::deleteProductFromWishlist($userId, $productId);
                echo ' 
                    <script>
                        alert("Product removed from the wishlist");
                        $(`#cartButton`).Value=`Add to wishlist`;
                    </script>
                    ';
            }
            unset($_POST['wishlistButton']);
        }

    }

    public function render()
    {
        if (isset($_SESSION['user']['user_id'])) {
            $userId = $_SESSION['user']['user_id'];
        } else {
            $userId = 'guest';
        }

        $this->updatePage($userId);
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <?php $this->renderHead(); ?>

        <body>
            <?php $this->renderHeader(); ?>
            <?php $this->renderContent($userId, Product::getProduct($_GET['productID']), Product::getProductCategory($_GET['productID']), Product::getProductReviews($_GET['productID'])); ?>
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

            <link rel="stylesheet" href="Irvi/product.css" />

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link
                href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
                rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

            <script src="product.js"></script>
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
                        <?php if ($_SESSION['user'] ?? false): ?>
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

                        <?php else: ?>
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

    public function renderContent($userId, $product, $category, $reviews)
    {
        $nrOfReviews = count($reviews);

        $sumOfRatings = 0;
        foreach ($reviews as $review) {
            $sumOfRatings += $review['rating'];
        }

        $averageRating = $nrOfReviews > 0 ? $sumOfRatings / $nrOfReviews : 0;

        ?>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 ml-5 mb-2">
                    <div class="product-photo">
                        <img src="/image/<?= $product['product_image'] ?>" class="prod" alt="..." style="max-height: 400px;">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="product-description">
                        <h1><?= $product['name'] ?></h1>
                        <p><?php
                        if ($nrOfReviews != 0)
                            echo $averageRating;

                        #generate stars
                        if ($nrOfReviews != 0) {
                            $fullStars = floor($averageRating);
                            for ($i = 0; $i < $fullStars; $i++) {
                                echo '<i class="fas fa-star text-warning"></i>';
                            }

                            if ($averageRating - $fullStars >= 0.5) {
                                echo '<i class="fas fa-star-half-alt text-warning"></i>';
                                $fullStars++;
                            }

                            for ($i = $fullStars; $i < 5; $i++) {
                                echo '<i class="far fa-star text-warning"></i>';
                            }
                        } else {
                            // Print all empty stars if there are no reviews
                            for ($i = 0; $i < 5; $i++) {
                                echo '<i class="far fa-star text-warning"></i>';
                            }
                        }
                        ?>
                            <a href="#reviews" class="link-product" id="reviewLink">(<?php echo $nrOfReviews ?> customer
                                reviews)</a>
                        </p>
                        <p><?php echo $product['description']; ?></p>

                        <p>Price: <span style="font-weight: bold; color: #333;"><?= $product['price'] ?>$</span></p>


                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" id="quantityTf" name="quantityTf" type="number"
                                        placeholder="Quantity" min="1" required>
                                    <input type="hidden" name="userID" value="<?php echo $userId ?>">
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" name="cartButton" class="btn btn-primary">Add to Cart</button>
                                </div>
                            </div>
                        </form>

                        <form method="post" action="">
                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <input type="submit" name="wishlistButton" class="btn btn-success" value="Add to wishlist">
                                </div>
                            </div>
                        </form>
                        <div class="details">
                            <div class="row mt-1">
                                <p>Brand:
                                    <a href="/allProducts" class="link-product"><?php echo $product['brand'] ?></a>
                                </p>
                            </div>
                            <div class="row mt-0">
                                <p>Category:
                                    <a href="/allProducts" class="link-product"><?php echo $category['category_name'] ?></a>
                                </p>
                            </div>
                            <div class="row mt-0">
                                <p>Material:
                                    <a href="/allProducts" class="link-product"><?php echo $product['material'] ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if ($nrOfReviews != 0) {
                foreach ($reviews as $review) {

                    $user = User::getUser($review['user_id']);
                    ?>
                    <div id="reviews" class="mt-5">
                        <h2>Customer Reviews</h2>
                        <div class="review">
                            <div class="rating">
                                <?php
                                for ($i = 0; $i < $review['stars']; $i++) {
                                    echo '<i class="fas fa-star text-warning"></i>';
                                }

                                for ($i = $review['stars']; $i < 5; $i++) {
                                    echo '<i class="far fa-star text-warning"></i>';
                                }
                                ?>
                            </div>
                            <p class="review-content"> <?php echo $review['review_text'] ?> </p>
                            <p class="reviewer"><?php echo $user['first_name'] . ' ' . $user['last_name'] ?><span
                                    class="date">(<?= $review['review_date'] ?>)</span></p>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <?php
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