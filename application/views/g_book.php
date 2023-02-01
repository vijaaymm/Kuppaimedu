<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Kuppaimedu.com</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets3/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets3/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets3/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets3/vendors/select2/select2.min.css" />
    <link rel="stylesheet" href="../assets3/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets3/css/demo_2/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets3/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_horizontal-navbar.html -->
      <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
          <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="../../index.html">
                <img src="../assets3/images/logo.png" alt="logo" />
                
              </a>
              <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../assets3/images/logo-mini.png" alt="logo" /></a>
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
                      <img src="../assets3/images/faces/face1.jpg" alt="image" />
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
                <a class="nav-link" href= "<?php echo base_url();?>Home/g_dashboard">
                  <i class="mdi mdi-compass-outline menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href= "<?php echo base_url();?>Home/g_book">
                  <i class="mdi mdi-clipboard-text menu-icon"></i>
                  <span class="menu-title">Booking Form</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href= "<?php echo base_url();?>Home/g_collect">
                  <i class="mdi mdi-clipboard-text menu-icon"></i>
                  <span class="menu-title">Collect waste</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href= "<?php echo base_url();?>Home/g_myearning">
                  <i class="mdi mdi-chart-bar menu-icon"></i>
                  <span class="menu-title">My Earnings</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href= "<?php echo base_url();?>Home/g_crud">
                  <i class="mdi mdi-table-large menu-icon"></i>
                  <span class="menu-title">My waste</span>
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
            
              
            </div>
            <div class="row">
              <div class="">
                <div class="card">
                  <div  class="card-body" >
                    <h4 style= "text-align: center;" class="card-title">Vendor Booking form</h4>
                   
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Name" />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Mobile No</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="+91" />
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Waste type</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Paper waste</option>
                          <option>E-Waste</option>
                          <option>Plastic bottles</option>
                          <option>solid waste</option>
                          <option>Others</option>
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Description" />
                      </div>
                      
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" /> Remember me </label>
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
    <script src="../assets3/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets3/vendors/select2/select2.min.js"></script>
    <script src="../assets3/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets3/js/off-canvas.js"></script>
    <script src="../assets3/js/hoverable-collapse.js"></script>
    <script src="../assets3/js/misc.js"></script>
    <script src="../assets3/js/settings.js"></script>
    <script src="../assets3/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets3/js/file-upload.js"></script>
    <script src="../assets3/js/typeahead.js"></script>
    <script src="../assets3/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>