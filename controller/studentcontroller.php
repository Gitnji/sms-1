<?php
require_once '../models/Student.php';

class studentconroller{

    public function index(){
        $student = new students();
        $students = $student->readAll();
        require_once '../student/index.php';
    }
    public function create(){
        require_once '../student/student/create.php';
    }
    public function store(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $name = $_POST['name'];
            $address = $_POST['address'];
            $mobile = $_POST['mobile'];
            $student = new students(null, $name, $address, $mobile);
            $student->create();
            header('Location: index.php');
        }
    } 
    public function update($student_id){
        $student = new students();
        $student_data = $student->search($student_id);
        if ($student_data) {
            require_once '../student/student/edit.php';
        } else {
            header('Location: index.php');
        }
    }

    public function delete($student_id){
        $student = new students();
        $student->delete($student_id);
        header('Location: index.php');
    }
}
$studentController = new studentconroller();