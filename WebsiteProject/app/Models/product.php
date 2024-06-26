<?php

namespace Models;
use Core\App;

class Product{
    public $id;
    public $name;
    public $price;
    public $image;
    public $link;
    public $category;
    public $minidescription;
    public $isincart;
    public $user_id;
    public $user;

    public function __construct($id="",$name="", $price="", $image="", $link="", $minidescription="", $category="",$user_id=false,$isincart=false,$user=(-1))
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->link = $link;
        $this->minidescription = $minidescription;
        $this->category = $category;
        $this->isincart = $isincart;
        $this->user_id = $user_id;
        $this->user = $user;
    }
    public function display()
    {
        echo '<div class="product-card">';
        echo  '     <img class="product-img" src="'.$this->image.'" alt="Front of men\'s Basic Tee in black.">';
        echo  '     <div class="product-description-container">';
        echo  '       <div class="description-box">';
        echo  '         <h3 style = "display : inline-block; margin-bottom: .4rem; ">';
        echo  '            <a href="'.$this->link.'" class = "product-name">'.$this->name.'</a>';
        echo  '         </h3>';
        echo  '         <button class="compare-btn" onclick ="makesticky(this)">Hold</button>';
        echo  '         <p class="product-code">'.$this->minidescription.'</p>';
        echo  '         <p class="product-price">$'.$this->price.'</p>';
        echo  '       </div>';
        echo  '       <div class="wishlist-btn">';
        if($this->user_id)
        {
            if($this->isincart)
            {
                echo  '         <button class="add-to-cart" style = " background-color : blue " onclick="alert(\'Already in cart\')" id = "product_'.$this->id.'">Already In Cart</button>';
            }
            else
            echo  '         <button class="add-to-cart" onclick="addtocart('.$this->user.','.$this->id.',this,'.false.');">Add to Cart</button>';
        }
        else
        {

            echo  '         <button class="add-to-cart" onclick="alert(\'Please login to add to wishlist\')">Add to Cart</button>';
        }
        echo '<input type="hidden" name="product_id" value="'.$this->isincart.'">';
        echo  '       </div>';
        echo  '     </div>';
        echo  ' </div>';
    }
    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getMinidescription()
    {
        return $this->minidescription;
    }

    public static function getAllproducts()
    {
        $result = App::container()->resolve('Core\Database')->query('SELECT * FROM products
        JOIN categories ON categories.category_id = products.category_id')->get(); 
        
        $products_in_cart = array();

        if(isset($_SESSION['user']))
        {
            $user_id = $_SESSION['user']['user_id'];
            $query = 'SELECT * FROM carts WHERE user_id = ?';
            $params = [$user_id];
            foreach(App::container()->resolve('Core\Database')->query($query, $params)->get() as $row)
            {
                $products_in_cart[] = $row['product_id'];
            }
        }

        // Iterate through the result and return an array of product objects
        $products = array();
        foreach ($result as $row) {
            $product = new Product($row['product_id'],$row['name'], $row['price'], $row['product_image'],"/productDetails?productID=".$row['product_id'], $row['description'], $row['category_name'],false,false,@$_SESSION['user']['user_id']);
            if(in_array($row['product_id'], $products_in_cart))
            {
                $product->isincart = true;
            }
            if(isset($_SESSION['user']))
            {
                $product->user_id = true;
            }
            $products[] = $product;
        }

        return $products;
    }

    public static function getProductFromWishList($productId,$userId){
        return App::container()->resolve('Core\Database')->query('SELECT * from wishlists where product_id = :productId AND  user_id = :userId',['productId'=> $productId,'userId'=> $userId])->get();
    }

    public static function getProductFromShoppingCart($productId,$userId){
        return App::container()->resolve('Core\Database')->query('SELECT * from carts where product_id = :productId AND  user_id = :userId',['productId'=> $productId,'userId'=> $userId])->get();
    }

    public static function updateProductFromShoppingCart($userId,$productId,$quantity){
        $query = "UPDATE carts SET quantity = ? WHERE user_id=? AND product_id=?";
        $params = [$quantity,$userId,$productId];
        return App::container()->resolve("Core\Database")->query($query,$params);
    }

    public static function addProductToShoppingCart($userId,$productId,$quantity){
        $sql = "INSERT INTO carts(`user_id`,`product_id','quantity`) 
        VALUES($userId,$productId,$quantity)";
        $addedProd = App::container()->resolve('Core\Database')->query($sql);
    

        if ($addedProd) { 
            return true;
        } else {
            return false; 
        }
    }

    public static function addProductToWishlist($productId,$userId){
        $sql = "INSERT INTO wishlists(`product_id`,`user_id`) 
        VALUES($productId,$userId)";
        $addedProd = App::container()->resolve('Core\Database')->query($sql);
    
        if ($addedProd) { 
            return true;
        } else {
            return false; 
        }
    }

    public static function deleteProductFromWishlist($productId,$userId){
        $sql = 'DELETE FROM wishlists WHERE user_id = ? AND product_id=?';
        $params =[$userId,$productId];
        $removedProd = App::container()->resolve('Core\Database')->query($sql,$params);
        if ($removedProd) { 
            return true;
        } else {
            return false; 
        }
    }

    public static function getProduct($productId){
        return  App::container()->resolve('Core\Database')->query('SELECT * from products where product_id = :product_id', ['product_id' => $productId])->findOrFail();
    }

    public static function getProductCategory($productId){
        return App::container()->resolve('Core\Database')->query('SELECT * from categories where category_id = :id',['id' => Product::getProduct($productId)['category_id']] )->findOrFail();
    }

    public static function getProductReviews($productId){
        return App::container()->resolve('Core\Database')->query('SELECT * from reviews where product_id = :product_id', ['product_id' => $productId] )->get();
    }

    public static function getReview($productId,$userId){
        return App::container()->resolve('Core\Database')->query('SELECT * from reviews where product_id = :product_id AND user_id = :user_id', ['product_id' => $productId,'user_id' => $userId] )->get();
    }

    public static function getOrderInfo($orderId){        
        return App::container()->resolve('Core\Database')->query('SELECT * from orderInfo where order_id = :orderid',['orderid'=>$orderId])->get();
    }

    public static function addReview($review_date,$review_text,$stars,$userId,$productId){
        $sql = "INSERT INTO reviews(`review_date`,`review_text`, `stars`, `user_id`, `product_id`) 
                VALUES(?,?,?,?,?)";
                $params = [$review_date,$review_text,$stars,$userId,$productId];
                $addedProd = App::container()->resolve('Core\Database')->query($sql,$params);

            if ($addedProd) { 
                return true;
            } else {
                return false; 
            }
    }

    

}
?>