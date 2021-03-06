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
<style type="text/css">
	ul li {
		list-style: none;
	}
</style>
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
						<h1><a href="<?php echo base_url(); ?>welcome"><span>W</span>anderlicious</a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-4" id="cl-effect-4">
						<ul class="nav navbar-nav menu__list">
							<li class="active"><a>Choose a Flight </a></li>
							<li><a href="">Personal Information</a></li>
							<li><a>Payment Type</a></li>
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

	</div>
</div>
</div>
<!-- //banner -->
<!-- about -->
<!-- banner-bottom -->	
<div class="contact" id="contact">
	<div class="container">
		<table class="table table-bordered table-striped" id="manageMemberTable">
  			<thead>
    			<tr>
      				<th>ID</th>
				    <th>Depart At</th>
				    <th>Landing At</th>
				    <th>Depart Date</th>
				    <th>Routes From</th>
				    <th>Routes To</th>
				    <th>Airplane Type</th>
				    <th>Price</th>
				    <th>Action</th>
				</tr>
  			</thead>
    		<?php
    			$no=0;
    			foreach ($data_routes as $obj1) {
      			$no++;
      		?>

        		<tr>
          			<td><?php echo $no; ?></td>
			        <td><?php echo $obj1['depart_at']; ?></td>
			        <td><?php echo $obj1['landing_at']; ?></td>
			        <td><?php echo $obj1['depart_date']; ?></td>
			        <td><?php echo $obj1['routes_from']; ?></td>
			        <td><?php echo $obj1['routes_to']; ?></td>
			        <td><?php echo $obj1['id_transport']; ?></td>
			        <td><?php echo $obj1['price']; ?></td>
			        <td>
          			<a href="<?php echo base_url(); ?>reserv/reservation/<?php echo $obj1['id']; ?>" class="btn btn-warning">Book</a>
          			</td>
        		</tr>
      		<?php 
    			}
    		?>
		</table>
	</div>	
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
		<h6><a href="index.html"><span>W</span>anderlicious</a></h6>
		<div class="footer-contact-w3ls">
			<ul>
				<li><i class="fa fa-globe" aria-hidden="true"></i>55, 8134 Adliswil, Switzerland</li>
				<li><i class="fa fa-phone" aria-hidden="true"></i>012 345 6789</li>
				<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@example.com">info@wanderlicious.com</a></li>
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
				<a href="#home" class="scroll bt-icon"><i class="fa fa-upload" aria-hidden="true"></i></a>
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