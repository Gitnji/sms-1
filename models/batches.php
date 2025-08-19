<?php
require_once '../core/dbconnect.php';
class batches {
    private $conn;
    private $table = "batches";

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function create($name, $course_id, $teacher_id) {
        $stmt = $this->conn->prepare("INSERT INTO $this->table (name, course_id) VALUES (?, ?)");
        $stmt->bind_param("si", $name, $course_id);
        return $stmt->execute();
    }

    public function readAll() {
        $sql = "SELECT * FROM $this->table";
        $result = $this->conn->query($sql);
        $rows = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        return $rows; 
    }

    public function update($batch_id, $name, $course_id) {
        $stmt = $this->conn->prepare("UPDATE $this->table SET name = ?, course_id = ? WHERE batch_id = ?");
        $stmt->bind_param("sii", $name, $course_id, $batch_id);
        return $stmt->execute();
    }

    public function delete($batch_id) {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE batch_id = ?");
        $stmt->bind_param("i", $batch_id);
        return $stmt->execute();
    }

    public function getCourses(){
        $stmt = $this->conn->prepare("SELECT * FROM courses where course_id IN (SELECT course_id FROM $this->table)");
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}
?>