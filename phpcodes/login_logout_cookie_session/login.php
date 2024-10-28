<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"])) {
    $username = trim($_POST["username"]);
    
    // Simple check to make sure username isn't empty
    if (!empty($username)) {
        // Set a cookie with the username, valid for 7 days
        setcookie("username", $username, time() + (86400 * 7), "/");
        header("Location: welcome.php"); // Redirect to welcome page
        exit();
    } else {
        $error = "Please enter a valid username.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
