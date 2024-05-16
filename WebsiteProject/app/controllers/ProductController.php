<?php

namespace Controllers;
use Core\Controller;
use Models\Product;

class ProductController extends Controller
{
    public $product;

    public function __construct()
    {
        parent::__construct();
    }

    public function renderAllProductsPage()
    {
        view('user/thanas_allProducts.view.php', [
            'allProducts' => Product::getAllproducts()
        ]);
    }
 
    public function renderProductDetails()
    {
        view('user/irvi_productDetails.view.php');
    }

}