<?php 
	
	if (isset($_POST['submit'])) {
		
		$principle = $_POST['Principle'];
		$roi = $_POST['roi'];
		$time = $_POST['time'];

		$iAmount = ($principle * $roi * $time)/100;

		$totalAmount = $principle + $iAmount;

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
		<br><br>
		<label>ROI</label>
		<input type="text" name="roi">
		<br><br>

		<label>Time</label>
		<input type="text" name="time">
		<br><br>

		<input type="submit" name="submit" value="Calculate">
	</form>

	<?php 

		if (isset($_POST['submit'])) {
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

	?>
</body>
</html>