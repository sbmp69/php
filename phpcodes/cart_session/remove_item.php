<?php
session_start();

// Check if item name is provided
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["item_name"])) {
    $itemName = $_POST["item_name"];
    // Remove item from cart if it exists
    if (isset($_SESSION["cart"][$itemName])) {
        unset($_SESSION["cart"][$itemName]);
    }
}

header("Location: view_cart.php");
exit();
?>
