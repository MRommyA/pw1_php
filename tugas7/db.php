<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'prestasi_mahasiswa');

class Database{
    protected $mysqli;
    protected $query;

    function __construct(){
        $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->mysqli->connect_error;
            exit();
        }
    }

    function table($table){
        $this->query = "SELECT * FROM $table";
        return $this;
    }

    function get(){
        $result = $this->mysqli->query($this->query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

}