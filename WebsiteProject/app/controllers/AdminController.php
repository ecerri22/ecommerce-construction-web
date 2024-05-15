<?php

namespace Controllers;

use Core\Authenticator;
use Core\Controller;
use Models\Admin;

class AdminController extends Controller{
    private $user;
    private $auth;

    public function __construct()
    {
        parent::__construct();
        $this->user = new Admin();
        $this->auth = new Authenticator();
    }

    public function renderDashboardAdminPage()
    {
        view('admin/thanas_dashboard.view.php');
    }

    public function renderAddProductPage()
    {
        view('admin/enia_createProduct.view.php');
    }

    public function renderEditProductPage()
    {
        view('admin/enia_editProduct.view.php');
    }

    public function renderOrdersAdminController()
    {
        view('admin/atea_allOrders.view.php');
    }

    public function renderUsersAdminController()
    {
        view('admin/atea_allUsers.view.php', [
            'data' => $this->user->getallusers()
        ]);
    }

    public function renderProductsAdminController()
    {
        view('admin/atea_allProducts.view.php');
    }
    
    private function insertProduct()
    {
        $name = $_POST['prod-name'];
        $description = $_POST['prod-description'];
        $price = $_POST['prod-price'];
        $category = $_POST['prod-category'];
        $image = $_FILES['image_name']['name'];
        $material = $_POST['prod-material'];
        $unit_of_measure= $_POST['prod-unit-of-measure'];
        $brand = $_POST['prod-brand'];
        $stock = $_POST['prod-stock'];
        $buy_price = $_POST['prod-buy-price'];
        $bought_at = $_POST['prod-bought-at'];
    
        $result = $this->user->createProduct($name, $description, $price, $category, $image, $material, $unit_of_measure, $brand, $stock, $buy_price, $bought_at);
        dd($result);
       
    }

}