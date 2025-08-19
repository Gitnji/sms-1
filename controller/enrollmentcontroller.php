<?php 
require_once '../models/enrollment.php';

class EnrollmentController extends Enrollment {

    public function index() {
        $enrollments = $this->readAll();
        return $enrollments;
    }

    public function enrollStudent($student_id, $course_id) {
        return $this->enrollStudent($student_id, $course_id);
    }

    public function getEnrollmentsByStudent($student_id) {
        return $this->getEnrollmentsByStudent($student_id);
    }

    public function getEnrollmentsByCourse($course_id) {
        return $this->getEnrollmentsByCourse($course_id);
    }

    public function deleteEnrollment($student_id, $course_id) {
        return $this->deleteEnrollment($student_id, $course_id);
    }
}
?>