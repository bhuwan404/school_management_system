<?php
if (isset($_SESSION['uid'])) {
    header('location: admin/dashboard.php');
}
?>

<?php include('header.php'); ?>
<section class="navigation">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  px-lg-5 px-3 text-light">
        <ul class="navbar-nav mr-auto pl-lg-3 pl-2">
            <li class="nav-item">
                <a href="index.php" class="btn btn-info text-light text-decoration-none">Back</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto">
            <li class="navbar-brand nav-item">School Management System: <strong>LOGIN PANNEL</strong></li>
        </ul>
    </nav>
</section>

<section>
    <div class="container m-5">
        <div class="row">
            <div class="col-6">
            </div>

            <div class="col-6">
                <ul class="nav nav-tabs border-0">
                    <li class="nav-item"><a class="nav-link active border-warning border-bottom-0" href="#student" data-toggle="tab">STUDENT</a></li>
                    <li class="nav-item"><a class="nav-link border-danger border-bottom-0" href="#teacher" data-toggle="tab">TEACHER</a></li>
                    <li class="nav-item"><a class="nav-link border-dark border-bottom-0" href="#admin" data-toggle="tab">ADMIN</a></li>
                </ul>
                <div class="tab-content shadow">

                    <div class="tab-pane bg-light active fade show border border-warning" id="student">
                        <!-- student login form -->
                        <h3 class="text-center pt-3">Student Login</h3>
                        <hr>
                        <div class="card-body">
                            <form action="student_login.php" method="POST">

                                <div class="md-form form-group">
                                    <input type="text" name="student_uname" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="md-form form-group">
                                    <input type="password" name="student_password" class="form-control" placeholder="Password" required>
                                </div>
                                <input class="form-control btn btn-info" type="submit" value="submit" name="login_student">
                            </form>
                            <div class="my-3 text-center">
                                <a class="text-decoration-none" href="?id=3" data-target="#signup_modal" data-toggle="modal">Sign Up Now</a>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane bg-light fade-show border border-danger" id="teacher">
                        <!-- teacher login form -->
                        <h3 class="text-center pt-3">Teacher Login</h3>
                        <hr>
                        <div class="card-body">
                            <form action="teacher_login.php" method="POST">

                                <div class="md-form form-group">
                                    <input type="text" name="teacher_uname" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="md-form form-group">
                                    <input type="password" name="teacher_password" class="form-control" placeholder="Password" required>
                                </div>
                                <input class="form-control btn btn-info" type="submit" value="submit" name="login_teacher">
                            </form>
                            <div class="my-3 text-center">
                                <a class="text-decoration-none" href="?id=2" data-target="#signup_modal" data-toggle="modal">Sign Up Now</a>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane bg-light fade show border border-dark" id="admin">
                        <!-- admin login form -->
                        <h3 class="text-center pt-3">Admin Login</h3>
                        <hr>
                        <div class="card-body">
                            <form action="admin_login.php" method="POST">

                                <div class="md-form form-group">
                                    <input type="text" name="admin_uname" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="md-form form-group">
                                    <input type="password" name="admin_password" class="form-control" placeholder="Password" required>
                                </div>
                                <input class="form-control btn btn-info" type="submit" value="submit" name="login_admin">
                            </form>
                            <div class="my-3 text-center">
                                <a class="text-decoration-none" href="?id=1" data-target="#signup_modal" data-toggle="modal">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- signup modal -->

<?php
$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo $id;
}
?>
<div class="modal" id="signup_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="">Signup Form</h3>
                <button class="close" type="button" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">

                    <div class="md-form form-group">
                        <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="md-form form-group">
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div class="md-form form-group">
                        <input type="text" name="contact" class="form-control" placeholder="Phone No." required>
                    </div>

                    <?php if ($id == 3) { ?>
                        <div class="md-form form-group">
                            <input type="text" name="standard" class="form-control" placeholder="standard" required>
                        </div>
                        <div class="md-form form-group">
                            <input type="text" name="rollno" class="form-control" placeholder="Roll No." required>
                        </div>
                    <?php } ?>

                    <div class="md-form form-group">
                        <input type="text" name="uname" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="md-form form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal" name="signup">Submit</button>
            </div>
        </div>
    </div>
</div>