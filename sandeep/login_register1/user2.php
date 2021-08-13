<?php
session_start();
include_once 'config.php';

    if(isset($_POST['submit'])){   
            $uname = $_POST['uname'];
            $fullName  = $_POST['fullname'];    
            $Email = $_POST['mail'];
            $mobile = $_POST['mobile'];
            $Password = $_POST['Password'];

            $query = "UPDATE `users` SET `full_name`='$fullName ',`username`='$uname'
            ,`email`='$Email',`mobile`='$mobile',`Password`='$Password'
             WHERE sr_no =".$_SESSION['user_id'];
            
            $result = mysqli_query($conn, $query);
    
            if ($result) {
    
               
                $message = "<h5 style='text-align: center; color: green;margin:0px''>Updated</h5>";
     
            } else {
                $message = "<h5 style='text-align: center; color: red;margin:0px''>Something Error</h5>";
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
            button{
            background-color: white;
            border: none;
            font-size: 20px;
            width: 130px;
            font-weight: 900;
            height: 40px;
            border-radius: 40px;
            transform: translate(80vw,4vh);
        }
        a{
            color: #034a96;
            text-decoration: none;
        }
        body{
            background: -webkit-linear-gradient(left, #0072ff, #8811c5);

        }
         table{
             background-color: white;
            width: 60%;
            border :3px solid #034a96 ;
            border-collapse: collapse;
            margin: auto;
            transform: translate(-1vw,-4vh);
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
        select{
            width: 50%;
        }
        input[type = text],[type =password],[type = number]{
            width: 80%;
            padding: 5px;
            margin-bottom: 5px;
        }
        input[type = radio]{

            margin-right: 10px;
        }
        input[type = checkbox] {
        margin-right: 6px;
        margin-left:60px ;

        
        }
        input[type = submit]{
            background-color: #034a96;
            border: none;
            color: white;
            width: 100px;
            height: 40px;
            text-align: center;

        }
        td a{
            text-decoration: none;
            color: #034a96;
        }
        .profile{
            color: #034a96;
            width: 15vw;
            height: 9vh;
            font-size: 1rem;
            background-color: white;
           padding: 0 3px 0 6px; 
            
            display: inline-flex;
            position: absolute;
            text-align: center;
            align-items: center;
            left: 1vw;
            top: 5vh;
            border-radius: 38px;
            font-weight: 900;
        }
        .hero{
            line-height: 35px;
            color:white;
            width: 11vw;
            height: 8vh;
            margin:auto ;
            background-color: #034a96;
            text-align: center;
            font-weight: 900;
            border-radius: 38px;
        }
        </style>
    </head>
    <body>
    <?php
        $queryCheck = "SELECT * FROM users WHERE  sr_no = ".$_SESSION['user_id'];
        $resultCheck = mysqli_query($conn, $queryCheck);
        $userDetails = mysqli_fetch_assoc($resultCheck);
        // echo "<pre>";
        // print_r($userDetails);
    ?>
        <button><a href="logout.php">LOGOUT</a></button>
        <div class="profile">
        <img src="uploads/<?php echo $userDetails['profile_pic'] ?>"   width="30" style="border-radius: 50%;margin-right:15px">
        <div class="hero"><?php echo $userDetails['username'] ?></div>
        </div>
        
     
   

    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <th colspan="2">PROFILE UPDATE 
                    <?php if(isset($message)){
                        echo $message;
                    }?>
                </th>
            </tr>








            <!-- table comment -->
           <tr>
                <td>FULL NAME :</td>
                <td><input type="text" name="fullname" id="" value="<?php echo $userDetails['full_name'] ?>"></td>
            </tr>
             <tr>
                <td>USERNAME :</td>
                <td><input type="text" name="uname" id="" value="<?php echo $userDetails['username'] ?>"></td>
            </tr> 
              <tr>
                <td>EMAIL :</td>
                <td><input type="email" name="mail" id="" value="<?php echo $userDetails['email'] ?>"></td>
            </tr>
            <tr>
                <td>MOBILE NO.</td>
                <td><input type="number" name="mobile" id="" value="<?php echo $userDetails['mobile'] ?>">
              </tr> 
          
            <tr>
                <td>PASSWORD :</td>
                <td><input type="password" name="Password" id="" value="<?php echo $userDetails['Password'] ?>"></td>
            </tr>
              
                <td   style="text-align: center;padding:8px" colspan="2"><input type="submit" name="submit" id="" VALUE="UPDATE">
            </td>
            </tr>
        </table>
    </form>

</body>
</html>