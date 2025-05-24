<?php
session_start();
require_once '../src/db/db_connection.php';
require_once '../src/controllers/MarketplaceController.php';

$marketplaceController = new MarketplaceController();
$products = $marketplaceController->getAllProducts();

include '../src/views/partials/header.php';
?>

<div class="container">
    <h1 class="mt-4">Marketplace</h1>
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['product_name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['product_name']; ?></h5>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                        <p class="card-text"><strong>Price: $<?php echo number_format($product['price'], 2); ?></strong></p>
                        <a href="order.php?product_id=<?php echo $product['product_id']; ?>" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include '../src/views/partials/footer.php'; ?>