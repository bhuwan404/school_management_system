<?php
$id = $_GET['id'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$course = $_POST['course'];
$phone = $_POST['contact'];
$email = $_POST['email'];
$username = $_POST['uname'];
$password = $_POST['password'];

if ($id == 2) {
    $user = "student";
}
else{
    $user = "teacher";
}

include('includes/dbcon.php');
$sql = "INSERT INTO user_form (fname, lname, courseName, phone, email, username, password, user_type) VALUES('$fname', '$lname', '$course', '$phone', '$email', '$username', '$password', '$user')";

$res = mysqli_query($conn, $sql);
if (!$res) {
    // echo "failed";
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