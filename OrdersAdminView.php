<?php

namespace Pages;

use Models\Order;

class OrdersAdminView{
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function render($orders = []) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <?php $this->renderHead(); ?>
        <body>
            <?php $this->renderSidebar(); ?>
            <?php $this->renderContent($orders); ?>
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
                        <a href="/allOrdersAdmin" class="tab-link-sidebar active">
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

    private function renderContent($orders = []) {
        ?>
            <div class="content"> 
                <nav class="admin-navbar">
                    <!-- Navbar code remains the same -->
                </nav>
        
                <div class="admin-dashboard">
                    <h1 class="page-title">Orders</h1>
                        <table class="product-table">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Product ID</th>
                                    <th>Quantity</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>User ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($orders as $order) : ?>
                                    <tr>
                                        <td><?= $order['order_id'] ?></td>
                                        <td><?= $order['product_id'] ?></td>
                                        <td><?= $order['quantity'] ?></td>
                                        <td><?= $order['created_at'] ?></td>
                                        <td>
                                            <form method="post" action="/allOrdersAdmin">
                                                <input type="hidden" name="_method" value="patch"/>
                                                <input type="hidden" name="id" value="<?= $order['order_id'] ?>"/>

                                                <select name="newStatus">
                                                    <option value="Pending" <?= ($order['status'] === 'Pending' ? 'selected' : '') ?>>Pending</option>
                                                    <option value="Delivered" <?= ($order['status'] === 'Delivered' ? 'selected' : '') ?>>Delivered</option>
                                                    <option value="Cancelled" <?= ($order['status'] === 'Cancelled' ? 'selected' : '') ?>>Cancelled</option>
                                                </select>
                                                <button type="submit" name="submit" class="icon-button view">
                                                    <i class="fas fa-save"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td><?= $order['user_id'] ?></td>
                                        <td>
                                    </tr>
                                <?php endforeach ; ?>
                            </tbody>
                        </table>
                </div>
            </div>
        <?php
        }
 
}

?>