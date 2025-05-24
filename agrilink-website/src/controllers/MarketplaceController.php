<?php
// filepath: /agrilink-website/agrilink-website/src/controllers/MarketplaceController.php

class MarketplaceController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getProducts() {
        $query = "SELECT * FROM products WHERE quantity_available > 0";
        $result = $this->db->query($query);

        if ($result->num_rows > 0) {
            $products = [];
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
            return $products;
        } else {
            return [];
        }
    }

    public function getProductById($productId) {
        $query = "SELECT * FROM products WHERE product_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $productId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }
}
?>