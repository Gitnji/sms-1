
<?php include "../header.php" ?>

<div class="card">
    <div class="card-header">Contact Us Page</div>
    <div class="card-body">
        <form action="" method="POST">
            <input type="hidden" name="id" value="">
            
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="" required><br>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control"  value="" required><br>
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control"  value=""><br>
            <label for="mobile">Mobile Number</label>
            <input type="tel" name="mobile" id="mobile" class="form-control"  value="" required><br>
            <label for="parent-contact">Parent Contact</label>
            <input type="tel" name="parent_contact" id="parent-contact" class="form-control"  value=""><br>
            
            <button type="submit">Update</button>
        </form>
    </div>
</div>

<?php include "../footer.php" ?>