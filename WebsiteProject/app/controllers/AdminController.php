<?php

namespace Controllers;

use Core\Controller;
use Models\Admin;
use Models\Product;
use Models\Order;
use Models\User;

class AdminController extends Controller
{
    private $user;
    private $order;
    private $guest;

    public function __construct()
    {
        parent::__construct();
        $this->user = new Admin();
        $this->order = new Order();
        $this->guest = new User();
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
        view('admin/enia_editProduct.view.php');
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
            'data' => $this->user->getallusers()
        ]);
    }

    public function renderProductsAdminController()
    {
        $search = $_GET['search'] ?? '';
        $products = $this->user->getFilteredProducts($search); // This will be a new method
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

            // dd($_FILES);

            $this->user->createProduct($name, $description, $image, $category, $material, $unit_of_measure, $brand, $price, $stock, $buy_price);

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

            // dd($_FILES);

            $this->guest->register($name, $lastName, $email, $password);

            redirect('/allProductsAdmin');
        } else {
            header("Location: /error");
        }
    }


    public function editOrderStatus()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // dd($_POST);
            $this->order->updateOrderStatus($_POST['newStatus'], $_POST['id']);
            redirect("/allOrdersAdmin");
        }
    }
}
