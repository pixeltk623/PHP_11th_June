<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>

<html class="no-js"> 
	<head>
	<link rel="shortcut icon" href="<?php base_url() ?>assets/user/images/fav.png">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php base_url() ?>assets/user/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php base_url() ?>assets/user/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php base_url() ?>assets/user/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?php base_url() ?>assets/user/css/superfish.css" >
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php base_url() ?>assets/user/css/magnific-popup.css" >
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php base_url() ?>assets/user/css/bootstrap-datepicker.min.css" >
	<!-- CS Select -->
	<link rel="stylesheet" href="<?php base_url() ?>assets/user/css/cs-select.css" >
	<link rel="stylesheet" href="<?php base_url() ?>assets/user/css/cs-skin-border.css" >
	
	<link rel="stylesheet" href="<?php base_url() ?>assets/user/css/style.css" >

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<!-- Modernizr JS -->
	<script src="<?php base_url() ?>assets/user/js/modernizr-2.6.2.min.js" ></script>
	<script>
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

setTimeout(function()  {
	$("#succ").hide("fast")
}, 5000);
</script>

<style>
select{
	background: rgba(0, 0, 0, 0.05) !important;
 font-size:14px;
 letter-spacing:1px;
 font-weight:600;
 color:#F78536 !important;
}
select option { color: orange; }
 
 .err12{
 margin-top:-19%;
 padding:0px !important;
 width:70%;
 margin-left:32.5%;
 }
 .succ{
	 height:150px;
	 width:100%;
	 background:lightgreen;
	 color:white;
	 padding:45px 20px;
	 font-size:32px;
	 /* position:absolute; */
	 margin-top:-17%;
	 margin-left:-9%;

 }
</style>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
 

		<!-- end:header-top -->
	  
	 

	 
			<div class="container">
				<div class="row">
                <br><br>
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box" style="left:15%;">
						<h3>Recent From Blog</h3>
					 
					</div>
				</div>
			</div>
            <br><br>
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="<?php base_url() ?>assets/user/images/1.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">30% Discount to Travel All Around the World</a></h3>
									<span class="posted_by">Sep. 15th</span>
									<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p><a href="#">Learn More...</a></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="<?php base_url() ?>assets/user/images/2.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">Planning for Vacation</a></h3>
									<span class="posted_by">Sep. 15th</span>
									<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p><a href="#">Learn More...</a></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="<?php base_url() ?>assets/user/images/1.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">Visit Tokyo Japan</a></h3>
									<span class="posted_by">Sep. 15th</span>
									<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p><a href="#">Learn More...</a></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-md-block"></div>
				</div>

				<div class="col-md-12 text-center animate-box">
					<p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Post <i class="icon-arrow-right22"></i></a></p>
				</div>

			</div>
		</div>
		<!-- fh5co-blog-section -->
		<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="left:15%">
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					</div>
					
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, Founder <a href="#">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
 
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="<?php base_url() ?>assets/user/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php base_url() ?>assets/user/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php base_url() ?>assets/user/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php base_url() ?>assets/user/js/jquery.waypoints.min.js"></script>
	<script src="<?php base_url() ?>assets/user/js/sticky.js"></script>

	<!-- Stellar -->
	<script src="<?php base_url() ?>assets/user/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="<?php base_url() ?>assets/user/js/hoverIntent.js"></script>
	<script src="<?php base_url() ?>assets/user/js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php base_url() ?>assets/user/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php base_url() ?>assets/user/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="<?php base_url() ?>assets/user/js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="<?php base_url() ?>assets/user/js/classie.js"></script>
	<script src="<?php base_url() ?>assets/user/js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="<?php base_url() ?>assets/user/js/main.js"></script>

	</body>
</html>