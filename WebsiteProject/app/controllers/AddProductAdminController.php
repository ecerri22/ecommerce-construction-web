<?php

namespace Controllers;
use Core\Controller;

class AddProductAdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderAddProductPage()
    {
        view('admin/enia_createProduct.view.php');
    }

}
