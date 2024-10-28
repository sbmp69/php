<?php
session_start();

// Check if there are responses in the session
$responses = $_SESSION["responses"] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survey Responses</title>
</head>
<body>
    <h1>All Survey Responses</h1>

    <?php if (empty($responses)): ?>
        <p>No responses submitted yet.</p>
    <?php else: ?>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Feedback</th>
            </tr>
            <?php foreach ($responses as $response): ?>
                <tr>
                    <td><?php echo htmlspecialchars($response["name"]); ?></td>
                    <td><?php echo htmlspecialchars($response["feedback"]); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <form method="post" action="clear_responses.php">
            <button type="submit">Clear All Responses</button>
        </form>
    <?php endif; ?>

    <p><a href="survey.php">Back to Survey</a></p>
</body>
</html>
