<?php 
	
	if (isset($_POST['submit'])) {
		
		if($_POST['Principle']=='') {
				$error1 =  "<span style='color:red;'>Error1</span>";
		} else {
			$principle = $_POST['Principle'];	
		}


		if($_POST['roi']=='') {
				$error2 =  "<span style='color:red;'>Error2</span>";
		} else {
			$roi = $_POST['roi'];	
		}


		if($_POST['time']=='') {
				$error3 =  "<span style='color:red;'>Error3</span>";
		} else {
			$time = $_POST['time'];	
		}
		

		if($_POST['Principle'] != '' && $_POST['roi'] != '' && $_POST['time'] != '') {

			$iAmount = ($principle * $roi * $time)/100;

			$totalAmount = $principle + $iAmount;
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		table tr th,td {
			padding: 15px;
		}
	</style>
</head>
<body>

	<form method="post">
		<label>Principle Amount</label>
		<input type="text" name="Principle">
		<?php 
			if (isset($error1)) {
				echo $error1;
			}
		?>
		<br><br>
		<label>ROI</label>
		<input type="text" name="roi">
		<?php 
			if (isset($error2)) {
				echo $error2;
			}
		?>
		<br><br>

		<label>Time</label>
		<input type="text" name="time">
		<?php 
			if (isset($error3)) {
				echo $error3;
			}
		?>
		<br><br>

		<input type="submit" name="submit" value="Calculate">
	</form>

	<?php 

		if (isset($_POST['submit'])) {

			if($_POST['Principle'] != '' && $_POST['roi'] != '' && $_POST['time'] != '') {
	?>

	<table border="1" style="border-collapse:collapse; width: 50%; margin: auto;">
		<tr>
			<th colspan="2">ROI Calculator</th>
		</tr>
		<tr>
			<th>I Amount</th>
			<td style="color: red;"><?php echo (isset($iAmount)) ? $iAmount : '' ?></td>
		</tr>
		<tr>
			<th>Total Amount</th>
			<td style="color: green;"><?php echo (isset($totalAmount)) ? $totalAmount : '' ?></td>
		</tr>
	</table>
	<?php
		}
	}

	?>
</body>
</html>