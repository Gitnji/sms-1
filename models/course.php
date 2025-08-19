<?php
require_once '../core/dbconnect.php';

class courses {
    private $conn;
    private $table = "courses";

    public function __construct(){
        //$db = new Database();
       $this->conn = Database::getConnection();
    
    }

    
    public function create() {
        $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("INSERT INTO $this->table (name, description) VALUES (?, ?)");
        $stmt->bind_param("ss", $this->name, $this->description);
        return $stmt->execute();
    }

    public function search($course_id){
        $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("SELECT * FROM $this->table WHERE course_id = ?");
        $stmt->bind_param("i", $course_id);
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
        $stmt = $conn->prepare("UPDATE $this->table SET name = ?, description = ? WHERE course_id = ?");
        $stmt->bind_param("ssi", $this->name, $this->description, $this->course_id);
        return $stmt->execute();
    }

    public function delete($course_id) {
        $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("DELETE FROM $this->table WHERE course_id = ?");
        $stmt->bind_param("i", $course_id);
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