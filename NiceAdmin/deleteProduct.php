<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION["username"];

    require_once "config.php";

  
if ($_SERVER["REQUEST_METHOD"] == "GET") {


     $query = "delete from products where id=".$_GET['id'];
    if ($conn->query($query)) {
       echo $message = "Product delete successfully!";
        header('Location: products.php');
    } else {
        $error = "Error: " . $conn->error;
    }
}


  ?>