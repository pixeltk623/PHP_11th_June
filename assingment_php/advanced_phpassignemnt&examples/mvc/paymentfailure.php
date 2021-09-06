
<!DOCTYPE html>
<html>
<head>
<title>Thanks For Payment with Us Your Order Succesfully Shiped Soon >> </title>


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


<div class="clear"></div>
<div class="cnt-bg" style="width:100%; height:auto; float:left; padding:25px">

<div class="wrap">
<!-- <h2 style="font-size:30px; letter-spacing:2px; color:red">Sorry Your Payment are Failed Try Again </h2>  -->
<hr style="border:green solid 3px">

<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];

$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="";

// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
  
       if ($hash != $posted_hash) {
	       echo "<h2 align='center' style='color:red; font-size:30px; background-color:lightgray; padding:15px'>Invalid Transaction. Please try again</h2>";
		   } else {
         echo "<h3>Your order status is ". $status .".</h3>";
         echo "<h4>Your transaction id for this transaction is ".$txnid.". You may try making the payment by clicking the link below.</h4>";
		 } 
?>





<center>
         <a href="<?php echo $mainurl;?>Checkout"><button type="button" class="btn btn-lg btn-danger" style="margin-left:">Try Again For Payment >><span class="fa fa-file-o"></span></button></a>

        </center>

</div>

</div>

</div>
<div>
    <div>
</div>


<div class="clear"></div>
<br>
<br>