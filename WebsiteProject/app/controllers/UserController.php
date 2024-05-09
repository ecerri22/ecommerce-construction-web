<?php

namespace Controllers;

use Core\Controller;
use Models\User;


class UserController extends Controller
{
    private $user;

    public function __construct()
    {
        parent::__construct();
        $this->user = new User();
    }

    public function renderSignup()
    {
        view('user/daniela_signup.view.php');
    }

    public function signUp()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $firstName = $_POST['fname'] ?? '';
            $lastName = $_POST['lname'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['pass'] ?? '';

            if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
                echo "Please fill in all fields.";
                return;
            } else {
                $result = $this->user->register($firstName, $lastName, $password, $email);

                if ($result) {
                    echo "User registered successfully.";
                } else {
                    echo "Failed to register user.";
                }
            }
        }
    }

    public function renderWishlist(){
        view('user/rosela_wishlist.view.php');
    }

    public function renderShoppingCart(){
        view('user/rosela_shoppingCart.view.php');
    }

    public function renderCheckout(){
        view('user/rosela_checkout.view.php');
    }
}
