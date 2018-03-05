<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="author" content="Jobboard">

		<title>Venture café - Talent Portal</title>

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
		<link rel="stylesheet" href="assets/css/homepage.css" type="text/css">

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
									<img src="assets/img/logov.png" alt="" width="190px;">
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
										<a href="#">
											Jobs
											<i class="fa fa-angle"></i>
										</a>
									</li>
									<li>
										<a href="https://venturecaferotterdam.org/who-we-are/">
											About Us
											<i class="fa fa-angle"></i>
										</a>
									</li>
									<li>
										<a href="https://venturecaferotterdam.org/">
											Venture Cafe
											<i class="fa fa-angle"></i>
										</a>
									</li>
									<?php if (isset($_SESSION['id'])) { ?>
									<li>
										<a class="active" href="#">
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
												<a class="active" href="/new-posting">
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

							</div>
						</div>
						<!-- Mobile Menu Start -->
						<ul class="wpb-mobile-menu">
							<li>
								<a class="active" href="index.html">Home</a>
							</li>
							<li>
								<a href="">Companies</a>

							</li>
							<li>
								<a href="#">Jobs</a>

							</li>
							<li>
								<a href="https://venturecaferotterdam.org/who-we-are/">About Us</a>

							</li>
							<li>
								<a href="https://venturecaferotterdam.org/">Venture Cafe</a>

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

				<!-- end intro section -->
		</div>

		<!-- Form Section Start -->
		<div class="top-content">

			<div class="inner-bg">
				<div class="container">

					<div class="row">
						<div class="col-sm-5">

							<div class="form-box">
								<div class="form-top">
									<div class="form-top-left">
										<h3>Post a Job</h3>
									</div>
									<div class="form-top-right">

									</div>
								</div>
								<div class="form-bottom">
									<form role="form" action="" method="post" class="job-descript-form">
										<br>
										<div class="form-group">
											<h4>Job Title
												<h4>
													<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Title"></textarea>
										</div>

										<div class="form-group">
											<h4>Job Description
												<h4>
													<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Description"></textarea>
										</div>

										<div class="form-group">
											<h4>Tags
												<h4>
													<textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Tags"></textarea>
										</div>

										<div class="form-group">
											<h4>About company
												<h4>
													<label class="sr-only" for="companyinofo">About a company</label>
													<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Company Information"></textarea>
										</div>
										<h4>Identifies
											<h4>
												<div class="form-check form-check-inline">

													<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
													<label class="form-check-label" for="inlineCheckbox1">Start up</label>
												</div>

												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
													<label class="form-check-label" for="inlineCheckbox2">Service provider</label>
												</div>

												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
													<label class="form-check-label" for="inlineCheckbox3">Goverment</label>
												</div>

												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
													<label class="form-check-label" for="inlineCheckbox3">Academia</label>
												</div>

												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
													<label class="form-check-label" for="inlineCheckbox3">Corporate</label>
												</div>
												<br>
												<div class="date">
													<h6>Starting Date</h6>
													<input size="2" type="date" value="">
												</div>

												<div class="date">
													<h6>End date</h6>
													<input size="2" type="date" value="">
												</div>
												<br>
												<div>
													<input type="text" name="link" placeholder="Application Link" id="">
												</div>
												<div>
													<p>Supporting image max 8mb</p>
													<input type="file" name="image" id="">
												</div>
												<br>
												<button type="submit" class="btn btn-common btn-rm">Submit</button> <br>
												<!-- <a href="job-details.html" class="btn btn-common btn-rm">More Detail</a> -->
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<!-- Form Section End -->


		<!-- Footer Section Start -->
		<footer id="footerid">
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


								<a href="/joinpage">&nbsp Company Login</a>


								<a href="https://venturecaferotterdam.org/sponsor/">&nbsp&nbsp Support</a>


								<a href="#">&nbsp&nbsp License</a>


								<a href="https://venturecaferotterdam.org/contact/">&nbsp&nbsp Contact</a>

							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="widget">

								<div class="bottom-social-icons social-icon">
									<a class="twitter" href="https://twitter.com/VentureCafeRdam">
										<i class="ti-twitter-alt"></i>
									</a>
									<a class="facebook" href="https://www.facebook.com/VentureCafeRotterdam/">
										<i class="ti-facebook"></i>
									</a>
									<a class="instagram" href="http://instagram.com/venturecaferotterdam/">
										<i class="ti-instagram"></i>
									</a>
									<a class="linkedin" href="https://www.linkedin.com/company/venturecaferotterdam">
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
