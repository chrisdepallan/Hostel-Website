
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
	$query="SELECT * FROM `tbl_orders` WHERE order_id='".$_GET['id']."'";
	$result = mysqli_query($con, $query);
	$row=mysqli_fetch_array($result);
	$query1="SELECT * FROM `tbl_login_details` where  logdet_id='".$row['order_uid']."'";
	$result1 = mysqli_query($con, $query1);
	$row1=mysqli_fetch_array($result1);
	$query2="SELECT * FROM `tbl_products` where prod_id='".$row['order_pid']."'";
	$result2 = mysqli_query($con, $query2);
	$row2=mysqli_fetch_array($result2);
	$query3="SELECT * FROM `tbl_login_details` where logdet_id='".$row2['prod_mid']."'";
	$result3 = mysqli_query($con, $query3);
	$row3=mysqli_fetch_array($result3);
	$query4="SELECT * FROM `tbl_categories` where  cate_id='".$row2['prod_cid']."'";
	$result4 = mysqli_query($con, $query4);
	$row4=mysqli_fetch_array($result4);
	$query5="SELECT * FROM `tbl_reg_details` where  regdet_id='".$row3['logdet_id']."'";
	$result5 = mysqli_query($con, $query5);
	$row5=mysqli_fetch_array($result5);
	$query6="SELECT * FROM `tbl_reg_details` where  regdet_id='".$row1['logdet_id']."'";
	$result6 = mysqli_query($con, $query6);
	$row6=mysqli_fetch_array($result6);
	
	$query7="SELECT * FROM `tbl_merchant_details` where  mer_det_lid='".$row3['logdet_id']."'";
	$result7 = mysqli_query($con, $query7);
	$row7=mysqli_fetch_array($result7);

	$query8="SELECT * FROM `tbl_invoices` where  invoice_oid='".$row['order_id']."'";
	$result8 = mysqli_query($con, $query8);
	$row8=mysqli_fetch_array($result8);
	$query9="SELECT * FROM `tbl_shipping` where  ship_oid='".$row['order_id']."'";
	$result9 = mysqli_query($con, $query9);
	$row9=mysqli_fetch_array($result9);
	
	
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/order-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 04:18:37 GMT -->
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
					<div class="breadcrumb-wrapper">
						<div>
							<h1>Order details</h1>
						<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
							<span><i class="mdi mdi-chevron-right"></i></span>Order details
						</p>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="ec-odr-dtl card card-default">
								<div class="card-header card-header-border-bottom d-flex justify-content-between">
									<h2 class="ec-odr">Order details</h2>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-xl-3 col-lg-6">
											<address class="info-grid">
												<div class="info-content">
												    <h5 class="title_infos"> <span class="mdi mdi-account-circle"></span> Customer info</h5> 
													 <ul>
														<li>Name: <span> <?php  echo $row6['regdet_name']; ?></span></li>
														<li>Email: <span><?php echo $row1['logdet_email'];?></span> </li>
														<li>Phone: <span><?php echo $row6['regdet_phone']?></span></li>
													 </ul>
													 <!-- <a href="#!">View profile</a> -->
												</div>
											</address>
										</div>
										<div class="col-xl-3 col-lg-6">
											<address class="info-grid">
												<div class="info-content">
												    <h5 class="title_infos"> <span class="mdi mdi-ship-wheel"></span> Shipping info</h5> 
													 <ul>
														<li>Address: <span><?php  echo $row9['ship_add']; ?></span> </li>
														<li>Phone: <span><?php  echo $row6['regdet_phone']; ?></span></li>
													 </ul>
												</div>
											</address>
										</div>
										<div class="col-xl-3 col-lg-6">
											<address class="info-grid">
												<div class="info-content">
												    <h5 class="title_infos"> <span class="mdi mdi-cart"></span> Order info</h5> 
													 <ul>
														<li>Vendor: <span><?php echo $row5['regdet_name'];?></span></li>
														<li>Address: <span><?php echo $row9['ship_add'];?></span> </li>
														<li>Phone: <span><?php echo $row5['regdet_phone'];?></span></li>
													 </ul>
													 <!-- <a href="#!">View profile</a> -->
												</div>
											</address>
										</div>
										<div class="col-xl-3 col-lg-6">
											<address class="info-grid">
												<div class="info-content">
												    <h5 class="title_infos"> <span class="mdi mdi-card-bulleted"></span>Payment info</h5> 
													 <ul>
														<li>Payment method: <span><?php echo $row8['invoice_payment_method'];?></span></li>
														<li>ID: <span><?php echo $row8['invoice_payment_id'];?></span> </li>
														<li>Date:<span><?php echo $row8['invoice_date'];?></span> </li>
														<!-- <li>Phone: <span>(012) 345-678-9012</span></li> -->
													 </ul>
												</div>
											</address>
										</div>
									
									</div>
								</div>
							</div>
							<!-- Tracking Detail -->
							<div class="card ec-odr-dtl card card-default mt-4 trk-order">
								<div class="card-header card-header-border-bottom order_tracking_title">
									<h3>Order tracking id: <span>#<?php echo $row["order_id"]?></span></h3>
								</div>
								<div
									class="d-flex flex-wrap flex-sm-nowrap justify-content-between py-3 px-2 bg-custom">
									<div class="order_details_shipment w-100 py-1 px-2">
										<h3>Shipped via: <span>DHL courier service int.</span></h3>
										</div>
									<div class="order_details_shipment w-100 py-1 px-2">
										<h3>Status: <span><?php
