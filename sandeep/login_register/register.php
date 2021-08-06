<?php
$conn = mysqli_connect('localhost','root','','login_system');

if(!isset($conn)){
    echo "not connected"; 
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $fullName  = $_POST['fullname'];
    $Email = $_POST['email'];
    $password = $_POST['password'];
    $cPassword = $_POST['cpassword'];

    $queryCheckEmail = "SELECT * FROM users WHERE  email = '$Email' ";
    $resultQ = mysqli_query($conn,$queryCheckEmail);
    if($resultQ->num_rows>0){
        $errorMail = "Email Exist";
    }else{
    $error1 = true;
    }

    $queryCheckName = "SELECT * FROM users WHERE  username = '$username' ";
    $resultQU = mysqli_query($conn,$queryCheckEmail);
    if($resultQU->num_rows>0){
        $errorUser = "Username Exist";
    }else{
    $error2 = true;
    }


    if(strlen($password)<6){
        $errorPass = "Entered Password is too short";
                if($password != $cPassword){
                    $errorCPass = "Please Enter Same Password";
                }else{
                    $cPassword;
                }
     }
     else{
        $password;
     }

    if(strlen($username)>10) {
        $errorUser = "Name is too long";
        }
    else{
        if (isset($error1) && isset($error2) && !isset($errorCPass) &&!isset($errorPass)) {
            $query =" INSERT INTO users(`full_name`, `username`, `email`, `Password`)
            VALUES('$fullName' ,'$username' ,'$Email','$password')";
        
            $result = mysqli_query($conn,$query);
        
            if ($result) {
                $message = "<h6 style='color: green; text-align: center;margin:0;'>User Registration Done</h6>";
             } else {
                 $message = "<h6 style='color: red; text-align: center;margin:0;'>Something Error</h6>";
            }
        } 
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;padding: 0;box-sizing: border-box;
        }
         table{
            width: 60%;
            border :3px solid cadetblue ;
            border-collapse: collapse;
            margin: auto;
            transform: translateY(2vw);
        }
        td{
            border: 1px solid cadetblue;
            padding: 15px;
            color: cadetblue;
        }
        th{
            text-align: center;
            color: cadetblue;
            padding: 15px;
            font-size: 30px;

        }
        input[type = text],[type =password]{
            width: 35vw;
            padding: 5px;
            margin-bottom: 5px;
        }
        input[type = submit]{
            background-color: cadetblue;
            border: none;
            color: white;
            width: 100px;
            height: 40px;
            text-align: center;

        }
        td a{
            text-decoration: none;
            color: cadetblue;
        }
    </style>
</head>
<body>
    <form method="POST">
        <table>
            <tr>
                <th colspan="2">REGISTER 
                    <?php if(isset($message)){
                        echo $message;
                    }?>
                </th>
            </tr>
            <tr>
                <td>FULL NAME :</td>
                <td><input type="text" name="fullname" id="" placeholder="Enter Full Name" required></td>
            </tr>
            <tr>
                <td>USERNAME :</td>
                <td><input type="text" name="username" id="" placeholder="Enter Username" required><br>
                    <?php
                    if(isset($errorUser)){
                        echo "<span style=color:red>".$errorUser."<?span>";
                    }
                    ?>
            </td>
            </tr>
            <tr>
                <td>EMAIL :</td>
                <td><input type="text" name="email" id="" placeholder="Enter Email" required><br>
                    <?php
                    if(isset($errorMail)){
                        echo "<span style=color:red>".$errorMail."<?span>";
                    }
                    ?>
            </td>
            </tr>          
            <tr>
                <td>PASSWORD :</td>
                <td><input type="text" name="password" id="" placeholder="Enter Password (Lessthan 6 Character)"required><br>
                <?php
                    if(isset($errorPass)){
                        echo "<span style=color:red>".$errorPass."<?span>";
                    }
                    ?>
            
            </td>
            </tr>
            <tr>
                <td>CONFIRM PASSWORD :</td>
                <td><input type="text" name="cpassword" id="" placeholder="Enter Same Password"required><br>
                <?php
                    if(isset($errorCPass)){
                        echo "<span style=color:red>".$errorCPass."<?span>";
                    }
                    ?>

            </td>
            </tr>
            <tr>
                <td   style="text-align: center;padding:8px" colspan="2"><input type="submit" name="submit" id="" VALUE="REGISTER">
            </td>
            </tr>
        </table>
    </form>
</body>
</html>