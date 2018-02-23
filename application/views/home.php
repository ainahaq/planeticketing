<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wanderlicious</title>
<!-- meta-tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wanderlicious" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta-tags -->
<link href="<?= base_url();?>/assets/temp/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= base_url();?>/assets/temp/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="<?= base_url();?>/assets/temp/css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
<link rel="stylesheet" href="<?= base_url();?>/assets/temp/css/flexslider.css" type="text/css" media="screen" property="" />
<link href="<?= base_url();?>/assets/temp/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?= base_url();?>/assets/temp/css/lightbox.css">
<!--web-fonts-->
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
<!--//web-fonts-->
</head>
<body>
<!-- banner -->
	<div class="banner" id="home">
<div class="agileinfo-dot">
<div class="container">
		<!-- header -->
		<header>
			<!-- navigation -->
			<div class="w3_navigation">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="w3_navigation_pos">
						<h1><a href="index.php"><span>W</span>anderlicious</a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-4" id="cl-effect-4">
						<ul class="nav navbar-nav menu__list">
							<li><a href="index.php">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="<?php base_url();?>index.php/home/add">Register</a></li>
							<li><a href="<?php base_url();?>login">Login</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
	</div>
	<div class="clearfix"></div>
		<!-- //navigation -->
		</header>
	<!-- //header -->
	<!-- banner-text -->
		<div class="banner-text"> 
			<h2>Hundreds of Destinations Worldwide</h2>
			<div class="book-form" id="register">
			<p>Pick your destination</p>
			   <form action="<?php base_url(); ?>welcome/search" method="get">
					<div class="col-md-3 form-time-w3layouts">
							<label>Travelling From</label>
							<select class="form-control" name="routes_from">
								<option>Jakarta</option>
								<option>Batam</option>
								<option>Banda Aceh</option>
								<option>Medan</option>
								<option>Padang</option>
								<option>Pekanbaru</option>
								<option>Palembang</option>
								<option>Tangerang</option>
								<option>Bandung</option>
								<option>Semarang</option>
								<option>Solo</option>
								<option>Surabaya</option>
								<option>Yogyakarta</option>
								<option>Denpasar</option>
							</select>
					</div>
					<div class="col-md-3 form-left-agileits-w3layouts ">
							<label>Travelling To</label>
							<select class="form-control" name="routes_to">
								<option>Denpasar</option>
								<option>Jakarta</option>
								<option>Batam</option>
								<option>Banda Aceh</option>
								<option>Medan</option>
								<option>Padang</option>
								<option>Pekanbaru</option>
								<option>Palembang</option>
								<option>Tangerang</option>
								<option>Bandung</option>
								<option>Semarang</option>
								<option>Solo</option>
								<option>Surabaya</option>
								<option>Yogyakarta</option>
							</select>
					</div>
					<div class="col-md-3 form-date-w3-agileits">
						        <label>Departure Date</label>
									<input  id="datepicker1" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
					<div class="col-md-3 form-left-agileits-submit">
						  <input type="submit" value="search">
					</div>
				</form>
				<div class="clearfix"></div>
			</div>
			<div class="banner-btm-agileits">
				<div class="col-md-4 bann-left-w3-agile">
					<h3><span>24/7</span>Support</h3>
				</div>
				<div class="col-md-4 button-agileits">
					<a href="#contact" class="hvr-ripple-out scroll">Get in touch</a>
				</div>
				<div class="col-md-4 bann-right-wthree">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<a href="mailto:info@wanderlicious.com">info@wanderlicious.com</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="contact" id="contact">
	<div class="container">  
	<h3 class="title-agileits-w3layouts">Contact Us</h3>
					<form action="#" method="post">
					<div class="col-md-6">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="Name" required="">
							<label>Name</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="email" name="Email" required=""> 
							<label>Email</label>
							<span></span>
						</div> 
						<div class="styled-input">
							<input type="text" name="Subject" required="">
							<label>Subject</label>
							<span></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="styled-input textarea-w3ls">
							<textarea name="Message" required=""></textarea>
							<label>Message</label>
							<span></span>
						</div>	 
						<input type="submit" value="SEND">
					</div>
					</form>
					<div class="clearfix"> </div>	
</div>
</div>
	<div class="col-md-4 subscribe-grid">
		<h5>Subscribe for our latest updates</h5>
		<p>Get <span>10%</span> off on booking</p>
					<form action="#" method="post">
						<input type="email" placeholder="Subscribe" name="Subscribe" required="">
						<button class="btn1"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
					</form>
				</div>
<div class="col-md-8 footer-w3layouts">
		<div class="footer-top-agile">
		<h6><a href="index.php"><span>W</span>anderlicious</a></h6>
		<div class="footer-contact-w3ls">
			<ul>
				<li><i class="fa fa-globe" aria-hidden="true"></i>Jl. DI. Panjaitan No. 128 Purwokerto Selatan</li>
				<li><i class="fa fa-phone" aria-hidden="true"></i>0813 1470 9800</li>
				<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@wanderlicious.com">info@wanderlicious.com</a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
		<div class="clearfix"></div>
		</div>
		<div class="footer-bottom-wthree">
			<div class="copyright-wthree">
				<p>&copy; 2018 Wanderlicious . All Rights Reserved</p>
				<a href="index.php" class="scroll bt-icon"><i class="fa fa-upload" aria-hidden="true"></i></a>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
<!-- //Footer -->
<script src="<?= base_url();?>/assets/temp/js/jquery-2.2.3.min.js"></script> 

					<script src="<?= base_url();?>/assets/temp/js/lightbox-plus-jquery.min.js"></script>	
			<!-- Owl-Carousel-JavaScript -->
	<script src="<?= base_url();?>/assets/temp/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 4,
				lazyLoad : true,
				autoPlay : true,
				pagination : true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->  
	<!-- flexSlider -->
					<script defer src="<?= base_url();?>/assets/temp/js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
				<!-- //flexSlider -->
 <!-- Move-top-scrolling -->
<script type="text/javascript" src="<?= base_url();?>/assets/temp/js/move-top.js"></script>
<script type="text/javascript" src="<?= base_url();?>/assets/temp/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- Move-top-scrolling -->
<!-- Calendar -->
				<link rel="stylesheet" href="<?= base_url();?>/assets/temp/css/jquery-ui.css" />
				<script src="<?= base_url();?>/assets/temp/js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
<!--js for bootstrap working-->
	<script src="<?= base_url();?>/assets/temp/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>