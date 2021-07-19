<?php
   if(isset($_POST['submit'])){
   	$name = $_POST['name'];
   	$salary = $_POST['salary'];

   	if ($name=='') {
   	$error1 = "<span style='color:red;'>Name Can not be blank</span>";
   } else {
   	$valid1 = true;
   }

   if ($salary!='') {
   		
   		if (is_numeric($salary)) {
   			
   			if ($salary>=8000) {
   				$valid2 = true;
   	
    $hra = ($salary*25)/100;
   	$sa = ($salary*12)/100;
   	$covid = ($salary*5)/100;
   	$mb = ($salary*10)/100;

   	$earning = $salary + $hra + $sa + $covid + $mb;

                  	$pf = ($salary*11)/100;
   					$pt = 200;
   					$esi = ($salary*4)/100;
   				

   					if ($salary>=8000 && $salary <=10000) {
   						$it = ($salary*2)/100;
   					} elseif ($salary>10000 && $salary<=15000) {
   						$it = ($salary*2)/100;
   					} elseif ($salary>15000 && $salary<=20000) {
   						$it = ($salary*3.5)/100;
   					} else if ($salary>20000 && $salary<=30000) {
   						$it = ($salary*4)/100;
   					} else {
						$it = ($salary*5)/100;				
   					}

   					 $deducation = $pf + $pt + $esi + $it;
   					echo "<br>";
   			

   					 $tg = $earning + $deducation;
   					echo "<br>";
   					 $thomeSalary = $earning - $deducation;
   					echo "<br>";
   			} else {

   				$error2 = "<span style='color:red'>Salary Must be greater than 8K</span>";
   			}

   		} else {
   			$error2 ="<span style='color:red'>Salary Must be in Number Form</span>";
   		}

   } else {
   		$error2 = "<span style='color:red;'>Name Can not be blank</span>";
   }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post">
		<table border="1" width="30%" style="margin: auto;">
			<tr>
				<th>Name</th>
				<td><input type="text" name="name">
               <?php 
                    if (isset($error1)) {
                        echo $error1;
                    }
                ?>
				</td>
			</tr>
			<tr>
				<th>Salery</th>
				<td><input type="text" name="salary">
				<?php 
                    if (isset($error2)) {
                        echo $error2;
                    }
                ?>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>

<?php 

        if (isset($valid1) && isset($valid2)){
            ?>
	<table border="1" width="70%"; style=" margin: auto;">
		<tr>
			<th colspan="4" style="color:red;"><?php echo (isset($name)) ? $name : '';?></th>
		</tr>
		<tr>
			<th>Earning</th>
			<th>Amount</th>
			<th>Deductions</th>
			<th>Amount</th>
		</tr>
		<tr>
			<td>Salary</td>
			<td><?php echo (isset($salary)) ? $salary : '';?></td>
		    <td>Provident Fund</td>
		    <td><?php echo $pf; ?></td>
		</tr>
		<tr>
			<td>HRA</td>
			<td><?php echo (isset($hra)) ? $hra : '';?></td>
			<td>Professional Tax</td>
			<td><?php echo $pt; ?></td>
		</tr>
		<tr>
			<td>SA</td>
			<td><?php echo (isset($sa)) ? $sa : '';?></td>
			<td>Income Tax</td>
			<td><?php echo $it; ?></td>
		</tr>
		<tr>
			<td>Covid</td>
			<td><?php echo (isset($covid)) ? $covid : '';?></td>
			<td>ESI & Medical</td>
			<td><?php echo $esi; ?></td>
		</tr>
		<tr>
			<td>MD</td>
			<td><?php echo (isset($mb)) ? $mb : '';?></td>
			<th style="color: green;">Gross Deductions</th>
			<th style="color: grey;"><?php echo $deducation; ?></th>
		</tr>
		<tr>
			<th style=" color: green;">Gross Earning</th>
			<th style="color: grey;"><?php echo (isset($earning)) ? $earning : '';?></th>
			<th style=" color: green;">Total Growth</th>
			<th style="color: grey;"><?php echo  $tg; ?></th>
		</tr>
		<tr>
			<th colspan="3" style="color:green;">NET PAY</th>
			<th colspan="" style="color:grey"><?php echo $thomeSalary; ?></th>
		</tr>
	</table>
	   <?php
          }

    ?>
</body>
</html>