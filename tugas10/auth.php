<?php
require_once "config.php";

class Auth extends Database {

    public function register($username, $password, $level)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(username, password, level)
                VALUES('$username', '$hash', '$level')";

        return $this->mysqli->query($sql);
    }

    public function login($username, $password)
    {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $this->mysqli->query($sql);

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }

        return false;
    }
}