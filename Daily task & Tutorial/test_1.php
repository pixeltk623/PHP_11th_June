<?php
if (isset($_POST['submit'])) {
	 $number = $_POST['number'];
	 $username = $number;
	 $rev=0;
	 while ($number>0) {
	 	$lastdigit = $number%10;
	 	$rev=($rev*10)+$lastdigit;
	 	$number = (int)($number/10);
	 	
	 }
	echo$username;
	echo "<br>";
	echo $rev;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<label>Enter Number</label>
		<input type="text" name="number">
		<input type="submit" name="submit">
	</form>
	

</body>
</html>