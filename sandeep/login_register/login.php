<?php
    session_start();
   $conn = mysqli_connect('localhost','root','','login_system');
    if(!isset($conn)){
        echo "not connected"; 
    }
    if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password =($_POST['password']);
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

    if($resultCheck->num_rows>0) {
        $password;
    } 
    else {
        $errorPass =  "Wrong Password";
    }
//--------------------------------------------------------
    if(!isset($errorName) && !isset($errorPass) ){
        $_SESSION['username'] = $_POST['username'] ;
        header("Location: user.php");
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
        table{
            width: 50%;
            border :3px solid cadetblue ;
            border-collapse: collapse;
          
            position: absolute;
            top: 20%;
            left: 20%;
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
            width: 80%;
            padding: 5px;
        }
        input[type = submit]{
            background-color: cadetblue;
            border: none;
            color: white;
            width: 80px;
            height: 30px;
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
                <th colspan="2">LOG IN SYSTEM</th>
            </tr>
            <tr>
                <td>username :</td>
                <td><input type="text" name="username" id="" placeholder="Enter Username or Email">
                <br> <?php
                    if(isset($errorName)){
                        echo "<span style=color:red>".$errorName."<?span>";
                    }
                    ?>
            </td>
            </tr>
            <tr>
                <td>password :</td>
                <td><input type="password" name="password" id="" placeholder="Enter Password">
                <br> <?php
                    if(isset($errorPass)){
                        echo "<span style=color:red>".$errorPass."<?span>";
                    }
                    ?>
            </td>
            </tr>
            <tr>
                <td   style="text-align: center;" colspan="2"><input type="submit" name="submit" id=""><br><br><br>
                Do Not Have Account ? <b><a href="register.php">REGISTER HERE..</a></b>
            </td>
            </tr>
           
        </table>
    </form>
</body>
</html>