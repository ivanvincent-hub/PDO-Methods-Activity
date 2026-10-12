<?php

// Include database configuration file
require 'dbconfig.php';

try {

    // SQL statement to insert a new grocery item
    $sql = "INSERT INTO grocery_items
            (
                brand_name,
                product_name,
                category,
                price,
                stock_quantity,
                expiry_date
            )
            VALUES
            (
                'Calve',
                'Peanut Butter',
                'Spread',
                4.99,
                50,
                '2027-12-31'
            )";

    // Execute the insert query
    $pdo->exec($sql);

    // Display success message
    echo "Record inserted successfully!";

} catch (PDOException $e) {

    // Display error message if insertion fails
    echo "Error: " . $e->getMessage();

}

?>