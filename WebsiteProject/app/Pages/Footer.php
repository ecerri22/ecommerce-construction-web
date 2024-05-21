<?php

namespace Pages;

use Models\Pages;

class Footer {
    private $pages;

    public function __construct() {
        $this->pages = new Pages();
    }

    public function render() {
        $footerContents = $this->pages->getContentsFooter();

        $socialLinks = [
            'facebook' => '#',
            'twitter' => '#',
            'instagram' => '#'
        ];

        foreach ($footerContents as $content) {
            $socialLinks[$content['socialMedia']] = $content['link'];
        }

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
                        <li><a href="<?= $socialLinks['facebook'] ?>"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="<?= $socialLinks['twitter'] ?>"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="<?= $socialLinks['instagram'] ?>"><i class="fab fa-instagram"></i></a></li>
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
