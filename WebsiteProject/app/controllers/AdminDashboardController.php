<?php

namespace Controllers;
use Core\Controller;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderAddProductPage()
    {
        view('admin/thanas_adminDashBoard.view.php');
    }

}
