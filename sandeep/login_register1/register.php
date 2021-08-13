<?php
include_once 'config.php';

if(isset($_POST['submit'])){
     $username = $_POST['username'];
     $fullName  = $_POST['fullname'];
     $Email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $address = $_POST['address'];
     $dob = $_POST['dob'];
     $city = $_POST['city'];
     $gender = $_POST['gender'];
     $hobby = $_POST['hobby'];
    if(isset($hobby)){
        $hobby =implode(",",$hobby);
    }
      $photo =  $_FILES['photo'];
     $password = $_POST['password'];
     $cPassword = $_POST['cpassword'];
    //--//--//--//--------------
     if(strlen($mobile) != 10){
       $mobileError = "Please Enter 10 Digits Only";
     }
      //--//--//--//--------------
      if($hobby == ''){
         $hobbyError = "Please Choose Atleast One Hobby";
       }
     //--//--//--//--------------
     $date1 = date("y-m-d");
     $diff = date_diff(date_create($dob),date_create(($date1)));
     if(($diff->y) <=18){
         $dobError = "You Are Minor To Register Or Check D.O.B.";
     }
    //--//--//--//--------------
    

    $extension = pathinfo($photo['name'], PATHINFO_EXTENSION);
    if($extension == "png" ||  $extension == "PNG" || $extension == "JPG" ||$extension == "jpg" || $extension == "jpeg"){
        $photoSize = number_format($photo['size']/1024);
        if($photoSize>=10 && $photoSize<=100){
            $photo;
        }else{
            $photoSizeEror = "Photo Size Invalid";
        }
    }else{
        $photoExtensionError = "Invalid Photo Type";
    }


	 $newPhotoName = $username.time().".".$extension;
    
     if (file_exists("uploads/". $newPhotoName)) {
	 		echo "Present";
             $photoExistError= "Please Upload Photo With Another File Name";
	 	} else {
	 		$photo;
	 	}
    //--//--//--//--------------
     $queryCheckEmail = "SELECT * FROM users WHERE  email = '$Email' ";
     $resultQ = mysqli_query($conn,$queryCheckEmail);
     if($resultQ->num_rows>0){
         $errorMail = "Email Exist";
     }else{
     $error1 = true;
     }
     //--//--//--//--------------
     $queryCheckName = "SELECT * FROM users WHERE  username = '$username' ";
     $resultQU = mysqli_query($conn,$queryCheckEmail);
     if($resultQU->num_rows>0){
         $errorUser = "Username Exist";
     }else{
     $error2 = true;
     }
     //--//--//--//--------------

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
    //--//--//--//--------------
     if(strlen($username)>10) {
         $errorUser = "Name is too long";
         }
     else{
         if (isset($error1) && isset($error2) && !isset($mobileError)&& (!isset($photoExtensionError) || !isset($photoSizeEror)) && !isset($photoExistError) && !isset($errorCPass) &&!isset($errorPass) && !isset($dobError) && !isset($hobbyError)) {
             $query =" INSERT INTO users(`full_name`, `username`, `email`, `mobile`, `address`, `gender`, `hobby`, `dob`, `profile_pic`, `city`, `Password`)
             VALUES('$fullName' ,'$username' ,'$Email','$mobile','$address','$gender','$hobby','$dob','$newPhotoName','$city','$password')";        
             $result = mysqli_query($conn,$query);
        
             if ($result) {
                 move_uploaded_file($photo['tmp_name'], "uploads/". $newPhotoName);
                 $_SESSION['Uphoto'] = $photo;
                 $message = "<h6 style='color: green; text-align: center;margin:0;'>User Registration Done</h6>";
                } else {
                  $message = "<h6 style='color: red; text-align: center;margin:0;'>Please Check Credentials</h6>";
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
        body{
            background: -webkit-linear-gradient(left, #0072ff, #8811c5);

        }
         table{
             background-color: white;
            width: 60%;
            border :3px solid #034a96 ;
            border-collapse: collapse;
            margin: auto;
            transform: translate(6vw,2vw);
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
            width: 100%;
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
        .btn{
            color: #034a96;
            width: 21vw;
            height: 10vh;
            font-size: 1rem;
            background-color: white;
           padding: 0 5px 0 10px; 
            
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
            margin:0 0 0 10px ;
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
    <div class="btn">REGISTERS 
        <div class="btn1"><a href="login.php">LOG IN</a></div>
    </div>
    <form method="POST" enctype="multipart/form-data">
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
                <td><input type="text" name="username" id="" placeholder="Enter Username (Less Than 10 character)" required>
                <br><?php
                    if(isset($errorUser)){
                        echo "<span style=color:red>".$errorUser."<?span>";
                    }
                    ?>
                </td>
            </tr> 
             <tr>
                <td>EMAIL :</td>
                <td><input type="email" name="email" id="" placeholder="Enter Email" required>
                <br> <?php
                    if(isset($errorMail)){
                        echo "<span style=color:red>".$errorMail."<?span>";
                    }
                    ?>
            </td>
            </tr>
            <tr>
                <td>MOBILE NO.</td>
                <td><input type="number" name="mobile" id="Mnumber" placeholder="Enter Mobele Number (10-Digits only)" required>
                <br> <?php
                    if(isset($mobileError)){
                        echo "<span style=color:red>".$mobileError."<?span>";
                    }
                    ?>
            </td>
            </tr> 
            <tr>
                <td>GENDER :</td>
                <td style="text-align: center;">
                <input  type="radio" name="gender" value="male" required>MALE
                <input style="margin-left: 70px;" type="radio" name="gender" value="female" required>FEMALE</td>
            </tr>   
            <tr>
                <td>D.O.B.</td>
                <td><input  style="width:100%;" type="date" name="dob" id="dob"  required>
                <br> <?php
                    if(isset($dobError)){
                        echo "<span style=color:red>".$dobError."<?span>";
                    }
                    ?>
            </td>
            </tr>     

            <tr>
                <td>CITY :</td>
                <td><select name="city" id="city"  required>
                    <option value=""></option>
                    <option value="Botad">Botad</option>
                    <option value="Bhavnagar">Bhavnagar</option>
                    <option value="Ahmedabad">Ahmedabad</option>
                    <option value="Vadodra">Vadodra</option>
                </select></td>
            </tr>
            <tr>
                <td>HOBBY :</td>
                <td style="text-align: left;"><input type="checkbox" name="hobby[]" value="football"  >FOOTBALL
                    <input  style="margin-left: 45px;" type="checkbox" name="hobby[]" value="basketball"  >BASKETBALL <br>
                    <input type="checkbox" name="hobby[]" value="cricket"  >CRICKET
                    <input type="checkbox" name="hobby[]" value="walleyball"  >WALLEYBALL
                <br> <?php
                    if(isset($hobbyError)){
                        echo "<span style=color:red;>".$hobbyError."<?span>";
                    }
                    ?>
                </td>
            </tr> 
             <tr>
                <td>ADDRESS :</td>
                <td><textarea style="width: 100%;" name="address" id="address" rows="5" required></textarea ></td>
            </tr>
            <tr>
                <td>PASSPORT PHOTO :</td>
                <td><input type="file" value="" name="photo" required>
                <br> <?php
                    if(isset($photoSizeEror)){
                        echo "<span style=color:red>".$photoSizeEror."<?span>"."<br>";
                    } 

                    if(isset($photoExtensionError)){
                        echo "<span style=color:red>".$photoExtensionError."<?span>"."<br>";
                    } 

                    if(isset($photoExistError)){
                        echo "<span style=color:red>".$photoExistError."<?span>";
                    }
                    ?>
            </td>
            </tr> 
                
             <tr>
                <td>PASSWORD :</td>
                <td><input type="text" name="password" id="" placeholder="Enter Password (Not Lessthan 6 Character)"required><br>
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
                <td   style="text-align: center;padding:8px" colspan="2"><input type="submit" name="submit" id="" VALUE="REGISTER">
                <br><br>
                Already Have an Account ? <b><a href="login.php">LOGIN HERE..</a></b>                
            </td>
            </tr>
        </table>
    </form>
</body>
</html>