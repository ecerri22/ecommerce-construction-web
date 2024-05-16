<?php

namespace Pages;

class UsersAdminView{
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function render($data = []) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <?php $this->renderHead(); ?>
        <body>
            <?php $this->renderHeader(); ?>
            <?php $this->renderContent($data); ?>
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
                
                <link rel="stylesheet" href="/Atea/ateaStyles.css" />
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
                            <a href="/allUsersAdmin" class="tab-link-sidebar active">
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
            
    private function renderContent($data=[]) {
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
                    <h1 class="page-title">Users</h1>
                    <table class="product-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Joining Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data as $user): ?>

                        
                            <tr>
                                <td><?= $user['user_id'] ?></td>
                                <td><?= $user['created_at'] ?></td>
                                <td><?= $user['first_name'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td>000-000</td>
                                <td>
                                    <button class="icon-button view"><i class="fas fa-search"></i></button>
                                    <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                                    <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>

                            <?php endforeach; ?>

                            <!-- <tr>
                                <td>94IF</td>
                                <td>Apr 21, 2024</td>
                                <td>Santoo Chakraborty</td>
                                <td>santoo@gmail.com</td>
                                <td>+355 68 7980 655</td>
                                <td>
                                    <button class="icon-button view"><i class="fas fa-search"></i></button>
                                    <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                                    <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>94IF</td>
                                <td>Apr 21, 2024</td>
                                <td>Santoo Chakraborty</td>
                                <td>santoo@gmail.com</td>
                                <td>+355 68 7980 655</td>
                                <td>
                                    <button class="icon-button view"><i class="fas fa-search"></i></button>
                                    <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                                    <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>94IF</td>
                                <td>Apr 21, 2024</td>
                                <td>Santoo Chakraborty</td>
                                <td>santoo@gmail.com</td>
                                <td>+355 68 7980 655</td>
                                <td>
                                    <button class="icon-button view"><i class="fas fa-search"></i></button>
                                    <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                                    <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>94IF</td>
                                <td>Apr 21, 2024</td>
                                <td>Santoo Chakraborty</td>
                                <td>santoo@gmail.com</td>
                                <td>+355 68 7980 655</td>
                                <td>
                                    <button class="icon-button view"><i class="fas fa-search"></i></button>
                                    <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                                    <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>94IF</td>
                                <td>Apr 21, 2024</td>
                                <td>Santoo Chakraborty</td>
                                <td>santoo@gmail.com</td>
                                <td>+355 68 7980 655</td>
                                <td>
                                    <button class="icon-button view"><i class="fas fa-search"></i></button>
                                    <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                                    <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr> -->

                            
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