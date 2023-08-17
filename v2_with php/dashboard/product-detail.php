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
	$query="SELECT * FROM `tbl_products` WHERE prod_id='".$_GET['id']."'";
	$result = mysqli_query($con, $query);
	$row=mysqli_fetch_array($result);
	$query1="SELECT * FROM `tbl_login_details` where  logdet_id='".$row['prod_mid']."'";
	$result1 = mysqli_query($con, $query1);
	$row1=mysqli_fetch_array($result1);
	$query2="SELECT * FROM `tbl_reg_details` where regdet_lid='".$row1['logdet_id']."'";
	$result2 = mysqli_query($con, $query2);
	$row2=mysqli_fetch_array($result2);
	$i=explode(" ",$row['prod_photo']);
	$rescountorder=mysqli_query($con,"SELECT count(order_id) FROM `tbl_orders` where  order_pid='".$row['prod_id']."'");
	$row3=mysqli_fetch_array($rescountorder);
	
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
	
	
?><!DOCTYPE html>
<html lang="en" dir="ltr">



<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 04:18:33 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Andshop - Admin Dashboard HTML Template.">

	<title>Andshop - Admin Dashboard HTML Template.</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap"
		rel="stylesheet">

	<link href="assets/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
	<link href='assets/plugins/slick/slick.min.css' rel='stylesheet'>
	<link href='assets/plugins/swiper/swiper-bundle.min.css' rel='stylesheet'>

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
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Product Detail</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product
							</p>
						</div>
						<div>
							<a href="product-list.html" class="btn btn-primary"> 
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Product Detail</h2>
								</div>

								<div class="card-body product-detail">
									<div class="row">
										<div class="col-xl-4 col-lg-6">
											<div class="row">
												<div class="single-pro-img">
													<div class="single-product-scroll">
														<div class="single-product-cover">
															<div class="single-slide zoom-image-hover">
																<img class="img-responsive"
																	src="assets/img/products/<?php echo $i[0]?>" alt="">
															</div>
															<div class="single-slide zoom-image-hover">
																<img class="img-responsive"
																	src="assets/img/products/<?php echo $i[1]?>" alt="">
															</div>
															<div class="single-slide zoom-image-hover">
																<img class="img-responsive"
																	src="assets/img/products/<?php echo $i[2]?>" alt="">
															</div>
															<div class="single-slide zoom-image-hover">
																<img class="img-responsive"
																	src="assets/img/products/<?php echo $i[3]?>" alt="">
															</div>
															<div class="single-slide zoom-image-hover">
																<img class="img-responsive"
																	src="assets/img/products/<?php echo $i[4]?>" alt="">
															</div><div class="single-slide zoom-image-hover">
																<img class="img-responsive"
																	src="assets/img/products/<?php echo $i[5]?>" alt="">
															</div><div class="single-slide zoom-image-hover">
																<img class="img-responsive"
																	src="assets/img/products/<?php echo $i[6]?>" alt="">
															</div><div class="single-slide zoom-image-hover">
																<img class="img-responsive"
																	src="assets/img/products/<?php echo $i[7]?>" alt="">
															</div>
														</div>
														<div class="single-nav-thumb">
															<div class="single-slide">
																<img class="img-responsive"
																	src="assets/img/products/<?php echo $i[0]?>" alt="">
															</div>
															<div class="single-slide">
																<img class="img-responsive"
																	src="assets/img/products/<?php echo $i[1]?>" alt="">
															</div>
															<div class="single-slide">
																<img class="img-responsive"
																	src="assets/img/products/<?php echo $i[2]?>" alt="">
															</div>
															<div class="single-slide">
																<img class="img-responsive"
																	src="assets/img/products/<?php echo $i[3]?>" alt="">
															</div>
															<div class="single-slide">
																<img class="img-responsive"
																	src="assets/img/products/<?php echo $i[4]?>" alt="">
															</div><div class="single-slide">
																<img class="img-responsive"
																	src="assets/img/products/<?php echo $i[5]?>" alt="">
															</div><div class="single-slide">
																<img class="img-responsive"
																	src="assets/img/products/<?php echo $i[6]?>" alt="">
															</div><div class="single-slide">
																<img class="img-responsive"
																	src="assets/img/products/<?php echo $i[7]?>" alt="">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="product_card_bottom_wrapper">
												<div class="row">
													<div class="col-lg-6">
														<div class="card_bottom_items">
															<div class="card_bottom_item_icon">
																<img src="assets/img/icons/shoping.png" alt="">
															</div>
															<div class="card_bottom_item_text">
																<p>Purchased</p>
																<h3><?php echo $row3['0'];?></h3>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="card_bottom_items">
															<div class="card_bottom_item_icon">
																<img src="assets/img/icons/cart.png" alt="">
															</div>
															<div class="card_bottom_item_text">
																<p>In order</p>
																<h3><?php echo $row3['0'];?></h3>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="card_bottom_items">
															<div class="card_bottom_item_icon">
																<img src="assets/img/icons/doller.png" alt="">
															</div>
															<div class="card_bottom_item_text">
																<p>Amount</p>
																<h3>$<?php echo $row['prod_price'];?></h3>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="card_bottom_items">
															<div class="card_bottom_item_icon">
																<img src="assets/img/icons/chart.png" alt="">
															</div>
															<div class="card_bottom_item_text">
																<p>In stock</p>
																<h3><?php echo $row['prod_stock'];?></h3>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6">
											<div class="row product-overview">
												<div class="col-12">
													<h2 class="product-title-twos"><?php echo $row['prod_name'];?></h2>
													<p class="product-rate">
														<i class="mdi mdi-star is-rated"></i>
														<i class="mdi mdi-star is-rated"></i>
														<i class="mdi mdi-star is-rated"></i>
														<i class="mdi mdi-star is-rated"></i>
														<i class="mdi mdi-star"></i>
														<span class="detail_review_area">1184 Reviews</span>
													</p>
													<p class="product-desc"><?php echo $row['prod_desc'];?>
													</p>
													 <!-- <p class="product-desc">
														Lorem veniam nulla exercitation. Quis cillum aliqua
														reprehenderit ut eiusmod est adipisicing qui est voluptate
														laboris. Est veniam nisi laborum non ea proident cillum mollit. 
													</p> -->
													<div class="product_model_search_area">
														 <ul>
															<!-- <li>Model: <span class="span_block_area">Odsy-1000</span>
															</li>
															<li>SKU: <span class="span_block_area">SO#120</span></li>
															<li>Slug: <span class="span_block_area">/shirt</span></li>
															<li>Discount: <span class="span_block_area">25%</span></li>
															<li>Color: <span class="parent_color">
																	<span class="color_plate"
																		style="background-color:#90cdf7;"></span>
																	<span class="color_plate"
																		style="background-color:#ff3b66;"></span>
																	<span class="color_plate"
																		style="background-color:#ffc476;"></span>
																	<span class="color_plate"
																		style="background-color:#1af0ba;"></span>
																</span></li> -->
															<li>Price: <span class="span_block_area">$<?php echo $row['prod_price'];?></span></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="row review-rating mt-4">
												<div class="col-12">
													<ul class="nav nav-tabs" id="myRatingTab" role="tablist">
														<li class="nav-item">
															<a class="nav-link active" id="product-detail-tab"
																data-bs-toggle="tab" data-bs-target="#productdetail"
																href="#productdetail" role="tab" aria-selected="true">
																<i class="mdi mdi-library-books mr-1"></i>
																Description</a>
														</li>

														<li class="nav-item">
															<a class="nav-link" id="product-information-tab"
																data-bs-toggle="tab"
																data-bs-target="#productinformation"
																href="#productinformation" role="tab"
																aria-selected="false">
																<i class="mdi mdi-information mr-1"></i>order now</a>
														</li>

														<li class="nav-item">
															<a class="nav-link" id="product-reviews-tab"
																data-bs-toggle="tab" data-bs-target="#productreviews"
																href="#productreviews" role="tab" aria-selected="false">
																<i class="mdi mdi-star-half mr-1"></i> Reviews</a>
														</li>
													</ul>
													<div class="tab-content" id="myTabContent2">
														<div class="tab-pane pt-3 fade show active" id="productdetail"
															role="tabpanel">
															<p><?php echo $row['prod_desc'];?>
															</p>
															<ul class="features">
																<li>Any Product types that You want - Simple,
																	Configurable</li>
																<li>Downloadable/Digital Products, Virtual Products</li>
																<li>Inventory Management with Backordered items</li>
																<li>Flatlock seams throughout.</li>
															</ul>
														</div>

														<div class="tab-pane pt-3 fade" id="productinformation"
															role="tabpanel">
															<div class="product_model_search_area">
																<!-- <ul>
																	<li>Model: <span
																			class="span_block_area">Odsy-1000</span>
																	</li>
																	<li>SKU: <span class="span_block_area">SO#120</span>
																	</li>
																	<li>Slug: <span
																			class="span_block_area">/shirt</span></li>
																	<li>Discount: <span
																			class="span_block_area">25%</span></li>
																	<li>Color: <span class="parent_color">
																			<span class="color_plate"
																				style="background-color:#90cdf7;"></span>
																			<span class="color_plate"
																				style="background-color:#ff3b66;"></span>
																			<span class="color_plate"
																				style="background-color:#ffc476;"></span>
																			<span class="color_plate"
																				style="background-color:#1af0ba;"></span>
																		</span></li>
																	<li>Price: <span
																			class="span_block_area">$499.00</span></li>
																	<li>Tag: <span class="span_block_area">Men shirt,
																			Casual shirt, Winter, Whaite</span></li>
																</ul> -->
															</div>
														</div>

														<div class="tab-pane pt-3 fade" id="productreviews"
															role="tabpanel">
															<div class="ec-t-review-wrapper">
																<!-- <div class="ec-t-review-item">
																	<div class="ec-t-review-avtar">
																		<img src="assets/img/review-image/1.jpg" alt="">
																	</div>
																	<div class="ec-t-review-content">
																		<div class="ec-t-review-top">
																			<p class="ec-t-review-name">Lindsy stirling
																			</p>
																			<div class="ec-t-rate custom_rating_gap">
																				<i class="mdi mdi-star is-rated"></i>
																				<i class="mdi mdi-star is-rated"></i>
																				<i class="mdi mdi-star is-rated"></i>
																				<i class="mdi mdi-star is-rated"></i>
																				<i class="mdi mdi-star"></i>
																				<span class="rating_outof">5 out of
																					5</span>
																			</div>
																		</div>
																		<div class="ec-t-review-bottom">
																			<p>
																				Consectetur exercitation non eiusmod
																				enim adipisicing mollit velit qui
																				adipisicing. Tempor enim fugiat minim et
																				qui incididunt esse incididunt cillum
																				fugiat.
																			</p>
																		</div>
																	</div>
																</div>
																<div class="ec-t-review-item">
																	<div class="ec-t-review-avtar">
																		<img src="assets/img/review-image/2.jpg" alt="">
																	</div>
																	<div class="ec-t-review-content">
																		<div class="ec-t-review-top">
																			<p class="ec-t-review-name">Linda Morgus</p>
																			<div class="ec-t-rate">
																				<i class="mdi mdi-star is-rated"></i>
																				<i class="mdi mdi-star is-rated"></i>
																				<i class="mdi mdi-star is-rated"></i>
																				<i class="mdi mdi-star is-rated"></i>
																				<i class="mdi mdi-star"></i>
																				<span class="rating_outof">5 out of
																					5</span>
																			</div>
																		</div>
																		<div class="ec-t-review-bottom ">
																			<p>
																				Consectetur exercitation non eiusmod
																				enim adipisicing mollit velit qui
																				adipisicing. Tempor enim fugiat minim et
																				qui incididunt esse incididunt cillum
																				fugiat.
																			</p>
																		</div>
																	</div>
																</div> -->

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
	<script src="assets/plugins/swiper/swiper-bundle.min.js"></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- custom js -->
	<script src="assets/js/custom.js"></script>
</body>



<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 04:18:36 GMT -->
</html>
<?php

}
else{
	
    echo "<script type='text/javascript'> window.location.href = 'product-grid.php'</script>";
}
?>
<?php

}
else{
  echo "<script> window.location.href = '../signin.php'</script>";
}
	  ?>