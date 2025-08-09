<?php include "../header.php" ?>

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
          <tr>" class="btn btn-success btn
            <th>#</th>
            <th>Name</th>
            <th>Syllabus</th>
            <th>Duration</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mathematics</td>
            <td>Calculus</td>
            <td>2 Months</td>
            
            <td>
              <a href="" title="View Course"><button class="btn btn-primary">View</button></a>
              <a href="" title="Edit Course"><button class="btn btn-success">Edit</button></a>
              
              <form method="POST" action="">
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Course">Delete</button>
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