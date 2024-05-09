<?php

namespace Controllers;
use Models\Product;
use Core\Controller;

class productController extends Controller {
    private $product;

    public function __construct()
    {
        parent::__construct();
        
    }

    public function renderProductDetails()
    {
        view('user/irvi_productDetails.view.php');
    }
}
