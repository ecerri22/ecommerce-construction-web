<?php

namespace Models;

use Core\App;
use PDOException;

class User
{
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

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getProfileImage()
    {
        return $this->profileImg;
    }

    public function setProfileImage($profileImg)
    {
        $this->profileImg = $profileImg;
        return $this;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    public function register($firstName, $lastName, $password, $email)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setEmail($email);

        // Check if the email contains "admin" after the '@' sign
        $emailParts = explode('@', $email);
        if (isset($emailParts[1]) && strpos($emailParts[1], 'admin') !== false) {
            $this->setRole(1);
        } else {
            $this->setRole(0);
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $this->setPassword($hashedPassword);

        $createdAt = date('Y-m-d H:i:s');

        $sql = "INSERT INTO users (first_name, last_name, password, email, role, created_at) VALUES ('{$this->getFirstName()}', '{$this->getLastName()}', '{$this->getPassword()}', '{$this->getEmail()}', '{$this->getRole()}', '{$createdAt}')";
        $save = $this->db->query($sql);

        return $save ? true : false;
    }

    public function createOrder(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            if(@is_null($_POST['product_ids'])){
                return;
            }

            $productIds = json_decode($_POST['product_ids'],true);
            $user_id = $_SESSION['user']['user_id'];

            $orderid = rand(100,999999);
            $createdAt = date('Y-m-d H:i:s');
            $updatedAt = date('Y-m-d H:i:s');
            $query = "INSERT INTO orders (order_id, created_at, updated_at, status ,user_id) VALUES (?, ?, ?, ?, ?)";
            $params = [$orderid, $createdAt, $updatedAt, "DELIVERING" ,$user_id];
            
            try {
                App::container()->resolve('Core\Database')->query($query, $params); 
            } catch (PDOException $e) {
                echo "Error: Duplicate entry";
                return;
            }

            $where ="";

            foreach($productIds as $k=>$v){
                $where .= "product_id = ".$k." OR ";
            }

            $query = "SELECT product_id,stock FROM products WHERE ".substr($where,0,-3);
            
            $products = App::container()->resolve('Core\Database')->query($query)->get();

            $productsandqueantities = array();

            foreach($products as $product){
                $productsandqueantities[$product['product_id']] = $product['stock'] - $productIds[$product['product_id']];
            }

            $query = "INSERT INTO orderinfo (order_id, product_id, quantity) VALUES";

            foreach($productIds as $k=>$v){
                try {
                    $query .= " (".$orderid.",".$k.",".$v."),";
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
            }

            $query = substr($query,0,-1);
            App::container()->resolve('Core\Database')->query($query);

            $query = "UPDATE products SET stock = CASE";

            foreach($productsandqueantities as $k=>$v){
                $query .= " WHEN product_id = ".$k." THEN ".$v;
            }

            $query .= " END WHERE product_id IN (".implode(",",array_keys($productsandqueantities)).")";
            App::container()->resolve('Core\Database')->query($query);
            
            $query = "DELETE FROM carts WHERE user_id = ?";
            $params = [$user_id];
            App::container()->resolve('Core\Database')->query($query, $params);
        }
        else
        {
            header("Location: /error");
        }
    }

    public function getWishlistProducts(){
        $user_id = $_SESSION['user']['user_id'];
        $query = 'SELECT * FROM wishlists w 
                  INNER JOIN products p ON w.product_id = p.product_id
                  WHERE w.user_id = ?';
        $params = [$user_id];
        
        return $this->db->query($query, $params)->get(); 
    }

    public function deleteFromWishlist(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Check if the 'product_id' is set in the POST data
            if (isset($_POST['product_id'])) {
                $user_id = $_SESSION['user']['user_id'];
                $productId = $_POST['product_id'];
    
                // SQL query to delete from wishlists table
                $query = "DELETE FROM wishlists WHERE user_id = ? AND product_id = ?";
                $params = [$user_id, $productId];
    
                // Execute the query
                return App::container()->resolve('Core\Database')->query($query, $params)->get(); 
            }
        }
        else
        {
            header("Location: /error");
        }
    }

