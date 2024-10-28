<?php
include 'db_connect.php';

$employee_id = 1; // Employee ID to update
$newPosition = "Senior Manager";
$newSalary = 70000.00;

// SQL to update employee record
$sql = "UPDATE employees SET position = '$newPosition', salary = $newSalary WHERE employee_id = $employee_id";

if ($conn->query($sql) === TRUE) {
    echo "Employee record updated successfully.";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
