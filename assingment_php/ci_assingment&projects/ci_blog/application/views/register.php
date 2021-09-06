

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Chamapk Guru Blogs Provides all News of web Technology::User registeration</title>
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
    
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
		<li class="breadcrumb-item active">Register</li>
	</ol>
	<!--//banner-->
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
    
         
	<?php if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?>
    
    
    
    
    	<div class="container">
			<h3 class="tittle">Register Now</h3>
				<div class="inner-sec">
			<div class="login p-5 bg-light mx-auto mw-100">
				<form method="post">
						<div class="form-row">
								<div class="col-md-6 mb-3">
										<label for="validationCustom01">First name</label>

									<input type="text" name="fname" class="form-control" id="validationDefault01" placeholder="" required>
								</div>
								<div class="col-md-6 mb-3">
										<label for="validationCustom02">Last name</label>
									<input type="text" name="lname" class="form-control" id="validationDefault02" placeholder="" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
										<label for="exampleInputPassword1 mb-2">Password</label>
									<input type="password" name="pass" class="form-control" id="password1" placeholder="">
								</div>
								<div class="form-group col-md-6">
										<label for="exampleInputPassword2 mb-2">Confirm Password</label>
										<input type="password" class="form-control" name="cpass" id="password2" placeholder="" >
									</div>
								
							</div>
							<input type="submit" name="sub" class="btn btn-primary submit mb-4" value="Submit">
								<p>
									<a href="#">By clicking Signup, I agree to your terms</a>
								</p>
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