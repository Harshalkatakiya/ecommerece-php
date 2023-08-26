<?php
$hostname = "localhost";  // Replace with your MySQL server hostname
$username = "root";  // Replace with your MySQL username
$password = "";  // Replace with your MySQL password
$database = "ecommerce";  // Replace with your database name

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
