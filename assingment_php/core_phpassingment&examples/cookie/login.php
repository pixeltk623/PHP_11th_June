<?php
error_reporting(0);
session_start();
if(isset($_POST["log"]))
{
    $em=$_POST["em"];
    $pass=$_POST["pass"];

    if($em=='brijesh@gmail.com' && $pass=='b12345')
    {
        if($_POST["ch"]==true)
        {
            
        setcookie("em",$em,time()+60*60*24);
        
        setcookie("pass",$pass,time()+60*60*24);

        $_SESSION["em"]=$_POST["em"];
        
        echo "<h3 align='center' style='color:green'>You are Logged In Successfully</h3>";
        header("refresh:4,welcome.php");
      

        }

    }

    else

    {

        
        echo "<h3 align='center' style='color:red'>Your Email and password are Incorect try again!</h3>";
        header("refresh:4,login.php");
    }


}




?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body bgcolor="orange">


    <center>
        <h3>Login Form</h3>
<form method="post">

        Enter Email :<input type="text" name="em" value="<?php if($_COOKIE["em"]){echo $_COOKIE["em"];}?>" placeholder="Email *" required><br><br>    

        Enter Password :<input type="password" name="pass" value="<?php if($_COOKIE["pass"]){echo $_COOKIE["pass"];}?>" placeholder="Password *" required><br><br>
         <b>Remember Me :<input type="checkbox" name="ch"></b><br><br>
    <input type="submit" name="log" value="Login>>"><br><br>
    </center>
</form>
</body>
</html>