<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Chamapk Guru Blogs Provides all News of web Technology::Login User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Weblog a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="<?php echo base_url("assets/user/css/bootstrap.css");?>" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?php echo base_url("assets/user/css/jquery.desoslide.css");?>">
	<link href="<?php echo base_url("assets/user/css/style.css");?>" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url("assets/user/css/fontawesome-all.css");?>" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<!--Header-->

	
	<!--//header-->

	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html">Home</a>
		</li>
		<li class="breadcrumb-item active">Signin</li>
	</ol>
	<!--//banner-->
	<!--/main-->
    
   <?php if ($this->session->flashdata('msg')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('msg') ?> </div>
    <?php } ?>
    
    
    
	<section class="main-content-w3layouts-agileits">
		<div class="container">
				<h3 class="tittle">Sign In Now</h3>
				<div class="row inner-sec">
					<div class="login p-5 bg-light mx-auto mw-100">
					<form  method="post">
							<div class="form-group">
							  <label for="exampleInputEmail1 mb-2">Email address</label>
							  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
							  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1 mb-2">Password</label>
							  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required>
							</div>
							<div class="form-check mb-2">
							  <input type="checkbox" class="form-check-input" id="exampleCheck1">
							  <label class="form-check-label" for="exampleCheck1">Check me out</label>
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
							<p><a href="register.html"> Don't have an account?</a></p>
						  </form>
		</div>
		</div>
	</div>
	</section>
	<!--//main-->
	<!--footer-->
	
	<!---->
	<!-- js -->
	<script src="<?php echo base_url("assets/user/js/jquery.flexisel.js");?>"></script>
	<!-- //password-script -->
	<!--/ start-smoth-scrolling -->
	<script src="<?php echo base_url("assets/user/js/move-top.js");?>"></script>
	<script src="<?php echo base_url("assets/user/js/easing.js");?>"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!--// end-smoth-scrolling -->

	<script>
		$(document).ready(function () {
			
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

	<!-- //Custom-JavaScript-File-Links -->
	<script src="<?php echo base_url("assets/user/js/bootstrap.js");?>"></script>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>

</html>