<?php include "../header.php" ?>

<div class="card">
  <div class="card-header">
    <h2>Batches</h2>
  </div>
  <div class="card-body">
    <a href="" class="btn btn-success btn-sm" title="Add New Batch">
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
            <th>Course</th>
            <th>Start Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Student's name</td>
            <td>Course student is taking</td>
            <td>00/00/0000</td>
            
            <td>
              <a href="" title="View Batch"><button class="btn btn-primary">View</button></a>
              <a href="" title="Edit Batch"><button class="btn btn-success">Edit</button></a>
              
              <form method="POST" action="">
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Batch">Delete</button>
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