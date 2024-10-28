<?php
session_start();

// Initialize the responses array in the session if it doesn't exist
if (!isset($_SESSION["responses"])) {
    $_SESSION["responses"] = [];
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $feedback = trim($_POST["feedback"]);

    // Store response in session if inputs are valid
    if (!empty($name) && !empty($feedback)) {
        $_SESSION["responses"][] = [
            "name" => $name,
            "feedback" => $feedback,
        ];
        $message = "Thank you for submitting your response!";
    } else {
        $message = "Please provide both your name and feedback.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survey Form</title>
</head>
<body>
    <h1>Survey Form</h1>
    <?php if (isset($message)) echo "<p style='color: green;'>$message</p>"; ?>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="feedback">Feedback:</label>
        <textarea name="feedback" id="feedback" required></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
    <p><a href="view_responses.php">View All Responses</a></p>
</body>
</html>
