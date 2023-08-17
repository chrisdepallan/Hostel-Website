<?php
session_start();
if($_SESSION['flag']==1){
?>
<!DOCTYPE html>
<html lang="en">

<head>


<meta charset="utf-8" />

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
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Andshop - Admin Dashboard HTML Template.">

		<title>Andshop - Admin Dashboard HTML Template.</title>

		<!-- GOOGLE FONTS -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

		<link href="../dashboard/assets/css/materialdesignicons.min.css" rel="stylesheet" />

		<!-- PLUGINS CSS STYLE -->
		<link href="../dashboard/assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

		<!-- custom css -->
		<link id="style.css" rel="stylesheet" href="../dashboard/assets/css/style.css" />

		<!-- FAVICON -->
		<link href="../dashboard/assets/img/favicon.png" rel="shortcut icon" />


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
  <link href="../dashboard/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../dashboard/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../dashboard/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../dashboard/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../dashboard/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../dashboard/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../dashboard/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../dashboard/assets/css/style.css" rel="stylesheet">

  <script src="../dashboard/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
		<script src="../dashboard/assets/js/bootstrap.bundle.min.js"></script>
		<script src="../dashboard/assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
		<script src="../dashboard/assets/plugins/simplebar/simplebar.min.js"></script>
		<script src="../dashboard/assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
		<script src="../dashboard/assets/plugins/slick/slick.min.js"></script>

		<!-- Option Switcher -->
		<script src="../dashboard/assets/plugins/options-sidebar/optionswitcher.js"></script>

		<!-- custom js -->
		<script src="../dashboard/assets/js/custom.js"></script>
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

       <nav id="navbar" class="navbar" style='background-color:#1e4356' >
        <ul>
          <li><a class="active " href="index.php">Home</a></li>
           <li><a href="product_grid.php">Products </a></li>
          <!-- <li><a href="admin_verifyseller.php">Manage Merchant</a></li> -->
          <!-- <li><a href="../dashboard/index.php"  target='_blank'>Dashboard</a> </li> -->
          <li><a href="product_page.php">products add</a></li>
          <li><a href="#">forums</a></li>
          <li class="dropdown"><a href="#"><span>profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href='profile.php' >my account</a></li>
              <li class="dropdown"><a href="#"><span>profile</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="../sendmailforgot.php" onclick="">forgot password</a></li>
                  <li><a href="../editprofile.php">Edit details</a></li>
                  <li><a href="logout.php">logout</a></li>
                  <li><a href=""> add product-add</a></li>
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
 
    <div class="card-body" style=margin:10%>
        <div class="row">
            <?php
            $i = 0;
            $con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
            $query =    "SELECT * FROM `tbl_products` where prod_mid='".$_SESSION['id']."'";

            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($result)) {
                $i = explode(" ", $row['prod_photo']);


                // $query1="SELECT * FROM `tbl_products` where  regdet_lid='".$row['logdet_id']."'";
                // $result1 = mysqli_query($con, $query1);
                // $row1=mysqli_fetch_array($result1);
                // $i=$i+1;
            ?>
                <div class="col-lg-3 col-md-6 col-sm12 col-12">

                    <div class="user_card_wrapper_one">
                        <img style=' width:100px;border-radius:50%' src="../dashboard/assets/img/products/<?php echo $i[0]; ?>" alt="">
                        <h3></h3>
                        <p><?php echo $row['prod_name'] ?></p>
                        <p>Rs.<?php echo $row['prod_price'] ?></p>
                        <div class="user_card_bottom_wrapper">
                            <div class="user_card_bottom_item">
                                <p> stock</p>
                                <h3><?php echo $row['prod_stock'];?></h3>
                            </div>
                            <div class="user_card_bottom_item" style="width:100px">
                            <form action="" method="post">
    
    
    <label for="new_stock"><p>New Stock:</p></label>
    <input type="text" name="new_stock" class='form-control' style="width:70px" id="new_stock"><br>
    <input type="text" value='<?php echo $row['prod_id'];?>' name='prod_id' style='visibility:hidden;transform:scale(0.1)'>
    <input type="submit"  class='form-control'value="Update" name='update'>
</form>

                            </div>
                            <?php
// Establish a connection to the database
$conn = mysqli_connect('localhost', 'root', '', 'modderhub');

// Check if the form has been submitted
if (isset($_POST['update'])) {
    // Retrieve the form data
    $prod_id = $_POST['prod_id'];
    $new_stock = $_POST['new_stock'];
    
    // Update the stock of the product
    $sql = "UPDATE `tbl_products` SET `prod_stock`='$new_stock' WHERE `prod_id`='$prod_id'";
    $result = mysqli_query($conn, $sql);
    
    // Check if the update was successful
    if ($result) {
      echo "<script type='text/javascript'> window.location.href = 'product_grid.php'</script>";
        echo "Product stock updated successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

                        </div>
                        <!-- <a href="product-detail.php?id=<?php echo $row['prod_id'] ?>">View details</a> -->
                    </div>
                </div><?php } ?>
        </div>
</body>
</html>
<?php
}
else{
  echo "<script type='text/javascript'> window.location.href = '../signin.php'</script>";
}
?>