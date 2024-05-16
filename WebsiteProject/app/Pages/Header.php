<?php
namespace Pages;

class Header {
    private $title;
    private $cssFile;

    public function __construct($title, $cssFile)
    {
        $this->title = $title;
        $this->cssFile = $cssFile;
    }

    public function render() {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <?php $this->renderHead(); ?>
        <body>
            <?php $this->renderHeader(); ?>
        <?php
    }

    private function renderHead() {
        ?>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?= $this->title; ?></title>
            
            <link rel="stylesheet" href="<?= $this->cssFile; ?>" />
            <script src="Thanas/javascript/functions2.js"></script>


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
}
?>
