<?php
session_start();
if($_SESSION['flag']==1){
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		function showPopup() {
			// show the popup window
			$("#popup").show();

			// fetch the wishlist items from the database
			$.ajax({
				url: "fetch_wishlist_items.php",
				success: function(data) {
					// display the wishlist items in the popup window
					$("#wishlist_items").html(data);
				}
			});
		}
    function clear_wishlist(){
      $('#popup').hide();
      $.ajax({
  url: 'wishlist_update.php', // Replace with the actual server endpoint
  method: 'POST',

}).done(function() {
  // Handle the server response
  });
    }
	</script>
  <style>

		#popup {
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: rgba(0, 0, 0, 0.5);
			z-index: 9999;
		}
    #popup {
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  padding: 20px;
  overflow-y: auto;
}

#popup h2 {
  font-size: 24px;
  margin-top: 0;
}

#popup #wishlist_items {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
}

#popup #wishlist_items > div {
  margin-bottom: 20px;
  display: flex;
  align-items: center;
}

#popup #wishlist_items > div img {
  margin-right: 10px;
}

#popup #wishlist_items > div button {
  margin-left: 10px;
  padding: 5px 10px;
  border: none;
  border-radius: 5px;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
  transition: all 0.3s ease;
}

#popup #wishlist_items > div button:hover {
  background-color: #0062cc;
}

#popup button.btn-success {
  margin-top: 20px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #28a745;
  color: #fff;
  cursor: pointer;
  transition: all 0.3s ease;
}

#popup button.btn-success:hover {
  background-color: #218838;
}

		#popup_content {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
		}
	</style>
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
 
  
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>Modderhub</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

           <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="index.php">Home</a></li>
          <li><a class="active " href="order.php">orders</a></li>
          <li><a class="active " href="../forum/index.php">Forum</a></li>
          <li><a class="active "href='#' onclick="showPopup()">wishlist  </a></li>
          <li><a href="product_page.php">Products </a></li>
          <!-- <li><a href="admin_verifyseller.php">Manage Merchant</a></li> -->
          <!-- <li><a href="../dashboard/index.php"  target='_blank'>Dashboard</a> </li> -->
          <li><a href="#"></a></li>
          <li><a href="#">forums</a></li>
          <li class="dropdown"><a href="#"><span>profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href='profile.php' >my account</a></li>
              <li class="dropdown"><a href="#"><span>profile</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="../forgot password.php" onclick="">forgot password</a></li>
                  <li><a href="../editprofile.php">Edit details</a></li>
                  <li><a href="../home.php">logout</a></li>
                  <li><a href="#"></a></li>
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
  <div id="popup">
		<div id="popup_content">
			<h2>My Wishlist</h2>
			<div id="wishlist_items"></div>
			<button class='btn-success' onclick="$('#popup').hide()">Close</button>
      <button class='btn-danger' onclick="clear_wishlist()">Clear</button>
		</div>
	</div>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Modderhub</span></h2>
          <p class="animate__animated animate__fadeInUp">Welcome to our automotive parts website, your one-stop-shop for all your vehicle maintenance needs. Whether you're a mechanic, a car enthusiast, or simply someone looking to keep their vehicle in top shape, we've got you covered.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Most Extensive <span>Automotive</span> catalog</h2>
          <p class="animate__animated animate__fadeInUp">Our extensive inventory of high-quality parts includes everything from brake pads and oil filters to spark plugs and engine components. We offer parts from all the top brands, so you can be sure you're getting the best products available.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Industry leading customer service</h2>
          <p class="animate__animated animate__fadeInUp">Need help finding the right part for your vehicle? Our knowledgeable and friendly staff are always here to assist you. With years of experience in the automotive industry, we can help you find exactly what you need to keep your car running smoothly.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>
      
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">EXPLORE!</h2>
          <p class="animate__animated animate__fadeInUp">So why wait? Browse our selection of automotive parts today and see how we can help you keep your vehicle in top condition.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">We are global</a></h4>
              <p class="description">Welcome to our globalized automotive parts website, your one-stop-shop for high-quality automotive parts and accessories from around the world. With a vast inventory of parts from top brands and manufacturers, we offer a truly global selection of products to suit your needs.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">We are everywhere</a></h4>
              <p class="description">Operates in multiple countries and has a global presence. Such businesses have operations, customers, and suppliers in different regions of the world and are often characterized by their ability to reach a large, diverse market. Global businesses can be found in various sectors, such as technology, finance, manufacturing, and retail.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Fast Shipping</a></h4>
              <p class="description">We offer several shipping options, including standard shipping and expedited shipping, so you can choose the option that best meets your needs. We also work with trusted shipping carriers to ensure that your parts arrive safely and on time.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">we are green</a></h4>
              <p class="description">Our company  has taken steps to reduce its carbon footprint to net zero, meaning that it does not contribute to the increase of greenhouse gases in the atmosphere. A carbon footprint is the total amount of greenhouse gas emissions, such as carbon dioxide and methane, that are released into the atmosphere by our activities, including its operations, transportation, and supply chain.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <!-- <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200"> -->
      <!-- <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

          </div>
        </div>

      </div> -->
    <!-- </section> -->
    <!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Features</h2>
          <p>Customers can search for and order replacement parts online, with delivery to their home or a nearby dealership.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>user accounts</h3>
            <p class="fst-italic">
                Once a user has created an account on a website, they may be able to perform a range of actions such as making purchases, posting comments, saving preferences or settings, and accessing exclusive content or features. User accounts can also enable personalized experiences on a website, such as recommendations based on browsing or purchase history.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Buyers</li>
              <li><i class="bi bi-check"></i> Merchant</li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-2.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Reach</h3>
            <p class="fst-italic">
                Our website offers a range of tools and resources that can help businesses grow and expand their reach. Here are some ways in which businesses can use our site to grow:


            </p>
            <p>
                Overall, our site offers a range of resources and tools that can help businesses grow and expand their reach, from online advertising to e-commerce and social media marketing. By leveraging these resources, businesses can build a strong online presence and reach new customers.
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-3.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>Service feedback and forums</h3>
            <p>Service feedback is a feature that allows customers to provide feedback on their service experience, whether it's positive or negative. This feedback can be used by businesses to identify areas for improvement and make changes to improve the overall customer experience. Service feedback can be collected through various methods such as surveys, ratings, and reviews.

                Forums are online discussion platforms that allow customers to interact with each other and with the business. Customers can ask questions, share feedback, and discuss products or services. This creates a sense of community and can help build brand loyalty. Businesses can also use forums to gather feedback and suggestions from customers, which can be used to improve products or services.</p>
            <!-- <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul> -->
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-4.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Our website provides a user-friendly platform for customers to search for and buy products online. </h3>
            <p class="fst-italic">
                Our website also offers various payment options, including credit card, PayPal, and other digital payment methods. We strive to provide a seamless and secure online shopping experience for our customers, with fast shipping and excellent customer service.

            </p>
            <!-- <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p> -->
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p></p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>


          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <!-- <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p> -->

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Modderhub</h3>
            <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p> -->
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Modderhub</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
}
else{
  echo "<script type='text/javascript'> window.location.href = '../signin.php'</script>";
}
?>