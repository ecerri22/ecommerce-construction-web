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
        return App::container()->resolve('Core\Database')->query('SELECT * FROM
        users')->get();
    }

    public function createProduct($name, $description, $price, $category_id, $image, $material, $unit_of_measure, $brand, $stock, $buy_price, $bought_at) {
        $errors = [];
        $message = [];

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
        $this->setBoughtAt($bought_at);
        $created_at = date('Y-m-d H:i:s');

        if (!empty($_FILES["image_name"]["name"])) {
            $fileName = basename($_FILES["image_name"]["name"]);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            
            $allowedTypes = array('jpg', 'png', 'jpeg', 'gif');
    
            if (in_array($fileType, $allowedTypes)) {
                $image = $_FILES["image_name"]['tmp_name'];
                
                $destination = "image/" . $fileName;
                
                move_uploaded_file($image, $destination);
                
                $sql = "INSERT INTO products(name, description, price, category_id, image, material, unit_of_measure, brand, stock, buy_price, bought_at, created_at) VALUES('{$this->getName()}','{$this->getDescription()}', '{$this->getPrice()}', '{$category_id}', '{$destination}', '{$this->getMaterial()}', '{$this->getUnitOfMeasure()}', '{$this->getBrand()}', '{$this->getStock()}', '{$this->getBuyPrice()}', '{$this->getBoughtAt()}', '{$created_at}')";
                $addedProd = $this->db->query($sql);
            }

            return $addedProd;
          }
    }
}