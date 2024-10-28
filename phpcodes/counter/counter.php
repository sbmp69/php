<?php
// Check if the counter cookie is set
if (isset($_COOKIE["visit_counter"])) {
    // If it exists, increment the counter by 1
    $visitCounter = $_COOKIE["visit_counter"] + 1;
} else {
    // If it doesn't exist, initialize the counter to 1
    $visitCounter = 1;
}

// Update the cookie with the new counter value, set it to expire in 30 days
setcookie("visit_counter", $visitCounter, time() + (86400 * 30), "/");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visit Counter</title>
</head>
<body>
    <h1>Welcome to Our Website!</h1>
    <p>You have visited this site <?php echo htmlspecialchars($visitCounter); ?> times.</p>
</body>
</html>
