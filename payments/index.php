<?php include "../header.php" ?>


<div class="card">
  <div class="card-header">
    <h2>Payments</h2>
  </div>
  <div class="card-body">
    <a href="" class="btn btn-success btn-sm" title="Add New Payment">
      <i class="fa fa-plus" aria-hidden="true"></i> Add New
    </a>
    <br />
    <br />
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Enrollment No</th>
            <th>Paid Date</th>
            <th>Amount</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>12/03/27</td>
            <td>23,000 CFAF</td>
            
            <td>
              <a href="" title="View Payment"><button class="btn btn-primary">View</button></a>
              <a href="" title="Edit Payment"><button class="btn btn-success">Edit</button></a>
              
              <form method="POST" action="">
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Payment">Delete</button>
              </form>

              <a href="" title="Edit Payment"><button class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i> Print</button></a>
              
            </td>
          </tr>
          <h2></h2>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include "../footer.php" ?>