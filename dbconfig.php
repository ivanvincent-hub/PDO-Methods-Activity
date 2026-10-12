<?php

// Database server name
$host = "localhost";

// Database name created in phpMyAdmin
$dbname = "netherlands_grocery";

// Default XAMPP MySQL username
$username = "root";

// Default XAMPP MySQL password is blank
$password = "";

try {

    // Create PDO connection to MySQL database
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );

    // Enable exception-based error reporting
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    // Optional success message for testing
    // echo "Database connected successfully!";

} catch (PDOException $e) {

    // Display error message if connection fails
    die("Connection Failed: " . $e->getMessage());

}

?>