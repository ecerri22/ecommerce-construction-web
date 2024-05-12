<?php
namespace Pages;

class HelpAdviceView {
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
        <h1 class="titleH1">Help and Advice</h1>
        <ol class="listO">
            <li>
                <p class="question">How can I pay for online purchase?</p>
                <p class="answer">You can purchase online via our site by choosing one of these payment methods: using a debit or credit card (Visa Card/Mastercard), through Paypal using your account, Bank deposit and Payment on delivery.</p>
            </li>
            <li>
                <p class="question">How much does transportation of orders cost?</p>
                <p class="answer">The cost of transport is calculated automatically when you go to Checkout. Product prices do not include the cost of transport, it is the Client's responsability to choose a mode of tranport for each online order. The cost of transport is calculated at the end depending on the weight and volume of your order and the selected mode of transportation. For more information on this topic please click here</p>
            </li>
            <li>
                <p class="question">Where do you deliver?</p>
                <p class="answer">Our company delivers on majority of cities in Albania. If you wish to get notified when we will be shipping to other countries or to your country, please register to receive our Newsletter.</p>
            </li>
            <li>
                <p class="question">How long does an order need to be delivered?</p>
                <p class="answer">When your order is sent we notify with an email. If you order within 18:00 hour the order will be proccessed and delivered within 90 minutes in Tirana, Durrës, Kruja, Fushë-Kruja. It will be delivered the next day for the other cities.</p>
            </li>
            <li>
                <p class="question">How can you make sure that my personal information will not be missused?</p>
                <p class="answer">(name, address, email address, password) our company is fully compliant with all requirements of the Law on Protection of Personal Data and has filed with the Commissioner on the Protection of Personal Data as required. The only way we use your personal data is to make certain that we deliver orders to the right address, improve our services to clients and to notify you know on our companies offers and news. We are always striving to better serve our clients.</p>
            </li>
            <li>
                <p class="question">If I wish to return a product, what should I do?</p>
                <p class="answer">Our company accepts returned products within a period of 14 days from the date of purchase only if it has the original intact packaging, the product should not be damadged and must have all its components, instruction of use, and the receipt to prove the purchase or online confirmation.</p>
            </li>
        </ol>
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
