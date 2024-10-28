<?php
include 'db_connect.php';

// SQL to insert records
$sql = "INSERT INTO books (title, author, published_year, genre) VALUES 
    ('To Kill a Mockingbird', 'Harper Lee', 1960, 'Fiction'),
    ('1984', 'George Orwell', 1949, 'Dystopian'),
    ('Pride and Prejudice', 'Jane Austen', 1813, 'Classic')";

if ($conn->query($sql) === TRUE) {
    echo "Records inserted successfully.";
} else {
    echo "Error inserting records: " . $conn->error;
}

$conn->close();
?>
