<?php
session_start();
if ($_SESSION['flag'] == 1) {
  if (isset($_POST['search_term'])) {
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

    </head>

    <body>

      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top d-flex align-items-center header">
        <div class="container d-flex justify-content-between align-items-center">

          <div class="logo">
            <h1 class="text-light"><a href="index.php"><span>Modderhub</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>

          <form method="POST" action="product_page_search.php">
            <div class="search-form d-lg-inline-block" style=''>
              <div class="input-group">


                <input type="text" name="search_term" id="search-input" class="form-control" placeholder="search.." autofocus autocomplete="off" />
                <button type="button" name="search" id="search-btn" class="btn btn-flat" style='color:white'>
                  search
                </button>

              </div>
          </form>
          <div id="search-results-container">
            <ul id="search-results"></ul>
          </div>
        </div>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="active " href="index.php">Home</a></li>
            <li><a href="product_page.php">Products </a></li>
            <!-- <li><a href="admin_verifyseller.php">Manage Merchant</a></li> -->
            <!-- <li><a href="../dashboard/index.php"  target='_blank'>Dashboard</a> </li> -->
            <li><a href="#"></a></li>
            <li><a href="#">forums</a></li>
            <li class="dropdown"><a href="#"><span>profile</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href='profile.php'>my account</a></li>
                <li class="dropdown"><a href="#"><span>profile</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="../forgot password.php" onclick="">forgot password</a></li>
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
      <section class="services">
        <div class="container">


          <div class="row">
            <?php
            $i = 0;
            $search_term = $_POST['search_term']; // Assuming the search term is submitted via a POST request
            $conn = mysqli_connect("localhost", "root", "", "modderhub");
										
            $sql = "SELECT * FROM `vw_products_with_categories` WHERE `prod_name` REGEXP '$search_term' OR `prod_desc` REGEXP '$search_term' OR `cate_category` REGEXP '$search_term' OR `cate_desc` REGEXP '$search_term'";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
              echo "<script type='text/javascript'> window.location.href = 'product_page.php'</script>";
              
            }

            while ($row = mysqli_fetch_assoc($result)) {
              $i = explode(" ", $row['prod_photo']);
              if (isset($row['prod_id'])) {
            ?>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" >
                  <div class="icon-box icon-box-pink" onclick="window.location.href='product_details.php?id=<?php echo $row['prod_id']?>';">
                    <div class=""><i class=""><img style=' width:100px;border-radius:50%' src="../dashboard/assets/img/products/<?php echo $i[0]; ?>" alt="">
                      </i></div>
                    <h4 class="title"><a href=""><?php echo $row['prod_name'] ?></a></h4>
                    <h4 class="title"><a href="">Rs.<?php echo $row['prod_price'] ?></a></h4>
                    
                    
                    <p class="description"><?php echo $row['prod_desc'] ?></p>
                    <div style='bottom:5px;position:fixed;right:4px'>
                      <!-- <form method='GET'><button class='btn btn-success' onclick=''><a style='text-decoration:none;color:white' href='product_details.php?id=<?php echo $row['prod_id'] ?>'>more info</a>
                        </button></form> -->
                    </div>
                  </div>
                </div>
              <?php
              } else {
              ?>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                  <div class="icon-box icon-box-pink" onclick="window.location.href='product_details.php?id=<?php echo $row['prod_id']?>';">
                    <div class=""><i class=""><img style=' width:100px;border-radius:50%' src="../dashboard/assets/img/products/<?php echo $i[0]; ?>" alt="">
                      </i></div>
                    <h4 class="title"><a href=""><?php echo $row['prod_name'] ?></a></h4>
                    <h4 class="title"><a href="">Rs.<?php echo $row['prod_price'] ?></a></h4>
                    <p class="description"><?php echo $row['prod_desc'] ?></p>
                    <div style='bottom:5px;position:fixed;right:4px'>
                      <!-- <form method='GET'><button class='btn btn-success' onclick=''><a style='text-decoration:none;color:white' href='product_details.php?id=<?php echo $row['prod_id'] ?>'>more info</a>
                        </button></form> -->
                    </div>
                  </div>
                </div>
              <?php
              }

              // $query1="SELECT * FROM `tbl_products` where  regdet_lid='".$row['logdet_id']."'";
              // $result1 = mysqli_query($con, $query1);
              // $row1=mysqli_fetch_array($result1);
              // $i=$i+1;
              ?>

              
            <?php } ?>

            <div class="line" style='border-top: 1px solid #999999;
			margin-top: 20px;
			margin-bottom: 20px;'></div>
      <h3>Related Searches</h3>

<?php
$search_term = $_POST['search_term']; // Assuming the search term is submitted via a POST request

$search_terms_array = preg_split('/\s+/', $search_term); // Split the search term by whitespace into an array of search terms

// Build the search query with multiple OR conditions to match against the search terms
$sql = "SELECT * FROM `vw_products_with_categories` WHERE (1";
foreach ($search_terms_array as $search_term) {
    $sql .= " AND (`prod_name` REGEXP '$search_term' OR `prod_desc` REGEXP '$search_term' OR `cate_category` REGEXP '$search_term' OR `cate_desc` REGEXP '$search_term')";
}
$sql .= ")";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error executing search query: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($result)) {
    if (isset($row['prod_id'])) {
        ?>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                  <div class="icon-box icon-box-pink">
                    <div class=""><i class=""><img style=' width:100px;border-radius:50%' src="../dashboard/assets/img/products/<?php echo $i[0]; ?>" alt="">
                      </i></div>
                    <h4 class="title"><a href=""><?php echo $row['prod_name'] ?></a></h4>
                    <h4 class="title"><a href="">Rs.<?php echo $row['prod_price'] ?></a></h4>
                    <p class="description">by category </p>
                    <p class="description"><?php echo $row['prod_desc'] ?></p>
                    <div style='bottom:5px;position:fixed;right:4px'>
                      <form method='GET'><button class='btn btn-success' onclick=''><a style='text-decoration:none;color:white' href='product_details.php?id=<?php echo $row['prod_id'] ?>'>more info</a>
                        </button></form>
                    </div>
                  </div>
                </div>
        <?php
    } else {
       ?>
       <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                  <div class="icon-box icon-box-pink">
                    <div class=""><i class=""><img style=' width:100px;border-radius:50%' src="../dashboard/assets/img/products/<?php echo $i[0]; ?>" alt="">
                      </i></div>
                    <h4 class="title"><a href=""><?php echo $row['prod_name'] ?></a></h4>
                    <h4 class="title"><a href="">Rs.<?php echo $row['prod_price'] ?></a></h4>
                    <p class="description">by category </p>
                    <p class="description"><?php echo $row['prod_desc'] ?></p>
                    <div style='bottom:5px;position:fixed;left:4px;'>
                      <form method='GET'><button class='btn btn-success' onclick=''><a style='text-decoration:none;color:white' href='product_details.php?id=<?php echo $row['prod_id'] ?>'>more info</a>
                        </button></form>
                    </div>
                  </div>
                </div>
       <?php
       }
}

mysqli_close($conn);

?>
          </div>

        </div>
      </section><!-- End Services Section -->

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
    echo "<script type='text/javascript'> window.location.href = 'index.php'</script>";
  }
} else {
  echo "<script type='text/javascript'> window.location.href = '../signin.php'</script>";
}
?>