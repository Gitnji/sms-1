<?php
require_once '../core/dbconnect.php';

class teachers{
    private  $conn;
    private $table = "teachers";

    public function __construct(){
        //$db = new Database();
        $this->conn = Database::getConnection();
    }
    public function createteacher($name, $mobile, $address) {
        $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("INSERT INTO $this->table (name, address, mobile) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $this->name, $this->address, $this->mobile);
        return $stmt->execute();
    }

    public function update() {
        $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("UPDATE $this->table SET name = ?, address = ?, mobile = ? WHERE teacher_id = ?");
        $stmt->bind_param("sssi", $this->name, $this->address, $this->mobile, $this->teacher_id);
        return $stmt->execute();
    }

    public function delete() {
        $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("DELETE FROM $this->table WHERE teacher_id = ?");
        $stmt->bind_param("i", $this->teacher_id);
        return $stmt->execute();
    }
    
    public function readAll(){
        $db = new Database();
        $conn = $db->getConnection();
        $sql = "SELECT * FROM $this->table";
        $result = $conn->query($sql);
        $rows = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        return $rows; 
    }
}
