
<!DOCTYPE HTML>
<html>
<head>
<title>Admin : Gallery : </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url("assets/admin/css/animate.css");?>">
<meta name="keywords" content="  " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){window.scrollTo(0,1); } </script>
<link rel="shortcut icon" href="<?php base_url() ?>assets/admin/images/tour.png">
<!-- Bootstrap Core CSS -->


<link href="<?php echo base_url("assets/admin/css/bootstrap.css");?>" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="<?php echo base_url("assets/admin/css/style.css");?>" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="<?php echo base_url("assets/admin/css/font-awesome.css");?>" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href="<?php echo base_url("assets/admin/css/SidebarNav.min.css");?>" media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
 
<script src="<?php echo base_url("assets/admin/js/jquery-1.11.1.min.js");?>"></script>

<script src="<?php echo base_url("assets/admin/js/modernizr.custom.js");?>"></script>


<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="<?php echo base_url("assets/admin/js/Chart.js");?>"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="<?php echo base_url("assets/admin/js/metisMenu.min.js");?>"></script>
<script src="<?php echo base_url("assets/admin/js/custom.js");?>"></script>
<link href="<?php echo base_url("assets/admin/css/custom.css");?>" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
.gallery{
    overflow: hidden;

}
.gallery img{
    filter: blur(2px);
    transition: 0.5s ease-in;
}
.gallery:hover img{
    filter: blur(0px);
transform: scale(1.2);
transition: 0.5s ease;
}
 
</style>
 
					<link href="<?php echo base_url("assets/admin/css/owl.carousel.css");?>" rel="stylesheet">
					<script src="<?php echo base_url("assets/admin/js/owl.carousel.js");?>"></script>
						<script>
						 
							setTimeout(function() {
								$("#hide").hide("slow");
							}, 3000);
						</script>
					<!-- //requried-jsfiles-for owl -->
</head> 
<body class="cbp-spmenu-push">

	  <div class="container-fluid">
      <div class="row">
	  <br><br>
        <div style="font-size:38px;text-align:center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Gallery</div>
	             
      
        <?php
         if($data >= 0)
         {
        foreach($data as $row)
        {
           

            
         ?>
  
          <div class="col-md-3 gallery" style="  height:210px;margin:0px !important; padding:0px !important">   
            <a href="<?php echo base_url(). "./upload/" .$row->photo;  ?>" download><img src=" <?php echo base_url()?>assets/user/images/download.png" alt=""  width="35px" height="35px" style="position:absolute;z-index:99"></a>      
        <a href="<?php echo base_url(). "./upload/" .$row->photo;  ?>"><img src=" <?php echo base_url(). "./upload/" .$row->photo;  ?>" alt=""  width="100%" height="210px"></a>
           
         </div>
        
         <?php
        
    }
}
else
{
        ?>
        <div class="soory" style="height:200px;width:100%;background:orange"  >
            <h1 class="text-center" style="padding-top:5%;font-size:40px;font-weight:600;letter-spacing:2px;color:white">Sorry No Record Found</h1>
        </div>
        <?php
}
?>
         
        </div>
        </div>
		
    
                 </div>
                 </div>
                 </div>
        
        
        
         
        
	<!-- side nav js -->
	<script src="<?php echo base_url("assets/admin/js/SidebarNav.min.js");?>" type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="<?php echo base_url("assets/admin/js/classie.js");?>"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
 
	<script src="<?php echo base_url("assets/admin/js/scripts.js");?>"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url("assets/admin/js/bootstrap.js");?>"> </script>
   
</body>
</html>