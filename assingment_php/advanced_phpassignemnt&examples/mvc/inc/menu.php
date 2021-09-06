<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="memenu skyblue"><li class="active"><a href="<?php echo $mainurl;?>">Home</a></li>
						<li class="grid"><a href="#">Men's Watch</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Men's Watches</h4>
										<ul>
											<?php
											  foreach($subcat as $subcat1)
											  {
												  if($subcat1["Cat_id"]==1)
												  { 
                                              ?>


											<li><a href="<?php echo $mainurl;?>MensProducts?subcattid=<?php echo $subcat1["subcat_id"];?>"><?php echo $subcat1["subcategories"];?></a></li>
											

											<?php

											}
										}
											?>

										</ul>
									</div>
									
								</div>
							</div>
						</li>
						<li class="grid"><a href="#">Women's Watch</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Shop</h4>
										<ul>
										<?php
											  foreach($subcat as $subcat1)
											  {
												  if($subcat1["Cat_id"]==2)
												  { 
                                              ?>


											<li><a href="<?php echo $mainurl;?>MensProducts?cattid=<?php echo $subcat1["Cat_id"];?>"><?php echo $subcat1["subcategories"];?></a></li>
											

											<?php

											}
										}
											?>
										</ul>
									</div>
									
								</div>
							</div>
						</li>
						<li class="grid"><a href="#">Kid's Watch</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Shop</h4>
										<ul>
										<?php
											  foreach($subcat as $subcat1)
											  {
												  if($subcat1["Cat_id"]==3)
												  { 
                                              ?>


											<li><a href="<?php echo $mainurl;?>KidsProducts?subcattid=<?php echo $subcat1["subcat_id"];?>"><?php echo $subcat1["subcategories"];?></a></li>
											

											<?php

											}
										}
											?>
										</ul>
									</div>
									
								</div>
							</div>
						</li>
						<li class="grid"><a href="typo.html">Offer</a>
						</li>

						<?php
						  if(!isset($_SESSION["custid"]))
						  {
						 ?>
                       
						<li class="grid"><a href="<?php echo $mainurl;?>Login">MyAccount</a>

                        <?php
						  }
						  ?>
						  	
						<li class="grid"><a href="<?php echo $mainurl;?>Contact">Contact</a>
						</li>					

						</li>
							
						<?php
						  if(isset($_SESSION["custid"]))
						  {
						 ?>
                       

						<li class="grid"><a href="<?php echo $mainurl;?>?lg" onclick="return confirm('Are You sure to Logout as Customer ?')"><button type=
						"button" class="btn btn-sm btn-danger" style="width:80px; height:35px; border:none; font-size:15px; margin-top:1%"><span class="fa fa-power-off"></span> Logout</button></a>
						</li>



						<?php
						  }
						  ?>

					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 header-right"> 
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	