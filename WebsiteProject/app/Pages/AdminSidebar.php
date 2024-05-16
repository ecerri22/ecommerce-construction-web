<?php

namespace Pages;

class AdminSidebar {
    public function __construct() {}

    public function render() {
        ?>
            <div class="sidebar">
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
                <button class="logout-sidebar">
                    <i class="fas fa-sign-out-alt logout-icon"></i>
                    <p class="logout-text-sidebar">LOG OUT</p>
                </button>
            </div>
        <?php
    } 
}