<?php

namespace Models;

use Core\App;

class Order {
    private $orderId;
    private $createdAt;
    private $updatedAt;
    private $status;
    private $userId;
    private $productId;
    private $quantity;
    private static $orders = array();
    private $db;

    public function __construct()
    {
        $this->db = App::container()->resolve('Core\Database');
    }



    public function getOrderId() {
        return $this->orderId;
    }

    public function setOrderId($orderId) {
        $this->orderId = $orderId;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function setProductId($productId) {
        $this->productId = $productId;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public static function getOrdersArray()
    {
        return Order::$orders;
    }

    public function updateOrderStatus($status, $orderId) {
        $query = "UPDATE orders SET status = :status WHERE order_id = :order_id";
        // dd($_POST);
        $this->db->query($query, ['status' => $status, 'order_id' => $orderId]);
    }

    public function getAllOrders(){
        $result = 'SELECT orders.*, orderinfo.*
        FROM `orders`
        JOIN `orderinfo` ON orders.order_id = orderinfo.order_id
        GROUP BY orders.order_id;';

        return $this->db->query($result)->get();
    }   
}
?>
