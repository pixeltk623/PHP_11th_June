<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $salary = $_POST['salary'];
    $submit = $_POST['submit'];
}
if (isset($submit)) {
    if ($name == '') {
        $error1 = 'Name can not be blank';
    }
    elseif (is_numeric($name)) {
        $error1 = "Name must be in letters";
    }
    elseif  (strlen($name) < 10) {
        $error1 = "Name must be 10 char long";
    }


    if ($salary == '') {
        $error2 = 'Salary can not be blank';
    }
    elseif ($salary<8000) {
        $error2 = 'Salary must be greter than 8k';
    }
    
    elseif ($salary<=0) {
        $error2 = 'Salary can not be zero or minus';
    }


    if (isset($error1)) {
        $error1;
    } 
     elseif (isset($error2)) {
        $error2;
    }

else {
    if (isset($submit)) {
        $hra = ($salary * 8)/100;
       $sa = ($salary * 4)/100;
       $covida = ($salary * 4) / 100;
       $mbonus = ($salary * 3.5) / 100;

    $earning = $salary + $hra + $sa + $covida+ $mbonus;
    $pf = ($salary * 10) / 100;
    $pt = ($salary * 6.5) / 100;
    $esic = ($salary * 10) / 100;

    if (isset($submit)) {

        if ($salary>=8000 && $salary<=10000) {
            $it = ($salary * 5)/100;
        }
        elseif ($salary>=10000 && $salary<=15000) {
            $it = ($salary * 6)/100;
        }
        elseif ($salary>=15000 && $salary<=25000) {
            $it = ($salary * 7.5)/100;
        }
        elseif ($salary>=25000 && $salary<=35000) {
            $it = ($salary * 8.5)/100;
        }
        else {
           $it = ($salary * 10)/100;
        }
        $deductions = $pf+$it+$esic+$pt;
        $gross = $earning+$deductions;
        $net = $earning - $deductions;
        
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
    <title>Salary Slip</title>
</head>
<style>
    table{
        border-collapse: collapse;
        /* border: 1px solid black; */
        margin: auto;
        width: 50%;
    }
    table td{
        padding: 5px;
    }
</style>
<body>
    <br><br><br>
    <form method="POST">
    <table border="1" style="border-collapse: collapse;">
<tr><td colspan="2">Name</td>
<td><input type="text" name="name" placeholder="name of employee">
<span style="color: red;"><?php if (isset($error1)) {
    echo $error1;
}?></span></td></tr>
<tr><td colspan="2">Salary</td>
<td><input type="text" name="salary" placeholder="salary">
<span style="color: red;"><?php if (isset($error2)) {
    echo $error2;
}
?></span>
</td>
</tr>
    <tr><td colspan="3" style="text-align:center"><input type="Submit" name="submit"></td></tr>
</table>
</form>
<br><br><br>
<?php
if (isset($submit)) {
        if (isset($error1)) {
            $error1;
        } elseif (isset($error2)) {
            $error2;
        }
        else {
            if (isset($submit)) {
                ?>

    <table border="1" style="border-collapse: collapse;">

    <tr style="background-color:lightgreen";><td>Name of employee: &nbsp;&nbsp;&nbsp;
    <?php echo $name;?></td>
<td>Amount in Rs.</td>
<td colspan="2">Deductions
<td>Amount in Rs.</td></tr>
    
    <tr><td>Basic Salary</td>
    <td><?php print $salary;?></td>
<td colspan="2">Provident fund</td>
<td><?php echo $pf;?></td></tr>
    <tr><td colspan="1">HRA</td>
    <td><?php echo $hra;?></td>
<td colspan="2">PT.</td>
<td><?php echo $pt;?></td></tr>
    
    <tr><td colspan="1">SA</td>
    <td><?php echo $sa;?></td>
<td colspan="2">IT</td>
<td><?php echo $it; ?></td></tr>
    <tr><td colspan="1">Covid A</td>
   <td><?php echo $covida;?></td>
    <td colspan="2">ESIC</td>
    <td><?php echo $esic;?></td>
    </tr>
    
    <tr><td colspan="1">M Bonus</td>
    <td><?php echo $mbonus;?></td>
    </tr>
    <tr>
        <td colspan="1">Gross Earning</td>
        <td colspan="4"><?php echo $gross; ?></td>
    </tr>
    
    <tr><td>Earning</td>
    <td><?php echo $earning; ?></td>
    <td colspan="2">Total Deductions</td>
    <td><?php echo $deductions; ?></td></tr>
    
    <tr></tr>
    
    <tr style="border: 1.5px solid lightblue;"><td colspan="1" style="margin:auto;">Take Home Salary</td>
    <td colspan="4"><?php echo $net; ?></td></tr>

    </table>
    <?php
}
        }
    }


?>


</body>
</html>
