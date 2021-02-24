<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <a href="teacher.php">Back</a>
            </div><!-- /.col -->
            <div class="col-sm-4 text-center">
                <h3><strong>WELCOME ADMIN</strong></h3>
            </div>
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Teacher</li>
                </ol>
            </div><!-- /.col -->
            <hr>
            <h1 class="text-dark">Add Teachers</h1>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container pb-5">
    <form method="POST">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" name="fname" required id="firstname" placeholder="Enter First Name">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" name="lname" id="lastname" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
            <label for="contact">Phone No.</label>
            <input type="number" class="form-control" name="phone" required id="contact" placeholder="Enter Phone No.">
        </div>
        <div class="form-group">
            <label for="user_name">Username</label>
            <input type="text" class="form-control" name="uname" required id="user_name" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" required id="password" placeholder="Enter Password">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>

</div>
<?php include('footer.php') ?>

<?php

if (isset($_POST['submit'])) {

    include('../includes/dbcon.php');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $uname = $_POST['uname'];
    $pwd = $_POST['password'];

    $sql = "INSERT INTO teacher (fname, lname, contact, user_name, password) VALUES ('$fname', '$lname', '$phone', '$uname', '$pwd')";
    $res = mysqli_query($conn, $sql);

    if (!$res) {
        die('Insertion failed!');
    } else {
?>
        <script>
            alert('Data inserted successfully.');
            window.open('list_teacher.php?', '_self');
        </script>
<?php
    }
}
?>