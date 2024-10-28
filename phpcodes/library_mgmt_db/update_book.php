<?php
include 'db_connect.php';

$id = 1; // ID of the book to be updated
$newAuthor = "Harper Lee";
$newGenre = "Historical Fiction";

// SQL to update the record
$sql = "UPDATE books SET author = '$newAuthor', genre = '$newGenre' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully.";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
