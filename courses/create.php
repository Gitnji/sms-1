<?php include "../header.php" ?>

<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        <form action="" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required><br>
            <label for="syllabus">Syllabus</label>
            <input type="text" name="syllabus" id="syllabus" class="form-control" required><br>
            <label for="duration">Duration (in Months)</label>
            <input type="number" name="duration" id="duration" class="form-control" required><br>
            
            <button type="submit">Create</button>
        </form>
    </div>
</div>

<?php include "../footer.php" ?>