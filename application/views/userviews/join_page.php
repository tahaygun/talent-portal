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

  <title>Talent Portal</title>

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

  <link rel="stylesheet" href="assets/css/joinpage.css" type="text/css">

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
              <a class="navbar-brand logo" href="/">
                <img src="assets/img/logov.png"
                  alt="" width="190px;">
              </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar">
              <!-- Start Navigation List -->
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="/">
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
                  <a href="/jobs">
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
                <?php if (isset($_SESSION['id'])) { ?>
										<li>
										<a href="blog.html">
											My Page
											<i class="fa fa-angle-down"></i>
										</a>
										 <ul class="dropdown">
											<li>
												<a href="/mypage">
												My Page
												</a>
											</li>
											<li>
												<a href="/new-posting">
												New Posting
												</a>                          
											</li>
											<li>
												<a href="/logout">
												Logout
												</a>
											</li>
											</ul>
									</li>
								<?php 
      } ?>
              </ul>
              <!-- <ul class="nav navbar-nav navbar-right float-right">
                <li class="left">
                  <a href="post-job.html">
                    <i class="ti-pencil-alt"></i> Post A Job</a>
                </li>
                <li class="right">
                  <a href="my-account.html">
                    <i class="ti-lock"></i> Log In</a>
                </li>
              </ul> -->
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
            <!-- <li class="btn-m">
              <a href="post-job.html">
                <i class="ti-pencil-alt"></i> Post A Job</a>
            </li>
            <li class="btn-m">
              <a href="my-account.html">
                <i class="ti-lock"></i> Log In</a>
            </li> -->
          </ul>
          <!-- Mobile Menu End -->
        </nav>
</div>

        <!-- Header Section End -->

    <!-- Top content -->
    <div class="top-content">

        <div class="inner-bg">
            <div class="container">

                <div class="row">
                    <div class="col-sm-5">

                      <div class="form-box">
                        <div class="form-top">
                          <div class="form-top-left">
                            <h3> Do you have  a job to offer? <br>
                               Sign up now</h3>
                             
                              <p>Fill in the form below to post your offer: </p>
                              
                          </div>
                          <div class="form-top-right">
                            <i class="fa fa-pencil"></i>
                          </div>
                          </div>
                          <div class="form-bottom">
                        <form enctype="multipart/form-data" accept-charset="utf-8" action="/register" method="post" class="registration-form">
                          <div class="form-group">
                            <label class="sr-only" for="companyname">Company name</label>
                              <input type="text" name="companyname" placeholder="Company name..." class="companyname form-control" id="form-first-name" value="<?= isset($reginfo['companyname']) ? $reginfo['companyname'] : '' ?>">
                              <?= form_error('companyname') ? form_error('companyname') : '' ?>
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="email">Email</label>
                              <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="email" value="<?= isset($reginfo['email']) ? $reginfo['email'] : '' ?>">
                              <?= form_error('email') ? form_error('email') : '' ?>
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="contactname"> Contact Person</label>
                              <input type="text" name="contactname" placeholder="Contact Person" class="form-contact-person-name form-control" id="contactname" value="<?= isset($reginfo['contactname']) ? $reginfo['contactname'] : '' ?>">
                              <?= form_error('contactname') ? form_error('contactname') : '' ?>
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="phone"> phone</label>
                              <input type="text" name="phone" placeholder="Phone" class="form-phone form-control" id="phone" value="<?= isset($reginfo['phone']) ? $reginfo['phone'] : '' ?>">
                              <?= form_error('phone') ? form_error('phone') : '' ?>

                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="password">Password</label>
                              <input type="password" name="password" placeholder="Password" class="form-password form-control" id="password">
                              <?= form_error('password') ? form_error('password') : '' ?>
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="confpassword">Password</label>
                              <input type="password" name="confpassword" placeholder=" Confirm your Password" class="form-conf-password form-control" id="confpassword">
                              <?= form_error('confpassword') ? form_error('confpassword') : '' ?>
                            </div>

                            <div class="form-group">
                              <h5>Company Logo max 512kb </h5>
                              <input type="file" name="support-image" id="">
                            <?= isset($error) ? $error : '' ?>
												    </div>

                            <button type="submit" class="btn btn-common btn-rm">Sign me up!</button> <br> <br>
                            <h4> <?= isset($_SESSION['message']) ? $_SESSION['message'] : '' ?></h4>
                           
                            <!-- <a href="job-details.html" class="btn btn-common btn-rm">More Detail</a> -->
                        </form>
                      </div>
                      </div>

                    </div>
                    <div class="col-sm-1 middle-border"></div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">

                      <div class="form-box">
                        <div class="form-top">
                          <div class="form-top-left">
                            <h3>Login to our site</h3>
                              <p>Enter email and password to login:</p><br>
                          </div>
                          <div class="form-top-right">
                            <i class="fa fa-key"></i>
                          </div>
                          </div>
                          <div class="form-bottom">
                        <form role="form" action="/login" method="post" class="login-form">
                          <div class="form-group">
                            <label class="sr-only" for="form-email">Email</label>
                            <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
                          </div>

                            <div class="form-group">
                              <label class="sr-only" for="form-password">Password</label>
                              <input type="password" name="password" placeholder="Password" class="form-password form-control" id="form-password">
                            </div>
                            <button type="submit" class="btn btn-common btn-rm">Sign in!</button> <br><br>
                            <h4> <?= isset($_SESSION['logerror']) ? $_SESSION['logerror'] : '' ?></h4>
                        </form>
                      </div>
                    </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">


        </div>
      </div>
    </footer>

    <!-- Javascript -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>


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

              </div>
            </div>
            <div class="col-md-6 col-sm-8 col-xs-12">
              <div class="widget">


                    <a href="#">&nbsp Company Login</a>


                    <a href="#">&nbsp&nbsp Support</a>


                    <a href="#">&nbsp&nbsp License</a>


                    <a href="#">&nbsp&nbsp Terms & Conditions</a>


                    <a href="#">&nbsp&nbsp  Contact</a>

              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">

                <div class="bottom-social-icons social-icon">
                  <a class="twitter" href="https://twitter.com/GrayGrids">
                    <i class="ti-twitter-alt"></i>
                  </a>
                  <a class="facebook" href="https://web.facebook.com/GrayGrids">
                    <i class="ti-facebook"></i>
                  </a>
                  <a class="dribble" href="https://dribbble.com/GrayGrids">
                    <i class="ti-instagram"></i>
                  </a>
                  <a class="linkedin" href="https://www.linkedin.com/GrayGrids">
                    <i class="ti-linkedin"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer area End -->

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