    public function getShoppingCartProducts(){
        $user_id = $_SESSION['user']['user_id'];
        $query = 'SELECT * FROM carts c 
                  INNER JOIN products p ON c.product_id = p.product_id
                  WHERE c.user_id = ?';
        $params = [$user_id];
        
        return App::container()->resolve('Core\Database')->query($query, $params)->get(); 
    }
   
    public function addToShoppingCart(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['product_id'])) {
                $user_id = $_SESSION['user']['user_id'];
                $productId = $_POST['product_id'];
                
                $query = "INSERT INTO carts(quantity, user_id, product_id) VALUES (?, ?, ?)";
                $params = [
                    1, 
                    $user_id,
                    $productId
                ];   
                
                return App::container()->resolve('Core\Database')->query($query, $params)->get();
            }
        }
        else
        {
            header("Location: /error");
        }
    }

    public static function updateUserPhoto($userId,$path){
        $query = "UPDATE users SET profile_image = ? WHERE user_id = ?";
        $params = [$path,$userId];
        return App::container()->resolve("Core\Database")->query($query, $params)->get();
        
    }

    public static function updateUser($userId,$firstName,$lastName){
        $query = "UPDATE users SET first_name= ?, last_Name = ? WHERE user_id = ? ";
        $params = [ $firstName, $lastName,$userId];
        return App::container()->resolve("Core\Database")->query($query, $params)->get();
    }

    public static function updateAddress($userId,$street,$city,$country,$state,$phone,$zip_code){
        $query = "UPDATE addresses SET street= ?, city = ?,country=?,`state`=?, phone=?, zip_code=? WHERE user_id = ? ";
        $params = [ $street, $city,$country, $state, $phone, $zip_code,$userId];
        return App::container()->resolve("Core\Database")->query($query, $params)->get();
    }

    public function updateUserAddress($addressData)
    {
        $user_id = $_SESSION['user']['user_id'];
        $query = "UPDATE addresses SET street = ?, city = ?, country = ?, phone = ?, zip_code = ? WHERE user_id = ?";
        $params = [
            $addressData['street'],
            $addressData['city'],
            $addressData['country'],
            $addressData['phone'],
            $addressData['zip_code'],
            $user_id
        ];

        $this->db->query($query, $params);
    }

    public function updateShoppingCartQuantity($productId, $quantity){
        $user_id = $_SESSION['user']['user_id'];
        $query = "UPDATE carts SET quantity = ? WHERE user_id = ? AND product_id = ?";
        $params = [
            $quantity,
            $user_id,
            $productId
        ];

        App::container()->resolve('Core\Database')->query($query, $params);
    }

    public function deleteFromShoppingCart(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['product_id'])) {
                $user_id = $_SESSION['user']['user_id'];
                $productId = $_POST['product_id'];
    
                $query = "DELETE FROM carts WHERE user_id = ? AND product_id = ?";
                $params = [$user_id, $productId];
    
                return App::container()->resolve('Core\Database')->query($query, $params)->get(); 
            }
        }
        else
        {
            header("Location: /error");
        }
    }

    public static function getUser($user_id){
          return App::container()->resolve('Core\Database')->query('SELECT * from users where user_id = :userid', ['userid' => $user_id])->findOrFail();

    }

    public static function getOrders($user_id){
        
        return App::container()->resolve('Core\Database')->query('SELECT * from orders where user_id = :userid ORDER BY created_at DESC', ['userid' => $user_id])->get();

    }
    
    public function getUserAddress(){
        $user_id = $_SESSION['user']['user_id'];
        $query = 'SELECT * FROM addresses WHERE user_id = ?';
        $params = [$user_id];
        
        $result = App::container()->resolve('Core\Database')->query($query, $params)->find(); 
        return $result; 
    }

    public static function addAddress($userID, $street, $city, $country, $state, $phoneNumber, $zip){
        $sql = "INSERT INTO addresses (street, city, country, `state`, phone, zip_code, user_id) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $params = [$street, $city, $country, $state, $phoneNumber, $zip, $userID];
        $addedProd = App::container()->resolve('Core\Database')->query($sql, $params);
    }
    
}

?>