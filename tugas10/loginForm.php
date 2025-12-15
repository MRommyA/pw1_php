<?php
session_start();
require_once "auth.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $auth = new Auth();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = $auth->login($username, $password);

    if ($login) {
        $_SESSION['username'] = $login['username'];
        $_SESSION['level'] = $login['level'];

        if ($login['level'] == 0) {
            header("Location: admin.php");
        } else {
            header("Location: user.php"); 
        }

        exit;
    } else {
        echo "<script>alert('Invalid Username or password!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="card">
    <h2>Login</h2>

    <form method="POST">
        <label>Username</label>
        <input type="text" name="username" required><br>

        <label>Password</label>
        <input type="password" name="password" required><br>

        <button type="submit">Login</button>

        <p>Don't have an account yet?? <a href="registerForm.php">Register</a></p>
    </form>
</div>
</body>
</html>
