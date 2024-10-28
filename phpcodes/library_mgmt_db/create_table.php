<?php
include 'db_connect.php';

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    published_year YEAR,
    genre VARCHAR(100)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'books' created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
