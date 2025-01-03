<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}

// Database connection
$conn = new mysqli("localhost", "root", "", "construction");
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productName = $_POST['product_name'];
    $productDescription = $_POST['product_description'];
    $productImage = $_FILES['product_image'];

    // Validate and upload the image
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($productImage['name']);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        if (move_uploaded_file($productImage['tmp_name'], $targetFile)) {
            // Save to database
            $stmt = $conn->prepare("INSERT INTO products (name, description, image) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $productName, $productDescription, $productImage['name']);
            $stmt->execute();
            $stmt->close();

            // Redirect back to the form with success message
            header("Location: product_upload_form.php?success=1");
            exit;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
    }
}

$conn->close();
?>
