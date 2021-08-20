<?php
    session_start();
    include_once 'config.php';
   
    if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password =$_POST['password'];
//--------------------------------------------------------

    $queryu = "SELECT * FROM admins WHERE User_Name  = '$username' ";
    $result1 = mysqli_query($conn, $queryu);

    $queryE = "SELECT * FROM admins WHERE Email  = '$username' ";
    $result2 = mysqli_query($conn, $queryE);

    if (  $result1->num_rows>0 || $result2->num_rows>0  ){
        $username;
    }else {
            $errorName =  "Wrong userid";
    }
//--------------------------------------------------------
    $queryCheck = "SELECT * FROM admins WHERE  password = '$password'";
    $resultCheck = mysqli_query($conn, $queryCheck);
	$userDetails = mysqli_fetch_assoc($resultCheck);
    
   
    if($resultCheck->num_rows>0) {
        $password;
    } 
    else {
        $errorPass =  "Wrong Password";
    }
//--------------------------------------------------------
    if(!isset($errorName) && !isset($errorPass) ){
        $_SESSION['admin_id'] = $userDetails['Sr_no'];
       
        $_SESSION['is_login'] = true;

        header("Location: adminuser.php");
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
        body{
            background: -webkit-linear-gradient(left, #0072ff, #8811c5);

        }
         table{
             background-color: white;
            width: 50%;
            border :3px solid #034a96 ;
            border-collapse: collapse;
            position: absolute;
            top: 20%;
            left: 25%;
        }
        td{
            border: 1px solid #034a96;
            padding: 15px;
            color: #034a96;
        }
        th{
            text-align: center;
            color: #034a96;
            padding: 15px;
            font-size: 30px;
        }
        
        input[type = text],[type =password]{
            width: 80%;
            padding: 5px;
        }
        input[type = submit]{
            background-color: #034a96;
            border: none;
            color: white;
            width: 80px;
            height: 30px;
            text-align: center;
        }
        td a{
            text-decoration: none;
            color: #034a96;
        }

        .btn{
            color: #034a96;
            width: 19vw;
            height: 10vh;
            font-size: 1.2rem;
            background-color: white;
            padding: 0 0px 0 25px; 
            display: inline-flex;
            position: absolute;
            text-align: center;
            align-items: center;
            left: 1vw;
            top: 5vh;
            border-radius: 38px;
            font-weight: 900;
        }
        .btn1{
            line-height: 35px;
            width: 11vw;
            height: 8vh;
            margin:0 0 0 15px ;
            background-color: #034a96;
            text-align: center;
            font-weight: 900;
            border-radius: 38px;
        }
        a{
            font-size: 1.5rem;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="btn">ADMIN 
        <div class="btn1"><a href="login.php">USERS</a></div>
    </div>
    <form method="POST">
        <table>
            <tr>
                <th colspan="2">LOG IN ADMIN</th>
            </tr>
            <tr>
                <td>username :</td>
                <td><input type="text" name="username" id="" placeholder="Enter Username or Email" required>
                <br> <?php
                    if(isset($errorName)){
                        echo "<span style=color:red>".$errorName."<?span>";
                    }
                    ?>
            </td>
            </tr>
            <tr>
                <td>password :</td>
                <td><input type="password" name="password" id="" placeholder="Enter Password" required>
                <br> <?php
                    if(isset($errorPass)){
                        echo "<span style=color:red>".$errorPass."<?span>";
                    }
                    ?>
            </td>
            </tr>
            <tr>
                <td style="text-align: center;" colspan="2"><input type="submit" name="submit" value="LOG IN" id="">
            </td>
            </tr>
           
        </table>
    </form>
</body>
</html>