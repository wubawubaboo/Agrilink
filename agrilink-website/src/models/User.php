<?php
class User {
    private $connection;

    public function __construct($db) {
        $this->connection = $db;
    }

    public function register($username, $password, $email) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->connection->prepare("INSERT INTO users (username, password_hash, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $hashedPassword, $email);
        return $stmt->execute();
    }

    public function login($username, $password) {
        $hashedPassword = '';
        $stmt = $this->connection->prepare("SELECT password_hash FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($hashedPassword);
            $stmt->fetch();
            return password_verify($password, $hashedPassword);
        }
        return false;
    }

    public function getUserById($userId) {
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE user_id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function updateUser($userId, $username, $email) {
        $stmt = $this->connection->prepare("UPDATE users SET username = ?, email = ? WHERE user_id = ?");
        $stmt->bind_param("ssi", $username, $email, $userId);
        return $stmt->execute();
    }

    public function deleteUser($userId) {
        $stmt = $this->connection->prepare("DELETE FROM users WHERE user_id = ?");
        $stmt->bind_param("i", $userId);
        return $stmt->execute();
    }
}
?>