<?php  
if (isset($_POST['submit'])) {

$number = $_POST['number'];  
$sum=0;
 $rem=0;  
  for ($i =0; $i<=strlen($number);$i++)  
 {  
  $rem=$number%10;  
   $sum = $sum + $rem;  
   $number=$number/10;  
  }  
 echo "Sum of digits  is $sum";
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
