<?php

namespace Controllers;

use Core\Controller;
use Models\User;


class ProductsAdminController extends Controller
{
    private $user;

    public function __construct()
    {
        parent::__construct();
        $this->user = new User();
    }

    public function renderProductsAdminController()
    {
        view('admin/atea_allProducts.view.php');
    }

    
}