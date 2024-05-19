<?php

namespace Pages;

class ChangeContentsView {
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function render($homepagecontents = [], $aboutUsContents = [], $footercontents=[]) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <?php $this->renderHead(); ?>
        <body>
            <?php $this->renderSidebar(); ?>
            <?php $this->renderContent($homepagecontents, $aboutUsContents, $footercontents); ?>
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
                
                <link rel="stylesheet" href="Atea/ateaStyles.css" />
                <link rel="stylesheet" href="Enia/eniaAdminStyles.css" />

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
            </head>
        <?php
    }

    private function renderSidebar() {
        ?>
            <div class="sidebar">
                <div class="sidebar-content">
                    <a href="#" class="logo">
                        <h3>LOGO</h3>
                    </a>
                    <ul class="tabs-list-sidebar">
                        <li class="tab-sidebar">
                            <a href="/dashboard" class="tab-link-sidebar">
                                <i class="fas fa-th-large"></i>
                                <p class="tab-txt-sidebar">Dashboard</p>
                            </a>
                        </li>
                        <li class="tab-sidebar">
                            <a href="/allProductsAdmin" class="tab-link-sidebar">
                                <i class="fas fa-box-open"></i> 
                                <p class="tab-txt-sidebar">Products</p>
                            </a>
                        </li>
                        <li class="tab-sidebar">
                            <a href="/allOrdersAdmin" class="tab-link-sidebar">
                                <i class="fas fa-file-alt"></i>
                                <p class="tab-txt-sidebar">Orders</p>
                            </a>
                        </li>
                        <li class="tab-sidebar">
                            <a href="/allUsersAdmin" class="tab-link-sidebar">
                                <i class="fas fa-user"></i>
                                <p class="tab-txt-sidebar">Users</p>
                            </a>
                        </li>
                        <li class="tab-sidebar">
                            <a href="/changeContents" class="tab-link-sidebar active">
                                <i class="fas fa-save"></i>
                                <p class="tab-txt-sidebar">Change Contents</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="logout-container">
                    <button class="logout-sidebar">
                        <i class="fas fa-sign-out-alt logout-icon"></i>
                        <p class="logout-text-sidebar">LOG OUT</p>
                    </button>
                </div>
            </div>

        <?php
    }

    private function renderContent($homepagecontents = [], $aboutUsContents = [], $footercontents=[]) {
        ?>
        <div class="content">
            <?php $this->renderNavbar() ?>

            <div class="admin-dashboard">
                <h1 class="page-title">Change Contents</h1>
                <form action="/changeContents" method="POST">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="id" />
                    <div class="section-form-container">
                        <?php $this->renderHomePageSection($homepagecontents) ?>
                        <?php $this->renderAboutUsSection($aboutUsContents) ?>
                        <?php
                        //  $this->renderFooterSection($footercontents) 
                         ?>
                        <button type="submit" class="submit-btn">Save All Changes</button>
                    </div>
                </form>
            </div>
             
        </div>
        <?php
    }

    private function renderNavbar() {
        ?>
            <nav class="admin-navbar">
            <button class="notif-btn">
                <i class="fas fa-bell"></i>
            </button>
            <button class="admin-name">
                <p><?= $_SESSION['user']['first_name'] ?></p>
            </button>
        </nav>
        <?php
    }

    private function renderHomePageSection($homepagecontents =[]) {
        ?>
        <div class="section-form">
            <h2>Home Page Content</h2>
            <?php foreach ($homepagecontents as $content) : ?>
                <div class="form-group">
                    <label for="home-section-<?= $content['id'] ?>"><?= $content['section_name'] ?>:</label>
                    <textarea id="home-section-<?= $content['id'] ?>" name="home-content[<?= $content['id'] ?>]"><?= $content['content'] ?></textarea>
                </div>
            <?php endforeach; ?>
        </div>
        <?php
    }

    private function renderAboutUsSection($aboutuscontents =[]) {
        ?>
        <div class="section-form">
            <h2>About Us Content</h2>
            <?php foreach ($aboutuscontents as $content) : ?>
                <div class="form-group">
                    <label for="about-us-section-<?= $content['id'] ?>"><?= $content['section_name'] ?>:</label>
                    <textarea id="about-us-section-<?= $content['id'] ?>" name="about-us-content[<?= $content['id'] ?>]"><?= $content['content'] ?></textarea>
                </div>
            <?php endforeach; ?>
        </div>
        <?php
    }

    // private function renderFooterSection($footercontents =[]) {
    //     $footerContents = $footercontents[0]; // Assuming there's only one set of footer contents
        /*
        ?>
        <div class="section-form">
            <h2>Footer Content</h2>
            <div class="form-group">
                <label for="footer-facebook">Facebook:</label>
                <input type="text" id="footer-facebook" name="footer-facebook" value="<?= $footerContents['facebook'] ?>">
            </div>
            <div class="form-group">
                <label for="footer-twitter">Twitter:</label>
                <input type="text" id="footer-twitter" name="footer-twitter" value="<?= $footerContents['twitter'] ?>">
            </div>
            <div class="form-group">
                <label for="footer-instagram">Instagram:</label>
                <input type="text" id="footer-instagram" name="footer-instagram" value="<?= $footerContents['instagram'] ?>">
            </div>
        </div>
        */
        // <?php
    // }
}

echo '<style>
.section-form-container {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin-top:2rem;
}

.section-form {
    background: rbg(255, 255, 255);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.section-form h2 {
    margin-bottom: 15px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

.form-group textarea,
.form-group input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-family: "IBM Plex Sans", sans-serif;
}

.submit-btn {
    display: inline-block;
    padding: 10px 20px;
    background: #061538;
    color: #fff;
    border: none;
    cursor: pointer;
    margin-top: 20px;
    text-transform: uppercase;
    font-size: 1.2rem;
}

.submit-btn:hover {
    background: #0a1f50;
}

</style>';
