<?php
session_start();
include '../src/db/db_connection.php';
include '../src/controllers/FarmerController.php';

$farmerController = new FarmerController($connection);
$farmerProducts = $farmerController->getFarmerProducts($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Dashboard</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include '../src/views/partials/header.php'; ?>

    <div class="container mt-5">
        <h1>Farmer Dashboard</h1>
        <a href="add_product.php" class="btn btn-primary mb-3">Add New Product</a>
        
        <h2>Your Products</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity Available</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($farmerProducts)): ?>
                    <tr>
                        <td colspan="5" class="text-center">No products found.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($farmerProducts as $product): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($product['product_name']); ?></td>
                            <td><?php echo htmlspecialchars($product['description']); ?></td>
                            <td><?php echo htmlspecialchars($product['price']); ?></td>
                            <td><?php echo htmlspecialchars($product['quantity_available']); ?></td>
                            <td>
                                <a href="edit_product.php?id=<?php echo $product['product_id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="delete_product.php?id=<?php echo $product['product_id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php include '../src/views/partials/footer.php'; ?>
    <script src="assets/js/scripts.js"></script>
</body>
</html>