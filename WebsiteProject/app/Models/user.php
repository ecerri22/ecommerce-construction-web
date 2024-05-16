<?php

namespace Models;
use Core\App;

class User {
    protected $user = [];

    private $user_id;
    private $firstName;
    private $lastName;
    private $password;
    private $email;
    private $profileImg;
    private $role;
    private $db;
    
    public function __construct()
    {
        $this->db = App::container()->resolve('Core\Database');
    }

    public function getUserId(){
        return $this->user_id;
    }

    public function setUserId($user_id){
        $this->user_id = $user_id;
        return $this;
    }
    
    public function getFirstName(){
        return $this->firstName;
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName;
        return $this;
    }
    
    public function getLastName(){
        return $this->lastName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
        return $this;
    }
    
    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
        return $this;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }
    
    public function getProfileImage(){
        return $this->profileImg;
    }

    public function setProfileImage($profileImg){
        $this->profileImg = $profileImg;
        return $this;
    }
    
    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
        return $this;
    }

    public function register( $firstName, $lastName, $password, $email){
        $this->setRole(0);
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setEmail($email);
    
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $this->setPassword($hashedPassword);
    
        $createdAt = date('Y-m-d H:i:s');
        
        $sql = "INSERT INTO users (first_name, last_name, password, email, role, created_at) VALUES ('{$this->getFirstName()}', '{$this->getLastName()}', '{$this->getPassword()}', '{$this->getEmail()}', '{$this->getRole()}', '{$createdAt}')";
        $save = $this->db->query($sql);        
    
        return $save ? true : false;
    }

    public function getWishlistProducts(){
        $user_id = $_SESSION['user']['user_id'];
        $query = 'SELECT * FROM wishlists w 
                  INNER JOIN products p ON w.product_id = p.product_id
                  WHERE w.user_id = ?';
        $params = [$user_id];
        
        return App::container()->resolve('Core\Database')->query($query, $params)->get(); 
    }

    public function getShoppingCartProducts(){
        $user_id = $_SESSION['user']['user_id'];
        echo "<script>alert('user_id: $user_id')</script>";
        $query = 'SELECT * FROM carts c 
                  INNER JOIN products p ON c.product_id = p.product_id
                  WHERE c.user_id = ?';
        $params = [$user_id];
        
        return App::container()->resolve('Core\Database')->query($query, $params)->get(); 
    }

    public function updateShoppingCartQuantity($productId, $quantity){
        $user_id = $_SESSION['user']['user_id'];
        $query = "UPDATE carts SET quantity = ? WHERE user_id = ? AND product_id = ?";
        $params = [
            $quantity,
            $user_id,
            $productId
        ];
        return App::container()->resolve('Core\Database')->query($query, $params)->get();
    }
    

    public function addToShoppingCart(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Check if the 'product_id' is set in the POST data
            if (isset($_POST['product_id'])) {
        $user_id = $_SESSION['user']['user_id'];
        $productId=$_POST['product_id'];
        $query="INSERT INTO carts(quantity, user_id, product_id) 
                             VALUES (?, ?, ?)";
        $params=[
            $quantity=1,
            $user_id,
            $productId
        ];   
    }
}
        return App::container()->resolve('Core\Database')->query($query, $params)->get();              

    }

}
    

