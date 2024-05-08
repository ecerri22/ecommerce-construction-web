<?php

namespace Controllers;
use Core\Controller;

class ProductsUserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderAddProductPage()
    {
        view('user/thanas_add_product.view.php');
    }

}
