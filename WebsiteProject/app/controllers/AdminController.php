<?php

namespace Controllers;
use Core\Controller;

class AdminController extends Controller{
    public function __construct()
    {
        parent::__construct();
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
        view('admin/atea_allUsers.view.php');
    }

    public function renderProductsAdminController()
    {
        view('admin/atea_allProducts.view.php');
    }
}