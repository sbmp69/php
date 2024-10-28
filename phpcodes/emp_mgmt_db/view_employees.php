<?php
include 'db_connect.php';

// SQL to select all employees
$sql = "SELECT employee_id, first_name, last_name, position, salary FROM employees";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Records</title>
</head>
<body>
    <h1>Employee Records</h1>
    <table border="1">
        <tr>
            <th>Employee ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Position</th>
            <th>Salary</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row["employee_id"]); ?></td>
                    <td><?php echo htmlspecialchars($row["first_name"]); ?></td>
                    <td><?php echo htmlspecialchars($row["last_name"]); ?></td>
                    <td><?php echo htmlspecialchars($row["position"]); ?></td>
                    <td><?php echo htmlspecialchars($row["salary"]); ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="5">No employee records found.</td></tr>
        <?php endif; ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
