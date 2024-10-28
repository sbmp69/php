<?php
// Check if the preferred language cookie is set
$preferredLanguage = isset($_COOKIE["preferred_language"]) ? $_COOKIE["preferred_language"] : "en"; // Default to English if not set

// Language display options
$languageNames = [
    "en" => "English",
    "es" => "Spanish",
    "fr" => "French",
    "de" => "German"
];
$currentLanguage = $languageNames[$preferredLanguage] ?? "English"; // Default to English if unknown language

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
</head>
<body>
    <h1>Welcome!</h1>
    <p>Your preferred language is: <?php echo htmlspecialchars($currentLanguage); ?></p>
    <a href="language.php">Change Language</a>
</body>
</html>
