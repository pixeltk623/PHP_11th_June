<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        .error
        {
            color: red;
        }
    </style>
</head>
<body>

    <?php
    //defaine variables to empty values
    //error_reporting(0);
    $nameErr=$emailErr=$mobileErr=$genderErr=$websiteErr=$agreeErr="";
    $name=$email=$mobile=$gender=$website=$agree="";

    //input fields validation


    if($_SERVER["REQUEST_METHOD"]=='POST')

    {
      
        //string validation

        //name validation

        if(empty($_POST["name"]))
        {


          $nameErr="Name is Required";

        }
        else
        {

            $name=input_data($_POST["name"]);

          //check if name only contains letteres and whitespace

          if(!preg_match("/^[a-zA-Z]*$/",$name))
          {

            $nameErr="Only alphabetic and white space are allowed";
          }

        }


        //email vlidations


        if(empty($_POST["email"]))
        {
          $emailErr="Email is Required";

        }


        else

        {
          $email=input_data($_POST["email"]);

          //check email accept in valid format

          if(!filter_var($email,FILTER_VALIDATE_EMAIL))
          {

            $emailErr="Invalid Email Address correct with valid email";

          }

        }



         //mobile validation

         if(empty($_POST["mobileno"]))
         {
           $mobileErr="Mobile is Required";

         }
         else
         {

           $mobile=input_data($_POST["mobileno"]);
           //check if name only contains letteres and whitespace
 
           if(!preg_match("/^[0-9]*$/",$mobile))
           {
 
             $mobileErr="Only 10 digit mobile number are accepted";
           }
 
         }


         //website validations

         if(empty($_POST["website"]))
         {
           $websiteErr="";
         }

         else
         {
           $website=input_data($_POST["website"]);
           
           //check if URL address is valid
 
           if(!preg_match("%^(?:(?:https?|ftp)://)(?:\S+(?::\S*)?@|\d{1,3}(?:\.\d{1,3}){3}|(?:(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)(?:\.(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)*(?:\.[a-z\x{00a1}-\x{ffff}]{2,6}))(?::\d+)?(?:[^\s]*)?$%iu",$website))
           {
 
             $websiteErr="Invalid URL";

           }
 
         }


         if(empty($_POST["gender"]))
         {
 
           $genderErr="Gender is required";
           //check if name only contains letteres and whitespace
           
         }

         else
           
           {
 
             $gender=input_data($_POST["gender"]);
           }
 
        


         if(empty($_POST["agree"]))
         {
 
           $agreeErr="Accepted Terms and Services before submit";
           //check if name only contains letteres and whitespace
           
         }

         else
           
           {
 
             $agree=input_data($_POST["agree"]);
           }
 
        }



        function input_data($data)

        {

           $data=trim($data);
           $data=stripslashes($data);
           $data=htmlspecialchars($data);
           return $data;

        }



    ?>
    <center>
        <h2 align="center">Registration Form *</h2>

        <span class="error">* Required Field</span>

        <form method="post" name="frm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <label>Name *</label>
        <input type="text" name="name">

        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>

        
        <label>Email *</label>
        <input type="text" name="email">
        
        <span class="error">* <?php echo $emailErr;?></span>

        <br><br>

        
        <label>Mobile No *</label>
        <input type="text" name="mobileno">
        
        <span class="error">* <?php echo $mobileErr;?></span>

        <br><br>


        
        <label>Website *</label>
        <input type="text" name="website">
        
        <span class="error">* <?php echo $websiteErr;?></span>

        <br><br>


        <label>Gender *</label>
        <input type="radio" name="gender" value="male">Male
        
        <input type="radio" name="gender" value="female">Female
        
        <input type="radio" name="gender" value="other">Other

        
        <span class="error">* <?php echo $genderErr;?></span>

        <br><br>
        
        <label>Agree to Terms of Service *</label>
        <input type="checkbox" name="agree">

        
        <span class="error">* <?php echo $agreeErr;?></span>

        <br><br>

        
        <input type="submit" name="submit" value="Submit">

        <br><br>

        
        </form>
    </center>
    


  <?php
  //form submit

  if(isset($_POST["submit"]))

  {
    
    if($nameErr=="" && $emailErr=="" && $mobileErr=="" && $genderErr=="" && $websiteErr=="" && $agreeErr=="")

    {
            
        echo  "<h3 align='center' style='color:green'>You are Succefully Registered with Us</h3>";
           
        echo "<h3>Your Input  :</h3>";
        echo "Name : ".$name;
        echo "<br>";
        echo "Email : ".$email;
        echo "<br>";
        echo "MobileNo : ".$mobile;
        echo "<br>";
        echo "Gender : ".$gender;
        echo "<br>";
        echo "Website : ".$website;
        echo "<br>";
      
    }


    else

    {

        echo "<h3 align='center' style='color:red'>You did not filled up the form Correctly</h3>";
    }
    


  }


  ?>




</body>
</html>
