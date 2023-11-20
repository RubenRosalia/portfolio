<?php

// Include the database configuration file
include "db.php";

// Create a new MySQLi connection using the provided credentials
$conn = new mysqli($host, $user, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    // If there's a connection error, terminate the script and display an error message
    die("Connection failed: " . $conn->connect_error);
}
