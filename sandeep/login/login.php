<?php 
session_start();

if(isset($_POST['submit'])){

    if($_POST['username'] == ''){
       $errorUser = ' Username Cannot Be Blank ';
       if($_POST['password'] == ''){
           $errorPass = ' Password Cannot Be Blank ';
      }
    }
    
    else{
        if(strlen($_POST['username']  )>10){
            $errorUser = ' Username is Too Long ';
            if(strlen($_POST['password'])> 10 ||strlen( $_POST['password'] < 3)){
                $errorPass = ' Password length Invalid Enter Between 3 & 10 character';
            }
        }
        else if($_POST['username'] != 'sandip' || $_POST['username'] !='1996'){
            $errorUser = ' Username is Wrong ';
            if($_POST['password'] != '123456'){
                $errorPass = ' Password is Wrong ';  
            }
        }
        else if($_POST['username'] == 'sandip' || $_POST['username'] =='1996' && $_POST['password'] == '123456' ){
            $_SESSION['u'] = $_POST['username'] ;
            header("Location: home.php");
        }
        else{
             $errorUser = 'Invalid Username ';
             $errorPass = 'Invalid Password ';
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
    <title>Log-In</title>
    <style>
        table{
            width: 50%;
            margin:auto;
            border-collapse:collapse;
            border:5px solid darkcyan;
            margin-top: 10vh;
        }
      td{
          border: 1px solid darkcyan;
          padding: 15px;
      }
      td input[type = text]{
          margin :0 5px 10px 5px;
          padding:8px;
          border: none;
          border-bottom:  2px solid darkcyan;
          width: 60%;
      }
      td input[type = submit]{
          width: 90px;
          height: 40px;
          background-color: darkcyan;
          color: white;
      }
  
    </style>
</head>
<body>
    <form action="" method="post">
    <table >
        <tr>
            <td colspan="2" style="text-align: center;font-size:2rem;color:teal">LOG IN</td>
        </tr>
        <tr>
            <td >USERNAME :</td>
            <td ><input  type="text" 
            name="username" id="" placeholder="Enter UserID Or Username"> <br>
             <span style="color:red;">
            <?php
                if(isset($errorUser)){
                echo $errorUser ;
            }
            ?></span>
        </td>
        </tr>
        <tr>
            <td>PASSWORD :</td>
            <td ><input  type="text" name="password" id="" placeholder="Enter Password"><br>
            <span style="color:red;">
            <?php
            if(isset($errorPass)){
                echo $errorPass;
            }?></span></td>
        </tr>
        <tr>
            <td style="text-align: center;" colspan="2">
            <input type="submit" name="submit" id="" value="SUBMIT" ></td>
        </tr>
    </table>
    </form>
</body>
</html>