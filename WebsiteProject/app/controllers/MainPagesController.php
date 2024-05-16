<?php

namespace Controllers;
use Core\Controller;

class MainPagesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderHomePage()
    {
        view('user/enia_home.view.php');
    }

    public function renderAboutUsPage()
    {
        view('user/denis_aboutus.view.php');
    }

    public function renderErrorPage()
    {
        view('user/denis_error.view.php');
    }

    
}
