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
            <?php $this->renderSidebar(); ?>
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
            
            <link rel="stylesheet" href="Enia/eniaAdminStyles.css" />

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        </head>
        <?php
    }

    private function renderSidebar() {
        ?>
            <div class="sidebar">
                <a href="#" class="logo">
                    <h3>LOGO</h3>
                </a>
                <ul class="tabs-list-sidebar">
                    <li class="tab-sidebar">
                        <a href="#" class="tab-link-sidebar">
                            <i class="fas fa-th-large"></i>
                            <p class="tab-txt-sidebar">Dashboard</p>
                        </a>
                    </li>
                    <li class="tab-sidebar">
                        <a href="products.html" class="tab-link-sidebar active">
                            <i class="fas fa-box-open"></i> 
                            <p class="tab-txt-sidebar">Products</p>
                        </a>
                    </li>
                    <li class="tab-sidebar">
                        <a href="#" class="tab-link-sidebar">
                            <i class="fas fa-file-alt"></i>
                            <p class="tab-txt-sidebar">Orders</p>
                        </a>
                    </li>
                    <li class="tab-sidebar">
                        <a href="#" class="tab-link-sidebar">
                            <i class="fas fa-user"></i>
                            <p class="tab-txt-sidebar">Users</p>
                        </a>
                    </li>
                    <li class="tab-sidebar">
                        <a href="#" class="tab-link-sidebar">
                            <i class="fas fa-comment"></i>
                            <p class="tab-txt-sidebar">Reviews</p>
                        </a>
                    </li>
                </ul>
                <button class="logout-sidebar">
                    <i class="fas fa-sign-out-alt logout-icon"></i>
                    <p class="logout-text-sidebar">LOG OUT</p>
                </button>
            </div>
        <?php
    }

    private function renderContent() {
        ?>
        <div class="content">
            <?php $this->renderNavbar() ?>

            <div class="admin-dashboard">
                <h1 class="page-title">Create Product</h1>
                <form action="/createProduct" class="create-prod-form">
                    <label for="prod-name" class="label-name">Product Name:</label>
                    <input type="text" class="prod prod-name" name="prod-name">

                    <label for="prod-description" class="label-description">Description:</label>
                    <textarea class="prod prod-description" name="prod-description"></textarea>


                    <div class="div-prod-img">
                        <label for="prod-img" class="label-other">
                            <span>+ Add Product Image</span>
                            <input type="file" id="prod-img" class="prod-img" name="prod-img" accept="image/*">
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
                            <option value="category1">Electrical</option>
                            <option value="category2">Windows</option>
                            <option value="category3">Steel Profiles</option>
                            <option value="category4">Wood Materials</option>
                            <option value="category5">Hydraulics</option>
                            <option value="category6">Professional Work Tools</option>
                            <option value="category7">Building Materials</option>
                            <option value="category8">Roof Covers</option>
                            <option value="category9">Isolation</option>
                            <option value="category10">Packaging Materials</option>
                        </select>
                    </div>

                    <div class="div-prod-stock">
                        <label for="prod-stock" class="label-other">Stock: </label>
                        <input type="text" class="prod prod-stock" name="prod-stock">
                    </div>

                    <div class="div-prod-buy-price">
                        <label for="prod-buy-price" class="label-other">Buy price:</label>
                        <input type="text" class="prod prod-buy-price" name="prod-price">
                    </div>

                    <div class="div-prod-bought-at">
                        <label for="prod-bought-at" class="label-other">Bought at:</label>
                        <input type="text" class="prod prod-bought-at" name="prod-bought-at">
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
                <p>Admin</p>
            </button>
        </nav>
        <?php
    }
}