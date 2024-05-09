<?php
namespace Pages;
class CheckoutView{
  public function __construct(){
  }

  public function render(){
    $this->renderHead();
    $this->renderContent();
    $this->renderFooter();
  }

  public function renderHead(){
    echo<<<End
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Web</title>
    
    <link rel="stylesheet" href="Rosela/roselaStyles.css "/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* Define grid layout */
        .product-grid {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* Flexible columns */
          gap: 20px; /* Gap between grid items */
        }
        /* Style for product card */
        .product-card {
          border: 1px solid #ccc;
          padding: 20px;
          text-align: center;
        }
      </style>
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
    End;
  }



  public function renderContent(){
    echo<<<End
    <div class="checkout-content">
        <h2 class="wishlist-title">Checkout</h2>

        <div class="checkout-container">

            <div class="shipping-details">
            <div class="shipping-details">
            <form action="" method="get"></form>
            <h4>SHIPPING DETAILS</h4>
            <hr />
            <h6>COUNTRY</h6>
            <p> <input type="text" name="country"/></p>
            <h6>CITY</h6>
            <p> <input type="text" name="city"/></p>
            <h6>STREET</h6>
            <p> <input type="text" name="street"/></p>
            <h6>PHONE NUMBER</h6>
            <p><input type="text" name="phone"/></p>
            <h6>ZIP CODE</h6>
            <p><input type="text" name="zip_code" /></p>
            <input type="submit" name="purchase-btn" value="PURCHASE"id="purchase-btn"/>
            
        </div>
            </div>
            <div class="your-order">
                <div class="orders">
                    <h4>YOUR ORDER</h4>
                    <hr/>
                    <div class="checkout-products">
                        <div class="checkout-one-product">
                            <img class="product-checkout-img"src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"/>
                            <div class="checkout-products-details">
                                <p class=" product-checkout-name">Basic Tee</p>
                                <p class="product-checkout-price">$35</p>
                                <p class="product-checkout-quantity">1</p>
                            </div>
                        </div>
                
                        <hr/>
                        <div class="checkout-one-product">
                            <img class="product-checkout-img"src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"/>
                            <div class="checkout-products-details">
                                <p class=" product-checkout-name">Basic Tee</p>
                                <p class="product-checkout-price">$35</p>
                                <p class="product-checkout-quantity">1</p>
                            </div>
                        </div>
                        
                        <hr/>
                    </div>
                    
                </div>
                
                <div class="checkout">
                    <h5>Subtotal</h5>
                    <p>$35</p>
                    <h5>Shipping</h5>
                    <p>$5</p>
                    <h5>Total</h5>
                    <p>$40</p>
                </div>
    
            </div>
        </div>
        
        
    </div>

    End;
  }




  public function renderFooter(){
    echo<<<End
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
                <!-- <li><p>Account</p></li> -->
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

    </body>
    </html>
    End;
  }
}
?>