<?php

namespace Pages;

class OrdersAdminView{
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

                <script>
                function atea_search(data)
                {
                    var input = document.getElementById('search').value;
                    $.ajax({
                        url: 'Atea/Search.php',
                        type: 'POST',
                        data: {
                            search: input,
                            data: JSON.stringify(data),
                            category: document.getElementById('category').value,
                            Material: document.getElementById('Material').value,
                            measurement: document.getElementById('measurement').value,
                            base1 : 'category_name',
                            base2 : 'material',
                            base3 : 'unit_of_measure'
                        },
                        success: function(response) {
                            $('#prod-table').replaceWith(response);
                        }
                    });
                }
                </script>
                
                <div class="admin-dashboard">
                    <h1 class="page-title">Orders</h1>
                    <table class="product-table">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Product ID</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Created At</th>
                                <th>Cost</th>
                                <th>Status</th>
                                <th>User Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>10927</td>
                                <td>14</td>
                                <td>2</td>
                                <td>$192.00</td>
                                <td>Apr 21, 2024 5:28 PM</td>
                                <td>$10</td>
                                <td>
                                    <select class="status-dropdown">
                                        <option selected>Delivered</option>
                                        <option>Pending</option>
                                        <option>Cancelled</option>
                                    </select>
                                    <button class="icon-button view"><i class="fas fa-save"></i></button>
                                </td>
                                <td>Street X, City Y, State Z</td>                                                                
                            </tr>

                            <tr>
                                <td>10927</td>
                                <td>14</td>
                                <td>2</td>
                                <td>$192.00</td>
                                <td>Apr 21, 2024 5:28 PM</td>
                                <td>$10</td>
                                <td>
                                    <select class="status-dropdown">
                                        <option selected>Delivered</option>
                                        <option>Pending</option>
                                        <option>Cancelled</option>
                                    </select>
                                    <button class="icon-button view"><i class="fas fa-save"></i></button>
                                </td>
                                <td>Street X, City Y, State Z</td>                                                                
                            </tr>
                            <tr>
                                <td>10927</td>
                                <td>14</td>
                                <td>2</td>
                                <td>$192.00</td>
                                <td>Apr 21, 2024 5:28 PM</td>
                                <td>$10</td>
                                <td>
                                    <select class="status-dropdown">
                                        <option selected>Delivered</option>
                                        <option>Pending</option>
                                        <option>Cancelled</option>
                                    </select>
                                    <button class="icon-button view"><i class="fas fa-save"></i></button>
                                </td>
                                <td>Street X, City Y, State Z</td>                                                                
                            </tr>
                            <tr>
                                <td>10927</td>
                                <td>14</td>
                                <td>2</td>
                                <td>$192.00</td>
                                <td>Apr 21, 2024 5:28 PM</td>
                                <td>$10</td>
                                <td>
                                    <select class="status-dropdown">
                                        <option selected>Delivered</option>
                                        <option>Pending</option>
                                        <option>Cancelled</option>
                                    </select>
                                    <button class="icon-button view"><i class="fas fa-save"></i></button>
                                </td>
                                <td>Street X, City Y, State Z</td>                                                                
                            </tr>
                            <tr>
                                <td>10927</td>
                                <td>14</td>
                                <td>2</td>
                                <td>$192.00</td>
                                <td>Apr 21, 2024 5:28 PM</td>
                                <td>$10</td>
                                <td>
                                    <select class="status-dropdown">
                                        <option selected>Delivered</option>
                                        <option>Pending</option>
                                        <option>Cancelled</option>
                                    </select>
                                    <button class="icon-button view"><i class="fas fa-save"></i></button>
                                </td>
                                <td>Street X, City Y, State Z</td>                                                                
                            </tr>
                            <tr>
                                <td>10927</td>
                                <td>14</td>
                                <td>2</td>
                                <td>$192.00</td>
                                <td>Apr 21, 2024 5:28 PM</td>
                                <td>$10</td>
                                <td>
                                    <select class="status-dropdown">
                                        <option selected>Delivered</option>
                                        <option>Pending</option>
                                        <option>Cancelled</option>
                                    </select>
                                    <button class="icon-button view"><i class="fas fa-save"></i></button>
                                </td>
                                <td>Street X, City Y, State Z</td>                                                                
                            </tr>
                            
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        <?php

    }

    public function displaydropdown($data,$base)
    {
                $seen = array();
                foreach ($data as $row) {
                    if(!isset($seen[$row[$base]])){
                        $seen[$row[$base]] = false;
                    }
                        if ($seen[$row[$base]] == false ){
                            $seen[$row[$base]] = true;
                            echo '<option value="' . $row[$base] . '">' . $row[$base] . '</option>';
                        }
                        
                    }
    }


}