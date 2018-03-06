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
		<link rel="shortcut icon" href="/assets/img/favicon.png">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="/assets/css/jasny-bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="/assets/css/bootstrap-select.min.css" type="text/css">
		<!-- Material CSS -->
		<link rel="stylesheet" href="/assets/css/material-kit.css" type="text/css">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="/assets/fonts/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="/assets/fonts/themify-icons.css">

		<!-- Animate CSS -->
		<link rel="stylesheet" href="/assets/extras/animate.css" type="text/css">
		<!-- Owl Carousel -->
		<link rel="stylesheet" href="/assets/extras/owl.carousel.css" type="text/css">
		<link rel="stylesheet" href="/assets/extras/owl.theme.css" type="text/css">
		<!-- Rev Slider CSS -->
		<link rel="stylesheet" href="/assets/extras/settings.css" type="text/css">
		<!-- Main Styles -->
		<link rel="stylesheet" href="/assets/css/main.css" type="text/css">
		<!-- Slicknav js -->
		<link rel="stylesheet" href="/assets/css/slicknav.css" type="text/css">
		<!-- Responsive CSS Styles -->
		<link rel="stylesheet" href="/assets/css/responsive.css" type="text/css">
		<!-- Color CSS Styles  -->
		<link rel="stylesheet" type="text/css" href="/assets/css/colors/red.css" media="screen" />
		<link rel="stylesheet" href="/assets/css/homepage.css" type="text/css">

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
									<img src="/assets/img/logov.png" alt="" width="190px;">
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
										<a  href="#">
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

				<!-- Header Section End -->

				<!-- end intro section -->
		</div>

		<!-- Form Section Start -->
		<div class="top-content">

			<div class="inner-bg backgroundven">
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
									<form role="form" action="/editnow" method="post" class="job-descript-form">
										<br>
										<div class="form-group">
											<h4>Job Title
												<h4>
													<textarea name="tp-title" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Max 255 characters"><?= isset($postinfo['tp-title']) ? $postinfo['tp-title'] : $postinfo['title'] ?></textarea>
													 <h6 style="color:#f45342;"><?= form_error('tp-title') ? form_error('tp-title') : '' ?>
										</div>

										<div class="form-group">
											<h4>Job Description
												<h4>
													<textarea name="tp-description" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Max 500 characters"><?= isset($postinfo['tp-description']) ? $postinfo['tp-description'] : $postinfo['description'] ?></textarea>
													<h6 style="color:#f45342;"><?= form_error('tp-description') ? form_error('tp-description') : '' ?></h6>
										</div>

										<div class="form-group">
											<h4>Tags
												<h4>
													<textarea name="tp-tags" class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Tags"><?= isset($postinfo['tp-tags']) ? $postinfo['tp-tags'] : $postinfo['tags'] ?></textarea>
													<p>growth, international, city, talent, community, resilience, culture, digital, energy, inspiration</p>
													<h6 style="color:#f45342;"><?= form_error('tp-tags') ? form_error('tp-tags') : '' ?></h6>
										</div>

										<div class="form-group">
											<h4>About company
												<h4>
													<label class="sr-only" for="companyinofo">About a company</label>
													<textarea name="tp-about" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Max 255 characters"><?= isset($postinfo['tp-about']) ? $postinfo['tp-about'] : $postinfo['about'] ?></textarea>
													<h6 style="color:#f45342;"><?= form_error('tp-about') ? form_error('tp-about') : '' ?></h6>
													<input type="hidden" name="tp-posting_id" value="<?= isset($postinfo['tp-posting_id']) ? $postinfo['tp-posting_id'] : $postinfo['id'] ?>">
										</div>
										<h4>Identifies
											<h4>
											<div class="form-group">
												<select name="tp-identifies" class="form-control" id="exampleFormControlSelect1">
												<option><?= isset($postinfo['tp-identifies']) ? $postinfo['tp-identifies'] : $postinfo['identifies'] ?></option>
												<option>Startup</option>
												<option>Service</option>
												<option>Provider</option>
												<option>Goverment</option>
												<option>Academia</option>
												<option>Corporate</option>
												</select>
												<h6 style="color:#f45342;"><?= form_error('tp-identifies') ? form_error('tp-identifies') : '' ?></h6>
											</div>
												<br>
												<div class="form-group">
													<h4>Starting Date</h4>
													<input  name="tp-startdate" class="form-control" size="2" type="date" value="<?= isset($postinfo['tp-startdate']) ? $postinfo['tp-startdate'] : $postinfo['startdate'] ?>">
													<h6 style="color:#f45342;"><?= form_error('tp-startdate') ? form_error('tp-startdate') : '' ?></h6>
												</div>

												<div class="form-group">
													<h4>End date</h4>
													<input  name="tp-enddate" class="form-control" size="2" type="date" value="<?= isset($postinfo['tp-enddate']) ? $postinfo['tp-enddate'] : $postinfo['enddate'] ?>">
													<h6 style="color:#f45342;"><?= form_error('tp-enddate') ? form_error('tp-enddate') : '' ?></h6>
												</div>
												<br>
												<div class="form-group">
													<h5>Application Link</h5>
													<input class="form-control" type="text" name="tp-link" value="<?= isset($postinfo['tp-link']) ? $postinfo['tp-link'] : $postinfo['link'] ?>" placeholder="Link">
													<h6 style="color:#f45342;"><?= form_error('tp-link') ? form_error('tp-link') : '' ?></h6>
												</div>
												<div class="form-group">
													<p>Supporting image max 8mb</p>
													<input type="file" name="tp-support-image" id="">
												</div>
												<button type="button" class="btn btn-common btn-rm"><a style="color:white;" href="/mypage">Go Back</a></button>
												<button type="submit" class="btn btn-common btn-rm">Edit</button> 
												
												<!-- <a href="job-details.html" class="btn btn-common btn-rm">More Detail</a> -->
									</form>
									<button type="button" class="btn btn-common btn-rm"><a style="color:white;" href="/deletenow/<?= $postinfo['id'] ?>">delete</a></button> <br>
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
									<img src="/assets/img/logov.png" class="img-responsive" alt="Footer Logo">
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
		<script type="text/javascript" src="/assets/js/jquery-min.js"></script>
		<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/assets/js/material.min.js"></script>
		<script type="text/javascript" src="/assets/js/material-kit.js"></script>
		<script type="text/javascript" src="/assets/js/jquery.parallax.js"></script>
		<script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="/assets/js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="/assets/js/main.js"></script>
		<script type="text/javascript" src="/assets/js/jquery.counterup.min.js"></script>
		<script type="text/javascript" src="/assets/js/waypoints.min.js"></script>
		<script type="text/javascript" src="/assets/js/jasny-bootstrap.min.js"></script>
		<script type="text/javascript" src="/assets/js/bootstrap-select.min.js"></script>
		<script type="text/javascript" src="/assets/js/form-validator.min.js"></script>
		<script type="text/javascript" src="/assets/js/contact-form-script.js"></script>
		<script type="text/javascript" src="/assets/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="/assets/js/jquery.themepunch.tools.min.js"></script>

	</body>

	</html>
