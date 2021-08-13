<?php
    session_start();
    include_once 'config.php';
   
    if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password =$_POST['password'];
//--------------------------------------------------------

    $queryu = "SELECT * FROM users WHERE username  = '$username' ";
    $result1 = mysqli_query($conn, $queryu);

    $queryE = "SELECT * FROM users WHERE email  = '$username' ";
    $result2 = mysqli_query($conn, $queryE);

    if (  $result1->num_rows>0 || $result2->num_rows>0  ){
        $username;
    }else {
            $errorName =  "Wrong userid";
    }
//--------------------------------------------------------
    $queryCheck = "SELECT * FROM users WHERE  password = '$password'";
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
        // $_SESSION['user_id'] = $userDetails['sr_no'];
        $_SESSION['user_id'] = $userDetails['sr_no'];
        $_SESSION['is_login'] = true;

        header("Location: user2.php");
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
            width: 21vw;
            height: 10vh;
            font-size: 1rem;
            background-color: white;
            font-weight: 900;
            display: inline-flex;
            position: absolute;
            text-align: center;
            align-items: center;
            left: 1vw;
            top: 5vh;
            border-radius: 38px;
        }
        .btn1{
            width: 13vw;
            height: 8vh;
            line-height: 35px;
            margin: 0 12px 0 5px;
            background-color: #034a96;
            text-align: center;
            font-weight: 900;
            border-radius: 38px;
        }
        a{
            font-size: 1.3rem;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
<!-- <div class="btn">
        <div class="btn1"><a href="register.php">REGISTER</a></div>LOGIN
    </div> -->
    <form method="POST">
        <table>
            <tr>
                <th colspan="2">LOG IN SYSTEM</th>
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
                <td style="text-align: center;" colspan="2"><input type="submit" name="submit" value="LOG IN" id=""><br><br><br>
                Do Not Have Account ? <b><a href="register.php">REGISTER HERE..</a></b>
            </td>
            </tr>
           
        </table>
    </form>
</body>
</html>