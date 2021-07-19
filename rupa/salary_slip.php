
<?php 
if (isset($_POST['Submit'])) {
   $Name=$_POST['Name'];
   $Bsalary=$_POST['Bsalary'];

   if ($Name=='') {
   	echo "Name Can not be blank";
   } else {
   	echo $Name;
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

   		} else {
   			echo "Basic Salary Must be in Number Form";
   		}

   } else {
   		echo "Basic Salary Can not be blank";
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
			<td><input type="text" name="Name"></td>
		</tr>
		<tr>
			<td>Basic Salary</td>
			<td><input type="text" name="Bsalary"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
		</tr>
	</table>
</form>


</body>
</html>


<table border="1" style="border-collapse: collapse;">
			<tr>
				<td><?php echo(isset($bsalary)) ? $bsalary :''?></td>
			</tr>
			<tr>
				<td colspan="3">Earnings</td>
				<td>Amount</td>
				<td colspan="3">Deduction</td>
				<td>Amount</td>
			</tr>
			<tr>
				<td colspan="3">Basic</td>
				<td><?php echo(isset($bsalary)) ? $bsalary :''?></td>
				<td colspan="3">PF</td>
				<td><?php echo(isset($pf)) ? $pf :''?></td>
			</tr>
			<tr>
				<td colspan="3">HRA</td>
				<td><?php echo(isset($hra)) ? $hra :''?></td>
				<td colspan="3">PT</td>
				<td><?php echo(isset($pt)) ? $pt :''?></td>
			</tr>
			<tr>
				<td colspan="3">SA</td>
				<td><?php echo(isset($sa)) ? $sa :''?></td>
				<td colspan="3">IT</td>
				<td><?php echo(isset($it)) ? $it :''?></td>
			</tr>
			<tr>
				<td colspan="3">Covid A</td>
				<td><?php echo(isset($covid)) ? $covid :''?></td>
				<td colspan="3">ESI</td>
				<td><?php echo(isset($esi)) ? $esi :''?></td>
			</tr>
			<tr>
				<td colspan="3">M Bonus</td>
				<td><?php echo(isset($mi)) ? $mi :''?></td>
			</tr>
       <?php
       }
    } 

       ?>
			
		</table>