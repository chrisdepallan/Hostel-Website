<?php
session_start();
if($_SESSION['flag']==1){
?>
<!DOCTYPE html>
<html lang="en">

<head>


<meta charset="utf-8" />
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

  <!-- ======= Header ======= --> <div class="ec-content-wrapper">
					<div class="content">
						<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
							<div>
								<h1>Add Product</h1>
								<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
									<span><i class="mdi mdi-chevron-right"></i></span>Product
								</p>
							</div>
							<div>
								<a href="product-list.php" class="btn btn-primary"> View All
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="card card-default">
									<div class="card-header card-header-border-bottom">
										<h2>Add Product</h2>
									</div>
									<form class="row g-3" method="POST" enctype="multipart/form-data">

										<div class="card-body">
											<div class="row ec-vendor-uploads">
												<div class="col-lg-8">
													<div class="ec-vendor-upload-detail">
														<div class="col-md-6">
															<label for="inputEmail4" class="form-label">Product name</label>
															<input type="text" name='pname' required class="form-control slug-title" placeholder="" id="inputEmail4">
														</div>
														<div class="col-md-6">
															<label class="form-label">Main category</label>
															<select name="categories" id="Categories" required class="form-select">

																<?php
																$con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
																$query = "SELECT * FROM `tbl_categories`";

																$result = mysqli_query($con, $query);
																while ($row = mysqli_fetch_array($result)) {
																?>

																	<option value="<?php echo $row['cate_id']; ?>"><?php echo $row['cate_category']; ?></option>
																<?php }
																mysqli_close($con); ?>

															</select>
														</div>

														<div class="col-md-6">
															<label class="form-label">Merchant</label>
															<select name="merchant" required class="form-select">

																<?php
																$con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
																$query = "SELECT * FROM `tbl_login_details` where logdet_role='merchant'";

																$result = mysqli_query($con, $query);

																while ($row = mysqli_fetch_array($result)) {
																?>

																	<option value="<?php echo $row['logdet_id']; ?>"><?php echo $row['logdet_email']; ?></option>
																<?php }
																mysqli_close($con); ?>

															</select>
														</div>
														<div class="col-md-6">
															<label for="inputEmail8" class="form-label">Product quantity</label>
															<input type="text" name='quantity' required class="form-control" placeholder="Product quantity" id="inputEmail8">
														</div>
														<div class="col-md-6">
															<label for="inputEmail9" class="form-label">Product price</label>
															<input type="text" name='price' required class="form-control " placeholder="Product price" id="inputEmail9">
														</div>
														<div class="col-md-12">
															<label class="form-label">Description</label>
															<textarea class="form-control" required name='desc' rows="4"></textarea>
														</div>
														<div class="col-md-12">
															<div class="product_add_cancel_button">
																<button class="btn btn-border" onclick='window.location.href="index.php"'>Cancel</button>

																<button type="submit" name='submit' class="btn btn-primary">Add product</button>
															</div>

														</div>

													</div>
												</div>
												<div class="col-lg-4">
													<div class="ec-vendor-img-upload">
														<div class="ec-vendor-main-img">
															<div class="avatar-upload">
																<div class="avatar-edit">
																	<input type='file' name='file1' required id="imageUpload" class="ec-image-upload" accept=".png, .jpg, .jpeg" />
																	<label for="imageUpload"><img src="../dashboard/assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
																</div>
																<div class="avatar-preview ec-preview">
																	<div class="imagePreview ec-div-preview">
																		<img class="ec-image-preview" src="../pfp_add.png" alt="edit" />
																	</div>
																</div>
															</div>
															<div class="thumb-upload-set colo-md-12">
																<div class="thumb-upload">
																	<div class="thumb-edit">
																		<input type='file' name='file2' required id="thumbUpload01" class="ec-image-upload" accept=".png, .jpg, .jpeg" />
																		<label for="imageUpload"><img src="../dashboard/assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
																	</div>
																	<div class="thumb-preview ec-preview">
																		<div class="image-thumb-preview">
																			<img class="image-thumb-preview ec-image-preview" src="../pfp_add.png" alt="edit" />
																		</div>
																	</div>
																</div>
																<div class="thumb-upload">
																	<div class="thumb-edit">
																		<input type='file' name='file3' required id="thumbUpload02" class="ec-image-upload" accept=".png, .jpg, .jpeg" />
																		<label for="imageUpload"><img src="../dashboard/assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
																	</div>
																	<div class="thumb-preview ec-preview">
																		<div class="image-thumb-preview">
																			<img class="image-thumb-preview ec-image-preview" src="../pfp_add.png" alt="edit" />
																		</div>
																	</div>
																</div>
																<div class="thumb-upload">
																	<div class="thumb-edit">
																		<input type='file' name='file4' required id="thumbUpload03" class="ec-image-upload" accept=".png, .jpg, .jpeg" />
																		<label for="imageUpload"><img src="../dashboard/assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
																	</div>
																	<div class="thumb-preview ec-preview">
																		<div class="image-thumb-preview">
																			<img class="image-thumb-preview ec-image-preview" src="../pfp_add.png" alt="edit" />
																		</div>
																	</div>
																</div>
																<div class="thumb-upload">
																	<div class="thumb-edit">
																		<input type='file' name='file5' required id="thumbUpload04" class="ec-image-upload" accept=".png, .jpg, .jpeg" />
																		<label for="imageUpload"><img src="../dashboard/assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
																	</div>
																	<div class="thumb-preview ec-preview">
																		<div class="image-thumb-preview">
																			<img class="image-thumb-preview ec-image-preview" src="../pfp_add.png" alt="edit" />
																		</div>
																	</div>
																</div>
																<div class="thumb-upload">
																	<div class="thumb-edit">
																		<input type='file' name='file6' required id="thumbUpload05" class="ec-image-upload" accept=".png, .jpg, .jpeg" />
																		<label for="imageUpload"><img src="../dashboard/assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
																	</div>
																	<div class="thumb-preview ec-preview">
																		<div class="image-thumb-preview">
																			<img class="image-thumb-preview ec-image-preview" src="../pfp_add.png" alt="edit" />
																		</div>
																	</div>
																</div>
																<div class="thumb-upload">
																	<div class="thumb-edit">
																		<input type='file' name='file7' required id="thumbUpload06" class="ec-image-upload" accept=".png, .jpg, .jpeg" />
																		<label for="imageUpload"><img src="../dashboard/assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
																	</div>
																	<div class="thumb-preview ec-preview">
																		<div class="image-thumb-preview">
																			<img class="image-thumb-preview ec-image-preview" src="../pfp_add.png" alt="edit" />
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
								</div>
							</div>
						</div>
						</form>
					</div> <!-- End Content -->
				</div> <!-- End Content Wrapper -->

				<?php
				if (isset($_POST["submit"])) {
					$name = $_POST["pname"];
					$category = $_POST["categories"];
					$quantity = $_POST["quantity"];
					$price = $_POST["price"];
					$desc = $_POST["desc"];
					$merchant = $_POST["merchant"];
					$file1 = $_FILES["file1"]["name"];
					$file2 = $_FILES["file2"]["name"];
					$file3 = $_FILES["file3"]["name"];
					$file4 = $_FILES["file4"]["name"];
					$file5 = $_FILES["file5"]["name"];
					$file6 = $_FILES["file6"]["name"];
					$file7 = $_FILES["file7"]["name"];


					$con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
					$qc = "select * from tbl_products where `prod_name`='$name'";
					$resc = mysqli_query($con, $qc);


					$count = mysqli_num_rows($resc);
					if ($count == 0) {
						$file = $file1 . ' ' . $file2 . ' ' . $file3 . ' ' . $file4 . ' ' . $file5 . ' ' . $file6 . ' ' . $file7;

						$query = "INSERT INTO `tbl_products`( `prod_name`, `prod_desc`, `prod_price`, `prod_stock`, `prod_cid`, `prod_mid`, `prod_photo`, `prod_status`) VALUES ('$name','$desc','$price','$quantity','$category','$merchant','$file',0)";
						$result = mysqli_query($con, $query);

				?><?php

									// Check connection
									if (!$con) {
										die("Connection failed: " . mysqli_connect_error());
									}

									if ($result) {
										$target = "../dashboard/assets/img/products/";
										$tarpath = $target . basename($file1);
										move_uploaded_file($_FILES["file1"]["tmp_name"], $tarpath);
										$tarpath = $target . basename($file2);
										move_uploaded_file($_FILES["file2"]["tmp_name"], $tarpath);
										$tarpath = $target . basename($file3);
										move_uploaded_file($_FILES["file3"]["tmp_name"], $tarpath);
										$tarpath = $target . basename($file4);
										move_uploaded_file($_FILES["file4"]["tmp_name"], $tarpath);
										$tarpath = $target . basename($file5);
										move_uploaded_file($_FILES["file5"]["tmp_name"], $tarpath);
										$tarpath = $target . basename($file6);
										move_uploaded_file($_FILES["file6"]["tmp_name"], $tarpath);
										$tarpath = $target . basename($file7);
										move_uploaded_file($_FILES["file7"]["tmp_name"], $tarpath);
									}
									mysqli_close($con);
									echo "<script type='text/javascript'> window.location.href = 'index.php'</script>";
									exit();
								} else {
								}
							}
									?>
</body>
</html>
<?php
}
else{
  echo "<script type='text/javascript'> window.location.href = '../signin.php'</script>";
}
?>