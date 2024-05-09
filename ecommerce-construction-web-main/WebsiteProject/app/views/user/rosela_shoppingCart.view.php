<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Web</title>
    
    <!-- <link rel="stylesheet" href="roselaStyles.css" /> -->
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

    <div class="cart-content">
    <!-- <h2 class="wishlist-title">Whishlist products</h2> -->

    <h2 class="wishlist-title">Shopping Cart</h2>
    <div class="cart-container">

      <div class="cart-products-container">
            <div class="cart-product-card">
              <img class="product-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black.">
              <div class="description-box-cart">
              <h4>
                  <a href="#">Basic Tee</a>
              </h4>
              <p>Black</p>
              <p >$35</p>
              </div>

                <input name="quantity" type="number" value="1"/>
                <button class="remove-from-cart">
                  <i class="fas fa-times"></i> 
              </button>
            </div>

            <div class="cart-product-card">
              <img class="product-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black.">
              <div class="description-box-cart">
              <h4>
                  <a href="#">Basic Tee</a>
              </h4>
              <p>Black</p>
              <p >$35</p>
              </div>

                <input name="quantity" type="number" value="1"/>
                <button class="remove-from-cart">
                  <i class="fas fa-times"></i> 
              </button>
            </div>


            <div class="cart-product-card">
              <img class="product-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black.">
              <div class="description-box-cart">
              <h4>
                  <a href="#">Basic Tee</a>
              </h4>
              <p>Black</p>
              <p >$35</p>
              </div>

                <input name="quantity" type="number" value="1"/>
                <button class="remove-from-cart">
                  <i class="fas fa-times"></i> 
              </button>
            </div>

            <div class="cart-product-card">
              <img class="product-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black.">
              <div class="description-box-cart">
              <h4>
                  <a href="#">Basic Tee</a>
              </h4>
              <p>Black</p>
              <p >$35</p>
              </div>

                <input name="quantity" type="number" value="1"/>
                <button class="remove-from-cart">
                  <i class="fas fa-times"></i> 
              </button>
            </div>



          </div>

          <div class="price-container">
            <h2>Order summary</h2>
            <div class="subtotal">
              <h3>Subtotal:</h3>
              <p>$35</p>
            </div>
            <hr/>
            <div class="shipping">
              <h3>Shipping:</h3>
              <p>$5</p>
            </div>
            <hr/>
            <div class="total">
              <h3>Total:</h3>
              <p>$40</p>
            </div>
            <button class="add-to-cart">Checkout</button>
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