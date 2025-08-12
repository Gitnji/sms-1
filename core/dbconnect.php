<?php
class Database {
    private $host = "localhost";
    private $db = "studentms";
    private $user = "root";
    private $port = "3060";
    private $password = "";
    private $mysqli = null;

    public function __construct() {
        if ($this->mysqli === null) {
            $this->connect();
        }
    }
    public function getConnection(){
        if ($this->mysqli !== null) {
            return $this->mysqli;
        } else {
            $this->connect();
            return $this->mysqli;
        }
    }

    protected function connect(){
        $mysqli = new mysqli($this->host, $this->user, $this->password, $this->db, $this->port);
        $mysqli->set_charset('utf8mb4');
        // Check connection
        if ($mysqli->connect_error) {
            throw new Exception("Connection failed: " . $mysqli->connect_error);
        }
        $this->mysqli = $mysqli;
        return $this->mysqli;
    }

    public function close() {
        if ($this->mysqli) {
            $this->mysqli->close();
            $this->mysqli = null;
        }
    }
}