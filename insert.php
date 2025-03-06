<?php
include 'db.php';

// Insert User
$sql = "INSERT INTO User (name, email) VALUES ('Vansh Rajput', 'vansh@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "New user created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
