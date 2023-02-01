<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kuppaimedu.com</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Font-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sourcesanspro-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css"/>
</head>

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>assets/css/styleregister.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
  <script src="js/custom.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
         var check = function() {
  if (document.getElementById('password1').value ==
    document.getElementById('password2').value) {
    document.getElementById('message').style.color = 'Orange';
    document.getElementById('message').innerHTML = 'Matching';
  } else {
    document.getElementById('message').style.color = 'Red';
    document.getElementById('message').innerHTML = 'Not matching';
  }
  }
  </script>

  <!-- =======================================================
  * Template Name: UpConstruction - v1.2.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Kuppaimedu.com<span></span></h1>
      </a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="nav" class="nav">
        <ul>
        <li><a href="<?php echo base_url();?>Home">Home</a></li>
          <li><a href="<?php echo base_url();?>Home/last_posted">Latest Posts</a></li>
          <li><a href="<?php echo base_url();?>Home/our_mission">Our Mission</a></li>
          <li><a href="<?php echo base_url();?>Home/contact">Contact</a></li>
          <li><a href="<?php echo base_url();?>Home/login" >Login</a></li>
          <li><a href="<?php echo base_url();?>Home/register" class="active" >Register</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main id="main">
  <?php
				if($this->session->flashdata('error')){
					?>
					<div class="alert alert-danger text-center" style="margin-top:20px;">
						<?php echo $this->session->flashdata('error'); ?>
					</div>
					<?php
				}
			?>

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?php echo base_url("assets/img/breadcrumbs-bg.jpg");?>')">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      </div>
    </div><!-- End Breadcrumbs -->
    
    <!-- DONT TOUCH THIS -->
    <div class="form-v8">
      <div class="page-content">
          <div class="form-v5-content">
          <form class="form-detail" method="post" action="<?php echo base_url(); ?>Home/login_process"> 
				<h2>Registration Form</h2>
				<div class="form-row">
					<input type="text" name="u_firstname" id="u_firstname" class="input-text" placeholder="First name" required>
				</div>
        <div class="form-row">
					<input type="text" name="u_lastname" id="u_lastname" class="input-text" placeholder="Last name" required>
				</div>
				<div class="form-row">
					<input type="text" name="u_email" id="u_email" class="input-text" placeholder="Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
        <div class="form-row">
					<input type="u_number" name="u_aadhar" id="u_aadhar" class="input-text" placeholder="Aadhar Number" required>
				</div>
        <div class="form-row">
					<input type="u_number" name="u_phonenumber" id="u_phonenumber" class="input-text" placeholder="Mobile Number" required>
				</div>
        <div class="form-row">
						<select name="position" name="u_role" id="u_role" class="input-text">
                <option value="" selected disabled hidden>Select</option>
						    <option value="Customer">Customer</option>
						    <option value="Garbage_Collector">Garbage Collector</option>
						</select>
						<br>
				</div>
        <div class="form-row">
					<input type="text" name="user_name" id="u_username" class="input-text" placeholder="User name" required>
				</div>
				<div class="form-row">
					<input type="password" name="password1" id="password1" class="input-text" placeholder="Your Password" required>
				</div>
        <div class="form-row">
					<input type="password" name="password2" id="password2" class="input-text" placeholder="Confrim Password" required onkeyup='check();'>
				</div>
        <div class="form-row">
        <span id='message'></span></label>
      	</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
        </div>
      </div>
<!-- UPTO THIS -->
    

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

         

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Kuppaimedu.com</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          Designed by TechRockerzzz
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>

</html>