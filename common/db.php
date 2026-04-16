<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "discuss";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>