<?php 

      if (isset($_POST['submit'])) {
           
         $start = 0;
         $end = 0;

         $sum = 0;

         for ($i = $start; $i<= $end; $i++) {
                     $sum += $i;
      }

          echo "Sum from " . $start . " to " . $end . " = " . $sum; 
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
    <input type="text" name="start" placeholder="start">
    <input type="text" name="End" placeholder="End">
    <input type="submit" name="submit" value="submit">

  </form>

</body>
</html>