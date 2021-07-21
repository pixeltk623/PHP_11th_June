<?php 
if (isset($_POST['Submit'])) {
   $Name=$_POST['Name'];
   $Bsalary=$_POST['Bsalary'];

   if ($Name!='') {
       if(is_numeric($Name)) {

             $error1 = "<span style='color:red;text-align:center;'><br>Name can not be blank</span>";
        
} else {
            $error1 = "<span style='color:red;'><br>It can not be blank</span>";
        }
}
   if ($Bsalary!='') {
         
         if (is_numeric($Bsalary)) {
            
            if ($Bsalary>=8000) {
               echo $Bsalary;

               /* Earning */

                  $hra = ($Bsalary*25)/100;
                  $sa = ($Bsalary*12)/100;
                  $covid = ($Bsalary*5)/100;
                  $mb = ($Bsalary*10)/100;

            $error2 = "<span style='color:red;text-align:center;'><br>Basic salary can not be blank</span>";
        
} else {
            $error2 = "<span style='color:red;'><br>Basic Salary Must be in Number Form</span>";
        }

 }

            if ($Physics!='') {
            
            if(!is_numeric($Physics)) {

               $error1 = "<span style='color:red;'><br>It Must be in Number Form</span>";
                
            } else {

               if($Physics<=100) {
                  $valid1 = true;

               } else {
                  $error1 = "<span style='color:red;'><br>It Must be in less than 100</span>";
               }

                $valid1 = true;
            }

        } else {
            $error1 = "<span style='color:red;'><br>It can not be blank</span>";
        }


        if ($Chemistry!='') {
            
            if(!is_numeric($Chemistry)) {

               $error2 = "<span style='color:red;'><br>It Must be in Number Form</span>";
                
            } else {

               if($Chemistry<=100) {
                  $valid1 = true;

               } else {
                  $error2 = "<span style='color:red;'><br>It Must be in less than 100</span>";
               }

                $valid2 = true;
            }

        } else {
            $error2 = "<span style='color:red;'><br>It can not be blank</span>";
        }

        if ($Maths!='') {
            
            if(!is_numeric($Maths)) {

               $error3 = "<span style='color:red;'><br>It Must be in Number Form</span>";
                
            } else {

               if($Maths<=100) {
                  $valid3 = true;

               } else {
                  $error3 = "<span style='color:red;'><br>It Must be in less than 100</span>";
               }

                $valid3 = true;
            }

        } else {
            $error3 = "<span style='color:red;'><br>It can not be blank</span>";
        }

        if ($Hindi!='') {
            
            if(!is_numeric($Hindi)) {

               $error4 = "<span style='color:red;'><br>It Must be in Number Form</span>";
                
            } else {

               if($Hindi<=100) {
                  $valid4 = true;

               } else {
                  $error4 = "<span style='color:red;'><br>It Must be in less than 100</span>";
               }

                $valid4 = true;
            }

        } else {
            $error4 = "<span style='color:red;'><br>It can not be blank</span>";
        }

        if ($Sanskrit!='') {
            
            if(!is_numeric($Sanskrit)) {

               $error5 = "<span style='color:red;'><br>It Must be in Number Form</span>";
                
            } else {

               if($Sanskrit<=100) {
                  $valid5 = true;

               } else {
                  $error5 = "<span style='color:red;'><br>It Must be in less than 100</span>";
               }

                $valid5 = true;
            }

        } else {
            $error5 = "<span style='color:red;'><br>It can not be blank</span>";
        }

        if (isset($valid1) && isset($valid2) && isset($valid3) && isset($valid4) && isset($valid5)) {

         $Total = $Physics + $Chemistry + $Maths + $Hindi + $Sanskrit;

         $Average = ($Total)/5;
        }
}

?>

                  echo $earning = $Bsalary + $hra + $sa + $covid + $mb;
                  echo "<br>";

               /* Earning */

               /* Deducation */

                  $pf = ($Bsalary*11)/100;
                  $pt = 200;
                  $esi = ($Bsalary*4)/100;
                  // $mb = ($Bsalary*10)/100;

                  if ($Bsalary>=8000 && $Bsalary <=10000) {
                     $it = ($Bsalary*2)/100;
                  } elseif ($Bsalary>10000 && $Bsalary<=15000) {
                     $it = ($Bsalary*2)/100;
                  } elseif ($Bsalary>15000 && $Bsalary<=20000) {
                     $it = ($Bsalary*3.5)/100;
                  } else if ($Bsalary>20000 && $Bsalary<=30000) {
                     $it = ($Bsalary*4)/100;
                  } else {
                  $it = ($Bsalary*5)/100;          
                  }

                  echo $deducation = $pf + $pt + $esi + $it;
                  echo "<br>";
               /* Deducation */

                  echo $tg = $earning + $deducation;
                  echo "<br>";
                  echo $thomeSalary = $earning - $deducation;
                  echo "<br>";
            } else {

               echo "Basic Salary Must be greater than 8K";
            }
}
 



?><!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title></title>
   <style type="text/css">
      table tr th,td {
         padding: 15px;
      }
      table {
         margin: auto;
      }
   </style>
</head>
<body>
   <form method="post">
   <table border="1" style="border-collapse: collapse; text-align: center;width: 50%;">
      <tr>
         <td colspan="2">Salary Slip</td>
      </tr>
      <tr>
         <td>Name</td>
         <td><input type="text" name="Name">
         <?php 

        if (isset($error1)) {
           echo $error1;
          }
        ?></td>

      </tr>
      <tr>
         <td>Basic Salary</td>
         <td><input type="text" name="Bsalary">
         <?php 

        if (isset($error2)) {
           echo $error2;
          }
        ?></td>
      </tr>
      <tr>
         <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
      </tr>
   </table>
</form>
<?php 

?>

</body>
</html>