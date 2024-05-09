<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Web</title>
    
    <!-- <link rel="stylesheet" href="denisStyles.css"> -->
    <link rel="stylesheet" href="/public/Denis/denisStyles.css" />

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
                        <a href="Products.php" class="tab-link" id = "Products">Products</a>
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

    <div class="content">
        <div class="container">
            <h2>Oops! Page not found.</h2>
            <h1>404</h1>
            <p>We can't find the page you're looking for</p>
            <a href="#">Go back home</a>
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