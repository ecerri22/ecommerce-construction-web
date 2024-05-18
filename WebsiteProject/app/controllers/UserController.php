<<<<<<< Updated upstream
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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->user->addToShoppingCart();
            $this->user->deleteFromWishlist();
        }
        
        view('user/rosela_wishlist.view.php', [
            'allWishlistProducts' => $this->user->getWishlistProducts()
        ]);
       
    }

    public function renderShoppingCart(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->user->deleteFromShoppingCart();
        }

        view('user/rosela_shoppingCart.view.php', [
            'allShoppingCartProducts' => $this->user->getShoppingCartProducts()
        ]);
    }

    public function renderCheckout(){
        view('user/rosela_checkout.view.php', [
            'allCheckoutProducts' => $this->user->getShoppingCartProducts(),
            'userAddress'=>$this->user->getUserAddress()
        ]);
    }

    public function createOrder()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $addressData = [
                'country' => $_POST['country'] ?? "",
                'city' => $_POST['city'] ?? "",
                'street' => $_POST['street'] ?? "",
                'phone' => $_POST['phone'] ?? "",
                'zip_code' => $_POST['zip_code'] ?? ""
            ];

            if (!empty($addressData['country']) || !empty($addressData['city']) || !empty($addressData['street']) || !empty($addressData['phone']) || !empty($addressData['zip_code'])) {
                $this->user->updateUserAddress($addressData);
            }

            if (isset($_POST['product_ids'])) {
                $products = json_decode($_POST['product_ids'], true);

                foreach ($products as $productId => $quantity) {
                    $this->user->updateShoppingCartQuantity($productId, $quantity);
                }

                $this->user->createOrder();
            }

            redirect('/myOrders');
        }
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
                //daniela additions 
                    if (strpos($email, 'admin.com') !== false) {
                    // redirect('/admin/dashboard');
                    redirect('/allProductsAdmin');
                    } else {
                    //  redirect('/my-account');
                    // $this->renderMyAccount();
                    redirect('/allProducts');
                    }
                    //ending additions here
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
=======
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
                $this->user->register($firstName, $lastName, $password, $email);
                redirect('/allProducts');
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
>>>>>>> Stashed changes
