<?php

namespace Pages;

class ProductsAdminView{
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function render($data=[]) {
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
                    <form action="/login" method="POST">
                        <input type="hidden" name="_method" value="DELETE" />
                        <button class="logout-sidebar">
                            <i class="fas fa-sign-out-alt logout-icon"></i>
                            <p class="logout-text-sidebar">LOG OUT</p>
                        </button>
                    </form>
                </div>
            </div>

        <?php
    }
    
    private function renderContent($data) {
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
                            <!-- <th>Bought at</th> -->
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $row): ?>
                            <tr>
                                <td><?php echo $row['product_id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><img src="/image/<?php echo $row['product_image']; ?>" alt="<?= $row['description']; ?>" style="height: 5rem; width: 5rem;"></td>
                                <td><?php echo $row['category_id']; ?></td>
                                <td><?php echo '$' . $row['price']; ?></td>
                                <td><?php echo $row['material']; ?></td>
                                <td><?php echo $row['unit_of_measure']; ?></td>
                                <td><?php echo $row['stock']; ?></td>
                                <td><?php echo '$' . $row['buy_price']; ?></td>
                                <td>
                                    <a href="/editProduct">
                                        <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                                    </a>
                                    <form method="POST" action="/allProductsAdmin">
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <input type="hidden" name="product_id" value="<?= $row['product_id'] ?>" />
                                        <button type="submit" class="icon-button delete" >
                                         <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                   
                            </tr>
                        <?php endforeach; ?>
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