<?php

namespace Controllers;

use Core\Controller;
use Models\User;

class UserController extends Controller{
    private $user;

    public function __construct() {
        parent::__construct(); 
        $this->user = new User();
        $this->view('user/daniela_signup.view.php');
    }

    public function signUp() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $firstName = $_POST['fname'] ?? '';
            $lastName = $_POST['lname'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['pass'] ?? '';

            if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
                echo "Please fill in all fields.";
                return;
            }

            // if ($this->user->register('', $firstName, $lastName, $password, $email)) {
            //     echo "Sign up successful!";
            // } else {
            //     echo "Error occurred while signing up. Please try again later.";
            // }
        }
    }
}

