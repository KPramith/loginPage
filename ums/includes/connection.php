<?php
// Database configuration
$servername = "localhost"; // Change this to your database server
$username = "root";        // Change this to your database username
$password = "";            // Change this to your database password
$database = "mydatabase";  // Change this to your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character encoding to UTF-8
$conn->set_charset("utf8");


// Connection successful message (optional)
// echo "Connected successfully";

?>
