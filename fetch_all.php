<?php

// Include database connection file
require 'dbconfig.php';

try {

    // SQL query to retrieve all records
    $sql = "SELECT * FROM grocery_items";

    // Prepare and execute query
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Fetch all rows from the database
    $groceryItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display the array in a readable format
    echo "<pre>";
    print_r($groceryItems);
    echo "</pre>";

} catch (PDOException $e) {

    // Display error message if query fails
    echo "Error: " . $e->getMessage();

}

?>