
<!DOCTYPE html>
<html>
<head>
<title>Food Template | Home</title>
<link href="<?php echo base_url();?>assets/user/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url();?>assets/user/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/user/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<script src="<?php echo base_url();?>assets/user/js/jquery.js"></script>

<script src="<?php echo base_url();?>assets/user/js/wow.min.js"></script>
<link href="<?php echo base_url();?>assets/user/css/animate.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>assets/user/css/font-awesome.min.css" rel='stylesheet' type='text/css' />

<script>
	new WOW().init();
</script>
<script src="<?php echo base_url();?>assets/user/js/simpleCart.min.js"> </script>	
<script type="text/javascript" src="<?php echo base_url();?>assets/user/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/user/js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
</head>
<body>
    <!-- header-section-starts -->
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">


		<div class="ordering-section" id="Order">
			<div class="container">
				<div class="ordering-section-head text-center wow bounceInRight" data-wow-delay="0.4s">
					<h3>Manage Your Profile</h3>
					<div class="dotted-line">
						<h4>Manage Profile </h4>
					</div>
				</div>
				<div class="ordering-section-grids">
					<div class="col-md-4">
					
					  <div class="jumbotron" style="background-color:gray" id="sidebar">
                      <ul>

                      <b style="color:red; font-size:25px; font-weight:bold">Welcome :<?php echo ucfirst($this->session->userdata("fname"));?> <span class="fa fa-user"></span></b>
                      <hr style="border:solid red 2px">
    <li><a href="<?php echo base_url();?>Profile"> <span class="fa fa-user"></span> MyProfile</a></li>

<li><a href="<?php echo base_url();?>ChangePassword"> <span class="fa fa-lock"></span> ChangePassword</a></li>

<li><a href="<?php echo base_url();?>Notifications"> <span class="fa fa-bell"></span> Notifications</a></li>

<!-- 
<li><?php #echo anchor(base_url("Profile/delete/".$shw->custid),"Delete Account");?></li> -->

<li><a href="<?php echo base_url()."Profile/Delete/$shw->custid" ?>" onclick="return confirm('Are Youn sure to Delete Account ?')"> <span class="fa fa-trash"></span> DeleteAccount</a></li>

<li><a href="<?php echo base_url();?>Login/Logout"> <span class="fa fa-power-off"></span> Logout</a></li>

                      </ul>





                      </div>
                    
                    
                    	</div>
					</div>
					<div class="col-md-8">
						
						
                <div class="jumbotron" style="background-color:gray; height:750px">



				<form method="post" action="<?php echo base_url();?>Profile/upload_data" enctype="multipart/form-data"> 
			         

					 <?php  form_hidden("custid",$shw->custid);?>
      
			<div class="col-md-12 col-xs-12">
					<h3 style="color:white">Update Your Profile</h3>

					<div class="form-group">
						<span style="color:white; font-size:90px"><img src="<?php echo $shw->photo;?>" style="width:90%; height:200px"></span>
						<input type="file" name="img"   style="border:solid 1px gray" class="form-control"> 
					 </div>
					

					 <div class="form-group">
						<span>First Name<label>*</label></span>
						<input type="text" name="fname"  value="<?php echo $shw->firstname;?>" placeholder="Firstname" style="border:solid 1px gray" class="form-control"> 
					 </div>
					 <div class="form-group">
						<span>Last Name<label>*</label></span>
						<input type="text" name="lname" value="<?php echo $shw->lastname;?>" placeholder="Enter Lastname *" style="border:solid 1px gray" class="form-control">
					 </div>
					 <div class="form-group">
						 <span>Email Address<label>*</label></span>
						 <input type="text" name="em" value="<?php echo $shw->email;?>" placeholder="Email *" style="border:solid 1px gray" class="form-control">
					 

					 </div>



					 <div class="form-group">
						 <span>Gender<label>*</label></span>
						 Male :<input type="radio" name="gender" value="male"  style="border:solid 1px gray" <?php if($shw->gender["male"]){
							 echo "checked='checked'";
						 }   ?>>
					 
						 FeMale :<input type="radio" name="gender" value="female"  style="border:solid 1px gray" <?php if($shw->gender["female"]){
							 echo "checked='checked'";
						 }   ?>>
					 
					 </div>




					 <div class="form-group">
						 <span>Hobbies <label>*</label></span>
						 Reading :<input type="checkbox" name="chk[]" value="reading"  style="border:solid 1px gray"  
						 
						 <?php 
						 $chk=$shw->hobby;
						 $h=explode(",",$chk);
						 if($h[0]=='reading')
						 {
							 echo "checked='checked'";
						 }
						 ?>>
					 
						 Writing :<input type="checkbox" name="chk[]" value="writing"  style="border:solid 1px gray" <?php 
						 $chk=$shw->hobby;
						 $h=explode(",",$chk);
						 if($h[0]=='writing' || $h[1]=='writing')
						 {
							 echo "checked='checked'";
						 }
						 ?>>
					 
					 </div>


					 
					 <div class="form-group">
						 <span>Enter Country<label>*</label></span>
						 <input type="text" name="country" placeholder="country" class="form-control" value="<?php echo $shw->cname;?>">
                          
					 </div>

					 <br>


					 

					 <div class="clearfix"> </div>				
				<div class="clearfix"> </div>
				
				<div class="register-but">
					   <input type="submit" name="upd" value="Update >>" class="btn btn-lg btn-success">

				   </form>
				</div>
		


</div>
				
                
                
                
                
                <div class="clearfix"></div>
				</div>
			</div>
		</div>
								<div class="clearfix"></div>
								</div>
					    </li>
					 </ul>
				 <script type="text/javascript">
					$(window).load(function() {
						
						$("#flexiselDemo3").flexisel({
							visibleItems: 3,
							animationSpeed: 1000,
							autoPlay: false,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				    </script>
				    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
				</div>
			</div>
		</div>
		</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-section-ends -->
	<!-- footer-section-starts -->






	<!-- footer-section-ends -->
	  <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>