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
				<div class="row"><br><br>
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box" style="left:15%;">
						<h3 >Hot Tours</h3>
					</div>
				</div><br><br>
				<div class="row">
                <?php 
                 
                for($i=0;$i<=12;$i++)
                {
                    ?>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="<?php base_url() ?>assets/user/images/14.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>New York</h3>
								<span>3 nights + Flight 5*Hotel</span>
								<span class="price">$1,000</span>
								<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
                    <?php
                }
                ?>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="<?php base_url() ?>assets/user/images/14.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Philippines</h3>
								<span>4 nights + Flight 5*Hotel</span>
								<span class="price">$1,000</span>
								<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="<?php base_url() ?>assets/user/images/15.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Hongkong</h3>
								<span>2 nights + Flight 4*Hotel</span>
								<span class="price">$1,000</span>
								<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
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