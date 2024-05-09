<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Web</title>
    
    <!-- <link rel="stylesheet" href="roselaStyles.css"  /> -->
    <link rel="stylesheet" href="/public/Rosela/roselaStyles.css" />

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

    <div class="checkout-content">
        <h2 class="wishlist-title">Checkout</h2>

        <div class="checkout-container">

            <div class="shipping-details">
                <h4>SHIPPING DETAILS</h4>
                <hr />
                <div class="address">
                    <p class="p-address">Daniel Hacker</p>
                    <p class="p-address">dhacker@gmail.com</p>
                    <p class="p-address">111 20 Stockholm Sweden</p>
                </div>
                <h4>PAYMENT DETAILS</h4>
                <hr/>
                <h6>NAME ON CARD</h6>
                <p class="card-details"> <input type="text" name="name_on_card" placeholder="Enter name on card"/></p>
                <h6>CARD NUMBER</h6>
                <p class="card-details"> <input type="text" name="card_number" placeholder="XXXX-XXXX-XXXX-XXXX"/></p>
                <div class="card-date">
                    <h6>VALID THROUGH</h6>
                    <p class="card-details"> <input type="month" name="card_validity"></p>
                    <h6>CVC CODE</h6>
                    <p class="card-details"><input type="text" name="card_cvc" placeholder="XXX"/></p>
                </div>
                <button id="purchase-btn">PURCHASE</button>
                
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