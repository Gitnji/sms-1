<?php
require_once '../core/dbconnect.php';

class Students{
    private $conn;
    private $table = "students";

    public function __construct(){
        // $db = new Database();
        // $this->connect = $db->conn;
        // OR THIS
        $this->conn = Database::getConnection();
    }

    public function createStudent($name, $address, $mobile) {
        $stmt = $this->conn->prepare("INSERT INTO $this->table (name, address, mobile) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $address, $mobile);
        $result = $stmt->execute();
        return $result;
    }

    public function search($student_id){
      $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("SELECT * FROM $this->table WHERE student_id = ?");
        $stmt->bind_param("i", $student_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }   
    }

    public function update(){
        $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("UPDATE $this->table SET name=?, address=?, mobile=? WHERE student_id=?");
        $stmt->bind_param("sssi", $this->name, $this->address, $this->mobile, $this->student_id);
        return $stmt->execute();
    }

    public function delete($student_id) {
        $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("DELETE FROM $this->table WHERE student_id=?");
        $stmt->bind_param("i", $student_id);
        return $stmt->execute();
    }

    public function readAll() {
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