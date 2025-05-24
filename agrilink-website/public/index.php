<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrilink - Home</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include '../src/views/partials/header.php'; ?>

    <div class="container mt-5">
        <h1>Welcome to Agrilink</h1>
        <p>Your one-stop marketplace for agricultural products.</p>
        <div class="row">
            <div class="col-md-4">
                <h2>Login</h2>
                <p><a href="login.php" class="btn btn-primary">Login to your account</a></p>
            </div>
            <div class="col-md-4">
                <h2>Register</h2>
                <p><a href="register.php" class="btn btn-secondary">Create a new account</a></p>
            </div>
            <div class="col-md-4">
                <h2>Marketplace</h2>
                <p><a href="marketplace.php" class="btn btn-success">Browse Products</a></p>
            </div>
        </div>
    </div>

    <?php include '../src/views/partials/footer.php'; ?>
    <script src="assets/js/scripts.js"></script>
</body>
</html>