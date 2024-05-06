<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Construction Web</title>
    
    <link rel="stylesheet" href="/public/Atea/ateaStyles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
</head>
<body>
    <div class="sidebar">
        <h3 class="logo">LOGO</h3>
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

    <div class="content"> 
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
        
        <div class="admin-dashboard">
            <h1 class="page-title">Products</h1>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Sale Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>View</th>
                        <th>Published</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>Cement</td>
                        <td>Material</td>
                        <td>$75.00</td>
                        <td>$70.00</td>
                        <td>35</td>
                        <td>In Stock</td>
                        <td><button class="icon-button view"><i class="fas fa-eye"></i></button></td>
                        <td>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                            <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                            <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                   

                    <tr>
                        <td>Rebar</td>
                        <td>Material</td>
                        <td>$90.00</td>
                        <td>$85.00</td>
                        <td>22</td>
                        <td>In Stock</td>
                        <td><button class="icon-button view"><i class="fas fa-eye"></i></button></td>
                        <td>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                            <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                            <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Planks</td>
                        <td>Wood</td>
                        <td>$50.00</td>
                        <td>$45.00</td>
                        <td>50</td>
                        <td>In Stock</td>
                        <td><button class="icon-button view"><i class="fas fa-eye"></i></button></td>
                        <td>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                            <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                            <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bricks</td>
                        <td>Material</td>
                        <td>$100.00</td>
                        <td>$95.00</td>
                        <td>100</td>
                        <td>Limited Stock</td>
                        <td><button class="icon-button view"><i class="fas fa-eye"></i></button></td>
                        <td>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                            <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                            <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Concrete Mixer</td>
                        <td>Equipment</td>
                        <td>$300.00</td>
                        <td>$250.00</td>
                        <td>10</td>
                        <td>Limited Stock</td>
                        <td><button class="icon-button view"><i class="fas fa-eye"></i></button></td>
                        <td>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                            <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                            <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Safety Helmet</td>
                        <td>Accessory</td>
                        <td>$25.00</td>
                        <td>$20.00</td>
                        <td>150</td>
                        <td>In Stock</td>
                        <td><button class="icon-button view"><i class="fas fa-eye"></i></button></td>
                        <td>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                            <button class="icon-button edit"><i class="fas fa-edit"></i></button>
                            <button class="icon-button delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>

    <footer class="footer">
        <!-- Footer content goes here -->
    </footer>  
</body>
</html>