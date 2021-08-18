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
            <h1 class="text-dark">Update Teachers</h1>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container pb-5">
<?php
include('../includes/dbcon.php');
$id = $_GET['id'];
$sql = "select * from teacher where id = '$id'";
$res = mysqli_query($conn, $sql);
if(!$res){
    die("failed to update");
}
else{
    $row = mysqli_fetch_assoc($res);
    $course = $row['courseName'];
?>
    <form method="POST">
    <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" name="fname" required id="firstname" placeholder="Enter First Name" value = "<?php echo $row['fname']; ?>">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" name="lname" required id="lastname" placeholder="Enter Last Name" value = "<?php echo $row['lname']; ?>">
        </div>
        <div class="form-group">
            <label for="courseTitle">CourseName</label>
            <select class="form-control" id="courseTitle" name="course">
                <option 
                <?php if($course == 'Bsc.CSIT'){echo "selected"; }?>
                >Bsc.CSIT</option>
                <option 
                <?php if($course == 'BCA'){echo "selected"; }?>
                >BCA</option>
                <option
                <?php if($course == 'BIM'){echo "selected"; }?>
                >BIM</option>
                <option
                <?php if($course == 'BBS'){echo "selected"; }?>
                >BBS</option>
            </select>       
        </div>
        <div class="form-group">
            <label for="contact">Phone No.</label>
            <input type="number" class="form-control" name="phone" required id="contact" placeholder="Enter Phone No." value = "<?php echo $row['contact']; ?>">
        </div>
        <div class="form-group">
            <label for="contact">Email</label>
            <input type="email" class="form-control" name="email" required id="email" placeholder="Enter Email Address" value = "<?php echo $row['email']; ?>">
        </div>
        <div class="form-group">
            <label for="user_name">Username</label>
            <input type="text" class="form-control" name="uname" required id="user_name" placeholder="Enter Username" value = "<?php echo $row['user_name']; ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" required id="password" placeholder="Enter Password" value = "<?php echo $row['password']; ?>">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
<?php } ?>

</div>
<?php include('footer.php') ?>

<?php

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $courseName = $_POST['course'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pwd = $_POST['password'];

    $sql = "update teacher set fname='$fname', lname='$lname', contact='$phone', email='$email', courseName='$courseName', user_name='$uname', password='$pwd' where id='$id' ";
    $res = mysqli_query($conn, $sql);

    if (!$res) {
        die('Updation failed!');
    } else {
?>
        <script>
            alert('Data Updated successfully.');
            window.open('list_teacher.php?', '_self');
        </script>
<?php
    }
}
?>