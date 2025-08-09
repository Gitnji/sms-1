<?php include "../header.php" ?>


<div class="card">
    <div class="card-header">Payment</div>
    <div class="card-body">
        <form action="" method="POST">
            <input type="hidden" name="id" value="">
            
            <label for="enrollment_id">Enrollment</label><br>
            <select name="enrollment_id" id="enrollment_id" class="custom-select" >
                <option value="" selected>Select An Enrollment</option>
                <option value="" ></option>
            </select><br>

            <label for="paid_date">Paid Date</label>
            <input type="date" name="paid_date" id="paid_date" class="form-control" value="" required><br>
            <label for="amount">Amount</label>
            <input type="text" name="amount" id="amount" class="form-control" value="" required><br>
            
            <button type="submit">Update</button>
        </form>
    </div>
</div>

<?php include "../footer.php" ?>