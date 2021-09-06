
<!DOCTYPE html>
<html>
<head>
<title>Online Selling Luxury Watches and Branded Watches in Rajkot | Ahmedanbad </title>

<link href="<?php echo $baseurl;?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="<?php echo $baseurl;?>js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="<?php echo $baseurl;?>css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->


<link href="<?php echo $baseurl;?>css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
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

	<div class="about"> 
		<div class="container">
			<div class="about-top grid-1">

           <h3 align="center">Manage Your Profile</h3>
           <hr style="border:solid 2px red">          
          <div class="col-md-4 col-xs-12">
          <div class="jumbotron">
          <?php
           foreach($prof as $prof1)
           {
          
          ?>
          <h3 align="center">Welcome :<?php echo "<b style='color:green'>".ucfirst($_SESSION["fname"]);?></b></h3>
           <hr style="border:solid 2px red">  


           <ul  style="width:200px">
											<li><a href="<?php echo $mainurl;?>ManageProfile"  style="font-size:20px"><h4><span class="fa fa-users"></span> Manage Profile</h4></a></li>
											<li><a href="<?php echo $mainurl;?>Notification"  style="font-size:20px"><h4><span class="fa fa-bell"></span> Notifications</h4></a></li>
											<li><a href="<?php echo $mainurl;?>ChangePassword"  style="font-size:20px"><h4><span class="fa fa-lock"></span> Change Password</h4></a></li>

											<li><a href="<?php echo $mainurl;?>MyOrder"  style="font-size:20px"><h4><span class="fa fa-truck"></span> My Order</h4></a></li>


                                            
											<li><a href="<?php echo $mainurl;?>ManageProfile?del_id=<?php echo $prof1["custid"];?>"  style="font-size:20px" onclick="return confirm('Are You sure to Delete Account ?')"><h4><span class="fa fa-trash"></span> Delete Acount</h4></a></li>
										
                                        
                                            <li class="grid"><a href="<?php echo $mainurl;?>?lg" onclick="return confirm('Are You sure to Logout as Customer ?')"><button type=
						"button" class="btn btn-sm btn-danger" style="width:110px; height:40px; border:none; font-size:17px; margin-top:1%"><span class="fa fa-power-off"></span> Logout</button></a>
						</li>


                                        
                                        </ul>
								



          </div>
          </div>




          <div class="col-md-8 col-xs-12">
          <div class="jumbotron">
         <div class="form-group">
         <form method="post" encytype="multipart/form-data">

          <div class="form-group">
          <label><img src="<?php echo $prof1["photo"];?>" width="100%" height="200px"></label>
          <input type="file" name="img" class="form-control">   
          </div>


          <div class="form-group">
          <label>FirstName</label>
          <input type="text" name="fname" value="<?php echo $prof1["firstname"];?>" class="form-control">   
          </div>

          

          <div class="form-group">
          <label>Lastname</label>
          <input type="text" name="lname" value="<?php echo $prof1["lastname"];?>" class="form-control">   
          </div>

          

          <div class="form-group">
          <label>Email</label>
          <input type="text" name="em" value="<?php echo $prof1["email"];?>" class="form-control">   
          </div>

          

          <div class="form-group">
          <label>Mobile</label>
          <input type="text" name="mob" value="<?php echo $prof1["mobile"];?>" class="form-control">   
          </div>

          

          <div class="form-group">
          <label>Hobby</label>
          Reading : &nbsp;<input type="checkbox" name="chk[]" value="reading" 
          <?php
          $chk=$prof1["hobby"];
          $h=explode(",",$chk);
          if($h[0]=='reading')
          {
              echo "checked='checked'";
          }
          
          
          ?>>

          
          Playing : &nbsp;<input type="checkbox" name="chk[]" value="playing" 
          <?php
          $chk=$prof1["hobby"];
          $h=explode(",",$chk);
          if($h[0]=='playing' || $h[1]=='playing')
          {
              echo "checked='checked'";
          }
          
          
          ?>>   
          </div>


          <div class="form-group">
          <label>Gender</label>
          Male : &nbsp;<input type="radio" name="gender" value="male" 
          <?php
          if($prof1["gender"]=='male')
          {
              echo "checked='checked'";
          }
          
          
          ?>>

          
          Female : &nbsp;<input type="radio" name="gender" value="female"  
          <?php
           if($prof1["gender"]=='female')
          {
              echo "checked='checked'";
          }
          
          
          ?>>   
          </div>



          <div class="form-group">
          <label>PinCode</label>
          <input type="text" name="pin" value="<?php echo $prof1["pincode"];?>" class="form-control">   
          </div>



          <div class="form-group">
          <label>Address</label>
          <textarea name="mob"  class="form-control"><?php echo $prof1["address"];?></textarea>   
          </div>




          <div class="form-group">

          <select name="state" tabindex="4" required class="form-control">
					<option value="">-select state-</option>
					<?php
					foreach($st as $st1)
					{
                        if($prof1["sid"]==$st1["sid"])
                        {
					?>  

					<option value="<?php echo $prof1["sid"];?>" selected="selected"><?php echo $prof1["sname"];?></option>
                   
				   <?php
                    }
                    else
                    {

					?>
                    
					<option value="<?php echo $st1["sid"];?>"><?php echo $st1["sname"];?></option>

                    <?php
                    }
                }
                ?>
				   </select>
          </div>







          
          <div class="form-group">

          <select name="city" tabindex="4" required class="form-control">
					<option value="">-select city-</option>
					<?php
					foreach($ct as $ct1)
					{
                        if($prof1["ctid"]==$ct1["ctid"])
                        {
					?>  

					<option value="<?php echo $prof1["ctid"];?>" selected="selected"><?php echo $prof1["ctname"];?></option>
                   
				   <?php
                    }
                    else
                    {

					?>
                    
					<option value="<?php echo $ct1["ctid"];?>"><?php echo $ct1["ctname"];?></option>

                    <?php
                    }
                }
                ?>
				   </select>
          </div>
          



<div class="form-group">

<input type="submit" name="upd" value="UPDATE!" class="btn btn-lg btn-danger">
</div>

         </form>
         </div>



        
          
    



          </div>
          </div>


<?php
           }
           ?>

            	</div>
		</div>
	</div>
</body>
</html>