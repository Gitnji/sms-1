<?php

include "../controller/studentcontroller.php";
$studentController = new StudentController();

// require_once __DIR__ . '/core/dbconnect.php';
// require_once __DIR__ . '/models/student.php';
// require_once __DIR__ . '/models/teacher.php';
//require_once __DIR__ . '/models/course.php';
//require_once __DIR__ . '/models/batch.php';
//require_once __DIR__ . '/models/enrollment.php';
//require_once __DIR__ . '/models/payment.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Student Management System</title>
  <style>
    body {
      margin: 0;
      font-family: "Lato", sans-serif;
    }

    .sidebar {
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
    }

    .sidebar a {
      display: block;
      color: black;
      padding: 16px;
      text-decoration: none;
    }

    .sidebar a.active {
      background-color: #04AA6D;
      color: white;
    }

    .sidebar a:hover:not(.active) {
      background-color: #555;
      color: white;
    }

    div.content {
      margin-left: 200px;
      padding: 1px 16px;
      height: 1000px;
    }

    @media screen and (max-width: 700px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }

      .sidebar a {
        float: left;
      }

      div.content {
        margin-left: 0;
      }
    }
    @media screen and (max-width: 400px) {
      .sidebar a {
        text-align: center;
        float: none;
      }
    }
  </style>
</head>

<body>
  <div class="container-sm">
    <div class="row">
      <div class="col-12 col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <h1>Student Management</h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        </nav>
      </div>
      <div class="col-12">
        <div class="row">
          <div class="col-3" style="width: 25vw">
            <div class="sidebar">
              <a class="active" href="/header.php">Home</a>
              <a href="/task/sms-1/student/index.php">Student</a>
              <a href="/task/sms-1/teacher/index.php">Teacher</a>
              <a href="/task/sms-1/courses/index.php">Courses</a>
              <a href="/task/sms-1/batches/index.php">Batches</a>
              <a href="/task/sms-1/enrollments/index.php">Enrollment</a>
              <a href="/task/sms-1/payments/index.php">Payment</a>
            </div>
          </div>
          <div class="col-9">

        