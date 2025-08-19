<?php
require_once '../models/batches.php';

class BatchController extends Batches {

    public function index() {
        $batches = $this->readAll();
        return $batches;
    }

    public function create($name, $course_id, $teacher_id) {
        $result = $this->createBatch($name, $course_id, $teacher_id);
        return $result;
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $course_id = $_POST['course_id'];
            $teacher_id = $_POST['teacher_id'];
            $batch = new Batches(null, $name, $course_id, $teacher_id);
            $batch->create();
            header('Location: index.php');
        }
    }

    public function delete($batch_id) {
        $batch = new Batches();
        $batch->delete($batch_id);
        header('Location: index.php');
    }
}
?>