<?php

namespace Pages;

class ProductsAdminView{
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
                
                <link rel="stylesheet" href="Atea/ateaStyles.css" />
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
            </head>
        <?php
    }

    private function renderHeader() {
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
                            <a href="/allProductsAdmin" class="tab-link-sidebar active">
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
    
    private function renderContent() {
        ?>
            <div class="content"> 
            <nav class="admin-navbar">
                <button class="notif-btn">
                    <i class="fas fa-bell"></i>
                </button>
                <button class="admin-name">
                    <!-- <img src=""/> -->
                    <div class="user-pfp"></div>
                    <p><?= $_SESSION['user']['first_name'] ?></p>
                </button>
            </nav>
            
            <div class="admin-dashboard">
                <h1 class="page-title">Products</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Product Image</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Material</th>
                            <th>Unit of Measure</th>
                            <th>Stock</th>
                            <th>Buy Price</th>
                            <th>Bought at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>1</td>
                            <td>Cement</td>
                            <td>High-quality cement for construction purposes</td>
                            <td>cement.jpg</td>
                            <td>category 1</td>
                            <td>$75.00</td>
                            <td>Cement</td>
                            <td>Bag</td>
                            <td>100</td>
                            <td>$70.00</td>
                            <td>2024-05-10</td>
                            <td>
                                <a href="/editProduct">
                                    <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                                </a>
                                <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    
                        <tr>
                            <td>1</td>
                            <td>Cement</td>
                            <td>High-quality cement for construction purposes</td>
                            <td>cement.jpg</td>
                            <td>category 1</td>
                            <td>$75.00</td>
                            <td>Cement</td>
                            <td>Bag</td>
                            <td>100</td>
                            <td>$70.00</td>
                            <td>2024-05-10</td>
                            <td>
                                <a href="/editProduct">
                                    <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                                </a>
                                <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Cement</td>
                            <td>High-quality cement for construction purposes</td>
                            <td>cement.jpg</td>
                            <td>category 1</td>
                            <td>$75.00</td>
                            <td>Cement</td>
                            <td>Bag</td>
                            <td>100</td>
                            <td>$70.00</td>
                            <td>2024-05-10</td>
                            <td>
                                <a href="/editProduct">
                                    <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                                </a>
                                <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Cement</td>
                            <td>High-quality cement for construction purposes</td>
                            <td>cement.jpg</td>
                            <td>category 1</td>
                            <td>$75.00</td>
                            <td>Cement</td>
                            <td>Bag</td>
                            <td>100</td>
                            <td>$70.00</td>
                            <td>2024-05-10</td>
                            <td>
                                <a href="/editProduct">
                                    <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                                </a>
                                <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Cement</td>
                            <td>High-quality cement for construction purposes</td>
                            <td>cement.jpg</td>
                            <td>category 1</td>
                            <td>$75.00</td>
                            <td>Cement</td>
                            <td>Bag</td>
                            <td>100</td>
                            <td>$70.00</td>
                            <td>2024-05-10</td>
                            <td>
                                <a href="/editProduct">
                                    <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                                </a>
                                <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Cement</td>
                            <td>High-quality cement for construction purposes</td>
                            <td>cement.jpg</td>
                            <td>category 1</td>
                            <td>$75.00</td>
                            <td>Cement</td>
                            <td>Bag</td>
                            <td>100</td>
                            <td>$70.00</td>
                            <td>2024-05-10</td>
                            <td>
                                <a href="/editProduct">
                                    <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                                </a>
                                <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        <?php

    }

    private function renderFooter() {
        ?>
            <footer class="footer">
                <!-- Footer content goes here -->
            </footer> 
        <?php
    }

}