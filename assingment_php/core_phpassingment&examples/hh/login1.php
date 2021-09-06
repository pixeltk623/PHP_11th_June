<?php
#header("location)
#header("refresh")
#header("content-type)

if(isset($_POST["log"]))
{
  
    $em=$_POST["em"];
    
    $pass=$_POST["pass"];


    if($em=='b@gmail.com' && $pass=='b12345')
    {

          
        echo "<h3 align='center' style='color:green'>Login Succefully</h2>";
        header("refresh:4,welcome.php");


    }


    else


    {

        echo "<h3 align='center' style='color:red'>Email and password are incoret</h2>";
        header("refresh:4,login1.php");



    }
}



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login here</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<center>
    <h2>Login form</h2>
    <form method="POST">
         Enter email :<input type="text" name="em" placeholder="Email *" required><br><br>
         
         Enter email :<input type="password" name="pass" placeholder="Password *" required><br><br>
         
         <input type="submit" name="log" value="Login"><br><br>
    </form>
    </center>
</body>
</html>