if($row['order_status']==0) 
	echo " Not yet confirmed";
else 
	if($row['order_status']==1)
		echo "Order confirmed";
else
	if($row['order_status']==2)
		echo "Order processing";
else 
	if($row['order_status']==3)
		echo "Order dispatched";
else
	if($row['order_status']==4)
				echo "Order out for delivery";
else
	if($row['order_status']==5)
				echo "Order delivered";
else
	echo "order is delayed";
?></span></h3>
										</div>
									<div class="order_details_shipment w-100 py-1 px-2">
											<h3>Delivery date: <span><?php echo $row['order_date']?></span></h3>
										</div>
								</div>
								<div class="card-body">
									<div
										class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
										<div class="step ">
										<style>

progress::-moz-progress-bar {
  background: #059862 ;
}

progress::-webkit-progress-value {
  background:  #059862;
}

progress::-webkit-progress-bar {
  background:  #059862;
}</style>



										<div class="">
										<progress  id="file"  style="width:1300px;position:absolute;transform:translate(0,35px) " value="<?php echo $row['order_status']?>" min='1'max="5"> 32% </progress>

												<div class="step-icon"><i class="mdi mdi-cart-plus"></i></div>
											</div>

											<h4 class="step-title">Confirmed Order</h4>
										</div>
										<div class="step " style=''>
											<div class="">
												<div class="step-icon"><i class="mdi mdi-repeat"></i></div>
											</div>
											<h4 class="step-title">Processing Order</h4>
										</div>
										<div class="step">
											<div class="">
												<div class="step-icon"><i class="mdi mdi-gift"></i></div>
											</div>
											<h4 class="step-title">Product Dispatched</h4>
										</div>
										<div class="step">
											<div class="">
												<div class="step-icon"><i class="mdi mdi-truck-fast"></i></div>
											</div>
											<h4 class="step-title">On Delivery</h4>
										</div>
										<div class="step">
											<div class="">
												<div class="step-icon"><i class="mdi mdi-shopping"></i></div>
											</div>
											<h4 class="step-title">Product Delivered</h4>
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


<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/order-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 04:18:37 GMT -->
</html>
<?php

}
else{
	
    echo "<script type='text/javascript'> window.location.href = 'new-order.php'</script>";
}
?>
<?php

}
else{
  echo "<script> window.location.href = '../signin.php'</script>";
}
	  ?>