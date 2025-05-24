<?php
// filepath: /agrilink-website/agrilink-website/src/views/templates/marketplace_list.php

include_once '../../db/db_connection.php';
include_once '../../controllers/MarketplaceController.php';

$marketplaceController = new MarketplaceController();
$products = $marketplaceController->getAllProducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>Marketplace</title>
</head>
<body>
    <?php include '../partials/header.php'; ?>

    <div class="container">
        <h1 class="mt-5">Marketplace</h1>
        <div class="row">
            <?php foreach ($products as $product): ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="<?php echo $product['image_url']; ?>" class="card-img-top" alt="<?php echo $product['product_name']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product['product_name']; ?></h5>
                            <p class="card-text"><?php echo $product['description']; ?></p>
                            <p class="card-text"><strong>Price: $<?php echo number_format($product['price'], 2); ?></strong></p>
                            <a href="product_detail.php?id=<?php echo $product['product_id']; ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include '../partials/footer.php'; ?>
    <script src="/assets/js/scripts.js"></script>
</body>
</html>