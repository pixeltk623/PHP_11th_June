<?php
if(isset($_POST["sub"]))

{
  $pname=$_POST["pname"];
  
  $yname=$_POST["yname"];
  
  $rname=$_POST["rname"];

  $si=$pname*$yname*$rname/100;

  echo "<h2 align='center' style='color:blue'>Simple Interest is :$si</h2>";
  

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Find Simple Interes proggrame Si=P*N*R/100</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="icon" href="images/favicon.png" type="text/images">

</head>
<body>

    <center>

        <h3>Check Simple Interest</h3>
        <hr style="border:2px solid red">

        <form method="POST">
          
            Enter a Principle Ammount :<input type="text" name="pname" placeholder="Principle ammount" required><br><br>

            Enter Number of years :<input type="text" name="yname" placeholder="Years *" required><br><br>

            Enter a rate of Interest :<input type="text" name="rname" placeholder="Principle ammount" required><br><br>

            <input type="submit" name="sub" value="Submit"><br><br>


        </form>

    </center>
    
</body>
</html>