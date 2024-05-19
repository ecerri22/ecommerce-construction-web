<?php

namespace Pages;

class EditProductAdminView {
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function render($productData = []) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <?php $this->renderHead(); ?>
        <body>
            <?php $this->renderHeader(); ?>
            <?php $this->renderContent($productData); ?>
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
                        <li class="tab-sidebar">
                            <a href="/changeContents" class="tab-link-sidebar">
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

    private function renderContent($productData = []) {
        ?>
        <div class="content">
            <?php $this->renderNavbar() ?>

            <div class="admin-dashboard">
                <h1 class="page-title">Edit Product</h1>
                <form action="/editProduct" method="POST" class="create-prod-form" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="product_id" value="<?= $productData['product_id'] ?>"/>    

                    <label for="prod-name" class="label-name">Product Name:</label>
                    <input type="text" class="prod prod-name" name="prod-name" value="<?= $productData['name'] ?? ''; ?>">

                    <label for="prod-description" class="label-description">Description:</label>
                    <textarea class="prod prod-description" name="prod-description"><?= $productData['description'] ?? ''; ?></textarea>

                    <div class="div-prod-img">
                        <label for="prod-img" class="label-other">
                            <span>+ Add Product Image</span>
                            <input type="file" id="prod-img" class="prod-img" name="prod-img" accept="image/*">
                            <?php if (!empty($product['product_image'])): ?>
                                <img src="<?= $product['product_image']; ?>" alt="<?= $productData['name']?>" style="height: 100px;">
                            <?php endif; ?>
                        </label>
                    </div>

                    <div class="div-prod-price">
                        <label for="prod-price" class="label-other">Price:</label>
                        <input type="text" class="prod prod-price" name="prod-price" value="<?= $productData['price'] ?? ''; ?>">
                    </div>

                    <div class="div-prod-material">
                        <label for="prod-material" class="label-other">Material:</label>
                        <input type="text" class="prod prod-price" name="prod-material" value="<?= $productData['material'] ?? ''; ?>">
                    </div>

                    <div class="div-prod-measure">
                        <label for="prod-unit-of-measure" class="label-other">Unit of measure:</label>
                        <input type="text" class="prod prod-price" name="prod-unit-of-measure" value="<?= $productData['unit_of_measure'] ?? ''; ?>">
                    </div>

                    <div class="div-prod-brand">
                        <label for="prod-brand" class="label-other">Brand:</label>
                        <input type="text" class="prod prod-price" name="prod-brand" value="<?= $productData['brand'] ?? ''; ?>">
                    </div>
                    
                    <!-- dropdown -->
                    <div class="div-prod-category">
                    <label for="prod-category" class="label-other">Category:</label>
                    <select class="prod prod-price" name="prod-category">
                        <option value="1" <?= ($productData['category_id'] ?? '') == 1 ? 'selected' : ''; ?>>Electrical</option>
                        <option value="2" <?= ($productData['category_id'] ?? '') == 2 ? 'selected' : ''; ?>>Windows</option>
                        <option value="3" <?= ($productData['category_id'] ?? '') == 3 ? 'selected' : ''; ?>>Steel Profiles</option>
                        <option value="4" <?= ($productData['category_id'] ?? '') == 4 ? 'selected' : ''; ?>>Wood Materials</option>
                        <option value="5" <?= ($productData['category_id'] ?? '') == 5 ? 'selected' : ''; ?>>Hydraulics</option>
                        <option value="6" <?= ($productData['category_id'] ?? '') == 6 ? 'selected' : ''; ?>>Professional Work Tools</option>
                        <option value="7" <?= ($productData['category_id'] ?? '') == 7 ? 'selected' : ''; ?>>Building Materials</option>
                        <option value="8" <?= ($productData['category_id'] ?? '') == 8 ? 'selected' : ''; ?>>Roof Covers</option>
                        <option value="9" <?= ($productData['category_id'] ?? '') == 9 ? 'selected' : ''; ?>>Isolation</option>
                        <option value="10" <?= ($productData['category_id'] ?? '') == 10 ? 'selected' : ''; ?>>Packaging Materials</option>
                    </select>
                </div>


                    <div class="div-prod-stock">
                        <label for="prod-stock" class="label-other">Stock: </label>
                        <input type="text" class="prod prod-price" name="prod-stock" value="<?= $productData['stock'] ?? ''; ?>">
                    </div>

                    <div class="div-prod-buy-price">
                        <label for="prod-buy-price" class="label-other">Buy price:</label>
                        <input type="text" class="prod prod-price" name="prod-buy-price" value="<?= $productData['buy_price'] ?? ''; ?>">
                    </div>

                    <input type="submit" value="Save changes" class="prod-submit"> 

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