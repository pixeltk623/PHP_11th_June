<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Blogs::Add blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url("assets/admin/css/bootstrap.css");?>" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="<?php echo base_url("assets/admin/css/style.css");?>" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="<?php echo base_url("assets/admin/css/font-awesome.css");?>" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href="<?php echo base_url("assets/admin/css/SidebarNav.min.css");?>" media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="<?php echo base_url("assets/admin/js/jquery-1.11.1.min.js");?>"></script>
<script src="<?php echo base_url("assets/admin/js/modernizr.custom.js");?>"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="<?php echo base_url("assets/admin/js/metisMenu.min.js");?>"></script>
<script src="<?php echo base_url("assets/admin/js/custom.js");?>"></script>
<link href="<?php echo base_url("assets/admin/css/custom.css");?>" rel="stylesheet");?>">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		
        
        
        
		<!-- //header-ends -->
		<!-- main content start-->
        
       
    
        
        
		<div id="page-wrapper">
         
			<div class="main-page">
				<div class="forms">
               
                 <?php if ($this->session->flashdata('msg1')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('msg1') ?> </div>
    <?php } ?>
    
					<h2 class="title1">Add Blogs</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
                
                
                        
                        
							<h4>Add Blogs :</h4>
						</div>
						<div class="form-body">
                 <?php
     foreach($ed as $ed1)
	 
	 {	 
	 
	 ?>
         
                 
							
 
      	
     <?php echo  form_open('admin/showblog/update');?> 
     
     
        <?php echo  form_hidden("bid",$ed1["bid"]);?> 
     
     
          
    
 
      
   
                            
          <div class="form-group"> 
          <label for="exampleInputEmail1">Enter Title</label> 
                             
         <input type="text" name="title" value="<?php echo $ed1["title"];?>" class="form-control" id="exampleInputEmail1" placeholder="Title"> 
         
         
         </div> 
                             
                             
                             
                             
          <div class="form-group">
                             
           <label for="exampleInputPassword1">Enter descriptions</label>
                             
                             
                             
     <textarea name="desc" class="form-control" id="exampleInputPassword1" placeholder="Descriptions"><?php echo $ed1["descriptions"];?></textarea>
     
      </div> 
      
     
     
 <input type="submit"  name="upd" class="btn btn-danger" value="Update Blogs">
 
 
 
 <?php
	 
	  }
	 
	 ?>
 
 
 
  </form> 
  
  
  
  
						</div>
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
	<script src="<?php echo base_url("assets/admin/js/jquery.nicescroll.js");?>"></script>
	<script src="<?php echo base_url("assets/admin/js/scripts.js");?>"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url("assets/admin/js/bootstrap.js");?>"> </script>
   
</body>
</html>