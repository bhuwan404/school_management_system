<?php
include('../includes/dbcon.php');
$id = $_GET['id'];

$data = "SELECT * FROM user_form WHERE id=" . $id . "";
$result = mysqli_query($conn, $data);
$row = mysqli_fetch_assoc($result);

$fname = $row['fname'];
$lname = $row['lname'];
$contact = $row['phone'];
$username = $row['username'];
$password = $row['password'];
$user_type = $row['user_type'];

if ($user_type == 2) {
    $standard = $row['standard'];
    $rollno = $row['rollno'];
    $sql = "INSERT INTO student (fname, lname, contact, standard, rollno, user_name, password ) VALUES ('$fname', '$lname', '$contact', '$standard', '$rollno', '$username', '$password')";
}
if ($user_type == 1) {
    $sql = "INSERT INTO teacher (fname, lname, contact,  user_name, password ) VALUES ('$fname', '$lname', '$contact', '$username', '$password')";
}
$res = mysqli_query($conn, $sql);
if (!$res) {
    die("user approval failed");
} else {
    $query = mysqli_query($conn, "UPDATE user_form SET check_approval=1 WHERE id=" . $id . "");
    if (!$query) {
        die('set approval id failed');
    }

?>
    <script>
        alert('User request approved.');
        window.open("user_form.php", "_self");
    </script>
<?php
}
