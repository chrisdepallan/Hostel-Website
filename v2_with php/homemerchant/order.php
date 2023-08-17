
<?php
session_start();
if($_SESSION['flag']==1){
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Modderhub</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
 
  
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>Modderhub</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <n      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="index.php">Home</a></li>
           <li><a href="product_page.php">Products </a></li>
          <!-- <li><a href="admin_verifyseller.php">Manage Merchant</a></li> -->
          <!-- <li><a href="../dashboard/index.php"  target='_blank'>Dashboard</a> </li> -->
          <li><a href="#"></a></li>
          <li><a href="#">forums</a></li>
          <li class="dropdown"><a href="#"><span>profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href='profile.php' >my account</a></li>
              <li class="dropdown"><a href="#"><span>profile</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="../sendmailforgot.php" onclick="">forgot password</a></li>
                  <li><a href="../editprofile.php">Edit details</a></li>
                  <li><a href="logout.php">logout</a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                </ul>
              </li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
            </ul>
          </li>
          <li><a href="#"></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <div class="card-body py-5 px-md-5">

        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Shipping address</h2>
            <form method="POST" action='' enctype='multipart/form-data'>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div style='transform:translate(0,40px)' class="form-floating mb-3">
                    <input style='' type="text" class="form-control" id="uname" name="uname" onkeyup="" placeholder="name@example.com">
                    <label for="uname">UserName</label>
                    <span id="consid0" style="position:sticky"></span>
                  </div>

                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-floating mb-3">
                    <div class="form-floating mb-3"><input type="password" name='passwd' class="form-control" onkeyup='password()' id="passwd" placeholder="name@example.com">
                      <label for="passwd">Password</label>
                      <span id="consid1" style="position:sticky;color:red;"></span>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" onblur='cpassword()' id="cpasswd" placeholder="name@example.com">
                      <label for="cpasswd">confirm Password</label>
                      <span id="consid2" style="position:sticky;color:red;"></span>
                    </div>
                  </div>
                </div>

              </div>
              <div class='row'>

                <span id="consid1" style=""></span>
              </div>
              <!-- Email input -->
              <div class="form-floating mb-4">
                <input type="email" class="form-control" id="email" name='email' onkeyup='myemail()' placeholder="name@example.com">
                <label for="email">Email address</label>
              </div>
              <span id="conside" style="position:sticky;color:red;"></span>
              <span id="consid01" style="position:sticky;"></span>
              <span id="consid001" style="position:sticky;"></span>

              <!-- Password input -->
              <div class="form-floating mb-4">
                <input type="text" class="form-control" maxlength="10" id="phno" name='phno' onkeyup="myphno()" placeholder="name@example.com">
                <label for="phno">Phone</label>
              </div>
              <span id="considph" style="position:sticky;color:red;"></span>
              <div class="mb-3 ">
                <label for="file" class="form-label"><img src="pfp_add.png" style="height:50px;cursor: pointer;" alt=""></label>
                <input class="form-control" name='file' style="visibility:hidden" type="file" onchange='isImage()' id="file" required>
              </div>


              <!-- Checkbox -->

              <!-- Submit button -->
              <input type="submit" id='submit' value="Sign Up" name='submit' class="btn btn-outline-danger btn-block mb-4">

              </input>

              <!-- Register buttons -->
              <div class="d-flex align-items-center justify-content-center pb-4">
                <p class="mb-0 me-2">already have an account?</p>
                <button type="button" class="btn btn-outline-danger" onclick="location.href='signin.php'">sign in UwU </button>
                          
              </div>
            </form>
          </div>
        </div>
      </div>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
<?php
}
else{
  echo "<script type='text/javascript'> window.location.href = '../signin.php'</script>";
}
?>