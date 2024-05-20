<?php

namespace Controllers;

use Core\Controller;
use Models\Admin;
use Models\Order;
use Models\User;

class AdminController extends Controller
{
    private $admin;
    private $order;
    private $user;

    public function __construct()
    {
        parent::__construct();
        $this->admin = new Admin();
        $this->order = new Order();
        $this->user = new User();
    }

    public function renderDashboardAdminPage()
    {
        view('admin/thanas_dashboard.view.php');
    }

    public function renderAddProductPage()
    {
        view('admin/enia_createProduct.view.php');
        $this->insertProduct();
    }

    public function renderEditProductPage()
    {
        $product_id = $_GET['product_id'] ?? null;
        if ($product_id) {
            $productData = $this->admin->getProductData($product_id);
            view('admin/enia_editProduct.view.php', [
                'productData' => $productData
            ]);
        } 
    }

    public function renderOrdersAdminController()
    {
        view('admin/atea_allOrders.view.php', [
            'orders' => $this->order->getAllOrders()
        ]);
    }

    public function renderUsersAdminController()
    {
        view('admin/atea_allUsers.view.php', [
            'data' => $this->admin->getallusers()
        ]);
    }

    public function renderProductsAdminController()
    {
        $search = $_GET['search'] ?? '';
        $products = $this->admin->getFilteredProducts($search); 
        view('admin/atea_allProducts.view.php', [
            'data' => $products
        ]);
    }

    public function insertProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['prod-name'];
            $description = $_POST['prod-description'];
            $price = $_POST['prod-price'];
            $category = $_POST['prod-category'];
            $image = $_FILES['image_name']['name'];
            $material = $_POST['prod-material'];
            $unit_of_measure = $_POST['prod-unit-of-measure'];
            $brand = $_POST['prod-brand'];
            $stock = $_POST['prod-stock'];
            $buy_price = $_POST['prod-buy-price'];

            $this->admin->createProduct($name, $description, $image, $category, $material, $unit_of_measure, $brand, $price, $stock, $buy_price);

            redirect('/allProductsAdmin');
        }
    }

    public function deleteProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->admin->deleteProduct();
            redirect('/allProductsAdmin');
        } 
    }

    public function createAdminDashboard()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['fname'];
            $lastName = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['pass'];

            $this->user->register($name, $lastName, $email, $password);

            redirect('/allProductsAdmin');
        } 
    }

    public function editOrderStatus()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->order->updateOrderStatus($_POST['newStatus'], $_POST['id']);
            redirect("/allOrdersAdmin");
        }
    }

    
    public function editProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product_id = $_POST['product_id'];
            $name = $_POST['prod-name'];
            $description = $_POST['prod-description'];
            $price = $_POST['prod-price'];
            $category = $_POST['prod-category'];
            $image = $_FILES['prod-img']['name'];
            $material = $_POST['prod-material'];
            $unit_of_measure = $_POST['prod-unit-of-measure'];
            $brand = $_POST['prod-brand'];
            $stock = $_POST['prod-stock'];
            $buy_price = $_POST['prod-buy-price'];
            // dd($_FILES);

            $result = $this->admin->updateProduct($product_id, $name, $description, $image, $category, $material, $unit_of_measure, $brand, $price, $stock, $buy_price);

            if ($result) {
                redirect('/allProductsAdmin');
            } else {
                echo "Failed to update product";
            }
        }
    }


}
