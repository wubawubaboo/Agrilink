<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "agrilink";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection Failed: " . $connection->connect_error);
}
?>
