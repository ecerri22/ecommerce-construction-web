<?php

namespace Pages;

class AddProductAdminView {
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
            <?php $this->renderNavbar() ?>

            <div class="admin-dashboard">
                <h1 class="page-title">Create Product</h1>
                <form action="/createProduct" method="POST" class="create-prod-form" enctype="multipart/form-data">
                    <label for="prod-name" class="label-name">Product Name:</label>
                    <input type="text" class="prod prod-name" name="prod-name">

                    <label for="prod-description" class="label-description">Description:</label>
                    <textarea class="prod prod-description" name="prod-description"></textarea>


                    <div class="div-prod-img">
                        <label for="prod-img" class="label-other">
                            <span>+ Add Product Image</span>
                            <input type="file" id="prod-img" class="prod-img" name="image_name" accept="image/*">
                        </label>
                    </div>

                    <div class="div-prod-price">
                        <label for="prod-price" class="label-other">Price:</label>
                        <input type="text" class="prod prod-price" name="prod-price">
                    </div>

                    <div class="div-prod-material">
                        <label for="prod-material" class="label-other">Material:</label>
                        <input type="text" class="prod prod-material" name="prod-material">
                    </div>

                    <div class="div-prod-measure">
                        <label for="prod-unit-of-measure" class="label-other">Unit of measure:</label>
                        <input type="text" class="prod prod-unit-of-measure" name="prod-unit-of-measure">
                    </div>

                    <div class="div-prod-brand">
                        <label for="prod-brand" class="label-other">Brand:</label>
                        <input type="text" class="prod prod-brand" name="prod-brand">
                    </div>
                    
                    <!-- dropdown -->
                    <div class="div-prod-category">
                        <label for="prod-category" class="label-other">Category:</label>
                        <select id="prod-category" class="prod prod-category" name="prod-category">
                            <option value="1">Electrical</option>
                            <option value="2">Windows</option>
                            <option value="3">Steel Profiles</option>
                            <option value="4">Wood Materials</option>
                            <option value="5">Hydraulics</option>
                            <option value="6">Professional Work Tools</option>
                            <option value="7">Building Materials</option>
                            <option value="8">Roof Covers</option>
                            <option value="9">Isolation</option>
                            <option value="10">Packaging Materials</option>
                        </select>
                    </div>

                    <div class="div-prod-stock">
                        <label for="prod-stock" class="label-other">Stock: </label>
                        <input type="text" class="prod prod-stock" name="prod-stock">
                    </div>

                    <div class="div-prod-buy-price">
                        <label for="prod-buy-price" class="label-other">Buy price:</label>
                        <input type="text" class="prod prod-buy-price" name="prod-buy-price">
                    </div>

                    <input type="submit" value="Create product" class="prod-submit"> 

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
                <!-- <img src=""/> -->
                <div class="user-pfp"></div>
                <p><?= $_SESSION['user']['first_name'] ?></p>
            </button>
        </nav>
        <?php
    }
}