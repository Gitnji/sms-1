<?php
require_once '../core/dbconnect.php';

class Enrollment {
    private $conn;
    private $table = "enrollments";

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function enrollStudent($student_id, $course_id) {
        $stmt = $this->conn->prepare("INSERT INTO $this->table (student_id, course_id) VALUES (?, ?)");
        $stmt->bind_param("ii", $student_id, $course_id);
        return $stmt->execute();
    }

    public function getEnrollmentsByStudent($student_id) {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE student_id = ?");
        $stmt->bind_param("i", $student_id);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function getEnrollmentsByCourse($course_id) {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE course_id = ?");
        $stmt->bind_param("i", $course_id);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function deleteEnrollment($student_id, $course_id) {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE student_id = ? AND course_id = ?");
        $stmt->bind_param("ii", $student_id, $course_id);
        return $stmt->execute();
    }
    public function readAll(){
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
}
?>