<?php
session_start();

// Check if cart is empty
$cartIsEmpty = empty($_SESSION["cart"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Cart</title>
</head>
<body>
    <h1>Your Shopping Cart</h1>

    <?php if ($cartIsEmpty): ?>
        <p>Your cart is empty.</p>
    <?php else: ?>
        <table border="1">
            <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
            <?php foreach ($_SESSION["cart"] as $item => $quantity): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item); ?></td>
                    <td><?php echo htmlspecialchars($quantity); ?></td>
                    <td>
                        <form method="post" action="remove_item.php" style="display:inline;">
                            <input type="hidden" name="item_name" value="<?php echo htmlspecialchars($item); ?>">
                            <button type="submit">Remove</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <form method="post" action="clear_cart.php">
            <button type="submit">Clear Cart</button>
        </form>
    <?php endif; ?>

    <p><a href="add_to_cart.php">Add More Items</a></p>
</body>
</html>
