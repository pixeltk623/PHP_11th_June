<?php 

      if (isset($_POST['submit'])) {

        if($_POST['principle']=='') {
                        $error1 =  "<span style='color:red;'>Error1</span>";
                } else {
                        $principle = $_POST['principle'];       
                }

                if ($_POST['annual']=='') {
                        $error2 = "<span style='color:blue'>Error2</span>";
                } else{
                        $Annual = $_POST['annual'];
                }
                
                if ($_POST['Time']=='') {
                        $error3 = "<span style='color:black'>Error2</span>";
                } else{
                        $Time = $_POST['Time'];
                }   

                if($_POST['principle'] != '' && $_POST['annual'] != '' && $_POST['Time'] != '') {

                        $iAmount = ($principle * $Annual * $Time)/100;

                        $totalAmount = $principle + $iAmount;
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
                    }
                form{
                        text-align: center;
                        padding-top: 50px;


                }    
        </style>
</head>
<body>
       <form method="POST">
         <label>principle Amount,p</label>
         <input type="text" name="principle">
         <?php 
                        if (isset($error1)) {
                                echo $error1;
                        }
                ?>
        <br><br>
          
          <label>Annual Rate,r</label> 
          <input type="text" style="width:40px;height: 30px;" name="annual"> <label>%</label>  
           <?php 
                        if (isset($error2)) {
                                echo $error2;
                        }
                ?>   
        <br><br>
        
          <label>Time,t</label>
          <input type="text" style="width: 40px;height: 20px;" name="Time"></b>
          <label>Yrs +</label>
          <input type="text" style="width: 40px;height: 20px;" name="Yrs">
          <label>Mo +</label>
          <input type="text" style="width: 40px;height: 20px;" name="Mo">
          <label>Days</label>
          <?php 
                        if (isset($error3)) {
                                echo $error3;
                        }
                ?> 
        

      <br><br>
        
        <input type="submit" name="submit" value="CALCULATE INTEREST">

        <br><br>
        

         <?php 

                if (isset($_POST['submit'])) {

                        if($_POST['principle'] != '' && $_POST['annual'] != '' && $_POST['Time'] != '') {       
        ?>

        <table border="1" style="border-collapse:collapse; width: 50%; margin: auto;">
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