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
    private $isincart;

    public function __construct($id="",$name="", $price="", $image="", $link="", $minidescription="", $category="")
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->link = $link;
        $this->minidescription = $minidescription;
        $this->category = $category;
        $this->isincart = false;
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
            if($this->isincart)
            {
                echo  '         <button class="add-to-cart" style = " background-color : blue " onclick="alert(\'Already in cart\')">Already In Cart</button>';
            }
            else
            echo  '         <button class="add-to-cart" onclick="addtocart('.@$_SESSION['user']['user_id'].','.$this->id.',this);">Add to Cart</button>';
        }
        else
        {

            echo  '         <button class="add-to-cart" onclick="alert(\'Please login to add to wishlist\')">Add to Cart</button>';
        }
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
            $product = new Product($row['product_id'],$row['name'], $row['price'], $row['product_image'],"/productDetails?productID=".$row['product_id'], $row['description'], $row['category_name']);
            if(in_array($row['product_id'], $products_in_cart))
            {
                $product->isincart = true;
            }
            $products[] = $product;
        }



        return $products;



         
    }
    public function deleteProduct()
    {
        $product = App::container()->resolve('Core\Database')->query('select * from products where product_id = :product_id', ['product_id' => $_POST['product_id']])->findOrFail();

        $sql = "DELETE FROM products WHERE product_id = :product_id";
        return App::container()->resolve('Core\Database')->query($sql, ['product_id' => $_POST['product_id']]);

        unlink("image/" . $product['image_name']);

}

}
?>