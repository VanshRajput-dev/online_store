<?php
include 'db.php';

$sql = "SELECT OrderTable.order_no, OrderTable.order_date, User.name 
        FROM OrderTable 
        JOIN User ON OrderTable.u_id = User.u_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Order No: " . $row["order_no"] . " - Date: " . $row["order_date"] . " - Customer: " . $row["name"] . "<br>";
    }
} else {
    echo "No orders found";
}

$conn->close();
?>
