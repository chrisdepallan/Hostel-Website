<?php
session_start();
if($_SESSION['flag']==1){
?>
<!DOCTYPE html>
<html lang="en">

<head>

<script>
    function getExtension(filename) {
      var parts = filename.split('.');
      return parts[parts.length - 1];
    }

    function pdf(id) {
      var fileInput = document.getElementById(id);
      var filename = fileInput.value;
      var ext = getExtension(filename);
      switch (ext.toLowerCase()) {
        case 'pdf':
       
          //etc
          $('#submit').attr("disabled", false);
          return true;
      }
      $('#submit').attr("disabled", true);
      alert("invalid file type");
      return false;
    }
</script>
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
                  <li><a href="../forgot password.php" onclick="">forgot password</a></li>
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
 <div style='margin:10%'>
  <form method='POST' enctype='multipart/form-data'>
  <div class="">

                <input type="file" class="form-control" style='visibility:hidden;'id="file1" name='file1' required onchange='pdf("file1")' placeholder="name@example.com">
                <label  style="cursor: pointer;" for="file1"><img src='../assets/images/add.png' style='width:10%;height:10%'> upload license</label>
            
              

<input type="file" class="form-control" style='visibility:hidden;'id="file2" name='file2'  onchange='pdf("file2")' placeholder="name@example.com">
<label for="file2" style="cursor: pointer;" ><img src='../assets/images/add.png' style='width:10%;height:10%'> upload other documents</label>
</div>
<div class="form-floating mb-4">
                <input type="textbox" class="form-control"  id="phno" name='add'  placeholder="name@example.com">
                <label for="phno"> Address</label>
              </div>
              <input type="submit" id='submit' value="upload" name='submit' class="btn btn-outline-danger btn-block mb-4">
  </form>
</div>  
</body>
</html>



<?php


if (isset($_POST["submit"])) {
  
  $file1 = $_FILES["file1"]["name"];
  $file2 = $_FILES["file2"]["name"];
  $add=$_POST["add"];
  $con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
  $qc = "INSERT INTO `tbl_merchant_details`(`mer_det_license`, `mer_det_other_docs`, `mer_det_address`, `mer_det_lid`) VALUES ('$file1','$file2','$add','".$_SESSION['id']."')";
  $re = mysqli_query($con, $qc);
  


    
    if ($re) {
      $target = "assets/pdfs/";
      $tarpath = $target . basename($file1);
      move_uploaded_file($_FILES["file1"]["tmp_name"], $tarpath);
      $tarpath = $target . basename($file2);
      move_uploaded_file($_FILES["file2"]["tmp_name"], $tarpath);
   
    }
    mysqli_close($con);
    // echo "<script type='text/javascript'> window.location.href = 'sendmailregis.php'</script>";
    exit();
  } 

?>
<?php
}
else{   
  echo "<script type='text/javascript'> window.location.href = '../signin.php'</script>";
}
?>