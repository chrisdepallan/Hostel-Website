

  
x<?php
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
	
    $query9 = "SELECT * FROM `tbl_shipping` where ship_oid='".$row['order_id']."'";
    $result9 = mysqli_query($con, $query9);
    $row9 = mysqli_fetch_array($result9);
?>


<!DOCTYPE html>
    <html lang="en" dir="ltr">



    <!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 04:18:33 GMT -->

    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Andshop - Admin Dashboard HTML Template.">

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <title>Andshop - Admin Dashboard HTML Template.</title>

        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

        <link href="../dashboard/assets/css/materialdesignicons.min.css" rel="stylesheet" />

        <!-- PLUGINS CSS STYLE -->
        <link href="../dashboard/assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
        <link href='../dashboard/assets/plugins/slick/slick.min.css' rel='stylesheet'>
        <link href='../dashboard/assets/plugins/swiper/swiper-bundle.min.css' rel='stylesheet'>

        <!-- custom css -->
        <link id="style.css" rel="stylesheet" href="../dashboard/assets/css/style.css" />

        <!-- FAVICON -->
        <link href="../dashboard/assets/img/favicon.png" rel="shortcut icon" />

    </head>

    <body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">
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
													 
												</div>
											</address>
										</div>
										<div class="col-xl-3 col-lg-6">
											<address class="info-grid">
												<div class="info-content">
												    <h5 class="title_infos"> <span class="mdi mdi-ship-wheel"></span> Shipping info</h5> 
													 <ul>
														<li>Name: <span> Home</span></li>
														<li>Address: <span><?php echo $row9['ship_add']?></span> </li>
														<li>Phone: <span><?php echo $row6['regdet_phone']?></span></li>
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
														<li>Address: <span><?php echo $row7['mer_det_address'];?></span> </li>
														<li>Phone: <span><?php echo $row5['regdet_phone'];?></span></li>
													 </ul>
													 
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
														<li>Business name:<span><?php echo $row8['invoice_date'];?></span> </li>
														
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

            <script src="../dashboard/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
        <script src="../dashboard/assets/js/bootstrap.bundle.min.js"></script>
        <script src="../dashboard/assets/plugins/simplebar/simplebar.min.js"></script>
        <script src="../dashboard/assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
        <script src="../dashboard/assets/plugins/slick/slick.min.js"></script>
        <script src="../dashboard/assets/plugins/swiper/swiper-bundle.min.js"></script>

        <!-- Option Switcher -->
        <script src="../dashboard/assets/plugins/options-sidebar/optionswitcher.js"></script>

        <!-- custom js -->
        <script src="../dashboard/assets/js/custom.js"></script>
    </body>



    <!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 04:18:36 GMT -->

    </html>
    <?php

}
else{
	
    echo "<script type='text/javascript'> window.location.href = 'order.php'</script>";
}
?>