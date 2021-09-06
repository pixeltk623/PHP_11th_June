
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
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip2").click(function(){
    $("#panel").hide();
  });
});
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunction1() {
  var x = document.getElementById("pass1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<style> 
#panel {
  padding: 5px;
  text-align: center;
  background-color: white;
  border: solid 1px #c3c3c3;
}
#flip{
	color:#F78536;
	font-weight:600;
	letter-spacing:1px;
	opacity:0.5;
	cursor: pointer;

}
#flip2{
	color:white;
	background: darkred;
	padding: 3px 7px;
	opacity: 0.7;
	border-radius: 3px;
	font-weight: 600;
	cursor: pointer;
	position: absolute;
	top: 0px;
	right:15px;

}
#flip:hover{
	opacity: 1;
	transition: 0.5s ease;
}
#panel {
  padding: 50px;
  display: none;
}
h1 a{
	 
 
  animation: mymove 4s infinite;
}
@keyframes mymove {
  0%   {  color: #F78536; transition: 5s ease-in  }
	50%   {  color: blue; transition: 5s ease-in  }
  100% {  color: #F78536;  transition: 5s ease-out}
}
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
    /* Add padding and border to inner content
    for better animation effect */
    .box-inner{
        width: 250px;
        padding: 6px;

    }
		#hide{
			position: absolute;
			 width: 100%;
			 padding: 15px;
		}
</style>
<script>
$(document).ready(function(){
  $(".slide-toggle").click(function(){
    $(".box").animate({
      width: "toggle"
    });
  });
});

 
//  msg hide
setTimeout(function() {
            $('#hide').hide('fast');
        }, 4000);

 
</script>
	</head>
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
								<a href="" class="fh5co-sub-ddown">Tour Packges</a>
								<ul class="fh5co-sub-menu">
									<li><a href="<?php echo base_url() ?>Tourpackage">Family Packges</a></li>
									<li><a href="<?php echo base_url() ?>Tourpackage">Night Packges</a></li>
									<li><a href="<?php echo base_url() ?>Tourpackage">Day &amp; Night Packges</a></li>
									<li><a href="<?php echo base_url() ?>Tourpackage">Couple Packges</a></li>
									<li><a href="<?php echo base_url() ?>Tourpackage">Discount Coupan</a></li>
								</ul>
							</li>
							<li><a href="<?php echo base_url() ?>Flights">Flights</a></li>
							<li><a href="<?php echo base_url() ?>Hotels">Hotel</a></li>
			 
							<li><a href="<?php echo base_url() ?>Enquiry">Enquiry</a></li>
							<li><a href="<?php echo base_url() ?>Aboutus">About Us</a></li>
							<li><a href="<?php echo base_url() ?>Contact">Contact US</a></li>
						<!-- <?php
							$sess = $this->session->userdata("em");
        if(empty($sess))
        {
       ?>       -->
       		 <li><a href="" data-toggle="modal" data-target="#myModal" title="Login"><img src="<?php base_url() ?>assets/user/images/user.png" alt="" height="40px" width="40px" style="margin-top:-10px"></a></li>  
 <!-- <?php
 }
 else
 {
?>	 
			<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									 
									<div class="user-name">
										<p><?php  echo $this->session->userdata("em") ?></p>
						 							</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li> 
								<li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li> 
								<li> <a href="<?php base_url()?>Logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
						<?php
 }
 ?> -->
						</ul>
					</nav>
				</div>
			</div>
		</header>
	

<!-- Login Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Join Us Now!!</h4>
      </div>
      <div class="modal-body">
	  <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active" style="width:45%;margin-left:27px;">
								      	<a href="#login" aria-controls="login" role="tab" data-toggle="tab">LoGin</a>
								      </li>
								      <li role="presentation" style="width:45%;margin-right:27px">
								    	   <a href="#register" aria-controls="register" role="tab" data-toggle="tab">ReGister</a>
								      </li>
								      
								   </ul>
								   <div class="tab-content">
									 <div role="tabpanel" class="tab-pane active" id="login">
										<div class="row">
											<form action="<?php base_url('')?>" method="POST">
										<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">Email</label>
													<input type="email" name="em" class="form-control" id="from-place" placeholder="Email Address"/>
													<span style="color: red"><?php echo form_error("em");?></span>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-12 mt">
													<label for="from">Password</label>
													<div class="input-group">
															<input type="password" name="pass" class="form-control" id="pass1" placeholder="Password" aria-label="Amount (rounded to the nearest dollar)">
															<span class="input-group-addon"><input type="checkbox" onclick="myFunction1()"></span>
															
															</div>
															<span style="color: red"><?php echo form_error("pass");?></span>
												</div>
											<div class="col-xxs-12 col-xs-6 mt">
												 <input type="checkbox" name="rem" id="re">&nbsp;<label for="re"> Remember Me</label>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												 <span id="flip" style="margin-left:10%;">Forget Password ?</span>
											</div>
											<div class="col-xs-12">
												<div id="panel">
													<span id="flip2">X</span>
														<div class="input-field">
															<label for="from">Register Email Address:</label>
															<input type="email" name="fem" class="form-control" id="from-place" placeholder="Email Address"/>
														 
													</div><br>
													<div class="col-xs-12">
														<input type="submit" class="btn btn-primary btn-block" name="frg" value="SuBmit">
													</div>
												</div>
											</div><br>
											<div class="col-xs-12">
												<input type="submit" name="log" class="btn btn-primary btn-block" value="LoGin">
											</div>
										</div>
									 </div>
<!-- register model -->
									 <div role="tabpanel" class="tab-pane" id="register">
									 	<div class="row">
										 <div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">First Name</label>
													<input type="text" name="fname" class="form-control" id="from-place" placeholder="First Name"  >
													<span style="color: red"><?php echo form_error("fname");?></span>
												</div>

											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Last Name</label>
													<input type="text" name="lname" class="form-control" id="to-place" placeholder="Last Name">
													<span style="color: red"><?php echo form_error("lname");?></span>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">Email </label>
													<input type="email" name="em1" class="form-control" id="from-place" placeholder="Email Address"  >
													<span style="color: red"><?php echo form_error("em1");?></span>
												</div>
											</div>
										 
											<div class="col-xxs-12 col-xs-12 mt">
														<label for="from">Mobile Number</label>
														<div class="input-group">
																<input type="text" name="mob1" pattern="[789][0-9]{9}" maxlength="10" class="form-control" id="mob1" placeholder="Mobile Number 10 Digit" aria-label="" require="">
																<span class="input-group-addon" style="background-color:#F78536;color:white;letter-spacing: 1px;cursor: pointer"><label for="mob1" style="cursor: pointer">Send OTP</label></span>
																
																</div>
																<span style="color: red"><?php echo form_error("mob1");?></span>
													</div>
												<div class="col-xxs-12 col-xs-12 mt">
														<label for="from">Password</label>
														<div class="input-group">
																<input type="password" name="pass1" class="form-control" id="pass" placeholder="Password" aria-label="Amount (rounded to the nearest dollar)">
																<span class="input-group-addon"><input type="checkbox" onclick="myFunction()"></span>
																
																</div>
																<span style="color: red"><?php echo form_error("pass1");?></span>
													</div>
										 	
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">Address</label>
													<textarea name="add" class="form-control" id="from-place" placeholder="Address"></textarea>
												</div>
												<span style="color: red"><?php echo form_error("add");?></span>
											</div>
											 
											 
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" name="reg" value="ReGister">
											</div>
										</div>
									 </div>
									</form>
									 
										</div>
									 </div>
									</div>

								</div>
							</div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>
