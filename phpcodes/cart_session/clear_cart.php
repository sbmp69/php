<?php
session_start();

// Clear the cart
if (isset($_SESSION["cart"])) {
    unset($_SESSION["cart"]);
}

header("Location: view_cart.php");
exit();
?>
