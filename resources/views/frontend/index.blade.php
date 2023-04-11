<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MyDigihouse</title>
	<meta name="description" content="Webmania is a Agency, Startup and SaaS template by tempload." />
	<meta name="keywords" content="webmania, startup, saas, agency, development, html, template, tempload" />
	<meta name="author" content="tempload"/>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/images/favicon/favicon.png" />

	<!-- Bootstrap & Plugins CSS -->
	<link href="frontend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="frontend/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="frontend/assets/css/magnific-popup.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="frontend/assets/css/blue.css" rel="stylesheet" type="text/css">
</head>
<body>

	<!-- ***** Preloader Start ***** -->
	<div class="preloader-wrapper">
		<div class="loader">
			<div class="loader-inner"></div>
		</div>
	</div>
	<!-- ***** Preloader End ***** -->
	
	<!-- ***** Header Area Start ***** -->
	<header class="header-area">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="blue-index.html" class="logo">
							<img src="frontend/assets/images/logo_ovm.png" width="120" alt="Webmania"/>
						</a>
						<!-- ***** Logo End ***** -->


						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li><a href="blue-index.html#welcome">Acceuil</a></li>
							{{-- <li class="submenu">
								<a href="javascript:;">Pages</a>
								<ul>
									<li><a href="blue-about.html">About Us</a></li>
									<li><a href="blue-features.html">Features</a></li>
									<li><a href="blue-faq.html">FAQ's</a></li>
									<li><a href="blue-blog.html">Blog</a></li>
								</ul>
							</li> --}}
							<li><a href="/contact">Contact</a></li>
							<li><a href="/dashboard" class="btn-nav-line"><span>Mon Espace</span></a></li>
						</ul>
						<a class='menu-trigger'>
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->						
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->


	<!-- ***** Welcome Area Start ***** -->
	<div class="welcome-area" id="welcome">
		<!-- ***** Header Background Image Start ***** -->
		<div class="right-bg">
			<img src="frontend/assets/images/photos/header.jpg" class="img-fluid float-right" alt="">
		</div>
		<!-- ***** Header Background Image End ***** -->

		<div class="header-bg">
			<img src="frontend/assets/images/header-bg.svg" class="img-fluid" alt="">
		</div>

		<!-- ***** Header Text Start ***** -->
		<div class="header-text">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-12 col-sm-12">
						<h1>{{ $frontend->title_s1 }}</h1>
						<p>{{ $frontend->description_s1 }}</p>
						<div class="email-box">
							<div class="input">
								<input type="email" placeholder="Enter your email">
								<button>Get started</button>
							</div>
							<span>30-day FREE trial - no credit card needed</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Header Text End ***** -->

		<!-- ***** Play Button Start ***** -->
		<div class="play-button-wrapper">
			<a href="{{ $frontend->bg_video }}" class="btn-play">
				<i class="fa fa-play"></i>
			</a>
		</div>
		<!-- ***** Play Button End ***** -->
	</div>
	<!-- ***** Welcome Area End ***** -->


	<!-- ***** Features Small Start ***** -->
	<section class="section white padding-bottom-90" id="features">
		<div class="bg-top"></div>
		<div class="bg-bottom"></div>
		<div class="container">
			<!-- ***** Section Title Start ***** -->
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">{{ $frontend->title_s2 }}</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>{{ $frontend->description_s2 }}</p>
					</div>
				</div>
			</div>
			<!-- ***** Section Title End ***** -->

			<div class="row">
				<!-- ***** Features Small Item Start ***** -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
					<a href="blue-features-single.html" class="features-small-item">
						<div class="icon">
							<i class="fa fa-check-square-o"></i>
						</div>
						<h5 class="features-title">{{ $frontend->title_icon1_s2 }}</h5>
						<p>{{ $frontend->description_icon1_s2 }}</p>
						<div class="button">
							<i class="fa fa-chevron-right"></i>
						</div>
					</a>
				</div>
				<!-- ***** Features Small Item End ***** -->

				<!-- ***** Features Small Item Start ***** -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
					<a href="blue-features-single.html" class="features-small-item active">
						<div class="icon">
							<i class="fa fa-bed"></i>
						</div>
						<h5 class="features-title">{{ $frontend->title_icon2_s2 }}</h5>
						<p>{{ $frontend->description_icon2_s2 }}</p>
						<div class="button">
							<i class="fa fa-chevron-right"></i>
						</div>
					</a>
				</div>
				<!-- ***** Features Small Item End ***** -->

				<!-- ***** Features Small Item Start ***** -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
					<a href="blue-features-single.html" class="features-small-item">
						<div class="icon">
							<i class="fa fa-bar-chart"></i>
						</div>
						<h5 class="features-title">{{ $frontend->title_icon3_s2 }}</h5>
						<p>{{ $frontend->description_icon3_s2 }}</p>
						<div class="button">
							<i class="fa fa-chevron-right"></i>
						</div>
					</a>
				</div>
				<!-- ***** Features Small Item End ***** -->

				<!-- ***** Features Small Item Start ***** -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.8s">
					<a href="blue-features-single.html" class="features-small-item">
						<div class="icon">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<h5 class="features-title">{{ $frontend->title_icon4_s2 }}</h5>
						<p>{{ $frontend->description_icon4_s2 }}</p>
						<div class="button">
							<i class="fa fa-chevron-right"></i>
						</div>
					</a>
				</div>
				<!-- ***** Features Small Item End ***** -->
			</div>
		</div>
	</section>
	<!-- ***** Features Small End ***** -->


	<!-- ***** Features Big Item Start ***** -->
	<section class="section padding-bottom-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 align-self-center mobile-bottom-fix"  data-scroll-reveal="enter right move 30px over 0.6s after 0.3s">
					<img src="{{ asset('imagesApp/frontend/images/'.$frontend->image_s3) }}" class="img-fluid float-left" alt="App">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
					<div class="left-heading">
						<h2 class="section-title">{{ $frontend->titre_s3 }}</h2>
					</div>
					<div class="left-text">
						<p>{{ $frontend->description_s3 }}</p>
						<ul>
							<li>{{ $frontend->bullet1_s3 }}</li>
							<li>{{ $frontend->bullet2_s3 }}</li>
							<li>{{ $frontend->bullet3_s3 }}</li>
							<li>{{ $frontend->bullet4_s3 }}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Features Big Item End ***** -->



	<!-- ***** Testimonials Start ***** -->
	<section class="section padding-bottom-80" id="testimonials">
		<div class="container">
			<!-- ***** Section Title Start ***** -->
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">{{ $frontend->title_s4 }}</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>{{ $frontend->description_s4 }}</p>
					</div>
				</div>
			</div>
			<!-- ***** Section Title End ***** -->

			<div class="row testimonials-wrapper">
				<!-- ***** Testimonials Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="testimonials-item">
						<div class="user">
							<img src="assets/images/photos/profile/1.jpg" alt="">
						</div>
						<div class="testimonials-content">
							<h3 class="user-name">Fletch Skinner</h3>
							<span>Mellow Mountain Hotel</span>
							<div class="txt">
								<p>Nullam at venenatis dui. Suspendisse lectus lacus, ornare sed imperdiet eu, viverra vel neque. Duis nec nunc dolor. Cras non molestie sem, eu lacinia. </p>
							</div>
						</div>
					</div>
				</div>
				<!-- ***** Testimonials Item End ***** -->

			
			</div>
		</div>
	</section>
	<!-- ***** Testimonials End ***** -->


	<!-- ***** Pricing Plans Start ***** -->
	<section class="section white bg-center-left" id="pricing-plans">
		<div class="bg-top"></div>
		<div class="bg-bottom"></div>
		<div class="container">
			<!-- ***** Section Title Start ***** -->
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">{{ $frontend->title_s5 }}</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>{{ $frontend->description_s5 }}</p>
					</div>
				</div>
			</div>
			<!-- ***** Section Title End ***** -->

			<div class="row">
				<!-- ***** Pricing Item Start ***** -->
				<div class="col-lg-4 col-md-4 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
					<div class="pricing-item">
						<div class="pricing-header">
							<h3 class="pricing-title">BASIC PLAN</h3>
							<div class="number">
								<span>1</span>
							</div>
						</div>
						<div class="pricing-body">
							<div class="price-wrapper">
								<span class="currency">$</span>
								<span class="price">13.90</span>
								<span class="period">/Month</span>
							</div>
							<ul class="list">
								<li class="active">Unlimited Reservations</li>
								<li class="active">2 Clients and Products</li>
								<li class="active">Invoicing and Payments</li>
								<li class="active">Housekeeping Status</li>
								<li>Data Security and Backups</li>
								<li>Unlimited Staff Accounts</li>
								<li>Web Booking Widget</li>
								<li>Monthly Reports and Analytics</li>
							</ul>
						</div>
						<div class="pricing-footer">
							<a href="#">Select Plan</a>
						</div>
					</div>
					<div class="item-bg"></div>
				</div>
				<!-- ***** Pricing Item End ***** -->

				<!-- ***** Pricing Item Start ***** -->
				<div class="col-lg-4 col-md-4 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
					<div class="pricing-item active">
						<div class="pricing-header">
							<h3 class="pricing-title">ADVANCED PLAN</h3>
							<div class="number">
								<span>2</span>
							</div>
						</div>
						<div class="pricing-body">
							<div class="price-wrapper">
								<span class="currency">$</span>
								<span class="price">23.90</span>
								<span class="period">/Month</span>
							</div>
							<ul class="list">
								<li class="active">Unlimited Reservations</li>
								<li class="active">2 Clients and Products</li>
								<li class="active">Invoicing and Payments</li>
								<li class="active">Housekeeping Status</li>
								<li class="active">Data Security and Backups</li>
								<li class="active">Unlimited Staff Accounts</li>
								<li>Web Booking Widget</li>
								<li>Monthly Reports and Analytics</li>
							</ul>
						</div>
						<div class="pricing-footer">
							<a href="#">Select Plan</a>
						</div>
					</div>
					<div class="item-bg"></div>
				</div>
				<!-- ***** Pricing Item End ***** -->

				<!-- ***** Pricing Item Start ***** -->
				<div class="col-lg-4 col-md-4 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
					<div class="pricing-item">
						<div class="pricing-header">
							<h3 class="pricing-title">EXPERT PLAN</h3>
							<div class="number">
								<span>3</span>
							</div>
						</div>
						<div class="pricing-body">
							<div class="price-wrapper">
								<span class="currency">$</span>
								<span class="price">33.90</span>
								<span class="period">/Month</span>
							</div>
							<ul class="list">
								<li class="active">Unlimited Reservations</li>
								<li class="active">2 Clients and Products</li>
								<li class="active">Invoicing and Payments</li>
								<li class="active">Housekeeping Status</li>
								<li class="active">Data Security and Backups</li>
								<li class="active">Unlimited Staff Accounts</li>
								<li class="active">Web Booking Widget</li>
								<li class="active">Monthly Reports and Analytics</li>
							</ul>
						</div>
						<div class="pricing-footer">
							<a href="#">Select Plan</a>
						</div>
					</div>
					<div class="item-bg"></div>
				</div>
				<!-- ***** Pricing Item End ***** -->
			</div>
		</div>
	</section>
	<!-- ***** Pricing Plans End ***** -->

	<!-- ***** Counter Parallax Start ***** -->
	<section class="parallax-counter" data-image="frontend/assets/images/photos/parallax-counter.jpg">
		<div class="parallax-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="count-item">
							<strong>{{ $frontend->num1_s6 }}</strong>
							<span>{{ $frontend->title_num1_s6 }}</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="count-item">
							<strong>{{ $frontend->num2_s6 }}</strong>
							<span>{{ $frontend->title_num2_s6 }}</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="count-item">
							<strong>{{ $frontend->num3_s6 }}</strong>
							<span>{{ $frontend->title_num3_s6 }}</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="count-item">
							<strong>{{ $frontend->num4_s6 }}</strong>
							<span>{{ $frontend->title_num4_s6 }}</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Counter Parallax End ***** -->
	
	<!-- ***** Footer Start ***** -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 col-sm-12">
					<img src="frontend/assets/images/logo_ovm.png" width="80" class="logo" alt="">
					<div class="text">{{ $frontend->description_footer }}</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<h5>Helpful Links</h5>
					<ul class="footer-nav">
						<li><a href="#"><i class="fa fa-angle-right"></i><span>About Us</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Features</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>FAQ’s</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Blog</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Contact</span></a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<h5>Features</h5>
					<ul class="footer-nav">
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Worldwide</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Scalable</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Modular</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Connectivity</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Corporate</span></a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-12">
					<h5>Contacter nous</h5>
					<div class="address">
						<p>{{ $frontend->address }}</p>
						<p>Phone: (272) 211-7370</p>
						<p><span>E-Mail:</span><a href="#">contact@mydigihouse.fr</a></p>
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
							<li><a href="#"><i class="fa fa-github-square"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p class="copyright">{{ $frontend->footer }}</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- ***** Footer End ***** -->



	<!-- jQuery -->
	<script src="frontend/assets/js/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap -->
	<script src="frontend/assets/js/popper.js"></script>
	<script src="frontendassets/js/bootstrap.min.js"></script>

	<!-- Plugins -->
	<script src="frontend/assets/js/scrollreveal.min.js"></script>
	<script src="frontend/assets/js/parallax.min.js"></script>
	<script src="frontend/assets/js/waypoints.min.js"></script>
	<script src="frontend/assets/js/jquery.counterup.min.js"></script>
	<script src="frontend/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="frontend/assets/js/imgfix.min.js"></script>	

	<!-- Global Init -->
	<script src="frontend/assets/js/custom.js"></script>
</body>
</html>