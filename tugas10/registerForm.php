<?php
require_once "auth.php";

if (isset($_POST['submit'])) {
    $auth = new Auth();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $level = 1;

    if ($auth->register($username, $password, $level)) {
        echo "<script>alert('Register berhasil! Silakan login.'); window.location='loginForm.php';</script>";
    } else {
        echo "<script>alert('Gagal register! Username sudah digunakan.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>

    <form method="POST">
        <label>Username</label>
        <input type="text" name="username" required> <br>

        <label>Password</label>
        <input type="password" name="password" required> <br>

        <button type="submit" name="submit">Register</button>

        <p>Already have an account? <a href="loginForm.php">Login</a></p>
    </form>
</body>
</html>

