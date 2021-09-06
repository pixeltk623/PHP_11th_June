<!DOCTYPE html>
<html>
<head>
<title>Online Selling Luxury Watches and Branded Watches in Rajkot | Ahmedanbad |  View Cart</title>

<link href="<?php echo $baseurl;?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="<?php echo $baseurl;?>js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="<?php echo $baseurl;?>css/style.css" rel="stylesheet" type="text/css" media="all" />	



<link href="<?php echo $baseurl;?>css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
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
	
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu_drop > li > ul'),
	           menu_a  = $('.menu_drop > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>		
</head>
<body> 
	<!--bottom-header-->
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">ViewCart</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">
				<div class="col-md-12 single-main-left">
				
                
                <h3>View Cart  	<a href="<?php echo $mainurl;?>ViewCart">
					
              
                    
                    <span class="fa fa-shopping-cart" style="font-size:30px"><span class="badge badge-lg" style="background-color:red; color:white" style="font-size:25px">
                    
                    <?php 
                       
                       echo  $shwtotcart[0]["total"];

                    ?>
                   
                   
                   </span> </span>
                   
              
                   
               </a></h3>

<table class="table table-stripped" style="width:100%">
  <thead>
    <tr>
      <th>Id</th>
      <th>Items</th>
      <th>Productname</th>
      <th>Qty</th>
      <th>Price</th>
      <th>Subtotal</th>
      <th>Action</th>
      
      
    </tr>
  </thead>


  <?php
 foreach($shwcart as $shwcart1)
 {
     ?>

  <tbody>
    <tr>
      <th><?php echo $shwcart1["cartid"];?></th>
      <td><img src="admin/<?php echo $shwcart1["image1"];?>" style="width:80px; height:80px"></td>
      <td><?php echo $shwcart1["pname"];?></td>
      <td><?php echo $shwcart1["qty"];?></td>

      <td><?php echo $shwcart1["price"];?></td>
      <td><?php echo $shwcart1["subtotal"];?></td>
      <td><a href=""><span class="fa fa-remove" style="color:white; font-size:30px; background-color:red; border-radius:100%; padding:5px"></span></td>
    </tr>
  
    <?php
 }
 ?>

    <tr>
    
    <td scope="row" colspan="8"><h2 align="right" style="color:green">Subtotal : Rs. <?php  echo $subtotal[0]["total"]; ?>-/</td>

     </tr>
    

     <tr>
    
    <td scope="row" colspan="5">
    
    <a href=""><button type="button" class="btn btn-lg btn-success">Continue Shopping >></button></a>

    
    <a href="<?php echo $mainurl;?>Checkout" onclick="return confirm('Wiil Redirect on Checkout Page Are Your Sure ?')"><button type="button" class="btn btn-lg btn-danger pull-right" style="float:right">Checkout Here >></button></a>
    
    </td>

    </tr>
   
  </tbody>
</table>



            </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-single-->
	<!--information-starts-->
	
	<!--footer-end-->	
</body>
</html>