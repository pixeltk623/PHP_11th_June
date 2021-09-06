
<!DOCTYPE html>
<html>
<head>
<title>Food  Template | Contact </title>


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
<script src="<?php echo base_url();?>assets/user/js/wow.min.js"></script>
<link href="<?php echo base_url();?>assets/user/css/animate.css" rel='stylesheet' type='text/css' />
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

<style>
       

	   .error

	   {
		   color:red;
		   font-size:18px;
	   }

		</style>
</head>



<body>
   <!-- header-section-ends -->
	<div class="contact-section-page">
		<div class="contact-head">
		    <div class="container">
				<h3>Contact</h3>
				<p>Home/Contact</p>
			</div>
		</div>
		<div class="contact_top">
			 		<div class="container">
			 			<div class="col-md-6 contact_left wow fadeInRight" data-wow-delay="0.4s">
			 				<h4>Contact Form</h4>
			 				<p>Contact Form fill all details</p>

							 
<br><br>
	<?php
		  if($this->session->flashdata('success'))
		  {

          ?>


<center>
<div class="alert alert-success" role="alert" style="width:100%; height:auto; font-size:22px">
  <strong>Congartulations !</strong> 

  <?= $this->session->flashdata('success');?>
  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
			   
			

			</center>
			<?php
			  }
			  
			 ?>
							  <form method="post" action="<?php echo base_url("Contact");?>">
								 <div class="form_details">
					                 <input type="text" name="name" class="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">

									 <span><?php echo form_error('name','<div class="error">', '</div>');?>   </span>

									 <input type="text"  name="em" class="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">

									 <span><?php echo form_error('em','<div class="error">', '</div>');?>   </span>


									 <input type="text"  name="sub" class="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
									 <span><?php echo form_error('sub','<div class="error">', '</div>');?>   </span>


									 <textarea  name="msg"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}"></textarea>

									 <span><?php echo form_error('msg','<div class="error">', '</div>');?>   </span>


									 <div class="clearfix"> </div>
									 <div class="sub-button wow swing animated" data-wow-delay= "0.4s">
									 	<input name="submit" name="sub" type="submit" value="Send message">
									 </div>
						          </div>
						       </form>
					        </div>
					        <div class="col-md-6 company-right wow fadeInLeft" data-wow-delay="0.4s">
					        	<div class="contact-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578265.0941403757!2d-98.9828708842255!3d39.41170802696131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1407515822047"> </iframe>
		</div>
      
	  <div class="company-right">
					        	<div class="company_ad">
							     		<h3>Contact Info</h3>
							     		<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit velit justo.</span>
			      						<address>
											 <p>email:<a href="mailto:info@example.com">info@display.com</a></p>
											 <p>phone:  +255 55 55 777</p>
									   		<p>28-7-169, 2nd Ave South</p>
									   		<p>Saskabush, SK   S7M 1T6</p>
									 	 	
							   			</address>
							   		</div>
									</div>	
									<div class="follow-us">
										<h3>follow us on</h3>
										<a href="#"><i class="facebook"></i></a>
										<a href="#"><i class="twitter"></i></a>
										<a href="#"><i class="google-pluse"></i></a>
									</div>
			
							
							 </div>
						</div>
					</div>

	</div>
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