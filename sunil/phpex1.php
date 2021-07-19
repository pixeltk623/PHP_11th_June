<?php
      if (isset($_POST['submit']))
      {
      	$principle = $_POST['Principle'];
      	$roi = $_POST['roi'];
      	$time = $_POST['time'];
        $submit = $_POST['submit'];
      
      
      	$iamount = ($principle* $roi * $time)/100;
      	$total = ($principle + $iamount);

      }
      
      if(isset($submit)){
      	if($principle== ''){
      		$error1 = '';
      	}
      }

       if(isset($submit)){
      	if($roi== ''){
      		$error2='';
      	}
      }

       if(isset($submit)){
      	if($time== ''){
      		$error3='';
      	}
      }
    
  ?>
    

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		td{
			padding: 20px;
		}
	</style>
</head>
<body>
<form method="post">
	<table border="1" style="border-collapse: collapse; width: 50%; margin: auto; padding: 10px;">
     <tr>
	<th><label>principle amount</label></th>
	<td><input type="text" name="Principle">
	<span style=" color: red; padding-left: 50px;"><?php if(isset($error1)){
		echo $error1="Principle Can Not Define";
	} ?></span></td>
</tr>
	
    <tr>
	<th><label>ROI</label></th>
	<td><input type="text" name="roi">
	<span style="color: red; padding-left: 50px;">
	<?php 
		if(isset($error2)){
			echo $error2="Roi Can Not Define";
		}
	 ?>
	</span></td>
</tr>
	
    <tr>
	<th><label>Time</label></th>
	<td><input type="text" name="time">
	<span style="color: red; padding-left: 50px;">
		<?php if(isset($error3)){
			echo $error3="Time Can Not Define";
		} ?>
	</span></td>
	
    <tr>
	<td colspan="3" style="text-align: center;"><input type="submit" name="submit" value="Calculate"></td>
</tr>
</table>
</form>

<?php 

		if (isset($_POST['submit'])) {
	?>

	<table border="1" style="border-collapse:collapse; width: 50%; margin: auto; padding: 50px;">
		<tr>
			<th colspan="2">ROI Amount</th>
		</tr>
		<tr>
			<th>I Amount</th>
			<td style="color: red;"><?php echo (isset($iamount)) ? $iamount : '' ?></td>
		</tr>
		<tr>
			<th>Total Amount</th>
			<td style="color: green;"><?php echo (isset($total)) ? $total : '' ?></td>
		</tr>
	</table>
	<?php
		}

	?>
</body>
</html>