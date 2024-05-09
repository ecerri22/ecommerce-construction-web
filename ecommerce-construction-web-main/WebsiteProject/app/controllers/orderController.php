<?php

namespace Controllers;
use Models\Order;
use Core\Controller;

class orderController extends Controller {
    private $order;

    public function __construct()
    {
        parent::__construct();
        
    }

    public function renderMyOrders()
    {
        view('user/irvi_myorders.view.php');
    }
}
