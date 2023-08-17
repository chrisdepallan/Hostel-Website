
<?php

session_start();
$_SESSION['homeflag']=1;
$_SESSION['url']="dashboard/index.php"

?>
<?php
if($_SESSION['flag']==1){
  
?>
<?php
if(isset($_GET['id'])){

	$con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
	$query="SELECT * FROM `tbl_login_details` WHERE logdet_id='".$_GET['id']."'";
	$result = mysqli_query($con, $query);
	$row=mysqli_fetch_array($result);
	$query1="SELECT * FROM `tbl_reg_details` where  regdet_lid='".$row['logdet_id']."'";
	$result1 = mysqli_query($con, $query1);
	$row1=mysqli_fetch_array($result1);
	// $query2="SELECT * FROM `tbl_products` where prod_id='".$row['order_pid']."'";
	// $result2 = mysqli_query($con, $query2);
	// $row2=mysqli_fetch_array($result2);
	// $query3="SELECT * FROM `tbl_login_details` where logdet_id='".$row2['prod_mid']."'";
	// $result3 = mysqli_query($con, $query3);
	// $row3=mysqli_fetch_array($result3);
	// $query4="SELECT * FROM `tbl_categories` where  cate_id='".$row2['prod_cid']."'";
	// $result4 = mysqli_query($con, $query4);
	// $row4=mysqli_fetch_array($result4);
	// $query5="SELECT * FROM `tbl_reg_details` where  regdet_id='".$row3['logdet_id']."'";
	// $result5 = mysqli_query($con, $query5);
	// $row5=mysqli_fetch_array($result5);
	// $query6="SELECT * FROM `tbl_reg_details` where  regdet_id='".$row1['logdet_id']."'";
	// $result6 = mysqli_query($con, $query6);
	// $row6=mysqli_fetch_array($result6);
	
	// $query7="SELECT * FROM `tbl_merchant_details` where  mer_det_lid='".$row3['logdet_id']."'";
	// $result7 = mysqli_query($con, $query7);
	// $row7=mysqli_fetch_array($result7);

	// $query8="SELECT * FROM `tbl_invoices` where  invoice_id='".$row['order_id']."'";
	// $result8 = mysqli_query($con, $query8);
	// $row8=mysqli_fetch_array($result8);
	
	
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 04:18:23 GMT -->
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
						<img class="ec-brand-icon" src="../uploads/logo.png" alt=""  style='border-radius:50%'/>
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
							<input type="text" name="query" id="search-input" class="form-control"
								placeholder="search.." autofocus autocomplete="off" />
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
							$queryx='SELECT * FROM `tbl_login_details` WHERE  logdet_id="'.$_SESSION['id'].'" ';
							$resultx = mysqli_query($con, $queryx);
							$rowx=mysqli_fetch_array($resultx);
							$queryy='select * from tbl_reg_details where regdet_lid="'.$rowx['logdet_id'].'" ';
							$result1y = mysqli_query($con, $queryy);
							$row1y=mysqli_fetch_array($result1y);

							?>
							<li class="dropdown user-menu">
								<button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown"
									aria-expanded="false">
									<img src="../uploads/<?php echo $row1y['regdet_photo']?>" class="user-image" alt="User Image" />
								</button>
								<ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
									<!-- User image -->
									<li class="dropdown-header">
										<div class="d-inline-block">
											<h5><?php echo $row1y['regdet_name']?></h5>
											<p class="pt-2"><?php echo $rowx['logdet_email']?></p>
										</div>
									</li>
									<li>
										<a href="user-profile.php?id=<?php echo $row1y['regdet_lid']?>">
											<i class="mdi mdi-account"></i> My Profile
										</a>
									</li>
									<li class="dropdown-footer">
										<a href="../homeadmin/logout.php"> <i class="mdi mdi-logout"></i> Log Out </a>
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
													<a href="javscript:void(0)"
														class="media media-message media-notification">
														<div class="position-relative mr-3">
															<img class="rounded-circle" src="assets/img/user/u2.jpg"
																alt="Image">
															<span class="status away"></span>
														</div>
														<div class="media-body d-flex justify-content-between">
															<div class="message-contents">
																<h4 class="title">Nitin</h4>
																<p class="last-msg">Lorem ipsum dolor sit, amet
																	consectetur adipisicing elit. Nam itaque
																	doloremque odio, eligendi delectus vitae.</p>

																<span
																	class="font-size-12 font-weight-medium text-secondary">
																	<i class="mdi mdi-clock-outline"></i> 30 min
																	ago...
																</span>
															</div>
														</div>
													</a>
												</li>

												<li>
													<a href="javscript:void(0)"
														class="media media-message media-notification media-active">
														<div class="position-relative mr-3">
															<img class="rounded-circle" src="assets/img/user/u1.jpg"
																alt="Image">
															<span class="status active"></span>
														</div>
														<div class="media-body d-flex justify-content-between">
															<div class="message-contents">
																<h4 class="title">Lovina</h4>
																<p class="last-msg">Donec mattis augue a nisl
																	consequat, nec imperdiet ex rutrum. Fusce et
																	vehicula enim. Sed in enim eu odio vehic.</p>

																<span
																	class="font-size-12 font-weight-medium text-white">
																	<i class="mdi mdi-clock-outline"></i> Just
																	now...
																</span>
															</div>
														</div>
													</a>
												</li>

												<li>
													<a href="javscript:void(0)"
														class="media media-message media-notification">
														<div class="position-relative mr-3">
															<img class="rounded-circle" src="assets/img/user/u5.jpg"
																alt="Image">
															<span class="status away"></span>
														</div>
														<div class="media-body d-flex justify-content-between">
															<div class="message-contents">
																<h4 class="title">Crinali</h4>
																<p class="last-msg">Lorem ipsum dolor sit, amet
																	consectetur adipisicing elit. Nam itaque
																	doloremque odio, eligendi delectus vitae.</p>

																<span
																	class="font-size-12 font-weight-medium text-secondary">
																	<i class="mdi mdi-clock-outline"></i> 1 hrs
																	ago...
																</span>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="javscript:void(0)"
														class="media media-message media-notification">
														<div class="position-relative mr-3">
															<img class="rounded-circle" src="assets/img/user/u4.jpg"
																alt="Image">
															<span class="status away"></span>
														</div>
														<div class="media-body d-flex justify-content-between">
															<div class="message-contents">
																<h4 class="title">Crinali</h4>
																<p class="last-msg">Lorem ipsum dolor sit, amet
																	consectetur adipisicing elit. Nam itaque
																	doloremque odio, eligendi delectus vitae.</p>

																<span
																	class="font-size-12 font-weight-medium text-secondary">
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
											<span class=" font-size-12 d-inline-block float-right"><i
													class="mdi mdi-clock-outline"></i> 10 AM</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-account-remove"></i> User deleted
											<span class=" font-size-12 d-inline-block float-right"><i
													class="mdi mdi-clock-outline"></i> 07 AM</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-chart-areaspline"></i> Sales report is ready
											<span class=" font-size-12 d-inline-block float-right"><i
													class="mdi mdi-clock-outline"></i> 12 PM</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-account-supervisor"></i> New client
											<span class=" font-size-12 d-inline-block float-right"><i
													class="mdi mdi-clock-outline"></i> 10 AM</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-server-network-off"></i> Server overloaded
											<span class=" font-size-12 d-inline-block float-right"><i
													class="mdi mdi-clock-outline"></i> 05 AM</span>
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
					<div class="breadcrumb-wrapper breadcrumb-contacts">
						<div>
							<h1>Customer profile</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Profile
							</p>
						</div>
						<div>
							<a href="user-list.html" class="btn btn-primary">Edit</a>
						</div>
					</div>
					
					<div class="user_profile_wrapper_top card">
						<div class="user_profile_top_bg"></div>
						<div class="user_profile_top_des">
							<div class="user_profile_img">
								<img style='width:170px;border-radius:10%' src="../uploads/<?php echo $row1['regdet_photo']?>" alt="">
							</div>

							<div class="user_profile_text_top">
								<h3> <?php  echo $row1['regdet_name'];?></h3>
								<p><?php  echo $row['logdet_email'];?></p>
							</div>
						</div>
						
					</div>
					<div class="card bg-white profile-content">
						<div class="row">
							<div class="col-lg-4 col-xl-3">
								<div class="profile-content-left profile-left-spacing">
									<div class="product_card_bottom_wrapper">
										<div class="row">
											<div class="col-lg-12">
												<div class="card_bottom_items">
													<div class="card_bottom_item_icon">
														<img src="assets/img/icons/shoping.png" alt="">
													</div>
													<div class="card_bottom_item_text">
														<p>Purchased</p>
														<h3>5782</h3>
													</div>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="card_bottom_items">
													<div class="card_bottom_item_icon">
														<img src="assets/img/icons/cart.png" alt="">
													</div>
													<div class="card_bottom_item_text">
														<p>In order</p>
														<h3>1245</h3>
													</div>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="card_bottom_items">
													<div class="card_bottom_item_icon">
														<img src="assets/img/icons/doller.png" alt="">
													</div>
													<div class="card_bottom_item_text">
														<p>Amount</p>
														<h3>$82,950</h3>
													</div>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="card_bottom_items">
													<div class="card_bottom_item_icon">
														<img src="assets/img/icons/chart.png" alt="">
													</div>
													<div class="card_bottom_item_text">
														<p>In stock</p>
														<h3>7325</h3>
													</div>
												</div>
											</div>
										</div>
									</div>

									<hr class="w-100">

									<div class="contact-info pt-4">
										<h5 class="text-dark">Contact Information</h5>
										<div class="contact_info_sidebar_item">
											<h3></h3>
											<p></p>
										</div>

										<div class="contact_info_sidebar_item">
											<h3>Email</h3>
											<p><?php  echo $row['logdet_email'];?></p>
										</div>
										<div class="contact_info_sidebar_item">
											<h3>Phone number</h3>
											<p><?php  echo $row1['regdet_phone'];?></p>
										</div>

										<div class="contact_info_sidebar_item">
											<h3>Social Profile</h3>
											
											<ul>
												<li>
													<a href="#" class="mb-1 btn btn-outline btn-twitter rounded-circle">
														<i class="mdi mdi-twitter"></i>
													</a>
												</li>
												<li>
													<a href="#" class="mb-1 btn btn-outline btn-linkedin rounded-circle">
														<i class="mdi mdi-linkedin"></i>
													</a>
												</li>
												<li>
													<a href="#" class="mb-1 btn btn-outline btn-facebook rounded-circle">
														<i class="mdi mdi-facebook"></i>
													</a>
												</li>
												<li>
													<a href="#" class="mb-1 btn btn-outline btn-skype rounded-circle">
														<i class="mdi mdi-skype"></i>
													</a>
												</li>
											</ul>
										</div>
										
										
									</div>
								</div>
							</div>

							<div class="col-lg-8 col-xl-9">
								<div class="profile-content-right profile-right-spacing py-5">
									<ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myProfileTab" role="tablist">
										<li class="nav-item" role="presentation">
											<button class="nav-link active" id="purchased-tab" data-bs-toggle="tab"
												data-bs-target="#purchased" type="button" role="tab"
												aria-controls="purchased" aria-selected="true">Purchased</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="orders-tab" data-bs-toggle="tab"
												data-bs-target="#r-orders" type="button" role="tab"
												aria-controls="orders" aria-selected="false">Recent orders</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="settings-tab" data-bs-toggle="tab"
												data-bs-target="#settings" type="button" role="tab"
												aria-controls="settings" aria-selected="false">Settings</button>
										</li>
									</ul>
									<div class="tab-content px-3 px-xl-5" id="myTabContent">

										<div class="tab-pane fade show active" id="purchased" role="tabpanel"
											aria-labelledby="purchased-tab">
											<div class="tab-widget mt-5">
												<div class="user_profile_top_heading">
													<h3>All purchased products</h3>
												</div>

												<div class="row">
													<div class="col-lg-3 col-md-6 col-sm-6">
														<div class="card-wrapper">
															<div class="card-container">
																<div class="card-top">
																	<img class="card-image" src="assets/img/products/pro-big-1.png" alt="">
																</div>
																<div class="card-bottom">
																	<h3><a href="product-detail.html">Casual shirt for men</a></h3>
																	<p>$195.00</p>
																</div>
																<div class="card-action">
																	<div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
																	<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
																	</div>
																	<div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-6">
														<div class="card-wrapper">
															<div class="card-container">
																<div class="card-top">
																	<img class="card-image" src="assets/img/products/pro-big-2.png" alt="">
																</div>
																<div class="card-bottom">
																	<h3><a href="product-detail.html">Casual shirt for boys</a></h3>
																	<p>$195.00</p>
																</div>
																<div class="card-action">
																	<div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
																	<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
																	</div>
																	<div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-6">
														<div class="card-wrapper">
															<div class="card-container">
																<div class="card-top">
																	<img class="card-image" src="assets/img/products/pro-big-3.png" alt="">
																</div>
																<div class="card-bottom">
																	<h3><a href="product-detail.html">Casual shirt for boys</a></h3>
																	<p>$155.00</p>
																</div>
																<div class="card-action">
																	<div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
																	<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
																	</div>
																	<div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-6">
														<div class="card-wrapper">
															<div class="card-container">
																<div class="card-top">
																	<img class="card-image" src="assets/img/products/pro-big-4.png" alt="">
																</div>
																<div class="card-bottom">
																	<h3><a href="product-detail.html">Pink inner for women</a></h3>
																	<p>$145.00</p>
																</div>
																<div class="card-action">
																	<div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
																	<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
																	</div>
																	<div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-6">
														<div class="card-wrapper">
															<div class="card-container">
																<div class="card-top">
																	<img class="card-image" src="assets/img/products/pro-big-5.png" alt="">
																</div>
																<div class="card-bottom">
																	<h3><a href="product-detail.html">Sports t-shirt</a></h3>
																	<p>$105.90</p>
																</div>
																<div class="card-action">
																	<div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
																	<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
																	</div>
																	<div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-6">
														<div class="card-wrapper">
															<div class="card-container">
																<div class="card-top">
																	<img class="card-image" src="assets/img/products/pro-big-6.png" alt="">
																</div>
																<div class="card-bottom">
																	<h3><a href="product-detail.html">Casual shirt for men</a></h3>
																	<p>$195.00</p>
																</div>
																<div class="card-action">
																	<div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
																	<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
																	</div>
																	<div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-6">
														<div class="card-wrapper">
															<div class="card-container">
																<div class="card-top">
																	<img class="card-image" src="assets/img/products/pro-big-7.png" alt="">
																</div>
																<div class="card-bottom">
																	<h3><a href="product-detail.html">Casual shirt for men</a></h3>
																	<p>$195.00</p>
																</div>
																<div class="card-action">
																	<div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
																	<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
																	</div>
																	<div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-6">
														<div class="card-wrapper">
															<div class="card-container">
																<div class="card-top">
																	<img class="card-image" src="assets/img/products/pro-big-8.png" alt="">
																</div>
																<div class="card-bottom">
																	<h3><a href="product-detail.html">Smart watch</a></h3>
																	<p>$589.00</p>
																</div>
																<div class="card-action">
																	<div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
																	<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
																	</div>
																	<div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-6">
														<div class="card-wrapper">
															<div class="card-container">
																<div class="card-top">
																	<img class="card-image" src="assets/img/products/pro-big-9.png" alt="">
																</div>
																<div class="card-bottom">
																	<h3><a href="product-detail.html">Laptop</a></h3>
																	<p>$1495.00</p>
																</div>
																<div class="card-action">
																	<div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
																	<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
																	</div>
																	<div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-6">
														<div class="card-wrapper">
															<div class="card-container">
																<div class="card-top">
																	<img class="card-image" src="assets/img/products/pro-big-10.png" alt="">
																</div>
																<div class="card-bottom">
																	<h3><a href="product-detail.html">Casual shirt for men</a></h3>
																	<p>$195.00</p>
																</div>
																<div class="card-action">
																	<div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
																	<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
																	</div>
																	<div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-6">
														<div class="card-wrapper">
															<div class="card-container">
																<div class="card-top">
																	<img class="card-image" src="assets/img/products/pro-big-11.png" alt="">
																</div>
																<div class="card-bottom">
																	<h3><a href="product-detail.html">Casual shirt for men</a></h3>
																	<p>$195.00</p>
																</div>
																<div class="card-action">
																	<div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
																	<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
																	</div>
																	<div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-6">
														<div class="card-wrapper">
															<div class="card-container">
																<div class="card-top">
																	<img class="card-image" src="assets/img/products/pro-big-12.png" alt="">
																</div>
																<div class="card-bottom">
																	<h3><a href="product-detail.html">Double sofa set</a></h3>
																	<p>$195.00</p>
																</div>
																<div class="card-action">
																	<div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
																	<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
																	</div>
																	<div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane fade" id="r-orders" role="tabpanel"
											aria-labelledby="orders-tab">
											<div class="tab-widget mt-5">
											<div class="user_profile_top_heading">
												<h3>Recent orders</h3>
											</div>
											<div class="row">
												<div class="col-12">
													<div class="card card-default">
														<div class="card-body">
															<div class="table-responsive">
																<table id="responsive-data-table" class="table" style="width:100%">
																	<thead>
																		<tr>
																			<th>ID</th>
																			<th>Product name</th>
																			<th>Unit</th>
																			<th>Price</th>
																			<th>Order date</th>
																			<th>Status</th>
																		</tr>
																	</thead>
						
																	<tbody>
																		<tr>
																			<td>#JK5876GH</td>
																			<td>Corporate office chair</td>
																			<td>10 Units</td>
																			<td>$10,000</td>
																			<td>25 Feb 2022</td>
																			<td>Completed</td>
																		</tr>
																		<tr>
																			<td>#JK5876GH</td>
																			<td>Corporate office chair</td>
																			<td>10 Units</td>
																			<td>$10,000</td>
																			<td>25 Feb 2022</td>
																			<td>Completed</td>
																		</tr>
																		<tr>
																			<td>#JK5876GH</td>
																			<td>Corporate office chair</td>
																			<td>10 Units</td>
																			<td>$10,000</td>
																			<td>25 Feb 2022</td>
																			<td>Completed</td>
																		</tr>
																		<tr>
																			<td>#JK5876GH</td>
																			<td>Corporate office chair</td>
																			<td>10 Units</td>
																			<td>$10,000</td>
																			<td>25 Feb 2022</td>
																			<td>Completed</td>
																		</tr>
																		<tr>
																			<td>#JK5876GH</td>
																			<td>Corporate office chair</td>
																			<td>10 Units</td>
																			<td>$10,000</td>
																			<td>25 Feb 2022</td>
																			<td>Completed</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										</div>

										<div class="tab-pane fade" id="settings" role="tabpanel"
											aria-labelledby="settings-tab">
											<div class="tab-widget mt-5">
												<div class="user_profile_top_heading">
													<h3>Customer settings</h3>
												</div>
											<div class="tab-pane-content mt-5">
												<form>

													<div class="row mb-2">
														<div class="col-lg-6">
															<div class="form-group">
																<label for="firstName">First name</label>
																<input type="text" class="form-control" id="firstName"
																	value="First name">
															</div>
														</div>

														<div class="col-lg-6">
															<div class="form-group">
																<label for="lastName">Last name</label>
																<input type="text" class="form-control" id="lastName"
																	value="Last name">
															</div>
														</div>

														<div class="col-lg-6">
															<div class="form-group mb-4">
																<label for="userName">User name</label>
																<input type="text" class="form-control" id="userName"
																	value="User name">
																<span class="d-block mt-1">Accusamus nobis at omnis consequuntur
																	culpa tempore saepe animi.</span>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group mb-4">
																<label for="email">Email</label>
																<input type="email" class="form-control" id="email"
																	value="andshop.example@gmail.com">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group mb-4">
																<label for="number">Mobile</label>
																<input type="number" class="form-control" id="number"
																	value="01XXXX...">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group mb-4">
																<label for="oldPassword">Old password</label>
																<input type="password" class="form-control" id="oldPassword">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group mb-4">
																<label for="newPassword">New password</label>
																<input type="password" class="form-control" id="newPassword">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group mb-4">
																<label for="conPassword">Confirm password</label>
																<input type="password" class="form-control" id="conPassword">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form_customer_profilr_img">
																<h6 class="mb-3">Customer profile image:</h6>
																<img src="assets/img/user/profile.png" alt="img">
															</div>
														</div>
													</div>

													<div class="d-flex justify-content-end mt-5">
														<button type="submit"
															class="btn btn-primary mb-2 btn-pill">Update
															Profile</button>
													</div>
												</form>
											</div>
										</div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->

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
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- custom js -->
	<script src="assets/js/custom.js"></script>

</body>


<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 04:18:23 GMT -->
</html>
<?php

}
else{
	
    echo "<script type='text/javascript'> window.location.href = 'index.php'</script>";
}
?>
<?php

}
else{
  echo "<script> window.location.href = '../signin.php'</script>";
}
	  ?>