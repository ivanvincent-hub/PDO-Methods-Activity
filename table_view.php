<?php

// Include database connection file
require 'dbconfig.php';

try {

    // SQL query to retrieve all grocery items
    $sql = "SELECT * FROM grocery_items";

    // Prepare and execute the query
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Store all records in an array
    $groceryItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Grocery Items Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #dff0d8;
        }
    </style>
</head>
<body>

<h2>Netherlands Grocery Items</h2>

<!-- Display SQL query results inside an HTML table -->
<table>

    <tr>
        <th>Item ID</th>
        <th>Brand Name</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Stock Quantity</th>
        <th>Expiry Date</th>
    </tr>

    <?php foreach ($groceryItems as $item): ?>

    <tr>
        <td><?php echo $item['item_id']; ?></td>
        <td><?php echo $item['brand_name']; ?></td>
        <td><?php echo $item['product_name']; ?></td>
        <td><?php echo $item['category']; ?></td>
        <td><?php echo $item['price']; ?></td>
        <td><?php echo $item['stock_quantity']; ?></td>
        <td><?php echo $item['expiry_date']; ?></td>
    </tr>

    <?php endforeach; ?>

</table>

</body>
</html>