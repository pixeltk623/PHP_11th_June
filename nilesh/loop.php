<?php
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    $maths = $_POST['maths'];
    $submit = $_POST['submit'];
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
        <input type="text" name="maths" placeholder="Sum">
        Enter number: <input type="text" name="number">
        <input type="submit" name="submit" value="calculate">
    </form>
    <br><br>
    <?php
   if (isset($_POST['submit'])) {
      switch ($_POST['maths']) {
          case '1':
              $sum = 0;
              $i=1;
              while ($i<=$number) {
                
                  $sum=$sum+$i;
                  $i++;
              }
              echo "<span style='color:red'>Your sum of number is : ".$sum."</span>";
              break;
          
              case '2':
                  $count = 0;
                  while ($number!=0) {
                    $number =round($number/10);
                    $count++;
                  }
                  echo "<span style='color:red'>Your count of number is : ".$count."</span>";
                  break;
               case '3':
                      $rev=0;
                while ($number>1) {
                    $r = $number%10;
                   $rev = ($rev*10)+$r;
                   $number = $number/10;
                }
                echo "<span style='color:red'>Your reverse of number is : ".$rev."</span>";
    break;
                 
          default:
          echo "<span style='color:red'>Invalid number</span>";
              break;
      }
    }
    ?>
</body>
</html>