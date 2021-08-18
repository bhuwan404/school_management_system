<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <a href="student.php">Back</a>
            </div><!-- /.col -->
            <div class="col-sm-4 text-center">
                <h3><strong>WELCOME ADMIN</strong></h3>
            </div>
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Student</li>
                </ol>
            </div><!-- /.col -->
            <hr>
            <h1 class="m-0 text-dark">Add Students</h1>
        </div><!-- /.row -->
    </div>
</div>
<div class="container pb-5 mb-5">
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
            <label for="courseTitle">CourseName</label>
            <select class="form-control" id="courseTitle" name="course">
                <option>Bsc.CSIT</option>
                <option>BCA</option>
                <option>BIM</option>
                <option>BBS</option>
            </select>       
        </div>
        <div class="form-group">
            <label for="contact">Phone No.</label>
            <input type="number" class="form-control" name="phone" required id="contact" placeholder="Enter Phone No.">
        </div>
        <div class="form-group">
            <label for="contact">Email</label>
            <input type="email" class="form-control" name="email" required id="email" placeholder="Enter Email Address">
        </div>
        <div class="form-group">
            <label for="user_name">Username</label>
            <input type="text" class="form-control" name="uname" required id="user_name" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" required id="password" placeholder="Enter Password">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
<?php include('footer.php') ?>

<?php

if (isset($_POST['submit'])) {

    include('../includes/dbcon.php');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $courseName = $_POST['course'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pwd = $_POST['password'];
    echo $courseName;

    $sql = "INSERT INTO student (fname, lname, contact, email, courseName, user_name, password) VALUES ('$fname', '$lname', '$phone', '$email', '$courseName', '$uname', '$pwd')";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        die('Insertion failed!');
    } else {
?>
        <script>
            alert('Data inserted successfully.');
            window.open('list_student.php?', '_self');
        </script>
<?php
    }
}
?>