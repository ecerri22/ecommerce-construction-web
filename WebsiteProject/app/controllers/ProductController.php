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
        $this->product = new Product();
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

    
    public function deleteProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->product->deleteProduct();
            redirect('/allProductsAdmin');
        } 
    }


}