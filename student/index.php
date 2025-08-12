<?php include "../header.php" ?>

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
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>My Name</td>
            <td>My Address</td>
            <td>684390232</td>
            
            <td>
              <a href="" title="View Student"><button class="btn btn-primary">View</button></a>
              <a href="" title="Edit Student"><button class="btn btn-success">Edit</button></a>
              
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