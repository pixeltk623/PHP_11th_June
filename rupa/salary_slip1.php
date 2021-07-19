<?php 
 
 if (isset($_POST['submit'])) {
 	$name = $_POST['name'];
 	$bsalary = $_POST['bsalary'];

 	if ($name !='') {

 		if (is_numeric($name)) {

 			$error1 = "<span style='color:red;'> <br>It should not be in number form</span>";	

 		}else{

 			$name = $_POST['name'];	
 		}
    
 	}else{

 		 $error1 ="<span style='color:red;'><br> Name should not be blank</span>";	
 	}

 	if ($bsalary != '') {

 		if (is_numeric($bsalary)) {
 			
 			if ($bsalary>=8000) {
 			
 				$hra = ($bsalary*25)/100;
 				$sa = ($bsalary*12)/100;
 				$covid = ($bsalary*5)/100;
 				$mb = ($bsalary*5)/100;

 			    $earning =$bsalary + $hra + $sa + $covid + $mb;

 				$pf = ($bsalary*11)/100;
 				$pt = 200;
 			    $esi = ($bsalary*4)/100;

 			    if ($bsalary>=8000 && $bsalary<=1000) {
 			    	$it = ($bsalary*2)/100;
 			    }elseif ($bsalary>=10000 && $bsalary<=15000) {
 			    	$it = ($bsalary*3)/100;
 			    }elseif ($bsalary>=15000 && $bsalary<=20000){
 			    	$it = ($bsalary*3.5)/100;
 			    }elseif ($bsalary>=20000 && $bsalary<=30000) {
 			    	$it = ($bsalary*4)/100;
 			    }else{
 			    	$it = ($bsalary*5)/100;
 			    }
 			    
 			   

                $deduction =$pf + $pt + $esi + $it ;

                    $tg = $earning + $deduction;
   				    $thomeSalary = $earning - $deduction;
 			}else{

 				$error2 = "<span style='color:red;'>Basic salary must be greater than 8000</span>";
 			}          

 		}else{

 			$error2 ="<span style='color:red;'><br> It must be in number form</span>";
 		}
 		
 	}else{

 		$error2 = "<span style='color:red;'><br>Basic salary should not be blank</span>";
 	}
 }

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		table{
			margin: auto;
			width: 50%;
		}
		table tr th,td{
			padding: 10px;
		}
		}
	</style>
</head>
<body>
	<form method="post">
		<table border="1" style="border-collapse: collapse;text-align: center;">
			<tr>
				<td colspan="2"style="background-color: pink;">Salary Slip</td>
			</tr>
			<tr>
				<td>Employee Name</td>
				<td><input type="text" name="name">
					<?php 
					if (isset($error1)) {

						echo $error1;
					}

					?>
				</td>
			</tr>
			<tr>
				<td>Basic Salary</td>
				<td><input type="text" name="bsalary">
				<?php 
					if (isset($error2)) {

						echo $error2;
					}

					?></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" style="background-color: pink;width:100px;height: 30px;padding: 5px;"></td>
			</tr>			
		</table>
		
	</form>
	<br><br>
	<?php 
	if (isset($_POST['submit'])) {
		if($_POST['name'] != '' && $_POST['bsalary'] != '' && $bsalary>=8000) {

			
	
	?>
	<table border="1px solid black" style="border-collapse:collapse;">
			<tr style="text-align:center; background-color: pink;">
				<td colspan="6">Name :
					<?php 
					 if (isset($name)) {
					    echo $name;
					} ?>
				</td>
			</tr>
			<tr style="text-align: center;">
				<td colspan="3">Earning</td>
				<td colspan="3">Deductions</td>
			</tr>
			<tr>
				<td colspan="3">Basic Salary
				<span style="padding-left: 60%;"><?php 
					if (isset($bsalary)) {
						echo $bsalary;

					} ?></span>
				</td>
				<td colspan="3">Provident Fund 
				<span style="padding-left: 50%;"><?php 
					if (isset($pf)) {
						echo $pf;

					} ?></span>
				</td>
			</tr>
			<tr>
				<td colspan="3">House Rent Allowance 
				<span style="padding-left: 40%;"><?php 
					if (isset($hra)) {
						echo $hra;

					} ?></span>
				</td>
				<td colspan="3">Professional Tax
				<span style="padding-left: 48%;"><?php 
					if (isset($pt)) {
						echo $pt;

					} ?></span>
				</td>
			</tr>
			<tr>
				<td colspan="3">Special Allowance 
                <span style="padding-left: 50%;"><?php 
					if (isset($sa)) {
						echo $sa;

					} ?></span>
				</td>
				<td colspan="3">Income Tax
                <span style="padding-left: 58%;"> <?php 
					if (isset($it)) {
						echo $it;

					} ?></span>
				</td>
			</tr>
			<tr>
				<td colspan="3">Covid Allowance
				<span style="padding-left: 52%;"><?php 
					if (isset($covid)) {
						echo $covid;

					} ?></span>
				</td>
				<td colspan="3">ESI & Medical
				<span style="padding-left: 52%;"><?php 
					if (isset($esi)) {
						echo $esi;

					} ?></span></td>
			</tr>
			<tr>
				<td colspan="3">Monthly Bonus
				<span style="padding-left: 55%;"><?php 
					if (isset($mb)) {
						echo $mb;

				} ?></span></td>			
			</tr>
			<tr>
				<td>Gross Earning</td>
				<td colspan="2">
				<span style="padding-left: 30%;"><?php 
				 if (isset($earning)) {
						echo $earning;

					} ?></span></td>
				<td>Gross Deductions</td>
				<td colspan="2">
				<span style="padding-left: 30%;"><?php 
					if (isset($deduction)) {
						echo $deduction;

					} ?></span>
				</td>
			</tr>
			<tr>
				<td colspan="6">Total Gross
				<span style="padding-left: 45%;"><?php 
					if (isset($tg)) {
						echo $tg;

					} ?></span></td>
			</tr>
			<tr>
				<td colspan="6">Takehome Salary 
				<span style="padding-left: 40%;"><?php 
					if (isset($thomeSalary)) {
						echo $thomeSalary;

					} ?></span></td>
			</tr>

			
		</table>
<?php 
}

}?>
</body>
</html>