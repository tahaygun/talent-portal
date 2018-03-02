<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="author" content="Jobboard">

  <title>JobBoard - Bootstrap HTML5 Job Portal Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
  <!-- Material CSS -->
  <link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/fonts/themify-icons.css">

  <!-- Animate CSS -->
  <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">
  <!-- Rev Slider CSS -->
  <link rel="stylesheet" href="assets/extras/settings.css" type="text/css">
  <!-- Main Styles -->
  <link rel="stylesheet" href="assets/css/main.css" type="text/css">
  <!-- Slicknav js -->
  <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">
  <!-- Responsive CSS Styles -->
  <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="assets/css/colors/red.css" media="screen" />

</head>

<body>
  <!-- Header Section Start -->
  <div class="header">
    <!-- Start intro section -->
    <section id="intro" class="section-intro">
      <div class="logo-menu">
        <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="50">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo" href="index.html">
                <img src="assets/img/logov.png"
                  alt="" width="180px;">
              </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar">
              <!-- Start Navigation List -->
              <ul class="nav navbar-nav">
                <li>
                  <a class="active" href="index.html">
                    Home
                    <i class="fa fa-angle"></i>
                  </a>
                </li>
                <li>
                  <a href="about.html">
                    Companies
                    <i class="fa fa-angle"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    Jobs
                    <i class="fa fa-angle"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    About Us
                    <i class="fa fa-angle"></i>
                  </a>
                </li>
                <li>
                  <a href="blog.html">
                    Venture Cafe
                    <i class="fa fa-angle"></i>
                  </a>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right float-right">
                <li class="left">
                  <a href="post-job.html">
                    <i class="ti-pencil-alt"></i> Post A Job</a>
                </li>
                <li class="right">
                  <a href="my-account.html">
                    <i class="ti-lock"></i> Log In</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Mobile Menu Start -->
          <ul class="wpb-mobile-menu">
            <li>
              <a class="active" href="index.html">Home</a>
            </li>
            <li>
              <a href="about.html">Pages</a>

            </li>
            <li>
              <a href="#">For Candidates</a>

            </li>
            <li>
              <a href="#">For Employers</a>

            </li>
            <li>
              <a href="blog.html">Blog</a>

            </li>
            <li class="btn-m">
              <a href="post-job.html">
                <i class="ti-pencil-alt"></i> Post A Job</a>
            </li>
            <li class="btn-m">
              <a href="my-account.html">
                <i class="ti-lock"></i> Log In</a>
            </li>
          </ul>
          <!-- Mobile Menu End -->
        </nav>


        <!-- Header Section End -->

        <div class="search-container">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1>Find the job that fits your life</h1>
                <br>
                <h2>We are building
                  <strong>network</strong> to help people!</h2>
                <div class="content">
                  <form method="" action="">
                    <div class="row">
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="job title / keywords / company name">
                          <i class="ti-time"></i>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <input class="form-control" type="email" placeholder="city / province / zip code">
                          <i class="ti-location-pin"></i>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="search-category-container">
                          <label class="styled-select">
                            <select class="dropdown-product selectpicker">
                              <option>All Categories</option>
                              <option>Finance</option>
                              <option>IT & Engineering</option>
                              <option>Education/Training</option>
                              <option>Art/Design</option>
                              <option>Sale/Markting</option>
                              <option>Healthcare</option>
                              <option>Science</option>
                              <option>Food Services</option>
                            </select>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-1 col-sm-6">
                        <button type="button" class="btn btn-search-icon">
                          <i class="ti-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="popular-jobs">
                  <b>Popular Keywords: </b>
                  <a href="#">Web Design</a>
                  <a href="#">Manager</a>
                  <a href="#">Programming</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- end intro section -->
    </div>

    <!-- Find Job Section Start -->
    <section class="find-job section">
      <div class="container">
        <h2 class="section-title">Recently added Jobs</h2>
        <div class="row">
          <div class="col-md-12">
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.html">
                  <img src="assets/img/jobs/img-1.jpg" alt="">
                </a>
              </div>
              <div class="job-list-content">
                <h4>
                  <a href="job-details.html">Need a web designer</a>
                  <span class="full-time">Full-Time</span>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum
                  omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit,
                  officiis, praesentium?
                </p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <span>
                        <a href="browse-categories.html">
                          <i class="ti-brush"></i>Art/Design</a>
                      </span>
                      <span>
                        <i class="ti-location-pin"></i>Washington, USA</span>
                      <span>
                        <i class="ti-time"></i>60/Hour</span>
                    </div>
                  </div>
                  <div class="pull-right">

                    <a href="job-details.html" class="btn btn-common btn-rm">More Detail</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.html">
                  <img src="assets/img/jobs/img-2.jpg" alt="">
                </a>
              </div>
              <div class="job-list-content">
                <h4>
                  <a href="job-details.html">Front-end developer needed</a>
                  <span class="full-time">Full-Time</span>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum
                  omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit,
                  officiis, praesentium?
                </p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <span>
                        <a href="browse-categories.html">
                          <i class="ti-desktop"></i>Technologies</a>
                      </span>
                      <span>
                        <i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                      <span>
                        <i class="ti-time"></i>60/Hour</span>
                    </div>
                  </div>
                  <div class="pull-right">
                    <a href="job-details.html" class="btn btn-common btn-rm">More Detail</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.html">
                  <img src="assets/img/jobs/img-3.jpg" alt="">
                </a>
              </div>
              <div class="job-list-content">
                <h4>
                  <a href="job-details.html">Senior Accountant</a>
                  <span class="part-time">Part-Time</span>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum
                  omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit,
                  officiis, praesentium?
                </p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <span>
                        <a href="browse-categories.html">
                          <i class="ti-home"></i>Finance</a>
                      </span>
                      <span>
                        <i class="ti-location-pin"></i>Delaware, USA</span>
                      <span>
                        <i class="ti-time"></i>60/Hour</span>
                    </div>
                  </div>
                  <div class="pull-right">

                    <a href="job-details.html" class="btn btn-common btn-rm">More Detail</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.html">
                  <img src="assets/img/jobs/img-4.jpg" alt="">
                </a>
              </div>
              <div class="job-list-content">
                <h4>
                  <a href="job-details.html">Fullstack web developer needed</a>
                  <span class="full-time">Full-Time</span>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum
                  omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit,
                  officiis, praesentium?
                </p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <span>
                        <a href="browse-categories.html">
                          <i class="ti-desktop"></i>Technologies</a>
                      </span>
                      <span>
                        <i class="ti-location-pin"></i>New York, USA</span>
                      <span>
                        <i class="ti-time"></i>60/Hour</span>
                    </div>
                  </div>
                  <div class="pull-right">
                    <a href="job-details.html" class="btn btn-common btn-rm">More Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="showing pull-left">
              <a href="#">Showing
                <span>6-10</span> Of 24 Jobs</a>
            </div>
            <ul class="pagination pull-right">
              <li class="active">
                <a href="#" class="btn btn-common">
                  <i class="ti-angle-left"></i> prev</a>
              </li>
              <li>
                <a href="#">1</a>
              </li>
              <li>
                <a href="#">2</a>
              </li>
              <li>
                <a href="#">3</a>
              </li>
              <li>
                <a href="#">4</a>
              </li>
              <li>
                <a href="#">5</a>
              </li>
              <li class="active">
                <a href="#" class="btn btn-common">Next
                  <i class="ti-angle-right"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Find Job Section End -->





    <!-- Clients Section -->
    <section class="clients section">
      <div class="container">
        <h2 class="section-title">
          Clients & Partners
        </h2>
        <div class="row">
          <div id="clients-scroller">
            <div class="items">
              <img src="assets/img/clients/img1.png" alt="">
            </div>
            <div class="items">
              <img src="assets/img/clients/img2.png" alt="">
            </div>
            <div class="items">
              <img src="assets/img/clients/img3.png" alt="">
            </div>
            <div class="items">
              <img src="assets/img/clients/img4.png" alt="">
            </div>
            <div class="items">
              <img src="assets/img/clients/img5.png" alt="">
            </div>
            <div class="items">
              <img src="assets/img/clients/img6.png" alt="">
            </div>
            <div class="items">
              <img src="assets/img/clients/img6.png" alt="">
            </div>
            <div class="items">
              <img src="assets/img/clients/img6.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Client Section End -->





    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">
                  <img src="assets/img/logov.png" class="img-responsive" alt="Footer Logo">
                </h3>
                <div class="textwidget">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus
                    suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">Quick Links</h3>
                <ul class="menu">
                  <li>
                    <a href="#">About Us</a>
                  </li>
                  <li>
                    <a href="#">Support</a>
                  </li>
                  <li>
                    <a href="#">License</a>
                  </li>
                  <li>
                    <a href="#">Terms & Conditions</a>
                  </li>
                  <li>
                    <a href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">Trending Jobs</h3>
                <ul class="menu">
                  <li>
                    <a href="#">Android Developer</a>
                  </li>
                  <li>
                    <a href="#">Senior Accountant</a>
                  </li>
                  <li>
                    <a href="#">Frontend Developer</a>
                  </li>
                  <li>
                    <a href="#">Junior Tester</a>
                  </li>
                  <li>
                    <a href="#">Project Manager</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">Follow Us</h3>
                <div class="bottom-social-icons social-icon">
                  <a class="twitter" href="https://twitter.com/GrayGrids">
                    <i class="ti-twitter-alt"></i>
                  </a>
                  <a class="facebook" href="https://web.facebook.com/GrayGrids">
                    <i class="ti-facebook"></i>
                  </a>
                  <a class="youtube" href="https://youtube.com">
                    <i class="ti-youtube"></i>
                  </a>
                  <a class="dribble" href="https://dribbble.com/GrayGrids">
                    <i class="ti-dribbble"></i>
                  </a>
                  <a class="linkedin" href="https://www.linkedin.com/GrayGrids">
                    <i class="ti-linkedin"></i>
                  </a>
                </div>
                <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                <form class="subscribe-box">
                  <input type="text" placeholder="Your email">
                  <input type="submit" class="btn-system" value="Send">
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer area End -->

      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info text-center">
                Shared by
                <i class="fa fa-love"></i>
                <a href="https://bootstrapthemes.co">BootstrapThemes</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->

    </footer>
    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="ti-arrow-up"></i>
    </a>

    <div id="loading">
      <div id="loading-center">
        <div id="loading-center-absolute">
          <div class="object" id="object_one"></div>
          <div class="object" id="object_two"></div>
          <div class="object" id="object_three"></div>
          <div class="object" id="object_four"></div>
          <div class="object" id="object_five"></div>
          <div class="object" id="object_six"></div>
          <div class="object" id="object_seven"></div>
          <div class="object" id="object_eight"></div>
        </div>
      </div>
    </div>

    <!-- Main JS  -->
    <script type="text/javascript" src="assets/js/jquery-min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/material.min.js"></script>
    <script type="text/javascript" src="assets/js/material-kit.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="assets/js/form-validator.min.js"></script>
    <script type="text/javascript" src="assets/js/contact-form-script.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>

</body>

</html>