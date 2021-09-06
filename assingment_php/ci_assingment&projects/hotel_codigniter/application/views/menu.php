		<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
					
					<li class="active"><a href="<?php echo base_url();?>">Home</a></li>|

										
					<li class="active dropdown"><a class="dropdown" data-toggle="dropdown" href="<?php echo base_url();?>">Book Hotel<span class="caret"></span>
					<ul class="dropdown-menu">
					<?php
					 foreach($shwcat as $shwcat1)
					 
					 {
					  ?>

					<li><a href=""><?php echo $shwcat1->catname;?></a></li>
					  

					  <?php

					 }

					 ?>
					
					</ul>
					
					</a></li>|

						<li><a href="<?php echo base_url();?>Resturents">Popular Restaurants</a></li>|
						<li><a href="<?php echo base_url();?>Order">Order</a></li>|
						<li><a href="<?php echo base_url();?>Contact">contact</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>

					   <?php
					   if(!$this->session->userdata('custid'))
					   {

                       ?>   
					
                        <li><a href="<?php echo base_url();?>Login">Login</a>  </li> |
						<li><a href="<?php echo base_url();?>Register">Register</a> </li> |
						<li><a href="<?php echo base_url();?>Help">Help</a></li>

                       <?php
					   }
					   else

					   {
						   ?>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b style="color:red; font-size:20px; font-weight:bold">Welcome :<?php echo ucfirst($this->session->userdata("fname"));?> <span class="fa fa-user"></span></b> <span class="caret"></span></a>  
						
						<ul class="dropdown-menu">
						
						
						<li><a href="<?php echo base_url();?>Profile"> <span class="fa fa-user"></span> MyProfile</a></li>

						<li><a href="<?php echo base_url();?>ChangePassword"> <span class="fa fa-lock"></span> ChangePassword</a></li>

						<li><a href="<?php echo base_url();?>Notifications"> <span class="fa fa-bell"></span> Notifications</a></li>

						<li><a href="<?php echo base_url();?>Help"> <span class="fa fa-trash"></span> DeleteAccount</a></li>

						<li><a href="<?php echo base_url();?>Login/Logout"> <span class="fa fa-power-off"></span> Logout</a></li>

						
						</ul>
						</li> |
						<li><a href="<?php echo base_url();?>Login/Logout"><button type="button" class="btn btn-sm btn-danger" style="color:white; font-size:18px">Logout!<span class="fa fa-power-off"></span></button></a> </li> |




                      <?php
					   }
					   ?>

						
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	