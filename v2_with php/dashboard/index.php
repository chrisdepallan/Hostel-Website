
<?php

session_start();
$_SESSION['homeflag']=1;
$_SESSION['url']="dashboard/index.php"

?>
<?php
if($_SESSION['flag']==1){
  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 04:17:39 GMT -->
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<meta charset="utf-8" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Andshop - Admin Dashboard HTML Template.">

	<title>Andshop - Admin Dashboard HTML Template.</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
	<link href="assets/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

	<!-- custom css -->
	<link id="style.css" href="assets/css/style.css" rel="stylesheet" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />
	<script>
		
		function toggle(id){
			
          $.ajax({
            url: 'order-status1-vali.php',
            method: "POST",
            data: {
              id: id
            },
            success: function(data) {
              
					
              
            }
          })
		}
        
    

	</script>
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

	<!--  WRAPPER  -->
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

		<!--  PAGE WRAPPER -->
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
					<!-- Top Statistics -->
					<div class="row">
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-1">
								<div class="card-body">
									<h2 class="mb-1">1,503</h2>
									<p>Daily Signups</p>
									<span class="mdi mdi-account-arrow-left"></span>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-2">
								<div class="card-body">
									<h2 class="mb-1">79,503</h2>
									<p>Daily Visitors</p>
									<span class="mdi mdi-account-clock"></span>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-3">
								<div class="card-body">
									<h2 class="mb-1">15,503</h2>
									<p>Daily Order</p>
									<span class="mdi mdi-package-variant"></span>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-4">
								<div class="card-body">
									<h2 class="mb-1">$98,503</h2>
									<p>Daily Revenue</p>
									<span class="mdi mdi-currency-usd"></span>
								</div>
							</div>
						</div>
					</div>
<!-- 
					<div class="row">
						<div class="col-xl-8 col-md-12 p-b-15">
							Sales Graph
							<div id="user-acquisition" class="card card-default">
								<div class="card-header">
									<h2>Sales Report</h2>
								</div>
								<div class="card-body">
									<div class="tab-content pt-4" id="salesReport">
										<div class="tab-pane fade show active" id="source-medium" role="tabpanel">
											<div class="mb-6" style="max-height:247px">
												<canvas id="linechart"></canvas>
												<div id="acqLegend" class="customLegend mb-2"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->

						<!-- <div class="col-xl-4 col-md-12 p-b-15"> -->
							<!-- Doughnut Chart -->
							<!-- <div class="card card-default">
								<div class="card-header justify-content-center">
									<h2>Orders Overview</h2>
								</div>
								<div class="card-body">
									<canvas id="polar"></canvas>
								</div>
								<a href="#" class="pb-5 d-block text-center text-muted"><i
										class="mdi mdi-download mr-2"></i> Download overall report</a>
								
							</div>
						</div>
					</div> -->
<!-- 
					<div class="row">
						<div class="col-xl-8 col-md-12 p-b-15">
							User activity statistics 
							<div class="card card-default" id="user-activity">
								<div class="no-gutters">
									<div>
										<div class="card-header justify-content-between">
											<h2>User Activity</h2>
											<div class="date-range-report ">
												<span></span>
											</div>
										</div>
										<div class="card-body">
											<div class="tab-content" id="userActivityContent"> 
												<div class="tab-pane fade show active" id="user" role="tabpanel">
													<canvas id="activity" class="chartjs"></canvas>
												</div>
											</div>
										</div>
										<div class="card-footer d-flex flex-wrap bg-white border-top">
											<a href="#" class="text-uppercase py-3">In-Detail Overview</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-12 p-b-15">
							<div class="card card-default">
								<div class="card-header flex-column align-items-start">
									<h2>Current Users</h2>
								</div>
								<div class="card-body">
									<canvas id="currentUser" class="chartjs"></canvas>
								</div>
								<div class="card-footer d-flex flex-wrap bg-white border-top">
									<a href="#" class="text-uppercase py-3">In-Detail Overview</a>
								</div>
							</div>
						</div>
					</div> -->

					<div class="row">
						<div class="col-12 p-b-15">
							<!-- Recent Order Table -->
							<div class="card card-table-border-none card-default recent-orders" id="recent-orders">
								<div class="card-header justify-content-between">
									<h2>Recent Orders</h2>
									<!-- <div class="date-range-report">
										<span></span>
									</div> -->
								</div>
								<div class="card-body pt-0 pb-5">
									<table class="table card-table table-responsive table-responsive-large"
										style="width:100%">
										<thead>
											<tr>
												<th>Order ID</th>
												<th>Category</th>
												<th>Product Name</th>
												<th class="d-none d-lg-table-cell">Units</th>
												<th class="d-none d-lg-table-cell">Order Date</th>
												<th class="d-none d-lg-table-cell">Order Cost</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
										<?php
 $i=0;
 $con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
 $query="SELECT * FROM `tbl_orders`";

 $result = mysqli_query($con, $query);
 while($row=mysqli_fetch_array($result))
{
	
	$query1="SELECT * FROM `tbl_login_details` where  logdet_id='".$row['order_uid']."'";
	$result1 = mysqli_query($con, $query1);
	$row1=mysqli_fetch_array($result1);
	$query2="SELECT * FROM `tbl_products` where prod_id='".$row['order_pid']."'";
	$result2 = mysqli_query($con, $query2);
	$row2=mysqli_fetch_array($result2);
	$query4="SELECT * FROM `tbl_categories` where  cate_id='".$row2['prod_cid']."'";
	$result4 = mysqli_query($con, $query4);
	$row4=mysqli_fetch_array($result4);
	
	$query3="SELECT * FROM `tbl_login_details` where logdet_id='".$row2['prod_mid']."'";
	$result3 = mysqli_query($con, $query3);
	$row3=mysqli_fetch_array($result3);
	
	$i=$i+1;
echo '<tr>';
// $query1="SELECT * FROM `tbl_reg_details` WHERE regdet_id='".$row['logdet_id']."'";
// $result1 = mysqli_query($con, $query1);
// $row1=mysqli_fetch_array($result1);

echo "<td>";
echo  "#".$i;
echo "<td>".$row4['cate_category']."</td>";
echo"</td>";
echo "<td>";
echo $row2['prod_name']."</td>";
echo "";

echo "<td>";
echo  $row['order_quantity'];
echo"</td>";

echo "<td>";
echo  $row['order_date'];
echo"</td>";
echo  "<td>Rs.".$row['order_quantity']*$row2['prod_price'];
echo"</td>";

echo '<td><div class="form-check form-switch"><input onclick="toggle('.$row['order_id'].')" type="checkbox" id="status" class="form-check-input"';
	if($row['order_status_1']==1){
		echo ' checked ';
	}
	else{
		echo ' ';	
	}
echo  '><label class="form-check-label" for="status">'.'</label></div>';
echo"</td>";
?> <td>
<form method='GET'>
<div class="btn-group mb-1">	
<button type="button"
	class="btn btn-outline-success" onclick='location.href=order-detail.php?id=<?php  echo $row["order_id"];?>'>Info</button>
<button type="button"
	class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
	data-bs-toggle="dropdown" aria-haspopup="true"
	aria-expanded="false" data-display="static">
	<span class="sr-only">Info</span>
</button>

<div class="dropdown-menu">
	<a class="dropdown-item" href="order-detail.php?id=<?php echo $row["order_id"];?>">Info</a>
</div>
</div>
</form></td>
</tr>
<?php


}
 
 ?>
											
										</tbody>
									</table>
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

	<!-- Chart -->
	<script src="assets/plugins/charts/Chart.min.js"></script>
	<script src="assets/js/chart.js"></script>

	<!-- Google map chart -->
	<script src="assets/plugins/charts/google-map-loader.js"></script>
	<script src="assets/plugins/charts/google-map.js"></script>

	<!-- Date Range Picker -->
	<script src="assets/plugins/daterangepicker/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="assets/js/date-range.js"></script>
	<!-- custom js -->
	<script src="assets/js/custom.js"></script>

</body>


<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 04:18:03 GMT -->
</html>
<?php

  }
  else{
    echo "<script> window.location.href = '../signin.php'</script>";
  }
        ?>