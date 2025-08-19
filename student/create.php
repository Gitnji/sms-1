<?php
include "../header.php";

$msg = "";
if(isset($_POST['submit'])){
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $address = isset($_POST['address']) ? $_POST['address'] : null;
    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : null;
    $age = isset($_POST['age']) ? $_POST['age'] : null;
    $parent_contact = isset($_POST['parent_contact']) ? $_POST['parent_contact'] : null;
    if($name && $address && $mobile){
        if($studentController->create($name,$address, $mobile)){
            header("Location: index.php");
        } else {
            $msg = "Student Creation Not Successful";
        }
    }
}
?>

<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        <form action="" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required><br>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" required><br>
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control"><br>
            <label for="mobile">Mobile Number</label>
            <input type="tel" name="mobile" id="mobile" class="form-control" required><br>
            <label for="parent-contact">Parent Contact</label>
            <input type="tel" name="parent_contact" id="parent-contact" class="form-control"><br>
            
            <button type="submit" name="submit">Create</button>
        </form>
    </div>
</div>

<?php include "../footer.php" ?>