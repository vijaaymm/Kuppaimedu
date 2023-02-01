<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Kuppaimedu.com</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets3/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets3/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets3/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets3/vendors/select2/select2.min.css" />
    <link rel="stylesheet" href="../assets3/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets3/css/demo_2/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets3/images/favicon.png" />
    <style>
      body {
          font-family: "Open Sans", sans-serif;
      }
      h2 {
          color: #000;
          font-size: 26px;
          font-weight: 300;
          text-align: center;
          text-transform: uppercase;
          position: relative;
          margin: 30px 0 80px;
      }
      h2 b {
          color: #ffc000;
      }
      h2::after {
          content: "";
          width: 100px;
          position: absolute;
          margin: 0 auto;
          height: 4px;
          background: rgba(0, 0, 0, 0.2);
          left: 0;
          right: 0;
          bottom: -20px;
      }
      .carousel {
          margin: 50px auto;
          padding: 0 70px;
      }
      .carousel .item {
          min-height: 330px;
          text-align: center;
          overflow: hidden;
      }
      .carousel .item .img-box {
          height: 160px;
          width: 100%;
          position: relative;
      }
      .carousel .item img {   
          max-width: 100%;
          max-height: 100%;
          display: inline-block;
          position: absolute;
          bottom: 0;
          margin: 0 auto;
          left: 0;
          right: 0;
      }
      .carousel .item h4 {
          font-size: 18px;
          margin: 10px 0;
      }
      .carousel .item .btn {
          color: #f0a400;
          border-radius: 0;
          font-size: 11px;
          text-transform: uppercase;
          font-weight: bold;
          background: none;
          border: 1px solid #ccc;
          padding: 5px 10px;
          margin-top: 5px;
          line-height: 16px;
      }
      .carousel .item .btn:hover, .carousel .item .btn:focus {
          color: #fff;
          background: #f0a400;
          border-color: #f0a400;
          box-shadow: none;
      }
      .carousel .item .btn i {
          font-size: 14px;
          font-weight: bold;
          margin-left: 5px;
      }
      .carousel .thumb-wrapper {
          text-align: center;
      }
      .carousel .thumb-content {
          padding: 15px;
      }
      .carousel .carousel-control {
          height: 100px;
          width: 40px;
          background: none;
          margin: auto 0;
          background: rgba(0, 0, 0, 0.2);
      }
      .carousel .carousel-control i {
          font-size: 30px;
          position: absolute;
          top: 50%;
          display: inline-block;
          margin: -16px 0 0 0;
          z-index: 5;
          left: 0;
          right: 0;
          color: rgba(0, 0, 0, 0.8);
          text-shadow: none;
          font-weight: bold;
      }
      .carousel .item-price {
          font-size: 13px;
          padding: 2px 0;
      }
      .carousel .item-price strike {
          color: #999;
          margin-right: 5px;
      }
      .carousel .item-price span {
          color: #86bd57;
          font-size: 110%;
      }
      .carousel .carousel-control.left i {
          margin-left: -3px;
      }
      .carousel .carousel-control.left i {
          margin-right: -3px;
      }
      .carousel .carousel-indicators {
          bottom: -50px;
      }
      .carousel-indicators li, .carousel-indicators li.active {
          width: 10px;
          height: 10px;
          margin: 4px;
          border-radius: 50%;
          border-color: transparent;
      }
      .carousel-indicators li {   
          background: rgba(0, 0, 0, 0.2);
      }
      .carousel-indicators li.active {    
          background: rgba(0, 0, 0, 0.6);
      }
      .star-rating li {
          padding: 0;
      }
      .star-rating i {
          font-size: 14px;
          color: #ffc000;
      }
      </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
          <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="../../index.html">
                <img src="../assets3/images/logo.png" alt="logo" />
              </a>
              <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../assets3/images/logo-mini.svg" alt="logo" /></a>
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
                      <p class="text-black font-weight-semibold m-0"> Name </p>
                      <span class="font-13 online-color">Vendor <i class="mdi mdi-chevron-down"></i></span>
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
                      <a class="text-white" href="index.html"><i class="mdi mdi-home-circle"></i></a>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Paper Waste</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>   
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="banner_1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                        <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                                    </div>                      
                                </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="thumb-wrapper">
                                  <div class="img-box">
                                      <img src="banner_1.jpg" class="img-responsive" alt="">
                                  </div>
                                  <div class="thumb-content">
                                    <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                    <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                                  </div>                      
                              </div>
                          </div>      
                          <div class="col-sm-3">
                              <div class="thumb-wrapper">
                                  <div class="img-box">
                                      <img src="banner_1.jpg" class="img-responsive" alt="">
                                  </div>
                                  <div class="thumb-content">
                                    <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                    <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                                  </div>                      
                              </div>
                          </div> 
                          <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="banner_1.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="thumb-content">
                                    <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                    <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                                </div>                      
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="banner_1.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="thumb-content">
                                    <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                    <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="banner_1.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="thumb-content">
                                    <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                    <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="banner_1.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="thumb-content">
                                    <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                    <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="banner_1.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="thumb-content">
                                    <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                    <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                                </div>                      
                            </div>
                        </div>                      
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="banner_1.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="thumb-content">
                                    <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                    <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="banner_1.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="thumb-content">
                                    <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                    <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="banner_1.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="thumb-content">
                                    <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                    <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                                </div>                      
                            </div>
                        </div>  
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="banner_1.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="thumb-content">
                                    <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                    <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                                </div>                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
              <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">
              <i class="fa fa-angle-right"></i>
          </a>
      </div>
      </div>
  </div>
