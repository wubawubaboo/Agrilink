<?php
// src/views/templates/admin_dashboard_content.php

?>

<div class="container mt-5">
    <h1>Admin Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <h3>Manage Users</h3>
            <a href="manage_users.php" class="btn btn-primary">View Users</a>
            <a href="add_user.php" class="btn btn-success">Add User</a>
        </div>
        <div class="col-md-4">
            <h3>Manage Products</h3>
            <a href="manage_products.php" class="btn btn-primary">View Products</a>
            <a href="add_product.php" class="btn btn-success">Add Product</a>
        </div>
        <div class="col-md-4">
            <h3>Manage Orders</h3>
            <a href="manage_orders.php" class="btn btn-primary">View Orders</a>
        </div>
    </div>
    <hr>
    <h2>Statistics</h2>
    <div class="row">
        <div class="col-md-4">
            <h4>Total Users</h4>
            <p id="total-users">0</p>
        </div>
        <div class="col-md-4">
            <h4>Total Products</h4>
            <p id="total-products">0</p>
        </div>
        <div class="col-md-4">
            <h4>Total Orders</h4>
            <p id="total-orders">0</p>
        </div>
    </div>
</div>

<script>
    // Fetch statistics from the server
    fetch('src/controllers/AdminController.php?action=getStatistics')
        .then(response => response.json())
        .then(data => {
            document.getElementById('total-users').innerText = data.totalUsers;
            document.getElementById('total-products').innerText = data.totalProducts;
            document.getElementById('total-orders').innerText = data.totalOrders;
        })
        .catch(error => console.error('Error fetching statistics:', error));
</script>