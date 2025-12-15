<?php
session_start();

if (!isset($_SESSION['level']) || $_SESSION['level'] != 1) {
    header("Location: loginForm.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
    <h2>Welcome to the User Dashboard</h2>
    <p>This is a protected area for regular users.</p>
    <button onclick="window.location.href='logout.php'">Logout</button>
</body>
</html>