</div>
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <h2>Iron waste</h2>
          <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="0">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel1" data-slide-to="1"></li>
              <li data-target="#myCarousel1" data-slide-to="2"></li>
          </ol>   
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
              <div class="item active">
                  <div class="row">
                      <div class="col-sm-3">
                          <div class="thumb-wrapper">
                              <div class="img-box">
                                  <img src="banner_1.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                              </div>                      
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="banner_1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="thumb-content">
                                <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                            </div>                      
                        </div>
                    </div>      
                    <div class="col-sm-3">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="banner_1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="thumb-content">
                                <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                            </div>                      
                        </div>
                    </div> 
                    <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
              </div>
          </div>
          <div class="item">
              <div class="row">
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>                      
              </div>
          </div>
          <div class="item">
              <div class="row">
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>  
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Carousel controls -->
      <a class="carousel-control left" href="#myCarousel1" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control right" href="#myCarousel1" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
</div>
</div>
</div>
</div>
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <h2>E Waste</h2>
          <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="0">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel2" data-slide-to="1"></li>
              <li data-target="#myCarousel2" data-slide-to="2"></li>
          </ol>   
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
              <div class="item active">
                  <div class="row">
                      <div class="col-sm-3">
                          <div class="thumb-wrapper">
                              <div class="img-box">
                                  <img src="banner_1.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                              </div>                      
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="banner_1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="thumb-content">
                                <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                            </div>                      
                        </div>
                    </div>      
                    <div class="col-sm-3">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="banner_1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="thumb-content">
                                <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                            </div>                      
                        </div>
                    </div> 
                    <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
              </div>
          </div>
          <div class="item">
              <div class="row">
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>                      
              </div>
          </div>
          <div class="item">
              <div class="row">
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>  
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Carousel controls -->
      <a class="carousel-control left" href="#myCarousel2" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control right" href="#myCarousel2" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
</div>
</div>
</div>
</div>
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <h2>Plastics</h2>
          <div id="myCarousel3" class="carousel slide" data-ride="carousel" data-interval="0">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel3" data-slide-to="1"></li>
              <li data-target="#myCarousel3" data-slide-to="2"></li>
          </ol>   
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
              <div class="item active">
                  <div class="row">
                      <div class="col-sm-3">
                          <div class="thumb-wrapper">
                              <div class="img-box">
                                  <img src="banner_1.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                              </div>                      
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="banner_1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="thumb-content">
                                <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                            </div>                      
                        </div>
                    </div>      
                    <div class="col-sm-3">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="banner_1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="thumb-content">
                                <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                            </div>                      
                        </div>
                    </div> 
                    <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
              </div>
          </div>
          <div class="item">
              <div class="row">
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src=".jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>                      
              </div>
          </div>
          <div class="item">
              <div class="row">
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>  
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Carousel controls -->
      <a class="carousel-control left" href="#myCarousel3" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control right" href="#myCarousel3" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
</div>
</div>
</div>
</div>
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <h2>Others</h2>
          <div id="myCarousel4" class="carousel slide" data-ride="carousel" data-interval="0">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel4" data-slide-to="1"></li>
              <li data-target="#myCarousel4" data-slide-to="2"></li>
          </ol>   
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
              <div class="item active">
                  <div class="row">
                      <div class="col-sm-3">
                          <div class="thumb-wrapper">
                              <div class="img-box">
                                  <img src="banner_1.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                              </div>                      
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="banner_1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="thumb-content">
                                <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                            </div>                      
                        </div>
                    </div>      
                    <div class="col-sm-3">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="banner_1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="thumb-content">
                                <a href="details.html" class="btn btn-primary">Get Details</a><br>
                                <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                            </div>                      
                        </div>
                    </div> 
                    <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
              </div>
          </div>
          <div class="item">
              <div class="row">
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>                      
              </div>
          </div>
          <div class="item">
              <div class="row">
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>  
                  <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <div class="img-box">
                              <img src="banner_1.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                            <a href="details.html" class="btn btn-primary">Get Details</a><br>
                            <a href="basic_elements.html" class="btn btn-primary">Pick up</a>
                          </div>                      
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Carousel controls -->
      <a class="carousel-control left" href="#myCarousel4" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control right" href="#myCarousel4" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
</div>
</div>
</div>
</div>



          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 TechRockerzzz. All rights reserved.</span>
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
    
  </body>
</html>