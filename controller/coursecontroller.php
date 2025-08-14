<?php
require_once '../models/Course.php';

class coursecontroller {

    public function index() {
        $course = new courses();
        $courses = $course->readAll();
        require_once '../course/course/index.php';
    }

    public function create() {
        require_once '../course/course/create.php';
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

    public function update($course_id) {
        $course = new courses();
        $course_data = $course->search($course_id);
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