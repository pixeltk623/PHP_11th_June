<?php 

   if (isset($_POST['count'])) {
       $num1 = $_POST['num1'];
       $num2 = $_POST['num2'];
       $operator = $_POST['operator'];
       $result ='';
       
       switch ($operator) {
           case 'Addition':
               $result = $num1+$num2;
               break;
           case 'Subtraction':
               $result = $num1-$num2;
               break;
           case 'Multiplication':
               $result = $num1*$num2;
               break;
           case 'Division':
               $result = $num1/$num2;
               break;    
       }
   }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculator</title>
    <style type="text/css">
        body{
            background: #fff;
            font-family: sans-serif;      
        }
    </style>
</head>
<body>

    <div class="Calculator">
    <h1 class="title">CALCULATOR</h1>
    <form method="POST">
    <input type="text" name="num1" class="num"  placeholder="Enter the first Number">
    <input type="text" name="num2" class="num"  placeholder="Enter the Second Number">
    <select class="opt" name="operator">
        <option value="Addition">+</option>
        <option value="Subtraction">-</option>
        <option value="Multiplication">*</option>
        <option value="Division">/</option>
    </select>    
    <input type="submit" name="count" value="count" class="button">
</form>
     
     <?php 

        if (isset($_POST['count'])) {


     ?>
     <input type="text" value="<?php echo $result; ?>" class="num">
     <?php }else{ ?>
     <input type="text" value="" class="num">
     <?php
     } 
     ?>


</body>
</html>