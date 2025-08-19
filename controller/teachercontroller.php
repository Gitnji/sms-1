<?php
require_once '../models/teachers.php';

class teachercontroller extends  teachers{

    public function index(){
        $teachers = $this->readAll();
        return $teachers;
    }
      public function create($name, $address, $mobile){
        $result = $this->createteacher($name, $address, $mobile);
        return $result;
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $mobile = $_POST['mobile'];
            $teacher = new teachers(null, $name, $address, $mobile);
            $teacher->createteacher();
            header('Location: index.php');
        }
    }

    // public function update($teacher_id) {
    //     $teacher = new teachers();
    //     $teacher_data = $teacher->search($teacher_id);
    //     if ($teacher_data) {
    //         require_once '../teacher/teacher/edit.php';
    //     } else {
    //         header('Location: index.php');
    //     }
    // }

    // public function delete($teacher_id) {
    //     $teacher = new teachers();
    //     $teacher->delete($teacher_id);
    //     header('Location: index.php');
    // }
}
//$teachers = new teachercontroller();