<?php
require_once '../core/dbconnect.php';

class students{
    private $student_id;
    private $name;
    private $address;
    private $mobile;
    private $table = "students";

    public function __construct(){
        $db = new Database();
        $this->connect = $db->getConnection();
    }

    public function getId() {
        return $this->student_id;
    }
    public function getName() {
        return $this->name;
    }
    public function getAddress() {
        return $this->address;
    }
    public function getMobile() {
        return $this->mobile;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    public function setAddress($address) {
        $this->address = $address;
    }
    public function setMobile($mobile) {
        $this->mobile = $mobile;
    }


    public function create() {
        $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("INSERT INTO $this->table (name, address, mobile) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $this->name, $this->address, $this->mobile);
        return $stmt->execute();
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