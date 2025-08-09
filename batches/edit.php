<?php include "../header.php" ?>

<div class="card">
    <div class="card-header">Batches</div>
    <div class="card-body">
        <form action="" method="POST">
            <input type="hidden" name="id" value="">
            
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="" required><br>
            <label for="course_id">Course ID</label>
            <input type="text" name="course_id" id="course_id" class="form-control" value="" required><br>
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control" value="" required><br>
            
            <button type="submit">Update</button>
        </form>
    </div>
</div>

<?php include "../footer.php" ?>