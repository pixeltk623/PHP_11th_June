<?php

$MERCHANT_KEY = "FH2qsrBv";
$SALT = "StCMXYEpZ3";
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://secure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
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



<script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
</head>
<body onLoad="submitPayuForm()"> 
	<!--bottom-header-->
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Checkout</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">



				<div class="col-md-6 col-xs-12">


			<h2>Fill Customer details Here</h2>
			<hr style="border:solid 1px red">
          
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
    
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />

	  <!-- <b>Mandatory Parameters</b>
	  <br><br><br> -->
      <table style="width:80%">
        
        <tr>
          <td>Amount: </td>
          <td><input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" class="form-control" />
		  <br>
		  </td>
		
		  </tr>

		  <tr>

          <td>First Name: </td>
          <td><input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>"  class="form-control"/> <br></td>
        </tr>


        <tr>
          <td>Email: </td>
          <td><input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" class="form-control" /> <br></td>

		  </tr>

		  <tr>
          <td>Phone: </td>
          <td><input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" class="form-control" /> <br></td>
        </tr>


        <tr>
          <td>Product Info: </td>
          <td colspan="3"><textarea name="productinfo" class="form-control"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea> <br></td>
        </tr>


		<tr>
          <!-- <td>Success URI: </td> -->
<td colspan="3"><input type="hidden" name="surl" value="<?php echo $mainurl;?>PaymentSuccess" size="64" /></td>
        </tr>
        <tr>
          <!-- <td>Failure URI: </td> -->
<td colspan="3"><input type="hidden" name="furl" value="<?php echo $mainurl;?>PaymentFailure" size="64" /></td>
        </tr>
        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>


  </table>



				</div>
				

				<div class="col-md-6 col-xs-12">
              
                   
            
			<h2>Checkout Products</h2>
			<hr style="border:solid 1px red">
            

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
    
	<?php if(!$hash) { ?>
    
    <td scope="row" colspan="8">
    
   


	<input type="submit" value="Go For Online Payment  >>"  class="btn btn-block btn-danger" style="height:65px; font-size:21; width:100%" />


    
    </td>

	<?php
	}

	?>

    </tr>



   
  </tbody>
</table>


</form>


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