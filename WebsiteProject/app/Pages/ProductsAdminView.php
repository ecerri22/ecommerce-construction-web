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
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                        <li class="tab-sidebar">
                            <a href="/changeContents" class="tab-link-sidebar">
                                <i class="fas fa-save"></i>
                                <p class="tab-txt-sidebar">Change Contents</p>
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
            <script>
                function atea_search(data)
                {
                    var input = document.getElementById('search').value;
                    $.ajax({
                        url: 'Atea/SearchProds.php',
                        type: 'POST',
                        data: {
                            search: input,
                            data: JSON.stringify(data),
                            basics: ['Select category','Select Material','Select Unit of Measurement'],
                            params: ['category_name','material','unit_of_measure'],
                            vars: [document.getElementById('category').value , document.getElementById('Material').value , document.getElementById('measurement').value],
                            id: 'product_id',
                            searchspan: ['name','description']
                        },
                        success: function(response) {
                            $('#prod-table').replaceWith(response);
                        },
                        error : function(response){
                            alert(response);
                        }
                    });
                }
                </script>
            <div class="admin-dashboard">
                <h1 class="page-title">Products</h1>
                <div class="search-container">
                    <input class="product-searcher" id="search" style="text-align: center;" type="text" name="search" placeholder="Search for product" value="<?php echo $_GET['search'] ?? ''; ?>">
                    <button class='atea-searcher' type='submit' onclick='atea_search(<?php echo json_encode($data); ?>);'>
                        <i class="fas fa-search searchlogo"></i>
                    </button>
                    <select class="dropdown" id="category">
                        <option value="">Select category</option>
                        <?php
                            $this->displaydropdown($data,'category_name');
                        ?>
                        <!-- Add more category options as needed -->
                    </select>
                    <select class="dropdown" id="Material">
                        <option value="">Select Material</option>
                        <?php
                            $this->displaydropdown($data,'material')
                        ?>
                        <!-- Add more price range options as needed -->
                    </select>
                    <select class="dropdown" id="measurement">
                        <option value="">Select Unit of Measurement</option>
                        <?php
                            $this->displaydropdown($data,'unit_of_measure');
                        ?>
                        <!-- Add more buy price range options as needed -->
                    </select>

                    <a href="/createProduct" class="green-button-link">
                        <button class="green-button">
                            <i class="fas fa-plus" style="color: white;"></i>
                        </button>
                    </a>
                </div>
                <?php self::showtable($data); ?>
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

    public static function showtable($data)
    {
        ?>
        <table class="product-table" id="prod-table">
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
                                <td><a href="/productDetails?productID=<?php echo $row['product_id']; ?>" ><?php echo $row['name']; ?></a></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><img src="<?php echo $row['product_image']; ?>" alt="<?= $row['description']; ?>" style="height: 5rem; width: 5rem;"></td>
                                <td><?php echo $row['category_name']; ?></td>
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