<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $qty = $_POST["qty"];

    // Handle image upload
    $image = "default.jpg";  // Default image in case no image is uploaded
    if ($_FILES["image"]["error"] == 0) {
        $image = $_FILES["image"]["name"];
        move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $image);
    }

    $query = "INSERT INTO products (name, price, qty, image) VALUES ('$name', $price, $qty, '$image')";

    if ($conn->query($query)) {
        $message = "Product added successfully!";
    } else {
        $error = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>
    <h2>Create Product</h2>
    <?php if(isset($message)) { echo "<p>$message</p>"; } ?>
    <?php if(isset($error)) { echo "<p>$error</p>"; } ?>
    <form method="post" action="" enctype="multipart/form-data">
        Product Name: <input type="text" name="name" required><br>
        Price: <input type="number" name="price" step="0.01" required><br>
        Quantity: <input type="number" name="qty" required><br>
        Image: <input type="file" name="image"><br>
        <input type="submit" value="Add Product">
    </form>
</body>
</html>
