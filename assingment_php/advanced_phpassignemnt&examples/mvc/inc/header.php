<?php
$mainurl="http://localhost/php/mvc/";
$baseurl="http://localhost/php/mvc/assets/";

?>
    
    
    <div class="top-header">
		<div class="container">
			<div class="top-header-main">
				<div class="col-md-6 top-header-left">
					<div class="drop">
						<div class="box">
							<select tabindex="4" class="dropdown drop">
								<option value="" class="label">Dollar :</option>
								<option value="1">Dollar</option>
								<option value="2">Euro</option>
							</select>
						</div>
						<div class="box1">
							<select tabindex="4" class="dropdown">
								<option value="" class="label">English :</option>
								<option value="1">English</option>
								<option value="2">French</option>
								<option value="3">German</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 top-header-left">
				
				<?php

				   if(isset($_SESSION["custid"]))
				   {
				?>



<div class="top-nav">
					<ul class="memenu skyblue">
						<li class="grid"><a href="#" class="active" style="color:white; font-size:20px">Welcome :<?php echo ucfirst($_SESSION["fname"]);?> <span class="fa fa-user"></span> <span class="caret"></span></a>
							<div class="mepanel">
								<div class="row">
									
									
										<ul  style="width:200px">
											<li><a href="<?php echo $mainurl;?>ManageProfile"  style="font-size:20px"><h4><span class="fa fa-users"></span> Manage Profile</h4></a></li>
											<li><a href="<?php echo $mainurl;?>Notification"  style="font-size:20px"><h4><span class="fa fa-bell"></span> Notifications</h4></a></li>
											<li><a href="<?php echo $mainurl;?>ChangePssword"  style="font-size:20px"><h4><span class="fa fa-lock"></span> Change Password</h4></a></li>

											<li><a href="<?php echo $mainurl;?>MyOrder"  style="font-size:20px"><h4><span class="fa fa-truck"></span> My Order</h4></a></li>
										</ul>
								
								
								</div>
							</div>
						</li>

						</ul>

						</div>
			


				<?php
				   }
				   ?>
					<div class="cart box_1">
					
						<a href="<?php echo $mainurl;?>ViewCart">
					
							 <div class="total">
							 
							 <span class="fa fa-shopping-cart" style="font-size:30px"><span class="badge badge-lg" style="background-color:red; color:white" style="font-size:25px">
							 
							 <?php 
								
								echo  $shwtotcart[0]["total"];

                             ?>
							
							
							</span> </span>
							
							</div>
							
						</a>

					

				

					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>


    <div class="logo">
		<a href="<?php echo $mainurl;?>"><h1>Luxury Watches</h1></a>
	</div>
