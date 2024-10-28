<?php
session_start();

// Sample credentials (in real applications, retrieve from a database)
$validUsername = "user";
$validPassword = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if entered credentials are correct
    if ($username === $validUsername && $password === $validPassword) {
        // Set session variable to indicate the user is logged in
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("Location: profile.php"); // Redirect to profile page
        exit();
    } else {
        $error = "Invalid username or password.";
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
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
