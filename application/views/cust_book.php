<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="../assets2/css/main.css" rel="stylesheet">
	
	<meta charset="utf-8">
	<title>customer booking form</title>
	<!-- Mobile Specific Metas -->
	<link rel="stylesheet" href="../assets2/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets2/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets2/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets2/vendors/select2/select2.min.css" />
    <link rel="stylesheet" href="../assets2/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets2/css/demo_2/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets2/images/favicon.png" />
    
    
  </head>
  <body>
  <?php
			$cuser = $this->session->userdata('Home/cust_dashboard');
			extract($cuser);
      $user_name=$u_username;                    
    ?>

    <div class="container-scroller">
      <!-- partial:../../partials/_horizontal-navbar.html -->
      <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
          <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
               <a class="navbar-brand brand-logo" href= "<?php echo base_url();?>Home/cust_book">
                <img src="../assets2/images/logo.png" alt="logo" />
                <span class="font-12 d-block font-weight-light">Make a clean earth </span>
              </a>
              <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../assets2/images/logo-mini.png" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
              <ul class="navbar-nav mr-lg-2">
                <li class="nav-item nav-search d-none d-lg-block">
                  <div class="input-group">
                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                      <span class="input-group-text" id="search">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Search" aria-label="search" aria-describedby="search" />
                  </div>
                </li>
              </ul>
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-img">
                      <img src="../assets2/images/faces/face1.jpg" alt="image" />
                    </div>
                    <div class="nav-profile-text">
                      <p class="text-black font-weight-semibold m-0"> Olson jass </p>
                      <span class="font-13 online-color">online <i class="mdi mdi-chevron-down"></i></span>
                    </div>
                  </a>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                  </div>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                <span class="mdi mdi-menu"></span>
              </button>
            </div>
          </div>
        </nav>
        <nav style="background-color: #f0a400;"  class="bottom-navbar">
          <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href= "<?php echo base_url();?>Home/cust_dashboard">
                  <i class="mdi mdi-compass-outline menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link"  href= "<?php echo base_url();?>Home/cust_book">
                  <i class="mdi mdi-clipboard-text menu-icon"></i>
                  <span class="menu-title">Booking Form</span>
                </a>
              </li>

			  <li class="nav-item">
                <a class="nav-link" href= "<?php echo base_url();?>Home/cust_myearning">
                  <i class="mdi mdi-chart-bar menu-icon"></i>
                  <span class="menu-title">My Earnings</span>
                </a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href= "<?php echo base_url();?>Home/cust_crud">
                  <i class="mdi mdi-table-large menu-icon"></i>
                  <span class="menu-title">Crud Table</span>
                </a>
              </li>

			  <li class="nav-item">
                <div class="nav-link d-flex">
                  <button class="btn btn-sm bg-danger text-white"> Trailing </button>
                  <div class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle text-white font-weight-semibold" id="notificationDropdown" href="#" data-bs-toggle="dropdown"> English </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                      <a class="dropdown-item" href="#">
                        <i class="flag-icon flag-icon-bl me-3"></i> French </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <i class="flag-icon flag-icon-cn me-3"></i> Chinese </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <i class="flag-icon flag-icon-de me-3"></i> German </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <i class="flag-icon flag-icon-ru me-3"></i>Russian </a>
                    </div>
                  </div>
                  <a class="text-white" href="../../index.html"><i class="mdi mdi-home-circle"></i></a>
                </div>
              </li>
              
            </ul>
          </div>
        </nav>
      </div>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Kuppaimedu.com</h3>
              
            </div>
            <div class="row">
              <div class="">
                <div class="card">
                  <div  class="card-body" >
                    <h4 style= "text-align: center;" class="card-title">Customer Booking form</h4>
                   
                    <form class="forms-sample" method="post" action="<?php echo base_url(); ?>Home/cust_bookconfirm">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Name</label>
                        <input type="text" name="c_name" class="form-control" id="c_name" placeholder="Name" />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Mobile No</label>
                        <input type="number" name="c_phonenumber"class="form-control" id="exampleInputEmail1" placeholder="+91" />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="c_email" class="form-control" id="c_email" placeholder="Email" />
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Waste type</label>
                        <select class="form-control" name="c_wastetype" id="c_wastetype">
                          <option value="paperwaste">Paper waste</option>
                          <option value="ewaste">E-Waste</option>
                          <option value="plastic">Plastic bottles</option>
                          <option value="solidwaste">solid waste</option>
                          <option value="others">Others</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1" >Waste Name</label>
                        <input type="text"name="c_wastename" class="form-control" id="c_wastename" placeholder="Waste name" />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" name="c_wastedesc" class="form-control" id="c_wastedesc" placeholder="Description" />
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">picture upload</label>
                        <input type="file" name="c_picupload" class="form-control" id="c_picupload" placeholder="pic upload" />
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" /> Remember me </label>
                      </div>
                      <div>
                        <input type="hidden" value="<?php echo $u_username;?>">
                      </div>
                      <button type="submit" class="btn btn-primary me-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              

          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 <a href="https://www.kuppaimedu.com/" target="_blank">kuppaimedu.com</a>. All rights reserved.</span>
                
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets2/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets2/vendors/select2/select2.min.js"></script>
    <script src="../assets2/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets2/js/off-canvas.js"></script>
    <script src="../assets2/js/hoverable-collapse.js"></script>
    <script src="../assets2/js/misc.js"></script>
    <script src="../assets2/js/settings.js"></script>
    <script src="../assets2/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets2/js/file-upload.js"></script>
    <script src="../assets2/js/typeahead.js"></script>
    <script src="assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>