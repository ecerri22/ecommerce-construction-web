<?php

namespace Models;

use Core\App;

class Product{
    private $name;
    private $price;
    private $image;
    private $link;
    private $category;
    private $minidescription;
    private static $products = array();
    private $db;


    // public function __construct($name, $price, $image, $link, $minidescription, $category)
    // {
    //     $this->name = $name;
    //     $this->price = $price;
    //     $this->image = $image;
    //     $this->link = $link;
    //     $this->minidescription = $minidescription;
    //     $this->category = $category;
    //     array_push(Product::$products, $this);
    // }

    public function __construct()
    {
        $this->db = App::container()->resolve('Core\Database');
    }

    public function getAllProducts(){
        return App::container()->resolve('Core\Database')->query('SELECT * FROM
        products')->get();
    }

    public function display()
    {
        echo '<div class="product-card">';
        echo  '     <img class="product-img" src="'.$this->image.'" alt="Front of men\'s Basic Tee in black.">';
        echo  '     <div class="product-description-container">';
        echo  '       <div class="description-box">';
        echo  '         <h3 style = "display : inline-block; margin-bottom: .4rem; ">';
        echo  '            <a href="/#" class = "product-name">'.$this->name.'</a>';
        echo  '         </h3>';
        echo  '         <button class="compare-btn" onclick ="makesticky(this)">Hold</button>';
        echo  '         <p class="product-code">'.$this->minidescription.'</p>';
        echo  '         <p class="product-price">$'.$this->price.'</p>';
        echo  '       </div>';
        echo  '       <div class="wishlist-btn">';
        echo  '         <button class="add-to-cart">Add to cart</button>';
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

    
}


?>