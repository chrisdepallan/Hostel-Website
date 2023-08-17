<?php
session_start();


    

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
        <!-- WRAPPER -->
        <div class="wrapper">

            <!-- LEFT MAIN SIDEBAR -->


            <!-- PAGE WRAPPER -->
            <div class="ec-page-wrapper">
            <div class="ec-content-wrapper">
					<div class="content">
						<div class="breadcrumb-wrapper">
							<div>
								<h1>All Orders</h1>
								<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
									<span><i class="mdi mdi-chevron-right"></i></span>All Orders
								</p>
							</div>

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
														<th>Category</th>
														<th>Price</th>
													
														<th>Seller</th>
														<th>Payment type</th>
														<th>Shipping address</th>
														<!-- <th>Status</th> -->
														<th>info</th>
													</tr>
												</thead>

												<tbody>
													<?php
													$i = 0;
													$con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
													$query = "SELECT * FROM `tbl_orders` where order_uid='".$_SESSION['id']."'";

													$result = mysqli_query($con, $query);
													while ($row = mysqli_fetch_array($result)) {

														$query1 = "SELECT * FROM `tbl_login_details` where  logdet_id='".$row['order_uid'] ."'";
														$result1 = mysqli_query($con, $query1);
														$row1 = mysqli_fetch_array($result1);
														$query2 = "SELECT * FROM `tbl_products` where prod_id='" . $row['order_pid'] . "'";
														$result2 = mysqli_query($con, $query2);
														$row2 = mysqli_fetch_array($result2);
														$query4 = "SELECT * FROM `tbl_categories` where  cate_id='" . $row2['prod_cid'] . "'";
														$result4 = mysqli_query($con, $query4);
														$row4 = mysqli_fetch_array($result4);

														$query3 = "SELECT * FROM `tbl_login_details` where logdet_id='" . $row2['prod_mid'] . "'";
														$result3 = mysqli_query($con, $query3);
														$row3 = mysqli_fetch_array($result3);

                            $query5 = "SELECT * FROM `tbl_shipping` where ship_oid='".$row['order_id']."'";
														$result5 = mysqli_query($con, $query5);
														$row5 = mysqli_fetch_array($result5);

														$i = $i + 1;
														echo '<tr>';
														// $query1="SELECT * FROM `tbl_reg_details` WHERE regdet_id='".$row['logdet_id']."'";
														// $result1 = mysqli_query($con, $query1);
														// $row1=mysqli_fetch_array($result1);
                            
														echo "<td>";
														echo  "#" . $i;
														echo "</td>";
														echo "<td>";
														echo $row2['prod_name'] . "</td>";
														echo "";
														echo "<td>" . $row4['cate_category'] . "</td>";
														echo  "<td>Rs." . $row['order_quantity'] * $row2['prod_price'];
														echo "</td>";

													

														echo "<td>";
														echo  $row3['logdet_email'];
														echo "</td>";
														echo "<td>";
														echo  "Gpay";
														echo "</td>";
														echo "<td> ";
                            echo $row5['ship_add'];

                            echo "</td>";
														// echo '<td><div class="form-check form-switch"><input onclick="toggle(' . $row['order_id'] . ')" type="checkbox" id="status" class="form-check-input"';
														// if ($row['order_status_1'] == 1) {
														// 	echo ' checked ';
														// } else {
														// 	echo ' ';
														// }
														// echo  '><label class="form-check-label" for="status">' . '</label></div>';
														// echo "</td>";
													?> <td>
															<form method='GET'>
																<div class="btn-group mb-1">
																	<button type="button" class="btn btn-outline-success" onclick='location.href=order-detail.php?id=<?php echo $row["order_id"]; ?>'>Info</button>
																	<button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
																		<span class="sr-only">Info</span>
																	</button>

																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="order-details.php?id=<?php echo $row["order_id"]; ?>">Info</a>
																	</div>
																</div>
															</form>
														</td>
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
						</div>
					</div> <!-- End Content -->
				</div> <!-- End Co     <!-- Footer -->
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
if (isset($_POST["submit"])) {
  $quan= $_POST["quantity"];
  $add = $_POST["add"];
    date_default_timezone_set("Asia/Kolkata");
    $today = date("Y-m-d");
  $method= $_POST["method"];
  $payid = $_POST["payid"];
  
  $con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);


    $query = "INSERT INTO `tbl_orders`(`order_uid`, `order_pid`, `order_date`, `order_quantity`, `order_status`, `order_status_1`) VALUES ('".$_SESSION['id']."','".$_GET['id']."','$today','$quan','0','1')";
    $result = mysqli_query($con, $query);
    echo "<script type='text/javascript'> alert('$query')</script>";
    
    $lid = mysqli_insert_id($con);

    $q = "INSERT INTO `tbl_shipping`(`ship_oid`, `ship_add`, `ship_status`) VALUES ('$lid','$add','0')";
    $re = mysqli_query($con, $q);
    $q1 = "INSERT INTO `tbl_invoices`(`invoice_oid`, `invoice_payment_method`, `invoice_payment_id`, `invoice_date`, `invoice_status`) VALUES
     ('$lid','$method','$payid','$today','0')";
    $re1 = mysqli_query($con, $q1);
    
    // Check connection
    if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    
    mysqli_close($con);
    echo "<script type='text/javascript'> window.location.href = 'orders.php'</script>";
    exit();
 
}

?>