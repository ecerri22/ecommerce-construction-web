<?php

namespace Models;

use Core\App;

class Admin
{
    private $db;
    private $name;
    private $description;
    private $product_image;
    private $price;
    private $material;
    private $unit_of_measure;
    private $brand;
    private $stock;
    private $created_at;
    private $updated_at;
    private $buy_price;
    private $bought_at;
    private $category_id;

    public function __construct()
    {
        $this->db = App::container()->resolve('Core\Database');
    }

    
    // Getter and Setter for $name
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }

    public function getDescription() {
        return $this->description;
    }
    public function setDescription($description) {
        $this->description = $description;
    }

    // Getter and Setter for $product_image
    public function getProductImage() {
        return $this->product_image;
    }
    public function setProductImage($product_image) {
        $this->product_image = $product_image;
    }

    // Getter and Setter for $price
    public function getPrice() {
        return $this->price;
    }
    public function setPrice($price) {
        $this->price = $price;
    }

    // Getter and Setter for $material
    public function getMaterial() {
        return $this->material;
    }
    public function setMaterial($material) {
        $this->material = $material;
    }

    // Getter and Setter for $unit_of_measure
    public function getUnitOfMeasure() {
        return $this->unit_of_measure;
    }
    public function setUnitOfMeasure($unit_of_measure) {
        $this->unit_of_measure = $unit_of_measure;
    }

    // Getter and Setter for $brand
    public function getBrand() {
        return $this->brand;
    }
    public function setBrand($brand) {
        $this->brand = $brand;
    }

    // Getter and Setter for $stock
    public function getStock() {
        return $this->stock;
    }
    public function setStock($stock) {
        $this->stock = $stock;
    }

    // Getter and Setter for $updated_at
    public function getUpdatedAt() {
        return $this->updated_at;
    }
    public function setUpdatedAt($updated_at) {
        $this->updated_at = $updated_at;
    }

    // Getter and Setter for $buy_price
    public function getBuyPrice() {
        return $this->buy_price;
    }
    public function setBuyPrice($buy_price) {
        $this->buy_price = $buy_price;
    }

    // Getter and Setter for $bought_at
    public function getBoughtAt() {
        return $this->bought_at;
    }
    public function setBoughtAt($bought_at) {
        $this->bought_at = $bought_at;
    }

    // Getter and Setter for $category_id
    public function getCategoryId() {
        return $this->category_id;
    }
    public function setCategoryId($category_id) {
        $this->category_id = $category_id;
    }

    public function getallusers() 
    {
        return $this->db->query('SELECT * FROM
        users')->get();
    }

    public function getallproducts() 
    {
        return $this->db->query('SELECT * FROM products Join categories ON products.category_id = categories.category_id')->get();
    }

    public function createProduct($name, $description, $image, $category_id, $material, $unit_of_measure, $brand, $price, $stock, $buy_price) {
        $this->setName($name);
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setCategoryId($category_id);
        $this->setProductImage($image);
        $this->setMaterial($material);
        $this->setUnitOfMeasure($unit_of_measure);
        $this->setBrand($brand);
        $this->setStock($stock);
        $this->setBuyPrice($buy_price);
        $created_at = date('Y-m-d H:i:s');

        if (!empty($_FILES["image_name"]["name"])) {
            $fileName = basename($_FILES["image_name"]["name"]);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            
            $allowedTypes = array('jpg', 'png', 'jpeg', 'gif');
    
            if (in_array($fileType, $allowedTypes)) {
                $image = $_FILES["image_name"]['tmp_name'];
                
                $destination = "image/" . $fileName;
                
                move_uploaded_file($image, $destination);
                
                $sql = "INSERT INTO products(name, description, product_image, category_id, material, unit_of_measure, brand, price, stock, buy_price, created_at) 
                VALUES('{$this->getName()}','{$this->getDescription()}', '{$this->getProductImage()}','{$this->getCategoryId()}', '{$this->getMaterial()}', '{$this->getUnitOfMeasure()}', '{$this->getBrand()}', '{$this->getPrice()}','{$this->getStock()}','{$this->getBuyPrice()}','{$created_at}')";
                $addedProd = $this->db->query($sql);
            }

            if ($addedProd) { 
                return true;
            } else {
                return false; 
            }
          }
    }

    public function deleteProduct()
    {
        $product = App::container()->resolve('Core\Database')->query('SELECT * from products where product_id = :product_id', ['product_id' => $_POST['product_id']])->findOrFail();

        $sql = "DELETE FROM products WHERE product_id = :product_id";
        return App::container()->resolve('Core\Database')->query($sql, ['product_id' => $_POST['product_id']]);

        unlink("image/" . $product['image_name']);
    }

    public function getFilteredProducts($search)
    {
        if (!empty($search)) {
            $sql = "SELECT * FROM products Join categories ON products.category_id = categories.category_id WHERE name LIKE ?";
            $params = ["%" . $search . "%"];
            return $this->db->query($sql, $params)->get();
        } else {
            return $this->getallproducts(); // This calls the existing method to fetch all products
        }
    }

    public function getProductData($product_id){
        $query = "SELECT * FROM products WHERE product_id = :product_id";
        return $this->db->query($query, [':product_id' => $product_id])->find();
    }

   
    public function updateProduct($product_id, $name, $description, $image, $category_id, $material, $unit_of_measure, $brand, $price, $stock, $buy_price)
    {
        $this->setName($name);
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setCategoryId($category_id);
        $this->setProductImage($image);
        $this->setMaterial($material);
        $this->setUnitOfMeasure($unit_of_measure);
        $this->setBrand($brand);
        $this->setStock($stock);
        $this->setBuyPrice($buy_price);

        $updated_at = date('Y-m-d H:i:s');

        if (!empty($_FILES["prod-img"]["name"])) {
            $fileName = basename($_FILES["prod-img"]["name"]);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            $allowedTypes = array('jpg', 'png', 'jpeg', 'gif');

            if (in_array($fileType, $allowedTypes)) {
                $image = $_FILES["prod-img"]['tmp_name'];
                $destination = "image/" . $fileName;

                move_uploaded_file($image, $destination);

                $sql = "UPDATE products SET 
                    name = '{$this->getName()}', 
                    description = '{$this->getDescription()}', 
                    product_image = '{$destination}', 
                    category_id = '{$this->getCategoryId()}', 
                    material = '{$this->getMaterial()}', 
                    unit_of_measure = '{$this->getUnitOfMeasure()}', 
                    brand = '{$this->getBrand()}', 
                    price = '{$this->getPrice()}', 
                    stock = '{$this->getStock()}', 
                    buy_price = '{$this->getBuyPrice()}', 
                    updated_at = '{$updated_at}' 
                WHERE product_id = '{$product_id}'";

                $updatedProd = $this->db->query($sql);
            }
        } else {
            $sql = "UPDATE products SET 
                        name = '{$this->getName()}', 
                        description = '{$this->getDescription()}', 
                        category_id = '{$this->getCategoryId()}', 
                        material = '{$this->getMaterial()}', 
                        unit_of_measure = '{$this->getUnitOfMeasure()}', 
                        brand = '{$this->getBrand()}', 
                        price = '{$this->getPrice()}', 
                        stock = '{$this->getStock()}', 
                        buy_price = '{$this->getBuyPrice()}', 
                        updated_at = '{$updated_at}' 
                    WHERE product_id = '{$product_id}'";

            $updatedProd = $this->db->query($sql);
        }

        if ($updatedProd) {
            return true;
        } else {
            return false;
        }
    }


}
