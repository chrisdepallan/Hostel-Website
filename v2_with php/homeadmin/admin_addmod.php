<?php

session_start();
$_SESSION['homeflag']=1;
$_SESSION['url']="homeadmin/index.php"

?>
<?php
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
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <script>
    function getExtension(filename) {
      var parts = filename.split('.');
      return parts[parts.length - 1];
    }

    function isImage() {
      var fileInput = document.getElementById('file');
      var filename = fileInput.value;
      var ext = getExtension(filename);
      switch (ext.toLowerCase()) {
        case 'jpg':
        case 'gif':
        case 'bmp':
        case 'png':
          //etc
          $('#submit').attr("disabled", false);
          return true;
      }
      $('#submit').attr("disabled", true);
      alert("invalid file type");
      return false;
    }

    function myemail() {
      var n = document.getElementById("email");
      var em = /\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if (n.value == "") {
        document.getElementById("conside").innerHTML = "<span class='error'>Please enter a valid Email</span>";
        $('#submit').attr("disabled", true);
      } else if (!n.value.match(em)) {
        document.getElementById("conside").innerHTML = "<span class='error'>This is not a valid Email. Please try again</span>";
        $('#submit').attr("disabled", true);
      } else if (n.value.match(em) ) {
        document.getElementById("conside").innerHTML = "<span class='error'></span>";
        $('#submit').attr("disabled", false);

      }
    }

    function myphno() {
      var n4 = document.getElementById("phno");
      var p = /([6789][0-9]{9,10})+$/;

      if (n4.value == "") {
        document.getElementById("considph").innerHTML = "<span class='error'>Please enter a valid phone number</span>";
        $('#submit').attr("disabled", true);
      } else if (!n4.value.match(p)) {
        document.getElementById("considph").innerHTML = "<span class='error'>This is not a valid phone number. Please try again</span>";
        $('#submit').attr("disabled", true);
      } else if (n4.value.match(p)) {
        document.getElementById("considph").innerHTML = "<span class='error'></span>";
        $('#submit').attr("disabled", false);
      }
    }

    function password() {
      var n = document.getElementById("passwd");
      pa = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
      if (n.value == "") {
        document.getElementById("consid1").innerHTML = "<span class='error'>Please enter a valid password</span>";
        $('#submit').attr("disabled", true);
      } else if (!n.value.match(pa)) {
        document.getElementById("consid1").innerHTML = "<span class='error'>Password Must Be (min) 8 Characters and contain both numbers And Letters/ Special character</span>";
        $('#submit').attr("disabled", true);
       
      } else if (n.value.match(pa)) {

        document.getElementById("consid1").innerHTML = "<span class='error'></span>";
        $('#submit').attr("disabled", false);
      }
    }

    function cpassword() {
      var n7 = document.getElementById("passwd");
      var n8 = document.getElementById("cpasswd");
      pa = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
      if (n8.value == "") {
        document.getElementById("consid2").innerHTML = "<span class='error'>Please enter a valid password</span>";
        $('#submit').attr("disabled", true);
      } else if (n7.value != n8.value) {
        document.getElementById("consid2").innerHTML = "<span class='error'> Password Missmatch</span>";
        $('#submit').attr("disabled", true);

      } else if (n7.value == n8.value && n7.value.match(pa)) {

        document.getElementById("consid2").innerHTML = "<span class='error'></span>";
        $('#submit').attr("disabled", false);

      }
    }

    $(document).ready(function() {
      $("#uname").keyup(function() {

        var uname = document.getElementById("uname").value
        var c_uname = /^[a-z_0-9]{3,20}$/
        r_uname = c_uname.test(uname)
        if (r_uname == false) {
          $("#consid0").text("*Enter a valid Username");

        } else {
          $.ajax({
            url: '../uservalidate1.php',
            method: "POST",
            data: {
              username: uname
            },
            success: function(data) {
              if (data != '0') {
                $('#consid0').html('<span class="text-danger">Username Already exist</span>');
                $('#submit').attr("disabled", false);
              } else {
                // $('#inputuname2').html('<span class="text-success">Valid Username</span>');
                $('#consid0').text("");
                $('#submit').attr("disabled", false);
              }
            }
          })
        }
      })
    });
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>Modderhub</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="index.php">Home</a></li>
          <li><a href="admin_addmod.php">ADD Moderator</a></li>
          <li><a href="admin_verifyseller.php">Manage Merchant</a></li>
          <li><a href="../dashboard/index.php"  target='_blank'>Dashboard</a> </li>
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
 

 
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Modderhub</span></h2>
          <p class="animate__animated animate__fadeInUp">Welcome to our automotive parts website, your one-stop-shop for all your vehicle maintenance needs. Whether you're a mechanic, a car enthusiast, or simply someone looking to keep their vehicle in top shape, we've got you covered.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Most Extensive <span>Automotive</span> catalog</h2>
          <p class="animate__animated animate__fadeInUp">Our extensive inventory of high-quality parts includes everything from brake pads and oil filters to spark plugs and engine components. We offer parts from all the top brands, so you can be sure you're getting the best products available.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Industry leading customer service</h2>
          <p class="animate__animated animate__fadeInUp">Need help finding the right part for your vehicle? Our knowledgeable and friendly staff are always here to assist you. With years of experience in the automotive industry, we can help you find exactly what you need to keep your car running smoothly.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>
      
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">EXPLORE!</h2>
          <p class="animate__animated animate__fadeInUp">So why wait? Browse our selection of automotive parts today and see how we can help you keep your vehicle in top condition.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  
      <div class="card-body py-5 px-md-5">

        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Moderator Registration </h2>
            <form method="POST" action='' enctype='multipart/form-data'>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div style='transform:translate(0,40px)' class="form-floating mb-3">
                    <input style=''  required type="text" class="form-control" id="uname" name="uname" onkeyup="" placeholder="name@example.com">
                    <label for="uname">Username</label>
                    <span id="consid0" style="position:sticky"></span>
                  </div>

                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-floating mb-3">
                    <div class="form-floating mb-3"><input type="password" name='passwd' required  class="form-control" onkeyup='password()' id="passwd" placeholder="name@example.com">
                      <label for="passwd">Password</label>
                      <span id="consid1" style="position:sticky;color:red;"></span>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" onblur='cpassword()' required  id="cpasswd" placeholder="name@example.com">
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
                <input type="email" class="form-control" id="email" name='email' required  onkeyup='myemail()' placeholder="name@example.com">
                <label for="email">Email address</label>
              </div>
              <span id="conside" style="position:sticky;color:red;"></span>

              <!-- Password input -->
              <div class="form-floating mb-4">
                <input type="text" class="form-control" maxlength="10" id="phno" name='phno' required  onkeyup="myphno()" placeholder="name@example.com">
                <label for="phno">Phone</label>
              </div>
              <span id="considph" style="position:sticky;color:red;"></span>
              <div class="mb-3 ">
                <label for="file" class="form-label"><img src="../pfp_add.png" style="height:50px;cursor: pointer;" alt=""></label>
                <input class="form-control" name='file' style="visibility:hidden" type="file" onchange='isImage()' id="file" required>
              </div>


              <!-- Checkbox -->

              <!-- Submit button -->
              <input type="submit" id='submit' value="ADD" name='submit' class="btn btn-outline-danger btn-block mb-4">

              </input>

            </form>
          </div>
        </div>
      </div>
    </div>

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>...</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>


          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Moderna</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
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


