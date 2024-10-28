<?php
// Check if the username cookie is set
if (isset($_COOKIE["username"])) {
    $username = htmlspecialchars($_COOKIE["username"]);
} else {
    // If no cookie, redirect to login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?>!</h1>
    <p>We’re glad to see you again!</p>
    <a href="logout.php">Logout</a>
</body>
</html>
