<?php
session_start();
$uid = $_SESSION['uid'];
include('../includes/dbcon.php')
?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <a href="student.php">Back</a>
            </div><!-- /.col -->
            <div class="col-sm-4 text-center">
                <h3><strong>WELCOME
                        <?php
                        if ($uid == 3) {
                            echo "STUDENT";
                        } else if ($uid == 2) {
                            echo "TEACHER";
                        } else { //if($uid == 3])
                            echo "ADMIN";
                        }
                        ?>
                    </strong></h3>
            </div>
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Student</li>
                </ol>
            </div><!-- /.col -->
            <hr>
            <h1 class="m-0 text-dark">All Students</h1>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container pb-5">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Name</th>
                    <th>Standard</th>
                    <th>Roll No.</th>
                    <th>Contact</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include('../includes/dbcon.php');
                $sql = "SELECT * FROM student";
                $res = mysqli_query($conn, $sql);

                if (mysqli_num_rows($res) < 1) {
                    echo "<tr class=\"text-center\">";
                    echo "<td colspan=\"7\">No student added</td>";
                    echo "</tr>";
                } else {
                    $count = 1;
                    while ($row = mysqli_fetch_assoc($res)) {
                        echo "<tr>";
                        echo "<td>" . $count++ . "</td>";
                        echo "<td>" . $row['fname'] . " " . $row['lname'] . "</td>";
                        echo "<td>" . $row['standard'] . "</td>";
                        echo "<td>" . $row['rollno'] . "</td>";
                        echo "<td>" . $row['contact'] . "</td>";
                        echo "<td><a href=\"update_student.php?id=" . $row['id'] . "\">update</a></td>";
                        echo "<td><a href=\"delete_student.php?id=" . $row['id'] . "\">delete</a></td>";

                        echo "</tr>";
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
</div>

</div>
<?php include('footer.php') ?>