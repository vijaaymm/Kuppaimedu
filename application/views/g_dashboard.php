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
    <link rel="stylesheet" href="../assets3/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="../assets3/vendors/font-awesome/css/font-awesome.min.css" />
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
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support </p>
                <a href="https://www.bootstrapdash.com/product/plus-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/plus-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_horizontal-navbar.html -->
      <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
          <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="index.html">
                <img src="../assets3/images/logo.png" alt="logo" />
                 
              </a>
              <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets3/images/logo-mini.png" alt="logo" /></a>
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
        <nav style="background-color: #f0a400;" class="bottom-navbar">
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
                <a class="nav-link" href= "<?php echo base_url();?>Home/g_collect?">
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
                  <a class="text-white" href="index.html"><i class="mdi mdi-home-circle"></i></a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
            
            </div>
            <!-- table row starts here -->
            <div class="row">
              <div class="col-xl-4 grid-margin">
                <div class="card card-stat stretch-card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="text-white">
                        <h3 class="font-weight-bold mb-0">Total Waste</h3>
                        <h6>This Month</h6>
                        <div class="badge badge-danger">23%</div>
                      </div>
                      <div class="flot-bar-wrapper">
                        <div id="column-chart" class="flot-chart"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card stretch-card mb-3">
                  <div class="card-body d-flex flex-wrap justify-content-between">
                    <div>
                      <h4 class="font-weight-semibold mb-1 text-black"> Paper Waste </h4>
                      <h6 class="text-muted">Amount of waste collected</h6>
                    </div>
                    <h3 class="text-success font-weight-bold">168kg</h3>
                  </div>
                </div>
                <div class="card stretch-card mb-3">
                  <div class="card-body d-flex flex-wrap justify-content-between">
                    <div>
                      <h4 class="font-weight-semibold mb-1 text-black"> Plastic Waste </h4>
                      <h6 class="text-muted">Total customers per week</h6>
                    </div>
                    <h3 class="text-success font-weight-bold">250</h3>
                  </div>
                </div>
                <div class="card mt-3">
                  <div class="card-body d-flex flex-wrap justify-content-between">
                    <div>
                      <h4 class="font-weight-semibold mb-1 text-black"> E-waste </h4>
                      <h6 class="text-muted">System bugs and issues</h6>
                    </div>
                    <h3 class="text-danger font-weight-bold">-8380.00</h3>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body pb-0">
                    <h4 class="card-title">My customers</h4>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table custom-table text-dark">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>waste</th>
                            <th>in Kg</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                             <img src="../assets3/images/faces/face2.jpg" class="me-2" alt="image" /> Jacob Jensen 
                            </td>
                            <td>
                              <div class="d-flex">
                                <span class="pe-2 d-flex align-items-center">85%</span>
                                <select id="star-1" name="rating" autocomplete="off">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>
                              </div>
                            </td>
                            <td>32,435</td>
                            <td>40,234</td>
                          </tr>
                          <tr>
                            <td>
                              <img src="../assets3/images/faces/face3.jpg" class="me-2" alt="image" /> Cecelia Bradley 
                            </td>
                            <td>
                              <div class="d-flex">
                                <span class="pe-2 d-flex align-items-center">55%</span>
                                <select id="star-2" name="rating" autocomplete="off">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>
                              </div>
                            </td>
                            <td>4,36780</td>
                            <td>765728</td>
                          </tr>
                          <tr>
                            <td>
                              <img src="../assets3/images/faces/face4.jpg" class="me-2" alt="image" /> Leah Sherman 
                            </td> 
                            <td>
                              <div class="d-flex">
                                <span class="pe-2 d-flex align-items-center">23%</span>
                                <select id="star-3" name="rating" autocomplete="off">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>
                              </div>
                            </td>
                            <td>2300</td>
                            <td>22437</td>
                          </tr>
                          <tr>
                            <td>
                              <img src="../assets3/images/faces/face5.jpg" class="me-2" alt="image" /> Ina Curry 
                            </td>
                            <td>
                              <div class="d-flex">
                                <span class="pe-2 d-flex align-items-center">44%</span>
                                <select id="star-4" name="rating" autocomplete="off">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>
                              </div>
                            </td>
                            <td>53462</td>
                            <td>1,75938</td>
                          </tr>
                          <tr>
                            <td>
                              <img src="../assets3/images/faces/face7.jpg" class="me-2" alt="image" /> Lida Fitzgerald 
                            </td>
                            <td>
                              <div class="d-flex">
                                <span class="pe-2 d-flex align-items-center">65%</span>
                                <select id="star-5" name="rating" autocomplete="off">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>
                              </div>
                            </td>
                            <td>67453</td>
                            <td>765377</td>
                          </tr>
                          <tr>
                            <td>
                              <img src="../assets3/images/faces/face2.jpg" class="me-2" alt="image" /> Stella Johnson 
                            </td>
                            <td>
                              <div class="d-flex">
                                <span class="pe-2 d-flex align-items-center">49%</span>
                                <select id="star-6" name="rating" autocomplete="off">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>
                              </div>
                            </td>
                            <td>43662</td>
                            <td>96535</td>
                          </tr>
                          <tr>
                            <td>
                              <img src="../assets3/images/faces/face9.jpg" class="me-2" alt="image" /> Maria Ortiz 
                            </td>
                            <td>
                              <div class="d-flex">
                                <span class="pe-2 d-flex align-items-center">65%</span>
                                <select id="star-7" name="rating" autocomplete="off">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>
                              </div>
                            </td>
                            <td>76555</td>
                            <td>258546</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <a class="text-black d-block ps-4 pt-2 pb-2 pb-lg-0 font-13 font-weight-bold" href="#">Show more</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- doughnut chart row starts -->
            <div class="row">
              <div class="col-sm-12 stretch-card grid-margin">
                <div class="card">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card border-0">
                        <div class="card-body">
                          <div class="card-title">This Month</div>
                          <div class="d-flex flex-wrap">
                            <div class="doughnut-wrapper w-50">
                              <canvas id="doughnutChart1" width="100" height="100"></canvas>
                            </div>
                            <div id="doughnut-chart-legend" class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card border-0">
                        <div class="card-body">
                          <div class="card-title">Previous Month</div>
                          <div class="d-flex flex-wrap">
                            <div class="doughnut-wrapper w-50">
                              <canvas id="doughnutChart2" width="100" height="100"></canvas>
                            </div>
                            <div id="doughnut-chart-legend2" class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card border-0">
                        <div class="card-body">
                          <div class="card-title">This Year</div>
                          <div class="d-flex flex-wrap">
                            <div class="doughnut-wrapper w-50">
                              <canvas id="doughnutChart3" width="100" height="100"></canvas>
                            </div>
                            <div id="doughnut-chart-legend3" class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- last row starts here -->
            <div class="row">
              <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title mb-2">Upcoming events (3)</div>
                    <h3 class="mb-3">23 september 2019</h3>
                    <div class="d-flex border-bottom border-top py-3">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" checked /></label>
                      </div>
                      <div class="ps-2">
                        <span class="font-12 text-muted">Tue, Mar 5, 9.30am</span>
                        <p class="m-0 text-black"> Hey12345 I attached some new PSD files… </p>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-3">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" /></label>
                      </div>
                      <div class="ps-2">
                        <span class="font-12 text-muted">Mon, Mar 11, 4.30 PM</span>
                        <p class="m-0 text-black"> Discuss performance with manager </p>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-3">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" /></label>
                      </div>
                      <div class="ps-2">
                        <span class="font-12 text-muted">Tue, Mar 5, 9.30am</span>
                        <p class="m-0 text-black">Meeting with Alisa</p>
                      </div>
                    </div>
                    <div class="d-flex pt-3">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" /></label>
                      </div>
                      <div class="ps-2">
                        <span class="font-12 text-muted">Mon, Mar 11, 4.30 PM</span>
                        <p class="m-0 text-black"> Hey I attached some new PSD files… </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex border-bottom mb-4 pb-2">
                      <div class="hexagon">
                        <div class="hex-mid hexagon-warning">
                          <i class="mdi mdi-clock-outline"></i>
                        </div>
                      </div>
                      <div class="ps-4">
                        <h4 class="font-weight-bold text-warning mb-0"> 12.45 </h4>
                        <h6 class="text-muted">Schedule Meeting</h6>
                      </div>
                    </div>
                    <div class="d-flex border-bottom mb-4 pb-2">
                      <div class="hexagon">
                        <div class="hex-mid hexagon-danger">
                          <i class="mdi mdi-account-outline"></i>
                        </div>
                      </div>
                      <div class="ps-4">
                        <h4 class="font-weight-bold text-danger mb-0">34568</h4>
                        <h6 class="text-muted">Profile visits</h6>
                      </div>
                    </div>
                    <div class="d-flex border-bottom mb-4 pb-2">
                      <div class="hexagon">
                        <div class="hex-mid hexagon-success">
                          <i class="mdi mdi-laptop-chromebook"></i>
                        </div>
                      </div>
                      <div class="ps-4">
                        <h4 class="font-weight-bold text-success mb-0"> 33.50% </h4>
                        <h6 class="text-muted">Bounce Rate</h6>
                      </div>
                    </div>
                    <div class="d-flex border-bottom mb-4 pb-2">
                      <div class="hexagon">
                        <div class="hex-mid hexagon-info">
                          <i class="mdi mdi-clock-outline"></i>
                        </div>
                      </div>
                      <div class="ps-4">
                        <h4 class="font-weight-bold text-info mb-0">12.45</h4>
                        <h6 class="text-muted">Schedule Meeting</h6>
                      </div>
                    </div>
                    <div class="d-flex">
                      <div class="hexagon">
                        <div class="hex-mid hexagon-primary">
                          <i class="mdi mdi-timer-sand"></i>
                        </div>
                      </div>
                      <div class="ps-4">
                        <h4 class="font-weight-bold text-primary mb-0"> 12.45 </h4>
                        <h6 class="text-muted mb-0">Browser Usage</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
                <div class="card color-card-wrapper">
                  <div class="card-body">
                    <img class="img-fluid card-top-img w-100" src="../assets3/images/dashboard/img_5.jpg" alt="" />
                    <div class="d-flex flex-wrap justify-content-around color-card-outer">
                      <div class="col-6 p-0 mb-4">
                        <div class="color-card primary m-auto">
                          <i class="mdi mdi-clock-outline"></i>
                          <p class="font-weight-semibold mb-0">Delivered</p>
                          <span class="small">15 Packages</span>
                        </div>
                      </div>
                      <div class="col-6 p-0 mb-4">
                        <div class="color-card bg-success m-auto">
                          <i class="mdi mdi-tshirt-crew"></i>
                          <p class="font-weight-semibold mb-0">Ordered</p>
                          <span class="small">72 Items</span>
                        </div>
                      </div>
                      <div class="col-6 p-0">
                        <div class="color-card bg-info m-auto">
                          <i class="mdi mdi-trophy-outline"></i>
                          <p class="font-weight-semibold mb-0">Arrived</p>
                          <span class="small">34 Upgraded</span>
                        </div>
                      </div>
                      <div class="col-6 p-0">
                        <div class="color-card bg-danger m-auto">
                          <i class="mdi mdi-presentation"></i>
                          <p class="font-weight-semibold mb-0">Reported</p>
                          <span class="small">72 Support</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 <a href="https://www.kuppaimedu.com/" target="_blank">kuppaimedu.com</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
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
    <script src="../assets3/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="../assets3/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets3/vendors/flot/jquery.flot.js"></script>
    <script src="../assets3/vendors/flot/jquery.flot.resize.js"></script>
    <script src="../assets3/vendors/flot/jquery.flot.categories.js"></script>
    <script src="../assets3/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="../assets3/vendors/flot/jquery.flot.stack.js"></script>
    <script src="../assets3/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets3/js/off-canvas.js"></script>
    <script src="../assets3/js/hoverable-collapse.js"></script>
    <script src="../assets3/js/misc.js"></script>
    <script src="../assets3/js/settings.js"></script>
    <script src="../assets3/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets3/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>