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
    public function getUser()
    {
        return $this->user;
    }

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
        view('user/rosela_wishlist.view.php', [
            'allWishlistProducts'=> $this->user->getWishlistProducts()
            
        ]);
        $allWishlistProducts= $this->user->getWishlistProducts();
        foreach($allWishlistProducts as $wishlistProduct){
            $this->user->addToShoppingCart();
            $this->user->deleteFromWishlist();
        }
       
    }

    public function renderShoppingCart(){
        view('user/rosela_shoppingCart.view.php',[
            'allShoppingCartProducts'=>$this->user->getShoppingCartProducts()
        ]);
        $allShoppingCartProducts= $this->user->getShoppingCartProducts();
        foreach($allShoppingCartProducts as $shoppingCartProduct){
            $this->user->deleteFromShoppingCart();
        }
    }

    
    public function renderCheckout(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Check if the 'products' field is set in the POST data
            if (isset($_POST['products'])) {
                // Decode the JSON string to get the products array
                $products = json_decode($_POST['products'], true);
        
                // Loop through the products array
                foreach ($products as $productId => $quantity) {
                    // Update shopping cart quantity for each product
                    $this->user->updateShoppingCartQuantity($productId, $quantity);
                }
            }
    
            view('user/rosela_checkout.view.php', [
                'allCheckoutProducts' => $this->user->getShoppingCartProducts()
            ]);
        }
        else
        echo'ARRAY NULL';
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

    public function logIn()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['pass'];
                   
            if (!$this->auth->validate($email, $password)) {
                $this->renderLogin();
                
            } else {
                if ($this->auth->attempt($email, $password)) {
                    redirect('/allProducts'); 
                } else {
                    Session::flash('errors', 'Invalid email or password.');
                    // return redirect('/login');
                    $this->renderLogin();

                }
            }
        }        
    }

    

}
