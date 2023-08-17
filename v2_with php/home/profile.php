<?php

session_start();
$_SESSION['homeflag'] = 1;
$_SESSION['url'] = "homeadmin/index.php"

?>
<?php
if ($_SESSION['flag'] == 1) {

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <style>
      .user-row {
        margin-bottom: 14px;
      }

      .user-row:last-child {
        margin-bottom: 0;
      }

      .dropdown-user {
        margin: 13px 0;
        padding: 5px;
        height: 100%;
      }

      .dropdown-user:hover {
        cursor: pointer;
      }

      .table-user-information>tbody>tr {
        border-top: 1px solid rgb(221, 221, 221);
      }

      .table-user-information>tbody>tr:first-child {
        border-top: 0;
      }


      .table-user-information>tbody>tr>td {
        border-top: 0;
      }

      .toppad {
        margin-top: 20px;
      }
    </style>

    <script>
      $(document).ready(function() {
        var panels = $('.user-infos');
        var panelsButton = $('.dropdown-user');
        panels.hide();

        //Click dropdown
        panelsButton.click(function() {
          //get data-for attribute
          var dataFor = $(this).attr('data-for');
          var idFor = $(dataFor);

          //current button
          var currentButton = $(this);
          idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if (idFor.is(':visible')) {
              currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            } else {
              currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
          })
        });


        $('[data-toggle="tooltip"]').tooltip();

        $('button').click(function(e) {
          e.preventDefault();
          alert("This is a demo.\n :-)");
        });
      });
    </script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
    <header id="header" class="fixed-top d-flex align-items-center header" style="background-color:#1e4356;">
      <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
          <h1 class="text-light"><a href="index.html"><span>Modderhub</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
        <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="index.php">Home</a></li>
          <li><a class="active " href="order.php">orders</a></li>
          
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
    <!-- ======= Hero Section ======= -->a
   
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" style="transform:translate(0,100px)">
      <?php
      $con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
      $query =  "SELECT * FROM `tbl_login_details` where logdet_id='" . $_SESSION['id'] . "'";

      $result = mysqli_query($con, $query);
      $row = mysqli_fetch_array($result);
      $query1 =  "SELECT * FROM `tbl_reg_details` where regdet_lid='" . $row['logdet_id'] . "'";

      $result1 = mysqli_query($con, $query1);
      $row1 = mysqli_fetch_array($result1);
      ?>
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title"><?php echo $row1['regdet_name'] ?></h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../uploads/<?php echo $row1['regdet_photo']; ?>" class="img-circle img-responsive"> </div>

            <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
           <dl>
             <dt>DEPARTMENT:</dt>
             <dd>Administrator</dd>
             <dt>HIRE DATE</dt>
             <dd>11/12/2013</dd>
             <dt>DATE OF BIRTH</dt>
                <dd>11/12/2013</dd>
             <dt>GENDER</dt>
             <dd>Male</dd>
           </dl>
         </div>-->
            <div class=" col-md-9 col-lg-9 ">
              <table class="table table-user-information">
                <tbody>



                  <tr>
                    <td>Email</td>
                    <td><a href="mailto:<?php echo $row['logdet_email'] ?>"><?php echo $row['logdet_email'] ?></a></td>
                  </tr>
                  <td>Phone Number</td>
                  <td><?php echo $row1['regdet_phone'] ?><br><br>
                  </td>

                  </tr>
                  <tr>
                    <td>password</td>
                    <td><?php echo $row['logdet_password'] ?></a></td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="panel-footer">
          <span class="pull-right">
            <a href="../editprofile.php" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
          </span>
        </div>

      </div>
    </div>

    </div>
    <!-- ======= Footer ======= -->
    <!-- <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
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
    <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>End Footer -->

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
} else {
  echo "<script> window.location.href = '../signin.php'</script>";
}
?>