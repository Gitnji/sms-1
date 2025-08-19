<?php
class Database{
    private static $instance = null;
    
    private static $host = 'localhost';
    private static $user = 'root';
    private static $password = '';
    private static $database = 'studentms';


    public static function getConnection() {  
        self::$instance = new mysqli(self::$host, self::$user, self::$password, self::$database);
        if (self::$instance->connect_error) {
            die("Connection failed: " . self::$instance->connect_error);
        }
        return self::$instance;
    }
}