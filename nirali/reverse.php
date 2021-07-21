<?php
   
   if (isset($_POST['submit'])) {
     $number = $_POST['number'];
 
$rev=0;
        for($i=$number;$i>1;$i=$i/10){
            $r =$i % 10 ;
            $rev=($rev *10 ) + $r;            
        }
        echo " Reversed Number :- ".$rev."</span>";
      }
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <form method="post">
    <label>Enter The Number </label>
    <input type="text" name="number">
    <input type="submit" name="submit" value="submit">

  </form>
 

</body>
</html>