<?php
session_start();
require_once '../src/db/db_connection.php';
require_once '../src/controllers/AdminController.php';

$adminController = new AdminController();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

$users = $adminController->getAllUsers();
$products = $adminController->getAllProducts();
$orders = $adminController->getAllOrders();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <?php include '../src/views/partials/header.php'; ?>

    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="dashboard">
            <h2>Manage Users</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user['user_id']; ?></td>
                            <td><?php echo $user['username']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td>
                                <a href="edit_user.php?id=<?php echo $user['user_id']; ?>">Edit</a>
                                <a href="delete_user.php?id=<?php echo $user['user_id']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <h2>Manage Products</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?php echo $product['product_id']; ?></td>
                            <td><?php echo $product['product_name']; ?></td>
                            <td><?php echo $product['price']; ?></td>
                            <td>
                                <a href="edit_product.php?id=<?php echo $product['product_id']; ?>">Edit</a>
                                <a href="delete_product.php?id=<?php echo $product['product_id']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <h2>Manage Orders</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer ID</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?php echo $order['order_id']; ?></td>
                            <td><?php echo $order['customer_id']; ?></td>
                            <td><?php echo $order['total_amount']; ?></td>
                            <td><?php echo $order['order_status']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php include '../src/views/partials/footer.php'; ?>
    <script src="assets/js/scripts.js"></script>
</body>
</html>