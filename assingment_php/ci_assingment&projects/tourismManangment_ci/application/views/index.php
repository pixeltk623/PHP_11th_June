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
	
		<div class="fh5co-hero">
		
			<div class="fh5co-overlay"></div>
			
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(<?php base_url() ?>assets/user/images/banner.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">
								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Join Now Free</a>
										  
								      </li>
								    	
								   </ul>

								   <!-- Tab panes -->
									<div class="tab-content">
									 <div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
									 
										 <form action="<?php echo base_url('');?>" method="post">
											<div class="col-sm-12 mt">
											<div class="input-field">
													<label for="">Name</label>
													<input type="text" class="form-control" name="name" id="from-place" placeholder="Your Name"/>
													<?php echo form_error('name', '<p style="color:#ff4d4d;font-weight:600;font-size:12px; position:absolute; letter-spacing:1px;">', '</p>'); ?>     
												</div>
											</div>
											<div class="col-sm-12 mt">
											<div class="input-field">
													<label for="">Email</label>
													<input type="email" class="form-control" name="em" id="from-place" placeholder="Email Address"/>
													<?php echo form_error('em', '<p style="color:#ff4d4d;font-weight:600;font-size:12px;position:absolute;  letter-spacing:1px;">', '</p>'); ?>     
												</div>
											</div>
											<div class="col-sm-12 mt">
											<div class="input-field">
													<label for="">Mobile</label>
													<input type="text" class="form-control" name="mob" id="from-place" pattern="[6789][0-9]{9}" placeholder="Mobile Number" maxlength="10"/>
													<?php echo form_error('mob', '<p style="color:#ff4d4d;font-weight:600;font-size:12px; position:absolute; letter-spacing:1px;">', '</p>'); ?>     
												</div>
											</div>
											<div class="col-sm-12 mt">
											<label for="">Password</label>
											<div class="input-group">

													<input type="password" name="pass" class="form-control" id="pass" placeholder="Password" aria-label="Amount (rounded to the nearest dollar)">
													<span class="input-group-addon" title="Show Password" style="border-left:1px solid orange"><input type="checkbox" onclick="myFunction()"></span>
													    
												</div>
												<?php echo form_error('pass', '<p style="color:#ff4d4d;font-weight:600;font-size:12px;letter-spacing:1px;">', '</p>'); ?> 
											</div>
										 
										 
											<div class="col-xs-12">
												<input type="submit" name="join" class="btn btn-primary btn-block" value="Join Now">
											</div>
										</div>
									 </div>

									 </form>
									</div>

								</div>
							</div>
							<div class="desc2 animate-box">
							
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
								<!-- registration succsess message hear -->
								<div class="joinmsg">
								<?php if($this->session->flashdata("success")) { ?> 
								
								<div class="succ" id="succ"><?= $this->session->flashdata('success') ?> </div>
								<?php } ?>
								</div>
								<!-- login msg -->
								<div class="joinmsg">
								<?php if($this->session->flashdata("success11")) { ?> 
								
								<div class="succ" id="succ"><?= $this->session->flashdata('success11') ?><p style="font-size:15px;color:orange">Welome :<?php echo  $this->session->userdata('name'); ?></p> </div>
								
								<?php } ?>
								</div>
								
								<div class="joinmsg">
								<?php if($this->session->flashdata("error11")) { ?> 
								
								<div class="succ" id="succ"><?= $this->session->flashdata('error11') ?> </div>
								<?php } ?>
								</div>
								

									<h2>Exclusive Limited Time Offer</h2>
									<h3>Fly to Hong Kong via Los Angeles, USA</h3>
									<span class="price">$599</span>
									<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Hot Tours</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
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
					<div class="col-md-12 text-center animate-box">
						<p><a href="<?php base_url() ?>TourPackages" class="btn btn-primary btn-outline btn-lg" href="#">See All Offers <i class="icon-arrow-right22"></i></a></p>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-features">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-hotairballoon"></i>
							</span>
							<div class="feature-copy">
								<h3>Family Travel</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-search"></i>
							</span>
							<div class="feature-copy">
								<h3>Travel Plans</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-wallet"></i>
							</span>
							<div class="feature-copy">
								<h3>Honeymoon</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-wine"></i>
							</span>
							<div class="feature-copy">
								<h3>Business Travel</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-genius"></i>
							</span>
							<div class="feature-copy">
								<h3>Solo Travel</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>
					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-chat"></i>
							</span>
							<div class="feature-copy">
								<h3>Explorer</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<div id="fh5co-destination">
			<div class="tour-fluid">
				<div class="row">
					<div class="col-md-12">
						<ul id="fh5co-destination-list" class="animate-box">
							<li class="one-forth text-center" style="background-image: url(<?php base_url() ?>assets/user/images/13.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Los Angeles</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(<?php base_url() ?>assets/user/images/15.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Hongkong</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(<?php base_url() ?>assets/user/images/11.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Italy</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(<?php base_url() ?>assets/user/images/10.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Philippines</h2>
									</div>
								</a>
							</li>

							<li class="one-forth text-center" style="background-image: url(<?php base_url() ?>assets/user/images/9.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Japan</h2>
									</div>
								</a>
							</li>
							<li class="one-half text-center">
								<div class="title-bg">
									<div class="case-studies-summary">
										<h2>Most Popular Destinations</h2>
										<span><a href="#">View All Destinations</a></span>
									</div>
								</div>
							</li>
							<li class="one-forth text-center" style="background-image: url(<?php base_url() ?>assets/user/images/8.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Paris</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(<?php base_url() ?>assets/user/images/7.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Singapore</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(<?php base_url() ?>assets/user/images/6.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Madagascar</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(<?php base_url() ?>assets/user/images/5.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Egypt</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(<?php base_url() ?>assets/user/images/4.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Indonesia</h2>
									</div>
								</a>
							</li>
						</ul>		
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Recent From Blog</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
			</div>
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
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
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