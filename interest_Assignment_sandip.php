<?php 

    if (isset($_POST['submit'])) {
        
        $principal = $_POST['principal'];
        $roi = $_POST['roi'];
        $time = $_POST['time'];

        if ($principal!='') {
            
            if(!is_numeric($principal)) {
                $error1 = "<span style='color:red;'>Principal Must be in number form</span>";
            } else {
                $valid1 = true;
            }

        } else {
            $error1 = "<span style='color:red;'>Principal can not be blank</span>";
        }

        if ($roi!='') {
            
            if(!is_numeric($roi)) {
                $error2 = "<span style='color:red;'>ROI Must be in number form</span>";
            } else {
                $valid2 = true;
            }

        } else {
            $error2 = "<span style='color:red;'>ROI can not be blank</span>";
        }



        if ($time!='') {
            
            if(!is_numeric($time)) {
                $error3 = "<span style='color:red;'>Time Must be in number form</span>";
            } else {
                $valid3 = true;
            }

        } else {
            $error3 = "<span style='color:red;'>Time can not be blank</span>";
        }

        if(isset($valid1) && isset($valid2) && isset($valid3)) {
            $amount =  ( $principal * $time * $roi  ) / ((100) * (12));
            $total =  $amount  + $principal;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interest Calculator</title>
    <style>
        span{
            color:red;

        }
        table{
            width:40vw;
            margin:auto;
            border-collapse:collapse;
            border:3px solid blue;
        }
        table td{
            padding :10px;
            border:1px solid black;
            
        }
    </style>
</head>
<body>
<br>
    <form method="post">
       <table> 
       <tr>
        <td style="text-align:center;font-size:25px" colspan="2">Interest Calculator</td>
       </tr>
        <tr>
            <td>Principle Value:</td>
            <td> <input type="text" name="principal" placeholder="Enter in Rupees" >
                <?php 
                    if (isset($error1)) {
                        echo $error1;
                    }
                ?>
           </td> 
        </tr>
       <tr>
            <td>Rate Of Interest:</td>
            <td><input type="text" name="roi" placeholder="Enter in Percentage">
             <?php 
                    if (isset($error2)) {
                        echo $error2;
                    }
                ?>
            </td> 
            
       </tr>
       <tr>
            <td>Tenure:</td>
            <td><input type="text" name="time" placeholder="Enter in Month">
                 <?php 
                    if (isset($error3)) {
                        echo $error3;
                    }
                ?>
            </td> 
       </tr>
           
       <tr><td style="text-align:center" colspan="2"><input type="submit" name="submit"></td>
       </tr>
    </table> 
    </form>
 <br><br>

    <?php 

        if (isset($valid1) && isset($valid2) && isset($valid3)) {
            ?>

    <table style="width:30vw">
        <tr>
            <td style="text-align:center;" colspan="2">Your Interest Summery</td>
        </tr>
        <tr>
            <td>Your  Amount :</td>
            <td><?php echo (isset($principal)) ? number_format((float)$principal, 2, '.', '') : ''; ?></td>
        </tr>
        <tr>
            <td>Your Rate Of Interest</td>
            <td><?php echo (isset($roi)) ? number_format((float)$roi, 2, '.', '') : '' ?></td>
        </tr>
        <tr>
            <td>Tenuree</td>
            <td><?php echo (isset($time)) ? $time : '';?></td>
        </tr>


            <tr>
                <td>interest :</td>
                <td> <?php echo (isset($amount)) ? number_format((float)$amount, 2, '.', '') :  ''; ?> </td>
            </tr>

            <tr>
            <td>total :</td>
            <td><?php echo (isset($total)) ? number_format((float)$total, 2, '.', '') : ''; ?></td>
            </tr>
        </table>
        <?php
        }

    ?> 

</body>
</html>