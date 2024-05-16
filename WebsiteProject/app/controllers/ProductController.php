<?php

namespace Controllers;
use Core\Controller;

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderAllProductsPage()
    {
        view('user/thanas_allProducts.view.php');
    }
 
    public function renderProductDetails()
    {
        view('user/irvi_productDetails.view.php');
    }
}