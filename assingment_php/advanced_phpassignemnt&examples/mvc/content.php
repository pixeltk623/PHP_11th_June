
<!DOCTYPE html>
<html>
<head>
<title>Online Selling Luxury Watches and Branded Watches in Rajkot | Ahmedanbad </title>


<link href="<?php echo $baseurl;?>css/style.css" rel="stylesheet" type="text/css" media="all" />	

<link href="<?php echo $baseurl;?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />


<link href="<?php echo $baseurl;?>css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<link href="<?php echo $baseurl;?>css/memenu.css" rel="stylesheet" type="text/css" media="all" />


<script src="<?php echo $baseurl;?>js/jquery-1.11.0.min.js"></script>
<script src="<?php echo $baseurl;?>js/bootstrap.min.js"></script>
<script src="<?php echo $baseurl;?>js/simpleCart.min.js"> </script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->


<script type="text/javascript" src="<?php echo $baseurl;?>js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="<?php echo $baseurl;?>js/jquery.easydropdown.js"></script>			
</head>
<body> 
	<!--top-header-->
	<!--top-header-->
	<!--start-logo-->
		<!--start-logo-->
	<!--bottom-header-->
	<!--bottom-header-->
	<!--banner-starts-->
			<!--End-slider-script-->

            <!--banner-ends--> 
	<!--Slider-Starts-Here-->
				<script src="<?php echo $baseurl;?>js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
	
	<!--about-starts-->
	<div class="about"> 
		<div class="container">
			<div class="about-top grid-1">
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="<?php echo $baseurl;?>images/abt-1.jpg" alt=""/>
						<figcaption>
							<h2>Nulla maximus nunc</h2>
							<p>In sit amet sapien eros Integer dolore magna aliqua</p>	
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="<?php echo $baseurl;?>images/abt-2.jpg" alt=""/>
						<figcaption>
							<h4>Mauris erat augue</h4>
							<p>In sit amet sapien eros Integer dolore magna aliqua</p>	
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="<?php echo $baseurl;?>images/abt-3.jpg" alt=""/>
						<figcaption>
							<h4>Cras elit mauris</h4>
							<p>In sit amet sapien eros Integer dolore magna aliqua</p>	
						</figcaption>			
					</figure>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--about-end-->
	<!--product-starts-->
	<div class="product"> 
		<div class="container">
			<div class="product-top">
				<div class="product-one">
			
			   
			
			<?php
			 foreach($prod as $prod1)
			 {

             ?>
			
			
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="<?php echo $mainurl;?>ProductsDetails?pid=<?php echo base64_encode($prod1["product_id"]);?>" class="mask"><img class="img-responsive zoom-img" src="admin/<?php echo $prod1["image1"];?>" alt=""  style="width:70%; height:200px" /></a>
							<div class="product-bottom">
								<h3><?php echo $prod1["productname"];?></h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price"><del><?php echo $prod1["oldprice"];?></del> <?php echo $prod1["newprice"];?></span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
			
			
			<?php
			 }
			 ?>
			
			
			
			
			
			
			
					<div class="clearfix"></div>
				</div>					
			</div>
		</div>
	</div>
	<!--product-end-->
	<!--information-starts-->
	
	
	
	
	<!--footer-end-->	
</body>
</html>