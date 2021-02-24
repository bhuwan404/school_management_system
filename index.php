<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>school management system</title>

  <link rel="stylesheet" href="css/style.css">

  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/f7e50e2bfa.js" crossorigin="anonymous"></script>

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- swaped event -->
  <link rel="stylesheet" href="js/swiped-events.min.js">

</head>

<body>
  <!-- navigation -->
  <section class="navigation">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top px-lg-5 px-3">
      <a class="navbar-brand order-2 order-lg-0 mr-auto mx-lg-3" href="index.php"><b>SMS</b></a>
      <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav main-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about-us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#courses">Programs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact-us">Contact-us</a>
          </li>
        </ul>
        <ul class="navbar-nav nav-flex-icons ml-auto">
          <li class="nav-item">
            <a href="admin/dashboard.php" class="text-light text-decoration-none"><i class="fas fa-user text-light mr-2"></i><strong>Login</strong></a>
          </li>
        </ul>
      </div>

    </nav>
  </section>

  <!-- hero section -->

  <div class="container-fluid" style="background: linear-gradient(45deg, purple, transparent);">
    <div class="d-flex" style=" height: 100vh;">

      <div class=" row my-auto mx-lg-5 mx-md-3 mx-sm-1">
        <div class="col-md-6 col-lg-6 col-12 text-light my-5">
          <h3><b>School Managenent System</b></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias animi nulla provident facere ullam ipsam sed nostrum</p>
          <a href=""><button type="button" class="btn btn-info shadow"><i class="fas fa-phone"></i> Call Now</button></a>
        </div>
        <div class="col-md-6 col-lg-6 col-12">

          <div class="w-75 card mx-auto text-center pt-4 shadow-lg">
            <h4>Inquiry Form</h4>
            <form action="" method="POST">
              <div class="form-group">
                <div class="card-body">
                  <div class="mb-4">
                    <input type="text" placeholder="Your name" required class="form-control">
                  </div>
                  <div class="mb-4">
                    <input type="text" placeholder="Your email" class="form-control">
                  </div>
                  <div class="mb-4">
                    <input type="text" placeholder="Your mobile" required class="form-control">
                  </div>
                  <div class="mb-4">
                    <textarea class="form-control" placeholder="Your query" name="message" id="" cols="30" rows="2"></textarea>
                  </div>
                  <input class="px-5" type="submit" value="Submit">
                </div>
              </div>

            </form>
          </div>

        </div>
      </div>

    </div>
  </div>

  <!-- our courses -->
  <section class="py-5 bg-light" id="courses">
    <div class="text-center mb-5">
      <h2>Our Courses</h2>
    </div>

    <div class="container">

      <div class="row text-center">
        <div class="col-lg-3 col-md-6 col-12">
          <div class="card mb-5 shadow">
            <div>
              <img src="images/img1.jpg" alt="" class="img-fluid rounded-top">
            </div>
            <div class="card-body">
              <p class="card-text">
                Bsc. CSIT
              </p>
              <hr>
              <button class="btn btn-info">View More</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
          <div class="card mb-5 shadow">
            <div>
              <img src="images/img1.jpg" alt="" class="img-fluid rounded-top">
            </div>
            <div class="card-body">
              <p class="card-text">
                BCA
              </p>
              <hr>
              <button class="btn btn-info">View More</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
          <div class="card mb-5 shadow">
            <div>
              <img src="images/img1.jpg" alt="" class="img-fluid rounded-top">
            </div>
            <div class="card-body">
              <p class="card-text">
                BIM
              </p>
              <hr>
              <button class="btn btn-info">View More</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
          <div class="card mb-5 shadow">
            <div>
              <img src="images/img1.jpg" alt="" class="img-fluid rounded-top">
            </div>
            <div class="card-body">
              <p class="card-text">
                BBS
              </p>
              <hr>
              <button class="btn btn-info">View More</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- About us -->
  <section class="py-5" id="about-us">
    <div class="text-center mb-5">
      <h2>About Us</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/ncit1.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h4 class="pb-2">Nagarjuna College of IT</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia corrupti aspernatur dolores sint, ipsum totam commodi velit nisi, animi, perferendis possimus quo doloribus incidunt neque aut asperiores omnis quam quia?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quasi veritatis excepturi distinctio earum laborum nulla accusamus? Officiis possimus quidem dolore exercitationem delectus perferendis deserunt in, hic provident eos. Saepe nulla voluptates autem nam ratione vel eius tempore odit ab dicta, voluptate reprehenderit doloremque hic voluptatem minima obcaecati ad libero?</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Teachers -->
  <section class="py-5 bg-light" id="teachers">
    <div class="text-center mb-5">
      <h2>Our Teachers</h2>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 col-12">
          <div class="card shadow p-3 mb-5">
            <div class="row">
              <div class="col-4">
                <img src="images/teacher.jpg" alt="" class="img-fluid rounded-circle my-auto" style="">
              </div>
              <div class="col-8 my-auto">
                <div class="my-auto">
                  <h5 class="">Teacher's Name </h5>
                  <i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i>
                </div>
              </div>
            </div>
            <!-- <hr> -->
            <div class="card-body text-center">
              <p>Database Management System <br>
                Rating <i class="fa fa-star pr-2"></i><i class="fa fa-star  pr-2"></i><i class="fa fa-star pr-2"></i><i class="fa fa-star pr-2"></i><i class="fa fa-star pr-2"></i>
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12">
          <div class="card shadow p-3 mb-5">
            <div class="row">
              <div class="col-4">
                <img src="images/teacher.jpg" alt="" class="img-fluid rounded-circle my-auto" style="">
              </div>
              <div class="col-8 my-auto">
                <div class="my-auto">
                  <h5 class="">Teacher's Name </h5>
                  <i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i>
                </div>
              </div>
            </div>
            <!-- <hr> -->
            <div class="card-body text-center">
              <p>Database Management System <br>
                Rating <i class="fa fa-star pr-2"></i><i class="fa fa-star  pr-2"></i><i class="fa fa-star pr-2"></i><i class="fa fa-star pr-2"></i><i class="fa fa-star pr-2"></i>
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 ">
          <div class="card shadow p-3 mb-5">
            <div class="row">
              <div class="col-4">
                <img src="images/teacher.jpg" alt="" class="img-fluid rounded-circle my-auto" style="">
              </div>
              <div class="col-8 my-auto">
                <div class="my-auto">
                  <h5 class="">Teacher's Name </h5>
                  <i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i>
                </div>
              </div>
            </div>
            <!-- <hr> -->
            <div class="card-body text-center">
              <p>Database Management System <br>
                Rating <i class="fa fa-star pr-2"></i><i class="fa fa-star  pr-2"></i><i class="fa fa-star pr-2"></i><i class="fa fa-star pr-2"></i><i class="fa fa-star pr-2"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 ">
          <div class="card shadow p-3 mb-5">
            <div class="row">
              <div class="col-4">
                <img src="images/teacher.jpg" alt="" class="img-fluid rounded-circle my-auto" style="">
              </div>
              <div class="col-8 my-auto">
                <div class="my-auto">
                  <h5 class="">Teacher's Name </h5>
                  <i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i>
                </div>
              </div>
            </div>
            <!-- <hr> -->
            <div class="card-body text-center">
              <p>Database Management System <br>
                Rating <i class="fa fa-star pr-2"></i><i class="fa fa-star  pr-2"></i><i class="fa fa-star pr-2"></i><i class="fa fa-star pr-2"></i><i class="fa fa-star pr-2"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 ">
          <div class="card shadow p-3 mb-5">
            <div class="row">
              <div class="col-4">
                <img src="images/teacher.jpg" alt="" class="img-fluid rounded-circle my-auto" style="">
              </div>
              <div class="col-8 my-auto">
                <div class="my-auto">
                  <h5 class="">Teacher's Name </h5>
                  <i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i>
                </div>
              </div>
            </div>
            <!-- <hr> -->
            <div class="card-body text-center">
              <p>Database Management System <br>
                Rating <i class="fa fa-star pr-2"></i><i class="fa fa-star  pr-2"></i><i class="fa fa-star pr-2"></i><i class="fa fa-star pr-2"></i><i class="fa fa-star pr-2"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 ">
          <div class="card shadow p-3 mb-5">
            <div class="row">
              <div class="col-4">
                <img src="images/teacher.jpg" alt="" class="img-fluid rounded-circle my-auto" style="">
              </div>
              <div class="col-8 my-auto">
                <div class="my-auto">
                  <h5 class="">Teacher's Name </h5>
                  <i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i><i class="fa fa-star text-warning pr-2"></i>
                </div>
              </div>
            </div>
            <!-- <hr> -->
            <div class="card-body text-center">
              <p>Database Management System <br>
                Rating <i class="fa fa-star pr-2"></i><i class="fa fa-star  pr-2"></i><i class="fa fa-star pr-2"></i><i class="fa fa-star pr-2"></i><i class="fa fa-star pr-2"></i>
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>

  <!-- Gallery -->
  <section class="py-5" id="gallery">
    <div class="text-center mb-5">
      <h2>Gallery</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6 mb-5">
          <img src="images/gal.jpg" alt="" class="img-fluid">
          <h5 class="text-center pt-2">Some text</h5>
        </div>
        <div class="col-lg-3 col-6 mb-5">
          <img src="images/gal.jpg" alt="" class="img-fluid">
          <h5 class="text-center pt-2">Some text</h5>
        </div>
        <div class="col-lg-3 col-6 mb-5">
          <img src="images/gal.jpg" alt="" class="img-fluid">
          <h5 class="text-center pt-2">Some text</h5>
        </div>
        <div class="col-lg-3 col-6 mb-5">
          <img src="images/gal.jpg" alt="" class="img-fluid">
          <h5 class="text-center pt-2">Some text</h5>
        </div>
        <div class="col-lg-3 col-6 mb-5">
          <img src="images/gal.jpg" alt="" class="img-fluid">
          <h5 class="text-center pt-2">Some text</h5>
        </div>
        <div class="col-lg-3 col-6 mb-5">
          <img src="images/gal.jpg" alt="" class="img-fluid">
          <h5 class="text-center pt-2">Some text</h5>
        </div>
        <div class="col-lg-3 col-6 mb-5">
          <img src="images/gal.jpg" alt="" class="img-fluid">
          <h5 class="text-center pt-2">Some text</h5>
        </div>
        <div class="col-lg-3 col-6 mb-5">
          <img src="images/gal.jpg" alt="" class="img-fluid">
          <h5 class="text-center pt-2">Some text</h5>
        </div>
      </div>
    </div>
  </section>

  <!-- footer section -->
  <footer class="bg-dark text-light py-3" id="contact-us">
    <div class="text-center py-4">
      <h2><strong>Thanks for Visiting</strong> </h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <h3 class="text-center pb-2">Get in Touch</h3>
          <!-- <hr> -->

          <div class="address text-center">
            <i class="fas fa-map-marker-alt px-2 pb-2"></i>Shankhamul- 9 , Lalitpur, Nepal(next to Sankha park)<br>
            <i class="fas fa-phone px-2 pb-2"></i>(+977 1) 5260894, 9851073795, 01 5260890<br>
            <i class="fas fa-envelope px-2 pb-2"></i>ncitcollege@hotmail.com, info@nagarjuna.edu.np<br>
            <i class="fas fa-globe px-2 pb-2"></i>http://nagarjunacollege.edu.np/<br>
          </div>
          <!-- <div class="sm-link text-center">
            <a href=""><i class="fab fa-facebook-square pr-1"></i></a>
            <a href=""><i class="fab fa-twitter pr-1"></i></i></a>
            <a href=""><i class="fab fa-github pr-1"></i></a>
            <a href=""><i class="fab fa-linkedin pr-1"></i></a>
          </div> -->

        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <div class="mailing text-center">
            <h3 class="text-center pb-2">Leave a message</h3>
            <!-- <hr> -->
            <form action="">
              <input type="text" name="name" placeholder="Name" size="30"><br><br>
              <input type="email" name="email" placeholder="Email" size="30"><br><br>
              <textarea name="message" id="" cols="30" rows="3" placeholder="Message"></textarea><br>
              <input type="submit" value="Submit" class='btn btn-info px-3 py-1 my-2'>
            </form>
          </div>
        </div>

      </div>
    </div>
    </div>
  </footer>

</body>

</html>