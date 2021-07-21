<?php

if (isset($_POST['submit'])) {

 $number =$_POST['number'];	
 $username = $number;
 $rev = 0;
 while ($number>0) {
 	$lastDigit =$number%10; // 
 	$rev = ($rev*10)+$lastDigit;
 	$number = (int)($number/10);
 }
echo "original number is =  <b> $username </b> <br/>  Reverse of number is = <b> $rev </b>";
}

 ?>
</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post">
		<label>Enter Number</label>
		<input type="text" name="number">
		<input type="submit" name="submit">	
	</form>

</body>
</html>


