<?php

namespace Controllers;
use Core\Controller;
use Models\Product;
use Models\User;

class ProductController extends Controller
{
    public $product;
    public $user;

    public function __construct()
    {
        parent::__construct();
        $this->product = new Product();
        $this->user = new User();
    }

    public function renderAllProductsPage()
    {
        view('user/thanas_allProducts.view.php', [
            'allProducts' => $this->product->getAllProducts()
        ]);
    }
 
    public function renderProductDetails()
    {
        view('user/irvi_productDetails.view.php');
    }

}