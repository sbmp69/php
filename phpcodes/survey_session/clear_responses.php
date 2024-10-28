<?php
session_start();

// Clear the responses from the session
unset($_SESSION["responses"]);

// Redirect back to view_responses.php
header("Location: view_responses.php");
exit();
?>
