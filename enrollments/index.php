<?php include "../header.php" ?>

<div class="card">
  <div class="card-header">
    <h2>Enrollments</h2>
  </div>
  <div class="card-body">
    <a href="" class="btn btn-success btn-sm" title="Add New Enrollment">
      <i class="fa fa-plus" aria-hidden="true"></i> Add New
    </a>
    <br />
    <br />
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Enroll no</th>
            <th>Batch</th>
            <th>Student</th>
            <th>Join Date</th>
            <th>Fee</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>w</td>
            <td>w</td>
            <td>w</td>
            <td>w</td>
            <td>w</td>
            
            <td>
              <a href="" title="View Enrollment"><button class="btn btn-primary">View</button></a>
              <a href="" title="Edit Enrollment"><button class="btn btn-success">Edit</button></a>
              
              <form method="POST" action="">
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Enrollment">Delete</button>
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