<?php
session_start();
if (isset($_GET['id'])) {

    $con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
    $query = "SELECT * FROM `tbl_products` WHERE prod_id='" . $_GET['id'] . "'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    $query1 = "SELECT * FROM `tbl_login_details` where  logdet_id='" . $row['prod_mid'] . "'";
    $result1 = mysqli_query($con, $query1);
    $row1 = mysqli_fetch_array($result1);
    $query2 = "SELECT * FROM `tbl_reg_details` where regdet_lid='" . $row1['logdet_id'] . "'";
    $result2 = mysqli_query($con, $query2);
    $row2 = mysqli_fetch_array($result2);
    $i = explode(" ", $row['prod_photo']);
    $rescountorder = mysqli_query($con, "SELECT count(order_id) FROM `tbl_orders` where  order_pid='" . $row['prod_id'] . "'");
    $row3 = mysqli_fetch_array($rescountorder);

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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <style>
            .rating {
                display: flex;
                flex-direction: row-reverse;
                /* Reverse the order of stars */
                justify-content: flex-start;
            }

            .rating input[type="radio"] {
                display: none;
            }

            .rating label {
                font-size: 30px;
                color: gray;
                cursor: pointer;
                margin-right: 10px;
            }

            .rating label:before {
                content: "\2605";
                display: inline-block;
                -webkit-transform: scaleX(-1);
                transform: scaleX(-1);
            }

            .rating input[type="radio"]:checked~label:before {
                color: gold;
            }

            #reviews {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 2rem;
            }

            /* Style each review */
            article {
                background-color: #f5f5f5;
                border-radius: 10px;
                padding: 1rem;
                box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
                width: 400px;
            }

            article h2 {
                font-size: 1.5rem;
                margin-bottom: 0.5rem;
            }

            article p {
                font-size: 1.2rem;
                margin-bottom: 1rem;
            }

            article p:last-of-type {
                font-weight: bold;
            }
        </style>
        <script>
            const stars = document.querySelectorAll('.rating input[type="radio"]');

            stars.forEach(star => star.addEventListener('click', function() {
                const currentStar = this;
                const previousStars = Array.from(stars).slice(0, stars.indexOf(currentStar));
                previousStars.forEach(star => star.checked = true);
            }));
        </script>
        <!-- FAVICON -->
        <link href="../dashboard/assets/img/favicon.png" rel="shortcut icon" />

    </head>

    <body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">
        <!-- WRAPPER -->
        <div class="wrapper">

            <!-- LEFT MAIN SIDEBAR -->


            <!-- PAGE WRAPPER -->
            <div class="ec-page-wrapper">


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


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-default">
                                    <div class="card-header card-header-border-bottom">
                                        <h2>Product review</h2>
                                    </div>

                                    <div class="card-body product-detail">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-6">
                                                <div class="row">
                                                    <div class="single-pro-img">
                                                        <div class="single-product-scroll">
                                                            <div class="single-product-cover">
                                                                <div class="single-slide zoom-image-hover">
                                                                    <img class="img-responsive" src="../dashboard/assets/img/products/<?php echo $i[0] ?>" alt="">
                                                                </div>
                                                                <div class="single-slide zoom-image-hover">
                                                                    <img class="img-responsive" src="../dashboard/assets/img/products/<?php echo $i[1] ?>" alt="">
                                                                </div>
                                                                <div class="single-slide zoom-image-hover">
                                                                    <img class="img-responsive" src="../dashboard/assets/img/products/<?php echo $i[2] ?>" alt="">
                                                                </div>
                                                                <div class="single-slide zoom-image-hover">
                                                                    <img class="img-responsive" src="../dashboard/assets/img/products/<?php echo $i[3] ?>" alt="">
                                                                </div>
                                                                <div class="single-slide zoom-image-hover">
                                                                    <img class="img-responsive" src="../dashboard/assets/img/products/<?php echo $i[4] ?>" alt="">
                                                                </div>
                                                                <div class="single-slide zoom-image-hover">
                                                                    <img class="img-responsive" src="../dashboard/assets/img/products/<?php echo $i[5] ?>" alt="">
                                                                </div>
                                                                <div class="single-slide zoom-image-hover">
                                                                    <img class="img-responsive" src="../dashboard/assets/img/products/<?php echo $i[6] ?>" alt="">
                                                                </div>
                                                                <div class="single-slide zoom-image-hover">
                                                                    <img class="img-responsive" src="../dashboard/assets/img/products/<?php echo $i[7] ?>" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="single-nav-thumb">
                                                                <div class="single-slide">
                                                                    <img class="img-responsive" src="../dashboard/assets/img/products/<?php echo $i[0] ?>" alt="">
                                                                </div>
                                                                <div class="single-slide">
                                                                    <img class="img-responsive" src="../dashboard/assets/img/products/<?php echo $i[1] ?>" alt="">
                                                                </div>
                                                                <div class="single-slide">
                                                                    <img class="img-responsive" src="../dashboard/assets/img/products/<?php echo $i[2] ?>" alt="">
                                                                </div>
                                                                <div class="single-slide">
                                                                    <img class="img-responsive" src="../dashboard/assets/img/products/<?php echo $i[3] ?>" alt="">
                                                                </div>
                                                                <div class="single-slide">
                                                                    <img class="img-responsive" src="../dashboard/assets/img/products/<?php echo $i[4] ?>" alt="">
                                                                </div>
                                                                <div class="single-slide">
                                                                    <img class="img-responsive" src="../dashboard/assets/img/products/<?php echo $i[5] ?>" alt="">
                                                                </div>
                                                                <div class="single-slide">
                                                                    <img class="img-responsive" src="../dashboard/assets/img/products/<?php echo $i[6] ?>" alt="">
                                                                </div>
                                                                <div class="single-slide">
                                                                    <img class="img-responsive" src="../dashboard//img/products/<?php echo $i[7] ?>" alt="">
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
                                                                    <img src="../dashboard/assets/img/icons/shoping.png" alt="">
                                                                </div>
                                                                <div class="card_bottom_item_text">
                                                                    <p>Purchased</p>
                                                                    <h3><?php echo $row3['0']; ?></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="card_bottom_items">
                                                                <div class="card_bottom_item_icon">
                                                                    <img src="../dashboard/assets/img/icons/cart.png" alt="">
                                                                </div>
                                                                <div class="card_bottom_item_text">
                                                                    <p>In order</p>
                                                                    <h3><?php echo $row3['0']; ?></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="card_bottom_items">
                                                                <div class="card_bottom_item_icon">
                                                                    <img src="../dashboard/assets/img/icons/doller.png" alt="">
                                                                </div>
                                                                <div class="card_bottom_item_text">
                                                                    <p>Amount</p>
                                                                    <h3>$<?php echo $row['prod_price']; ?></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="card_bottom_items">
                                                                <div class="card_bottom_item_icon">
                                                                    <img src="../dashboard/assets/img/icons/chart.png" alt="">
                                                                </div>
                                                                <div class="card_bottom_item_text">
                                                                    <p>In stock</p>
                                                                    <h3><?php echo $row['prod_stock']; ?></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="row product-overview">
                                                    <div class="col-12">
                                                        <h2 class="product-title-twos"><?php echo $row['prod_name']; ?></h2>
                                                        <p class="product-rate">
                                                            <?php
                                                            $sqlr = "SELECT AVG(review_rating) AS avg_rating FROM tbl_review WHERE review_prodid ='" . $_GET['id'] . "'";
                                                            $resultr = mysqli_query($con, $sqlr);
                                                            if (mysqli_num_rows($result) > 0) {
                                                                $rowr = mysqli_fetch_assoc($resultr);
                                                                // echo '<p>Average rating: ' . round($row['avg_rating'], 1) . '</p>';
                                                                $count = 0;
                                                        for ($i = 1; $i <= $rowr["avg_rating"]; $i++) {
                                                            $count = $count + 1;
                                                            echo '<i class="mdi mdi-star is-rated" style="color:gold"></i>';
                                                        }
                                                        for ($i = $count; $i <= 4; $i++) {

                                                            echo '<i class="mdi mdi-star "></i>';
                                                        }
                                                            } else {
                                                                echo '<p>No reviews for this product yet.</p>';
                                                            }
                                                            ?>
                                                            <!-- <i class="mdi mdi-star is-rated"></i>
                                                            <i class="mdi mdi-star is-rated"></i>
                                                            <i class="mdi mdi-star is-rated"></i>
                                                            <i class="mdi mdi-star is-rated"></i>
                                                            <i class="mdi mdi-star"></i> -->
                                                            <span class="detail_review_area"></span>
                                                        </p>
                                                        <p class="product-desc"><?php echo $row['prod_desc']; ?>
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
                                                                <li>Price: <span class="span_block_area">$<?php echo $row['prod_price']; ?></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row review-rating mt-4">

                                                    <?php
                                                    // Connect to the database
                                                    $dbhost = 'localhost';
                                                    $dbuser = 'root';
                                                    $dbpass = '';
                                                    $dbname = 'modderhub';

                                                    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

                                                    // Check connection
                                                    if (!$conn) {
                                                        die("Connection failed: " . mysqli_connect_error());
                                                    }

                                                    // Query the database to retrieve reviews
                                                    $sql = "SELECT `review_id`, `review_topic`, `review_content`, `review_rating`, `review_prodid`, `review_uid`, `review_status` FROM `tbl_review` WHERE review_prodid ='" . $_GET['id'] . "'";
                                                    $result = mysqli_query($conn, $sql);

                                                    // Display the reviews on the webpage
                                                    echo '<div id="reviews"> ';
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo '<article>';
                                                        $count = 0;
                                                        for ($i = 1; $i <= $row["review_rating"]; $i++) {
                                                            $count = $count + 1;
                                                            echo '<i class="mdi mdi-star is-rated" style="color:gold"></i>';
                                                        }
                                                        for ($i = $count; $i <= 4; $i++) {

                                                            echo '<i class="mdi mdi-star "></i>';
                                                        }
                                                        echo '<h2>' . $row['review_topic'] . '</h2>';
                                                        echo '<p>' . $row['review_content'] . '</p>';
                                                        echo '<p>Rating: ' . $row['review_rating'] . '</p>';
                                                        echo '</article>';
                                                    }
                                                    echo '</div>';

                                                    // Close the database connection
                                                    mysqli_close($conn);
                                                    ?>
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
        $quan = $_POST["quantity"];
        $add = $_POST["add"];
        date_default_timezone_set("Asia/Kolkata");
        $today = date("Y-m-d");


        $con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
        $x = $row['prod_stock'] - $quan;

        $query = "INSERT INTO `tbl_orders`(`order_uid`, `order_pid`, `order_date`, `order_quantity`, `order_status`, `order_status_1`) VALUES ('" . $_SESSION['id'] . "','" . $_GET['id'] . "','$today','$quan','0','1')";
        $result = mysqli_query($con, $query);
        echo "<script type='text/javascript'> alert('$query')</script>";

        $lid = mysqli_insert_id($con);
        $qu = "UPDATE `tbl_products` SET `prod_stock`='$x' WHERE prod_id='" . $row['prod_id'] . "'";
        $reu = mysqli_query($con, $qu);

        $q = "INSERT INTO `tbl_shipping`(`ship_oid`, `ship_add`, `ship_status`) VALUES ('$lid','$add','0')";
        $re = mysqli_query($con, $q);
        $q1 = "INSERT INTO `tbl_invoices`(`invoice_oid`, `invoice_payment_method`, `invoice_payment_id`, `invoice_date`, `invoice_status`) VALUES
     ('$lid','card',' ','$today','0')";
        $re1 = mysqli_query($con, $q1);
        $_SESSION['quantity'] = $quan;
        $_SESSION["name"] = $row['prod_name'];
        $_SESSION['price'] = $row['prod_price'];


        // Check connection
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }


        mysqli_close($con);
        echo "<script type='text/javascript'> window.location.href = 'payment.php'</script>";
        exit();
    }
} else {

    echo "<script type='text/javascript'> window.location.href = 'product_page.php'</script>";
}
?>