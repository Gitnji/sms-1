<?php include "../header.php" ?>

<div class="card">
    <div class="card-header">Contact Us Page</div>
    <div class="card-body">
        <form action="" method="POST">
            <input type="hidden" name="id" value="">
            
            
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="" required><br>
            <label for="syllabus">Syllabus</label>
            <input type="text" name="syllabus" id="syllabus" class="form-control" value="" required><br>
            <label for="duration">Duration (in Months)</label>
            <input type="tel" name="duration" id="duration" class="form-control" value="" required><br>
            
            <button type="submit">Update</button>
        </form>
    </div>
</div>

<?php include "../header.php" ?>