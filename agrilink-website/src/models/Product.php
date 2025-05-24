<?php
class Product {
    private $product_id;
    private $farmer_id;
    private $product_name;
    private $description;
    private $price;
    private $quantity_available;
    private $category_id;
    private $created_at;
    private $updated_at;

    public function __construct($product_id, $farmer_id, $product_name, $description, $price, $quantity_available, $category_id) {
        $this->product_id = $product_id;
        $this->farmer_id = $farmer_id;
        $this->product_name = $product_name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity_available = $quantity_available;
        $this->category_id = $category_id;
        $this->created_at = date("Y-m-d H:i:s");
        $this->updated_at = date("Y-m-d H:i:s");
    }

    public function getProductId() {
        return $this->product_id;
    }

    public function getFarmerId() {
        return $this->farmer_id;
    }

    public function getProductName() {
        return $this->product_name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantityAvailable() {
        return $this->quantity_available;
    }

    public function getCategoryId() {
        return $this->category_id;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function getUpdatedAt() {
        return $this->updated_at;
    }

    public function updateProduct($product_name, $description, $price, $quantity_available, $category_id) {
        $this->product_name = $product_name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity_available = $quantity_available;
        $this->category_id = $category_id;
        $this->updated_at = date("Y-m-d H:i:s");
    }
}
?>