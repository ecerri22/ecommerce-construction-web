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
    public static $products = array();

    public function __construct($id,$name, $price, $image, $link, $minidescription, $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->link = $link;
        $this->minidescription = $minidescription;
        $this->category = $category;
        array_push(Product::$products, $this);
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
        if(isset($_SESSION['user']))
        {
            echo  '         <button class="add-to-cart" onclick="addtocart('.@$_SESSION['user']['user_id'].','.$this->id.');">Add to Cart</button>';
        }
        else
        {
            echo  '         <button class="add-to-cart" onclick="alert(\'Please login to add to wishlist\')">Add to Cart</button>';
        }
        echo  '       </div>';
        echo  '     </div>';
        echo  ' </div>';
    }

    public static function getProductsArray()
    {
        return Product::$products;
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

        // Iterate through the result and return an array of product objects
        $products = array();
        foreach ($result as $row) {
            $product = new Product($row['product_id'],$row['name'], $row['price'], $row['product_image'],"/productDetails?productID=".$row['product_id'], $row['description'], $row['category_name']);
            $products[] = $product;
        }
        return $products;
         
    }

}


?>