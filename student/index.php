<?php 

include "../header.php";
$students = $studentController->index();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $studentController->create($_POST['name'], $_POST['mobile'], $_POST['address']);
    header("Location: index.php");
    exit();
}



?>

<div class="card">
  <div class="card-header">
    <h2>Student Application</h2>
  </div>
  <div class="card-body">
    <a href="/task/sms-1/student/create.php" class="btn btn-success btn-sm" title="Add New Student">
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
        foreach($students as $student) {
          $counter++;
           echo "<tr>";
                    echo "<td>" . $counter . "</td>";
                    echo "<td>" . $student['name'] . "</td>";
                    echo "<td>" . $student['address'] . "</td>";
                    echo "<td>" . $student['mobile'] . "</td>";
                    echo "<td>";
              ?>
            <td>
              <a href="" title="View Student"><button class="btn btn-primary">View</button></a>
              <a href="" title="Edit Student"><button class="btn btn-success">Edit</button></a>
            </td>
        <?php } ?>
          
            <td>
              <form method="POST" action="">
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student">Delete</button>
              </form>
              
            </td>
          </tr>
          <h2></h2>
        </tbody>
      </table>
    </div>
  </div>
</div>


<?php include "../footer.php" ?>