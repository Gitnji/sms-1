<?php
require_once '../models/Students.php';

class StudentController extends Students{

    public function index(){
        $students = $this->readAll();
        return $students;
    }
    public function create($name, $address, $mobile){
        $result = $this->createStudent($name, $address, $mobile);
        return $result;
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
    // public function update($student_id){
    //     $student = new students();
    //     $student_data = $student->search($student_id);
    //     if ($student_data) {
    //         require_once '../student/student/edit.php';
    //     } else {
    //         header('Location: index.php');
    //     }
    // }

    public function delete($student_id){
        $student = new students();
        $student->delete($student_id);
        header('Location: index.php');
    }
}
// $studentController = new studentconroller();