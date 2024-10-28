<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["language"])) {
    // Set the cookie for preferred language, valid for 30 days
    setcookie("preferred_language", $_POST["language"], time() + (86400 * 30), "/");
    header("Location: index.php"); // Redirect to homepage to see the preferred language in action
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Preferred Language</title>
</head>
<body>
    <h1>Select Your Preferred Language</h1>
    <form method="post" action="">
        <label for="language">Choose Language:</label>
        <select name="language" id="language">
            <option value="en">English</option>
            <option value="es">Spanish</option>
            <option value="fr">French</option>
            <option value="de">German</option>
            <!-- Add more languages as needed -->
        </select>
        <button type="submit">Save</button>
    </form>
</body>
</html>
