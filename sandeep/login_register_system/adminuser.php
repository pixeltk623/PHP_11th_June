<?php
session_start();
include_once 'config.php';

if (isset($_POST['user_id'])) {
    $status = $_POST['status'];
    $user_id = $_POST['user_id'];
    if ($status==1) {
        $queryStatus = "UPDATE users SET is_status = 0 WHERE sr_no=".$user_id;
        echo "new = $user_id " ;
    } else {
        $queryStatus = "UPDATE users SET is_status = 1 WHERE sr_no=".$user_id;
    }
    mysqli_query($conn,$queryStatus);
}

if (isset($_POST['delete'])) {
    
    $user_id = $_POST['user_id'];

    $queryDelete = "DELETE FROM users WHERE sr_no=".$user_id;
    mysqli_query($conn,$queryDelete);
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
            width: 90%;
            border :3px solid #034a96 ;
            border-collapse: collapse;
            margin: auto;
            transform: translate(-1vw,10vh);
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
        #bt1{
          width: 100px;  
          height: 30px;
          background-color: #034a96;
          text-decoration: none;
          transform: none;
          font-size: 15px;
          color: white ;
        }
    </style>
</head>
<body>
<?php
    // $queryCheck = "SELECT * FROM users WHERE  sr_no = ".$_SESSION['user_id'];
    // $resultCheck = mysqli_query($conn, $queryCheck);
    // $userDetails = mysqli_fetch_assoc($resultCheck);
    // // $arrayHobby = explode(",", $userDetails['hobby']);
    // // echo "<pre>";
    // // print_r($arrayHobby);
    // // print_r($userDetails);
        $queryCheck = "SELECT * FROM `users`";
        $resultCheck = mysqli_query($conn,$queryCheck);        
        while ($response[] = mysqli_fetch_assoc($resultCheck)) {}
        // print_r($response);
        $finalData = array_filter($response); 
    
      
    $query1 = "SELECT * FROM admins WHERE  Sr_no =".$_SESSION['admin_id'];
    $result1 = mysqli_query($conn, $query1);
    $adminDetails = mysqli_fetch_assoc($result1);
    // print_r($adminDetails); 
    ?>
     <button><a href="logout.php">LOGOUT</a></button>
        <div class="profile">
         <img src="uploads/36kb.jpg"   width="30" style="border-radius: 50%;margin-right:15px">
        <div class="hero"><?php echo $adminDetails['User_Name'] ?></div>
        </div>

        
    <table>
        <tr><th style="text-align: center;" colspan="5">REGISTERED USERS</th></tr>
        <tr>
            <td>id</td>
            <td>FULL NAME</td>
            <td>USER ID</td>
            <td>PROFILE PHOTO</td>
            <td>ACTION</td>
        </tr>
        <?php
        foreach($finalData as $key => $value){
            ?><tr>
                    <td><?php echo $value['sr_no']; ?></td>
                    <td><?php echo $value['full_name']; ?></td>
                    <td><?php echo $value['username']; ?></td>
                    <td><img src="uploads/<?php echo $value['profile_pic']; ?>" width="80"></td>
                    <form action="" method="post">
                    <td>
                        <!-- <a href="http://">show</a> -->
                        <button id="bt1" ><a style="color: white;" href="ed.php?uid=<?php echo $value['sr_no']; ?>">Edit</a></button>

                        <input type="hidden" name="user_id" value="<?php echo $value['sr_no']; ?>">

                        <?php
                       if($value['is_status'] == 1){
                       ?> <button id="bt1" type="submit" name="status" value="<?php echo $value['is_status']; ?>">Active</button>
                       <?php
                        }    
                       else{
                           ?>
                            <button style="background-color: red;" id="bt1" type="submit" name="status" value="<?php echo $value['is_status']; ?>">Deactivate</button>
                           <?php
                       }
                        ?>
                       <button type="submit" id="bt1" name="delete">Delete</button>
				
                    </td>
                    </form>

            </tr>
            <?php
        }
         ?>


    </table>
   

    </body>
</html>