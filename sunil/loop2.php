<?php
if(isset($_POST['submit'])){
   $num=$_POST['num'];
   $rev=0;
   while($num>0)
   {
   	$a=$num%10;
   	$rev=($rev*10)+$a;
    $num=(int)($num/10);
   }
   
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post">
		<table border="1">
			<tr>
				<th>Enter any number</th>
				<td><input type="text" name="num"></td>
			</tr>
			<tr>
			    <td style="text-align: center;" colspan="2"><input type="submit" name="submit"></td>
		    </tr>
		</table>
	</form>
	<table border="1">
		<tr>
			<th>Ans IS</th>
			<td><?php echo $rev; ?></td>
		</tr>
	</table>
</body>
</html>