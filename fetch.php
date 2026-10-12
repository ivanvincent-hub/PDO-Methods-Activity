<?php

// Include database connection
require 'dbconfig.php';

try {

    // SQL query to retrieve only one record
    $sql = "SELECT * FROM grocery_items LIMIT 1";

    // Prepare and execute query
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Fetch a single row from the result set
    $groceryItem = $stmt->fetch(PDO::FETCH_ASSOC);

    // Display the fetched record in a readable format
    echo "<pre>";
    print_r($groceryItem);
    echo "</pre>";

} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();

}

?>