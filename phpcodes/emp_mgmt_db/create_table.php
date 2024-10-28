<?php
include 'db_connect.php';

// SQL to create the employees table
$sql = "CREATE TABLE IF NOT EXISTS employees (
    employee_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    position VARCHAR(100),
    salary DECIMAL(10, 2)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'employees' created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