if (isset($_POST["submit"])) {
  $name = $_POST["uname"];
  $email = $_POST["email"];
  $password = $_POST["passwd"];
  $file = $_FILES["file"]["name"];
  $phno = $_POST["phno"];

  $con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
  $qc = "select * from tbl_login_details where logdet_email='$email'";
  $resc = mysqli_query($con, $qc);
  $count = mysqli_num_rows($resc);
  if ($count == 0) {
    $query = "INSERT INTO `tbl_login_details`(`logdet_email`, `logdet_password`,logdet_role,logdet_status) VALUES ('$email','$password','moderator','1')";
    $result = mysqli_query($con, $query);

    $lid = mysqli_insert_id($con);

    $q = "INSERT INTO `tbl_reg_details`( `regdet_name`, `regdet_phone`, `regdet_photo`, `regdet_lid`) VALUES ('$name','$phno','$file','$lid')";
    // Check connection
    if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
    }


    $re = mysqli_query($con, $q);
    if ($re) {
      $target = "uploads/";
      $tarpath = $target . basename($file);
      move_uploaded_file($_FILES["file"]["tmp_name"], $tarpath);
    }
    mysqli_close($con);
    $_SESSION['email'] = $_POST["email"];
    $_SESSION['passwd']= $_POST["passwd"];
 
    echo "<script type='text/javascript'> window.location.href = 'sendmailmoddata.php'</script>";
    exit();
  } else {
  }
}
?>

<?php
  }
  else{
    echo "<script> window.location.href = '../signin.php'</script>";
  }
        ?>