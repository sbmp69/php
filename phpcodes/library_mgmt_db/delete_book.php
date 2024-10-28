<?php
include 'db_connect.php';

$id = 3; // ID of the book to be deleted

// SQL to delete the record
$sql = "DELETE FROM books WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
