<?php include "../header.php" ?>

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
            <td>My name</td>
            <td>Mobile</td>
            <td>675823323</td>
            
            <td>
              <a href="" title="View Teacher"><button class="btn btn-primary">View</button></a>
              <a href="" title="Edit Teacher"><button class="btn btn-success">Edit</button></a>
              
              <form method="POST" action="">
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher">Delete</button>
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