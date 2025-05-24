<?php
// filepath: c:\xampp\htdocs\agrilink-website\src\controllers\FarmerController.php

class FarmerController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function addProduct($farmerId, $productName, $description, $price, $quantityAvailable, $categoryId) {
        $stmt = $this->db->prepare("INSERT INTO products (farmer_id, product_name, description, price, quantity_available, category_id) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issdii", $farmerId, $productName, $description, $price, $quantityAvailable, $categoryId);
        return $stmt->execute();
    }

    public function getProductsByFarmer($farmerId) {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE farmer_id = ?");
        $stmt->bind_param("i", $farmerId);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function updateProduct($productId, $productName, $description, $price, $quantityAvailable, $categoryId) {
        $stmt = $this->db->prepare("UPDATE products SET product_name = ?, description = ?, price = ?, quantity_available = ?, category_id = ? WHERE product_id = ?");
        $stmt->bind_param("ssdiid", $productName, $description, $price, $quantityAvailable, $categoryId, $productId);
        return $stmt->execute();
    }

    public function deleteProduct($productId) {
        $stmt = $this->db->prepare("DELETE FROM products WHERE product_id = ?");
        $stmt->bind_param("i", $productId);
        return $stmt->execute();
    }
}
?>