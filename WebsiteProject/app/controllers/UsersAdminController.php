<?php

namespace Controllers;

use Core\Controller;
use Models\User;


class UsersAdminController extends Controller
{
    private $user;

    public function __construct()
    {
        parent::__construct();
        $this->user = new User();
    }

    public function renderUsersAdminController()
    {
        view('admin/atea_allUsers.view.php');
    }

    
}