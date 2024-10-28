<?php
// Clear the username cookie by setting its expiration time in the past
setcookie("username", "", time() - 3600, "/");
header("Location: login.php"); // Redirect to login page
exit();
?>
