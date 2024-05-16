<?php

namespace Controllers;
use Core\Controller;

class HomePageController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderHomePage()
    {
        view('user/enia_home.view.php');
    }

}
