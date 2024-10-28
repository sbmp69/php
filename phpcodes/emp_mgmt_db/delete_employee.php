<?php
include 'db_connect.php';

$employee_id = 2; // Employee ID to delete

// SQL to delete employee record
$sql = "DELETE FROM employees WHERE employee_id = $employee_id";

if ($conn->query($sql) === TRUE) {
    echo "Employee record deleted successfully.";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
