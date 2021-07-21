<?php 
        
        if (isset($_POST['submit'])) {

                if($_POST['Annual']=='') {
                        $error1 =  "<span style='color:red;'>Error1</span>";
                } else {
                        $Annual = $_POST['Annual'];       
                }

                if ($_POST['Installment']=='') {
                        $error2 = "<span style='color:blue'>Error2</span>";
                } else{
                        $Installment = $_POST['Installment'];
                }
                
                if ($_POST['timing']=='') {
                        $error3 = "<span style='color:black'>Error2</span>";
                } else{
                        $timing = $_POST['timing'];
                }   

                if($_POST['Annual'] != '' && $_POST['Installment'] != '' && $_POST['timing'] != '') {

                        $iAmount = ($Annual * $Installment * $timing)/100;

                        $totalAmount = $Annual + $iAmount;
                }

        }

?>           
        

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title></title>
        <style type="text/css">
                table tr th,td {
                        padding: 15px;
                        text-align: center;
                }
        </style>
</head>
<body>
        <form method="post">
                <label>Annual Amount</label>
                <input type="text" name="Annual">
                <?php 
                        if (isset($error1)) {
                                echo $error1;
                        }
                ?>
        <br><br>

               <label>Installment</label>
                <input type="text" name="Installment">
                <?php 
                        if (isset($error2)) {
                                echo $error2;
                        }
                ?>

        <br><br>

               <label>timing</label>
                <input type="text" name="timing">
                <?php 
                        if (isset($error3)) {
                                echo $error3;
                        }
                ?>
        <br><br>

                <input type="submit" name="submit" value="Interest Calculator">
        </form>

               <?php 

                if (isset($_POST['submit'])) {

                        if($_POST['Annual'] != '' && $_POST['Installment'] != '' && $_POST['timing'] != '') {
        ?>

        <table border="1" style="border-collapse:collapse; width: 50%; margin: auto;">
             <tr>
                <th colspan="2">Interest Calculator</th>
                </tr>
                <tr>
                <th>Interest Amount</th>
                 <td style="color: red;"><?php echo (isset($iAmount)) ? $iAmount : '' ?></td>
                </tr>
                <tr>
                <th>Total Amount</th>
                <td style="color: green;"><?php echo (isset($totalAmount)) ? $totalAmount : '' ?></td>
                </tr>
        </table>
        <?php
                }
        }

        ?>



</body>
</html>