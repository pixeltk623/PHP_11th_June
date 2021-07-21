<?php
$num = $_POST['num'];
$sum = 0;
$rem = 0;

 for($i=1; $i<=strlen($num); $i++){
    $rem = $num % 10;
    $sum = $sum + $rem;  
    $num = $num / 10;  
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
    <table border="1" style=" margin: auto; border-collapse: collapse;">
        <tr>
            <td>enter number</td>
            <td><input type="text" name="num"></td>
        </tr>
        <tr>
            <td style=" text-align: center;" colspan="2"><input type="submit" name="SUM"></td>
        </tr>
    </table>
</form>
<br><br>
<table border="1" style="margin: auto; width: 10%; border-collapse: collapse;">
    <tr>
        <th style="color:maroon;">Ans is</th>
        <td style=" color: blueviolet;"><?php echo $sum; ?></td>
    </tr>
    <tr>
        <th>Count Value is</th>
        <td><?php echo $rem; ?></td>
    </tr>
</table>
</body>
</html>