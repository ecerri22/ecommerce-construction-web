<?php
namespace Pages;

class Footer {
    public function __construct(){}

    public function render() {
        ?>
        <footer class="footer">
            <div class="footer-content">
                <a href="#" class="logo logo-footer">
                    <h3>LOGO</h3>
                </a>
                <ul class="footer-links ftlink-main">
                    <li><a href="/">Home</a></li>
                    <li><a href="/allProducts">Products</a></li>
                    <li><a href="/aboutUs">Contact Us</a></li>
                </ul>
                <ul class="footer-links ftlink-account">
                    <li><a href="/signUp">Create Account</a></li>
                    <li><a href="/myAccount">My account</a></li>
                    <li><a href="/shoppingCart">Shopping Cart</a></li>
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