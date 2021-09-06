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
  <?php
 if(isset($_POST["log"]))


 {
   $em=$_POST['em'];
   
   $p=$_POST['pass'];

   if($em=='bkpandey.pandey@gmail.com' && $p=='b12345')
   {
       echo "<h2 align='center' style='color:green'>Logged in successfully</h2>";
       header("refresh:4,welcome.php");
   }

   else

   {

    echo "<h2 align='center' style='color:red'>Email and password are incorrect</h2>";
    header("refresh:4,login1.php");


   }

 }


   ?>


    <center>

        <h2>Login Here</h2>

        <form method="post">

            Enter email :<input type="email" name='em' placeholder="Email *" required><br><br>
            
            Enter password :<input type="password" name='pass' placeholder="Password *" required><br><br>


            <input type="submit" name="log" value="Login Here >>">


        </form>


    </center>
    
</body>
</html>