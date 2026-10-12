<?php

// Include database connection file
require 'dbconfig.php';

try {

    // Record ID to delete
    $itemId = 5;

    // SQL query with placeholder
    $sql = "DELETE FROM grocery_items WHERE item_id = :item_id";

    // Prepare statement
    $stmt = $pdo->prepare($sql);

    // Bind value to placeholder
    $stmt->bindParam(':item_id', $itemId, PDO::PARAM_INT);

    // Execute query
    $stmt->execute();

    echo "Record deleted successfully.";

} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();

}

?>