<?php
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    Enter prime number : <input type="text" name="number">
    <input type="submit" name="submit">
    </form>
    <?php

if (isset($_POST['submit'])) {
     $i = $number;
 for ($i=2; $i <=$number; $i++) { 
     $p=0;

     for ($j=2; $j <= $i/2 ; $j++) { 
         if ($i % $j == 0) {
            $p++;
            break;
         }
     }
     if ($p==0) {
         echo "$i is prime number <br/>";
     }
     
 }
 }
 ?>
   
</body>
</html>



