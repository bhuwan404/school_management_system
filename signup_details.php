<?php
$id = $_GET['id'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['contact'];
$username = $_POST['uname'];
$password = $_POST['password'];

if ($id == 2) {
    $rollno = $_POST['rollno'];
    $standard = $_POST['standard'];
}

include('includes/dbcon.php');

if ($id == 1) {

    $sql = "INSERT INTO user_form (fname, lname, phone, username, password, user_type) VALUES('$fname', '$lname', '$phone', '$username', '$password', '$id')";
}
if ($id == 2) {
    $sql = "INSERT INTO user_form (fname, lname, phone, username, password, user_type, standard, rollno) VALUES('$fname', '$lname', '$phone', '$username', '$password', '$id', '$standard', '$rollno')";
}
$res = mysqli_query($conn, $sql);
if (!$res) {
    die('Signup failed!');
} else {
?>
    <script>
        alert('Form submission successfully.\nYou can login to dashboard once admin approve your request.');
        window.open('login.php?', '_self');
    </script>
<?php
}
?>