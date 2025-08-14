<?php
class Database{
    private static $instance = null;
    private $conn;

    public function __construct(){
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'studentms';

        $this->conn = new mysqli($host, $user, $password, $database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    public static function getConnection() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance ->conn;
    }
}