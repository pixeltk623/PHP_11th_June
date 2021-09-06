

<!DOCTYPE html>
<html>
<head>

<title>Online Selling Luxury Watches and Branded Watches in Rajkot | Ahmedanbad | Register</title>

<link href="<?php echo $baseurl;?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="<?php echo $baseurl;?>js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="<?php echo $baseurl;?>css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="<?php echo $baseurl;?>js/simpleCart.min.js"> </script>
<link href="<?php echo $baseurl;?>css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo $baseurl;?>js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="<?php echo $baseurl;?>js/jquery.easydropdown.js"></script>	

</head>
<body> 
	<!--bottom-header-->
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Register</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--register-starts-->
	<div class="register">
		<div class="container">
			<div class="register-top heading">
				<h2>REGISTER</h2>
			</div>

			<div class="jumbotron">

			<form method="post" enctype="multipart/form-data">

			<div class="register-main">
				<div class="col-md-6 account-left">
				
				<input placeholder="First name" type="file" name="img" tabindex="1" required><br>
					<input placeholder="First name" type="text" name="fname" tabindex="1" required>
						<input placeholder="Last name" type="text" name="lname" tabindex="2" required>
						<input placeholder="Email address" type="text" name="em" tabindex="3" required>
						<input placeholder="Mobile" type="text" name="mob" tabindex="3" required>

						<ul>
							<li><label class="radio left"><input type="checkbox" name="chk[]" checked="" value="reading"><i></i> Rading</label></li>
							<li><label class="radio"><input type="checkbox" name="chk[]" value="playing"><i></i> Playing</label></li>
							<div class="clearfix"></div>
						</ul>

						<ul>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<li><label class="radio left"><input type="radio" name="gender" checked="" value="male"><i></i>Male</label></li>
							<li><label class="radio"><input type="radio" name="gender" value="female"><i></i>Female</label></li>
							<div class="clearfix"></div>
						</ul>
				</div>
				<div class="col-md-6 account-left">
					<input placeholder="Password" type="password" name="pass" tabindex="4" required>
						<input placeholder="Retype password" type="password" name="cpass" tabindex="4" required>
				</div>

				<div class="col-md-6 account-left">
					<input placeholder="pincode" type="text" name="pin" tabindex="4" required>
						
						<textarea placeholder="Enter Address"  name="address" tabindex="4" required row="5" cols="54"></textarea><br><br>
				</div>
				<br><br>


				<div class="col-md-6 account-left">
					<select   name="state" tabindex="4" required class="form-control" style="width:91%">
					<option value="">-select state-</option>
					<?php
					foreach($st as $st1)
					{
					?>  

					<option value="<?php echo $st1["sid"];?>"><?php echo $st1["sname"];?></option>
                   
				   <?php
					}

					?>
				   </select>
                  <br>



				   <select name="city" tabindex="4" required class="form-control" style="width:91%">
					<option value="">-select city-</option>
					<?php
					foreach($ct as $ct1)
					{
					?>
					<option value="<?php echo $ct1["ctid"];?>"><?php echo $ct1["ctname"];?></option>
                   
				     <?php
					}

					?>
				   </select>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="address submit">
							<input type="submit" name="sub" value="Submit">
						</div>
		</div>
		</div>
	</div>
	<!--register-end-->
	<!--information-starts-->
	
	<!--footer-end-->	
</body>
</html>