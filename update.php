<?php

// Include database configuration file
require 'dbconfig.php';

try {

    // SQL statement to update an existing grocery item
    $sql = "UPDATE grocery_items
            SET
                price = 5.49,
                stock_quantity = 75
            WHERE item_id = 1";

    // Execute the update query
    $pdo->exec($sql);

    // Display success message
    echo "Record updated successfully!";

} catch (PDOException $e) {

    // Display error message if update fails
    echo "Error: " . $e->getMessage();

}

?>