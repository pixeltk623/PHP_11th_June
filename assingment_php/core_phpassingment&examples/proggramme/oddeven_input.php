<?php
if(isset($_POST["sub"]))
{
$num=$_POST["num"];

if($num%2==0)
{

    echo "<h3 align='center' style='color:green'>Number is :Even</h3>";

}

else

{

    echo "<h3 align='center' style='color:red'>Number is :Odd</h3>";


}

}





?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <center>
     <h3>Odd or Even number</h3>

     <form method="POST">

      Enter a Number :<input type="text" name="num" placeholder="Enter Number" required><br><br>

      <input type="submit" name="sub" value="Check >>">


     </form>


    </center>
    
</body>
</html>