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

		<style>
			.top-content {
				margin-left: 500px;
			}

		</style>

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
										<a href="#">
											Postings
											<i class="fa fa-angle-down"></i>
										</a>
										<ul class="dropdown">
											<li>
												<a href="/admin-home">
													All Postings
												</a>
											</li>
											<li>
												<a href="/post-requests">
													Posting Requests
												</a>
											</li>
											<li>
												<a href="/highlighted-posts">
													Highlighted Postings
												</a>
											</li>
										</ul>

									</li>
									<li>
										<a href="/companies">
											Companies
											<i class="fa fa-angle-down"></i>
										</a>
										<ul class="dropdown">
											<li>
												<a href="/companies">
													All Companies
												</a>
											</li>
											<li>
												<a href="/companies">
													Company Requests
												</a>
											</li>
											<li>
												<a href="">
													Trusted Companies
												</a>
											</li>
										</ul>
									</li>

									<li>
										<a class="active" href="#">
											My Page
											<i class="fa fa-angle-down "></i>
										</a>
										 <ul class="dropdown">
											<li>
												<a class="active" href="/options-admin">
												Options
												</a>
											</li>
											<li>
												<a href="new-posting">
												New Posting
												</a>
											</li>
											<li>
												<a href="/view-admins-list">
												Admins
												</a>
											</li>
											<li>
												<a href="/logout">
												Logout
												</a>
											</li>
											</ul>
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
						</ul>
						<!-- Mobile Menu End -->
					</nav>
				</div>
			</section>
		</div>
		<!-- Header Section End -->

		<!-- Top content -->
		<div class="top-content">

			<div class="inner-bg">
				<div class="container">
					<h2 class="section-title">Welcome Administrator</h2>

					<div class="row">
						<div class="col-sm-5">

							<div class="form-box">
								<div class="form-top">
									<div class="form-top-left">
										<h3>Add new admin</h3>
									</div>
								</div>
								<div class="form-bottom">
									<form role="form" action="/add-admin" method="post" class="registration-form">

										<div class="form-group">
											<h5>Email</h5>
											<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="email" value="">
										</div>
										<div class="form-group">
											<h5>Name</h5>
											<input type="text" name="name" placeholder="Name" class="form-email form-control" id="name" value="">
										</div>
										<div class="form-group">
													<h5>Admin Type</h5>
													<select name="level" class="form-control" id="level">
														<option value="2">Normal Admin</option>
														<option value="1">Super Admin (can add admins)</option>
													</select>
										</div>

										<div class="form-group">
											<h5>Password</h5>
											<input type="password" name="password" placeholder="Password" class="form-password form-control" id="password">
										</div>
										<button type="submit" class="btn btn-common btn-rm">Add an admin</button>
										<br>
									</form>
									<form role="form" action="/change-password" method="post" class="registration-form">
										<div class="form-group">
											<h3>Change password</h3>
											<br>
											<label class="sr-only" for="password">Password</label>
											<input type="password" name="password" placeholder="Password" class="form-password form-control" id="password">
										</div>
										<div class="form-group">
											<label class="sr-only" for="confpassword">New password Confirm</label>
											<input type="password" name="confpassword" placeholder=" Confirm your Password" class="form-conf-password form-control" id="confpassword">
										</div>
										<button type="submit" class="btn btn-common btn-rm">Confirm</button>
									</form>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

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


								<a href="#">&nbsp&nbsp Contact</a>

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
