<?php include "../header.php";
require_once '../controller/coursecontroller.php';
$courseController = new coursecontroller();
$courses = $courseController->index();
?>

<div class="card">
  <div class="card-header">
    <h2>Course Application</h2>
  </div>
  <div class="card-body">
    <a href="" class="btn btn-success btn-sm" title="Add New Course">
      <i class="fa fa-plus" aria-hidden="true"></i> Add New
    </a>
    <br />
    <br />
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Syllabus</th>
            <th>Duration</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $counter = 0;
          foreach ($courses as $course) {
            $counter++;
            echo "<tr>";
            echo "<td>" . $counter . "</td>";
            echo "<td>" . htmlspecialchars($course['name']) . "</td>";
            echo "<td>" . (isset($course['syllabus']) ? htmlspecialchars($course['syllabus']) : '') . "</td>";
            echo "<td>" . (isset($course['duration']) ? htmlspecialchars($course['duration']) : '') . "</td>";
            echo '<td>';
            echo '<a href="#" title="View Course"><button class="btn btn-primary">View</button></a> ';
            echo '<a href="#" title="Edit Course"><button class="btn btn-success">Edit</button></a> ';
            echo '<form method="POST" action="" style="display:inline;">';
            echo '<button type="submit" class="btn btn-danger btn-sm" title="Delete Course">Delete</button>';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
          }
          ?>
          <h2></h2>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include "../footer.php" ?>