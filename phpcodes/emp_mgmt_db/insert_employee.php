<?php
include 'db_connect.php';

// SQL to insert employee records
$sql = "INSERT INTO employees (first_name, last_name, position, salary) VALUES 
    ('John', 'Doe', 'Manager', 65000.00),
    ('Jane', 'Smith', 'Developer', 55000.00)";

if ($conn->query($sql) === TRUE) {
    echo "Employee records inserted successfully.";
} else {
    echo "Error inserting records: " . $conn->error;
}

$conn->close();
?>
