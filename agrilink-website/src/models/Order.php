<?php
class Order {
    private $order_id;
    private $customer_id;
    private $order_date;
    private $total_amount;
    private $order_status;

    public function __construct($customer_id, $total_amount) {
        $this->customer_id = $customer_id;
        $this->total_amount = $total_amount;
        $this->order_date = date('Y-m-d H:i:s');
        $this->order_status = 'Pending';
    }

    public function getOrderId() {
        return $this->order_id;
    }

    public function getCustomerId() {
        return $this->customer_id;
    }

    public function getOrderDate() {
        return $this->order_date;
    }

    public function getTotalAmount() {
        return $this->total_amount;
    }

    public function getOrderStatus() {
        return $this->order_status;
    }

    public function setOrderStatus($status) {
        $this->order_status = $status;
    }

    public function save() {
        // Code to save the order to the database
    }

    public static function getAllOrders() {
        // Code to retrieve all orders from the database
    }

    public static function getOrderById($order_id) {
        // Code to retrieve a specific order by ID from the database
    }
}
?>