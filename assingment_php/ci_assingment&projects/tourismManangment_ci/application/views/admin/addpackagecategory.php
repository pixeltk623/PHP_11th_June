
<!DOCTYPE HTML>
<html>
<head>
<title>Admin : Tourism Management : </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url("assets/admin/css/animate.css");?>"
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
 
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->

<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
					<link href="<?php echo base_url("assets/admin/css/owl.carousel.css");?>" rel="stylesheet">
					<script src="<?php echo base_url("assets/admin/js/owl.carousel.js");?>"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});

							setTimeout(function() {
								$("#hide").hide("slow");
							}, 3000);
						</script>
					<!-- //requried-jsfiles-for owl -->
</head> 
<body class="cbp-spmenu-push">
	
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="main-content">
        
        
        
		<!-- //header-ends -->
		<!-- main content start-->
        
       
    
        
        
		<div id="page-wrapper">
         
			<div class="main-page">
				<div class="forms">
               
                 <?php if ($this->session->flashdata('success1')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success1') ?> </div>
    <?php } ?>
    
					<h2 class="title1">Add Sub Package Category</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
                
                
                        
                        
							<h4>Add Package Category :</h4>
						</div>
						<div class="form-body">
               
							<div class="row">
								<div class="col-md-6">
     
    <form method="post" action="<?php echo base_url();?>admin/AddPackageCategory">
           
        
    <div class="form-group">             
           <label for="exampleInputPassword1">Select Sub Package :-</label> <br><br>        
          
        <select name="pcat" id="" class="form-control">
            <option value="">--Select Sub Packge--</option>

            <?php
    foreach($tour_spcategorys as $row)
    {
         
        ?>
        <option value="<?php echo $row->spcid; ?>"><?php echo $row->spcname; ?></option>
        <?php

    }
            ?>
        </select>
       
     <span style="color: red"><?php echo form_error("pcat");?></span>
							
      </div> 
      <br>                   
          <div class="form-group">             
           <label for="exampleInputPassword1">Enter Pacakge Name :-</label> <br><br>        
     <input name="pcname" class="form-control" id="exampleInputPassword1" placeholder=" Package Name">
     <span style="color: red"><?php echo form_error("pcname");?></span>
							
      </div> 
      
     
     <br>
 <input type="submit"  name="addcat" class="btn btn-success" value="Add Package ">
 

 
 
  </form> 
  
	</div>
	<div class="col-md-6">
	<img src="<?php base_url() ?>../assets/admin/images/tour3.jpg" alt="" class="img-responsive" />
    </div>
    
							</div>
  
  
						</div>
					</div>
					
							
							</div>
						</div> 

						
						<div class="panel panel-default">
							<div class="panel-heading text-center" style="font-size:25px">Manage Sub Package Category</div>
							<div class="panel-body">   

  
						 
							</div>
							</div>

						</div>
					</div>
				</div>
			
			</div>
		</div>
		<!--footer-->
		
        
        
        
         
        
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