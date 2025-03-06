<?php
include 'db.php';

// User ID (Assuming existing user)
$u_id = 1;
$order_amount = 500.00;
$order_date = date("Y-m-d");

// Insert Order
$sql = "INSERT INTO OrderTable (order_amount, order_date, u_id) VALUES ($order_amount, '$order_date', $u_id)";
if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
