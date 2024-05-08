<?php

namespace Controllers;

use Core\Controller;
use Models\User;


class OrdersAdminController extends Controller
{
    private $user;

    public function __construct()
    {
        parent::__construct();
        $this->user = new User();
    }

    public function renderOrdersAdminController()
    {
        view('admin/atea_allOrders.view.php');
    }

    
}