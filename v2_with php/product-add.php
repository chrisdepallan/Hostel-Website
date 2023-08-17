<?php

session_start();
$_SESSION['homeflag'] = 1;
$_SESSION['url'] = "dashboard/index.php"

?>
<?php
if ($_SESSION['flag'] == 1) {


?>

	<!DOCTYPE html>
	<html lang="en" dir="ltr">


	<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 04:18:24 GMT -->

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

		<link href="assets/css/materialdesignicons.min.css" rel="stylesheet" />

		<!-- PLUGINS CSS STYLE -->
		<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

		<!-- custom css -->
		<link id="style.css" rel="stylesheet" href="assets/css/style.css" />

		<!-- FAVICON -->
		<link href="assets/img/favicon.png" rel="shortcut icon" />

	</head>

	<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

		<!-- WRAPPER -->
		<div class="wrapper">

			<!-- LEFT MAIN SIDEBAR -->
			<div class="ec-left-sidebar ec-bg-sidebar">
				<div id="sidebar" class="sidebar ec-sidebar-footer">
					<div class="ec-brand">
						<a href="index.php">
							<img class="ec-brand-icon" src="../uploads/logo.png" alt="" style='border-radius:50%' />
							<span class="ec-brand-name text-truncate">MODDERHUB</span>
						</a>
					</div>

					<!-- begin sidebar scrollbar -->
					<div class="ec-navigation" data-simplebar>
						<!-- sidebar menu -->
						<ul class="nav sidebar-inner" id="sidebar-menu">
							<!-- Dashboard -->
							<li class="active">
								<a class="sidenav-item-link" href="index.php">
									<i class="mdi mdi-view-dashboard-outline"></i>
									<span class="nav-text">Dashboard</span>
								</a>
								<hr>
							</li>

							<!-- Vendors -->
							<li class="has-sub">
								<a class="sidenav-item-link" href="javascript:void(0)">
									<i class="mdi mdi-briefcase-outline"></i>
									<span class="nav-text">Vendors</span> <b class="caret"></b>
								</a>
								<div class="collapse">
									<ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
										<li class="">
											<a class="sidenav-item-link" href="vendor-card.php">
												<span class="nav-text">Vendor Grid</span>
											</a>
										</li>

										<li class="">
											<a class="sidenav-item-link" href="vendor-list.php">
												<span class="nav-text">Vendor List</span>
											</a>
										</li>
										<li class="">
											<a class="sidenav-item-link" href="vendor-profile.php">
												<span class="nav-text">Vendors Profile</span>
											</a>
										</li>
										<li class="">
											<a class="sidenav-item-link" href="add-vendor.php">
												<span class="nav-text">Add Vendors</span>
											</a>
										</li>
									</ul>
								</div>
							</li>

							<!-- Users -->
							<li class="has-sub">
								<a class="sidenav-item-link" href="javascript:void(0)">
									<i class="mdi mdi-account-multiple-outline"></i>
									<span class="nav-text">Customers</span> <b class="caret"></b>
								</a>
								<div class="collapse">
									<ul class="sub-menu" id="users" data-parent="#sidebar-menu">
										<li>
											<a class="sidenav-item-link" href="user-card.php">
												<span class="nav-text">User Grid</span>
											</a>
										</li>

										<li class="">
											<a class="sidenav-item-link" href="user-list.php">
												<span class="nav-text">User List</span>
											</a>
										</li>
										<li class="">
											<a class="sidenav-item-link" href="user-profile.php">
												<span class="nav-text">Users Profile</span>
											</a>
										</li>
									</ul>
								</div>
								<hr>
							</li>

							<!-- Category -->
							<li class="has-sub">
								<a class="sidenav-item-link" href="javascript:void(0)">
									<i class="mdi mdi-shape"></i>
									<span class="nav-text">Categories</span> <b class="caret"></b>
								</a>
								<div class="collapse">
									<ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
										<li class="">
											<a class="sidenav-item-link" href="main-category.php">
												<span class="nav-text">All Category</span>
											</a>
										</li>
										<li class="">
											<a class="sidenav-item-link" href="add-category.php">
												<span class="nav-text">Add Category</span>
											</a>
										</li>
									</ul>
								</div>
							</li>

							<!-- Products -->
							<li class="has-sub">
								<a class="sidenav-item-link" href="javascript:void(0)">
									<!-- <i class="mdi mdi-palette-advanced"></i> -->
									<i class="mdi mdi-package-variant-closed"></i>
									<span class="nav-text">Products</span> <b class="caret"></b>
								</a>
								<div class="collapse">
									<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
										<li class="">
											<a class="sidenav-item-link" href="product-add.php">
												<span class="nav-text">Add Product</span>
											</a>
										</li>
										<li class="">
											<a class="sidenav-item-link" href="product-list.php">
												<span class="nav-text">List Product</span>
											</a>
										</li>
										<li class="">
											<a class="sidenav-item-link" href="product-grid.php">
												<span class="nav-text">Grid Product</span>
											</a>
										</li>
										<li class="">
											<a class="sidenav-item-link" href="product-detail.php">
												<span class="nav-text">Product Detail</span>
											</a>
										</li>
									</ul>
								</div>
							</li>

							<!-- Orders -->
							<li class="has-sub">
								<a class="sidenav-item-link" href="javascript:void(0)">
									<i class="mdi mdi-cart-outline"></i>
									<span class="nav-text">Orders</span> <b class="caret"></b>
								</a>
								<div class="collapse">
									<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
										<li class="">
											<a class="sidenav-item-link" href="new-order.php">
												<span class="nav-text">Order list</span>
											</a>
										</li>
										<li class="">
											<a class="sidenav-item-link" href="order-detail.php">
												<span class="nav-text">Order Detail</span>
											</a>
										</li>

									</ul>
								</div>
							</li>

							<!-- Invoice -->
							<li class="has-sub">
								<a class="sidenav-item-link" href="javascript:void(0)">
									<i class="mdi mdi-receipt"></i>
									<span class="nav-text">Invoice</span> <b class="caret"></b>
								</a>
								<div class="collapse">
									<ul class="sub-menu" id="authentication" data-parent="#sidebar-menu">
										<li class="">
											<a href="invoice.php">
												<span class="nav-text">Invoice list</span>
											</a>
										</li>
										<li class="">
											<a href="invoice-details.php">
												<span class="nav-text">Invoice details</span>
											</a>
										</li>
									</ul>
								</div>
							</li>

							<!-- Reviews -->
							<li>
								<a class="sidenav-item-link" href="review-list.php">
									<i class="mdi mdi-star-circle-outline"></i>
									<span class="nav-text">Reviews</span>
								</a>
							</li>

							<!-- Brands -->
							<li>
								<a class="sidenav-item-link" href="brand-list.php">
									<i class="mdi mdi-tag-outline"></i>
									<span class="nav-text">Brands</span>
								</a>
								<hr>
							</li>
							<!-- Transactions -->
							<li class="has-sub">
								<a class="sidenav-item-link" href="javascript:void(0)">
									<i class="mdi mdi-finance"></i>
									<span class="nav-text">Transactions</span> <b class="caret"></b>
								</a>
								<div class="collapse">
									<ul class="sub-menu" id="authentication" data-parent="#sidebar-menu">
										<li class="">
											<a href="all-transactions.php">
												<span class="nav-text">All transactions</span>
											</a>
										</li>
										<li class="">
											<a href="transaction-details.php">
												<span class="nav-text">Transaction details</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<!-- Setting -->
							<li>
								<a class="sidenav-item-link" href="setting.php">
									<i class="mdi mdi-cogs"></i>
									<span class="nav-text">Setting</span>
								</a>
							</li>

						</ul>
					</div>
				</div>
			</div>


			<!-- PAGE WRAPPER -->
			<div class="ec-page-wrapper">

				<!-- Header -->
				<header class="ec-main-header" id="header">
					<nav class="navbar navbar-static-top navbar-expand-lg">
						<!-- Sidebar toggle button -->
						<button id="sidebar-toggler">
							<img src="assets/img/icons/clops.png" alt="">
						</button>
						<!-- search form -->
						<div class="search-form d-lg-inline-block">
							<div class="input-group">
								<input type="text" name="query" id="search-input" class="form-control" placeholder="search.." autofocus autocomplete="off" />
								<button type="button" name="search" id="search-btn" class="btn btn-flat">
									<i class="mdi mdi-magnify"></i>
								</button>
							</div>
							<div id="search-results-container">
								<ul id="search-results"></ul>
							</div>
						</div>

						<!-- navbar right -->
						<div class="navbar-right">
							<ul class="nav navbar-nav">
								<!-- User Account -->
								<?php
								$con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
								$queryx = 'SELECT * FROM `tbl_login_details` WHERE  logdet_id="' . $_SESSION['id'] . '" ';
								$resultx = mysqli_query($con, $queryx);
								$rowx = mysqli_fetch_array($resultx);
								$queryy = 'select * from tbl_reg_details where regdet_lid="' . $rowx['logdet_id'] . '" ';
								$result1y = mysqli_query($con, $queryy);
								$row1y = mysqli_fetch_array($result1y);

								?>
								<li class="dropdown user-menu">
									<button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown" aria-expanded="false">
										<img src="../uploads/<?php echo $row1y['regdet_photo'] ?>" class="user-image" alt="User Image" />
									</button>
									<ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
										<!-- User image -->
										<li class="dropdown-header">
											<div class="d-inline-block">
												<h5><?php echo $row1y['regdet_name'] ?></h5>
												<p class="pt-2"><?php echo $rowx['logdet_email'] ?></p>
											</div>
										</li>
										<li>
											<a href="user-profile.php?id=<?php echo $row1y['regdet_lid'] ?>">
												<i class="mdi mdi-account"></i> My Profile
											</a>
										</li>
										<li class="dropdown-footer">
											<a href="../homeadmin/logout.php"> <i class="mdi mdi-logout"></i> Log Out </a>
										</li>

									</ul>
								</li>
								<li class="dropdown notifications-menu custom-dropdown">
									<button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
										<i class="mdi mdi-bell-ring-outline"></i>
									</button>

									<div class="card card-default dropdown-notify dropdown-menu-right mb-0">
										<div class="card-header card-header-border-bottom px-3">
											<h2>Notifications</h2>
										</div>

										<div class="card-body px-0 py-0">
											<div class="tab-content" id="myNotifications">
												<ul class="list-unstyled" data-simplebar style="height: 360px">
													<li>
														<a href="javscript:void(0)" class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u2.jpg" alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Nitin</h4>
																	<p class="last-msg">Lorem ipsum dolor sit, amet
																		consectetur adipisicing elit. Nam itaque
																		doloremque odio, eligendi delectus vitae.</p>

																	<span class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 30 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)" class="media media-message media-notification media-active">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u1.jpg" alt="Image">
																<span class="status active"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Lovina</h4>
																	<p class="last-msg">Donec mattis augue a nisl
																		consequat, nec imperdiet ex rutrum. Fusce et
																		vehicula enim. Sed in enim eu odio vehic.</p>

																	<span class="font-size-12 font-weight-medium text-white">
																		<i class="mdi mdi-clock-outline"></i> Just
																		now...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)" class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u5.jpg" alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Crinali</h4>
																	<p class="last-msg">Lorem ipsum dolor sit, amet
																		consectetur adipisicing elit. Nam itaque
																		doloremque odio, eligendi delectus vitae.</p>

																	<span class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>
													<li>
														<a href="javscript:void(0)" class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u4.jpg" alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Crinali</h4>
																	<p class="last-msg">Lorem ipsum dolor sit, amet
																		consectetur adipisicing elit. Nam itaque
																		doloremque odio, eligendi delectus vitae.</p>

																	<span class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<ul class="dropdown-menu dropdown-menu-right d-none">
										<li class="dropdown-header">You have 5 notifications</li>
										<li>
											<a href="#">
												<i class="mdi mdi-account-plus"></i> New user registered
												<span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="mdi mdi-account-remove"></i> User deleted
												<span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="mdi mdi-chart-areaspline"></i> Sales report is ready
												<span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="mdi mdi-account-supervisor"></i> New client
												<span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="mdi mdi-server-network-off"></i> Server overloaded
												<span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
											</a>
										</li>
										<li class="dropdown-footer">
											<a class="text-center" href="#"> View All </a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</nav>
				</header>

				<!-- CONTENT WRAPPER -->
				<div class="ec-content-wrapper">
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
																	<label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
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
																		<label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
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
																		<label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
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
																		<label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
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
																		<label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
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
																		<label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
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
																		<label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
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

				?><script>
							alert("<?php echo $query; ?>")
						</script><?php

									// Check connection
									if (!$con) {
										die("Connection failed: " . mysqli_connect_error());
									}

									if ($result) {
										$target = "assets/img/products/";
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
									echo "<script type='text/javascript'> window.location.href = 'product-list.php'</script>";
									exit();
								} else {
								}
							}
									?>

				<!-- Footer -->
				<footer class="footer mt-auto">
					<div class="copyright bg-white">
						<p>
							Copyright © 2023. All right reserved.
						</p>
					</div>
				</footer>

			</div> <!-- End Page Wrapper -->
		</div> <!-- End Wrapper -->

		<!-- Common Javascript -->
		<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
		<script src="assets/plugins/simplebar/simplebar.min.js"></script>
		<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
		<script src="assets/plugins/slick/slick.min.js"></script>

		<!-- Option Switcher -->
		<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

		<!-- custom js -->
		<script src="assets/js/custom.js"></script>
	</body>


	<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 04:18:26 GMT -->

	</html>
<?php

} else {
	echo "<script> window.location.href = '../signin.php'</script>";
}
?>