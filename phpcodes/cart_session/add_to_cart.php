<?php
session_start();

// Initialize cart array in session if it doesn't exist
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemName = trim($_POST["item_name"]);
    $quantity = (int) $_POST["quantity"];

    if (!empty($itemName) && $quantity > 0) {
        // Add item to cart or update quantity if it already exists
        if (isset($_SESSION["cart"][$itemName])) {
            $_SESSION["cart"][$itemName] += $quantity;
        } else {
            $_SESSION["cart"][$itemName] = $quantity;
        }
        $message = "Item added to cart.";
    } else {
        $message = "Please enter a valid item name and quantity.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add to Cart</title>
</head>
<body>
    <h1>Add Items to Cart</h1>
    <?php if (isset($message)) echo "<p style='color: green;'>$message</p>"; ?>
    <form method="post" action="">
        <label for="item_name">Item Name:</label>
        <input type="text" name="item_name" id="item_name" required>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" required>
        <button type="submit">Add to Cart</button>
    </form>
    <p><a href="view_cart.php">View Cart</a></p>
</body>
</html>
