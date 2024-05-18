<?php

namespace Controllers;

use Core\Authenticator;
use Core\Controller;
use Core\Session;
use Models\User;

class UserController extends Controller
{
    private $user;
    private $auth;

    public function __construct()
    {
        parent::__construct();
        $this->user = new User();
        $this->auth = new Authenticator();
    }

    public function renderSignup()
    {
        view('user/daniela_signup.view.php');
    }

    public function renderLogin()
    {
        return view('user/daniela_login.view.php', [
            'errors' => $this->auth->errors()
        ]);
    }

    public function renderHelpAdvice()
    {
        view('user/daniela_helpadvice.view.php');
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

    public function renderMyAccount()
    {
        view('user/irvi_myAccount.view.php');
    }

    public function renderMyOrders()
    {
        view('user/irvi_myorders.view.php');
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

    // public function logIn()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $email = $_POST['email'];
    //         $password = $_POST['pass'];
                   
    //         if (!$this->auth->validate($email, $password)) {
    //             $this->renderLogin();
    //         } else {
    //             if ($this->auth->attempt($email, $password)) {
    //                 redirect('/allProducts'); 
    //             } else {
    //                 Session::flash('errors', 'Invalid email or password.');
    //                 // return redirect('/login');
    //                 $this->renderLogin();

    //             }
    //         }
    //     }        
    // }


    public function logIn()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['pass'];
                
            if (!$this->auth->validate($email, $password)) {
                $this->renderLogin();
            } else {
                if ($this->auth->attempt($email, $password)) {
                    if ($_SESSION['user']['role'] === 1) {
                        redirect('/dashboard');
                    } else {
                        redirect('/allProducts');
                    }
                } else {
                    Session::flash('errors', 'Invalid email or password.');
                    $this->renderLogin();
                }
            }
        }        
    }

    public function logOut(){
        $this->auth->logout();
        redirect('/');
    }


}
