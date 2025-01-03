<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "construction");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products from the database
$sql = "SELECT name, description, image FROM products ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
