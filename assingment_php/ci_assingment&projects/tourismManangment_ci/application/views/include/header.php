<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!-- css inculed -->
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
<!-- css incude///// -->
<script>
$(document).ready(function(){
  $(".slide-toggle").click(function(){
    $(".box").animate({
      width: "toggle"
    });
  });
});

</script>
<style>
.call{
	float: left;
	margin-left:-8%;
	}
 
.box{
        float: left;
		position: absolute;
        overflow: hidden;
        color:#F78536;
		display: none;
		font-weight: 600;
		letter-spacing: 1.5px;
		margin-left:-4%;
    }
	.box-inner{
        width: 250px;
        padding: 6px;

    }

h1 a{
	 animation: mymove 4s infinite;

   }
   @keyframes mymove {
	 0%   {  color: #F78536; transition: 5s ease-in; }
	   50%   {  color:#4d4dff; transition: 5s ease-in;   }
	 100% {  color: #F78536;  transition: 5s ease-out; }
   }
	 .btn2{
		border:none;
		background:none;
		margin:10px;
		transition: 0.5s ease;
	 }
	 .btn2:hover{
		 transform: scale(1.3);
		 transition: 0.5s ease;
	 }
 #login_title{
	 font-size:21px;
	 letter-spacing: 1px;
	 font-weight: 600;
	 font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
	
	 
 }
 #or{
	 position: absolute;
		opacity: 0.5;
		margin-top:-2%;
	 text-decoration: underline;
	 left:31%;
	 font-size: 28px;
	 color: #F78536;
 }
 .col-md-8{
	 margin:0px !important;
	 padding:0px !important;
 }
</style>

<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
				<div class="call">
						<span class="slide-toggle" title="Toll Free"><img src="<?php base_url() ?>assets/user/images/phone.gif" alt="" height="35px" width="35px"></span>	
					</div>  
						  <div class="box">
								<div class="box-inner">Toll Free : 253-2531568</div>
						</div>
						 
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="<?php echo base_url('') ?>"><i class="icon-airplane"></i>TOUR <span style="color:blue"><img src="<?php base_url() ?>assets/user/images/and.png" alt="" height="30px" width="25px"></span> Travel</a></h1>
			 
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="<?php echo base_url('') ?>">Home</a></li>
							<li>
								<a href="<?php echo base_url() ?>TourPackages" class="fh5co-sub-ddown">Tour Packges</a>
								<ul class="fh5co-sub-menu">
 										<li><a href="">Family Package</a></li>
 										<li><a href="<?php echo base_url() ?>TourPackages" class="fh5co-sub-ddown">Tour Packges</a>
										 <ul class="fh5co-sub-menu">
 											<li><a href="">Sub</a></li>
											 <li><a href="">Sub</a></li>			
											 <li><a href="">Sub</a></li>

										 </ul>
										 </li>
										 <li><a href="">Holiday Tour</a></li>
								</ul>
							</li>
							<li><a href="<?php echo base_url() ?>Flights">Flights</a></li>
							<li><a href="<?php echo base_url() ?>Gallery">Gallery</a></li>
							<li><a href="<?php echo base_url() ?>Enquiry">Enquiry</a></li>
							<li><a href="<?php echo base_url() ?>AboutUs">About Us</a></li>
							<li><a href="<?php echo base_url() ?>Contact">Contact US</a></li>
								<li><a href="" data-toggle="modal" data-target="#myModal" title="Login"><img src="<?php base_url() ?>assets/user/images/user.png" alt="" height="40px" width="40px" style="margin-top:-10px"></a></li>  
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- Modal Login-->
 
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">
				<ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">LoGin Now</a>
								      </li>		    	
								   </ul>
				</h4>
      </div>
      <div class="modal-body">
      	<div class="row">
				<div class="col-sm-4" >
	 				 	<p id="login_title">LOGIN WITH</p>
							 	<button type="button" class="btn2"><img src="<?php base_url() ?>assets/user/images/google.png" alt="" height="45px" width="45px"> </button> 
						 	 <button type="button" class="btn2 "><img src="<?php base_url() ?>assets/user/images/facebook.png" alt="" height="45px" width="45px">  </button>
							<div class="nmlog">
								&nbsp;&nbsp;&nbsp;&nbsp;google &nbsp;|&nbsp;&nbsp; facebook
							</div>
					</div>
					<b id="or">OR</b>
				<div class="col-md-8">
								   <!-- Tab panes -->
									<div class="tab-content">
									 <div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
									 
										 <form action="<?php echo base_url('');?>Login" method="post">
										 
											<div class="col-sm-12 mt">
											<div class="input-field">
													<label for="">Email</label>
													<input type="email" class="form-control" name="em1" id="from-place" placeholder="Email Address"/>
													<?php echo form_error('em1', '<p style="color:#ff4d4d;font-weight:600;font-size:12px;position:absolute;  letter-spacing:1px;">', '</p>'); ?>     
												</div>
											</div>
										 
											<div class="col-sm-12 mt">
											<label for="">Password</label>
											<div class="input-group">

													<input type="password" name="pass1" class="form-control" id="pass1" placeholder="Password" aria-label="Amount (rounded to the nearest dollar)">
													<span class="input-group-addon" title="Show Password" style="border-left:1px solid orange"><input type="checkbox" onclick="myFunction1()"></span>
													    
												</div>
												<?php echo form_error('pass1', '<p style="color:#ff4d4d;font-weight:600;font-size:12px;letter-spacing:1px;">', '</p>'); ?> 
											</div>
											<div class="col-sm-6 mt">
											 <input type="checkbox"> Remember Me	
											</div>
											<div class="col-sm-6 mt">
													<a href="">Forgot Password ?</a>	
												</div>
											<div class="col-xs-12">
												<input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
											</div>
										</div>
									 </div>

									 </form>
									</div>

								</div>
							</div>
	 
 
      </div>
      <div class="modal-footer">
       
      </div>
    </div>

  </div>
</div>
