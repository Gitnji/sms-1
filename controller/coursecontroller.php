<?php
require_once '../models/Course.php';

class coursecontroller extends courses {

    public function index() {
        $courses = $this->readAll();
        return $courses;
    }

    public function create() {
        
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $course = new courses(null, $name, $description);
            $course->create();
            header('Location: index.php');
        }
    }

    public function update() {
        $course = new courses();
        $course_data = $course->search();
        if ($course_data) {
            require_once '../course/course/edit.php';
        } else {
            header('Location: index.php');
        }
    }

    public function delete($course_id) {
        $course = new courses();
        $course->delete($course_id);
        header('Location: index.php');
    }
}