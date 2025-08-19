<?php
include '../header.php';
require_once '../controller/teachercontroller.php';
$teacherController = new teachercontroller();
$teachers = $teacherController->index();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $teacherController->create($_POST['name'], $_POST['address'], $_POST['mobile']);
  header("Location: index.php");
  exit();
}
?>

<div class="card">
  <div class="card-header">
    <h2>Teacher Application</h2>
  </div>
  <div class="card-body">
    <a href="" class="btn btn-success btn-sm" title="Add New Teacher">
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
            <th>Address</th>
            <th>Mobile</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $counter = 0;
          foreach($teachers as $teacher) {
            $counter++;
            echo "<tr>";
            echo "<td>" . $counter . "</td>";
            echo "<td>" . htmlspecialchars($teacher['name']) . "</td>";
            echo "<td>" . htmlspecialchars($teacher['address']) . "</td>";
            echo "<td>" . htmlspecialchars($teacher['mobile']) . "</td>";
            echo '<td>';
            echo '<a href="#" title="View Teacher"><button class="btn btn-primary">View</button></a> ';
            echo '<a href="#" title="Edit Teacher"><button class="btn btn-success">Edit</button></a> ';
            echo '<form method="POST" action="" style="display:inline;">';
            echo '<button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher">Delete</button>';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
          }
         ?>    
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include "../footer.php" ?>