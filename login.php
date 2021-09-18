<?php
if (isset($_SESSION['uid'])) {
    header('location: admin/dashboard.php');
}
?>

<?php 
include('header.php'); 
include('navbar.php');
?>

<section>
    <div class="container-fluid pt-5 bg-light">
        <h4 class="pt-3"><i class="fas fa-home"></i> / LOGIN PANNEL</h4>
    </div>
</section>


<section class="vh-100">
  <div class="container h-custom" style="margin-bottom: 200px;">
    <div class="row d-flex justify-content-center align-items-center h-100">

      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png" class="img-fluid"
          alt="Sample image">
      </div>

      <!-- login from -->
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="login_details.php" method="POST">
          <!-- User input -->
          <div class="form-outline mb-4">
            <select id="userType" name="usertype" class="form-control form-control-lg" required>
              <option value="" selected hidden disabled>Select User</option>
              <option value="student">Student</option>
              <option value="teacher">Teacher</option>
              <option value="admin">Admin</option>
            </select>
            <label class="form-label" for="userType">User</label>
          </div>

          <!-- Userrname input -->
          <div class="form-outline mb-4">
            <input type="text" name="username" id="uname" class="form-control form-control-lg"
              placeholder="Enter your username" required/>
            <label class="form-label" for="uname">Username</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="password" id="pwd" class="form-control form-control-lg"
              placeholder="Enter password" required/>
            <label class="form-label" for="pwd">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger" data-target="#signup_modal" data-toggle="modal">Register</a></p>
          </div>

        </form>
      </div>

    </div>
  </div>
 
  <div class="footerBottom d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary" style="bottom:0; position:fixed; width:100%; padding-top:100px;">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2021. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>

<!-- signup modal -->
<div class="modal" id="signup_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="">Signup Form</h3>
                <button class="close" type="button" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="signup_details.php" method="POST">
                    <div class="md-form form-group">
                    <select class="form-control" name="usertype" required>
                        <option selected hidden disabled>Select User</option>
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                    </select> 
                    </div>
                    <div class="md-form form-group">
                        <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="md-form form-group">
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div class="md-form form-group">
                    <select class="form-control" id="courseTitle" name="course">
                        <option selected hidden disabled>Select Faculty</option>
                        <option>Bsc.CSIT</option>
                        <option>BCA</option>
                        <option>BIM</option>
                        <option>BBS</option>
                    </select> 
                    </div>
                    <div class="md-form form-group">
                        <input type="text" name="contact" class="form-control" placeholder="Phone No." required>
                    </div>
                    
                    <div class="md-form form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="md-form form-group">
                        <input type="text" name="uname" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="md-form form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="md-form from-group">
                        <button type="submit" class="btn btn-primary" name="signup_student">Submit</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
