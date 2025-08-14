<?php
require_once '../model/Teacher.php';

class teachercontroller {

    public function index() {
        $teacher = new teachers();
        $teachers = $teacher->readAll();
        require_once '../teacher/teacher/index.php';
    }

    public function create() {
        require_once '../teacher/teacher/create.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $mobile = $_POST['mobile'];
            $teacher = new teachers(null, $name, $address, $mobile);
            $teacher->create();
            header('Location: index.php');
        }
    }

    public function update($teacher_id) {
        $teacher = new teachers();
        $teacher_data = $teacher->search($teacher_id);
        if ($teacher_data) {
            require_once '../teacher/teacher/edit.php';
        } else {
            header('Location: index.php');
        }
    }

    public function delete($teacher_id) {
        $teacher = new teachers();
        $teacher->delete($teacher_id);
        header('Location: index.php');
    }
}