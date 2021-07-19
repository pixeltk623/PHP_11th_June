<?php
 
 if (isset($_POST['Submit'])) {
    
    $Name=$_POST['Name'];
 	$Physics=$_POST['Physics'];
 	$Chemistry=$_POST['Chemistry'];
    $Maths=$_POST['Maths'];
    $Hindi=$_POST['Hindi'];
    $Sanskrit=$_POST['Sanskrit'];

    
     if ($Name!='') {
            
            if(is_numeric($Name)) {

            	$error6 = "<span style='color:red;text-align:center;'> <br>It not be in Number Form</span>";
                
            } else {

                $valid6 = true;
            }

        } else {
            $error6 = "<span style='color:red;'><br>It can not be blank</span>";
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


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Marksheet</title>
	<style type="text/css">
	
		input[type=text] {
			width: 80%;
			padding: 10px;
			margin: 6px;
			border: 1px solid #ccc;	
			border-radius: 5px;
		}
		table tr th,td{ 
			text-align: center;

		}
	</style>
</head>
<body>
	<fieldset style="width:50% ;margin:auto;">
		<legend>Marksheet</legend>
	<form method="post">
		<br>
		<label>Name :</label>
		<input type="text" name="Name" style="width:70%">
		<?php 

	    if (isset($error6)) {
		   echo $error6;
		  }
		?>
		<hr>
		<table border="1px solid black" style="border-collapse: collapse; width: 70%;text-align: center;">
			<br>
			<br>
			<tr>
				<th style="padding: 10px;">NO</th>
				<td>Subject</td>
				<th>Marks</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Physics</td>
				<td><input type="text" name="Physics">
					<?php 

				   if (isset($error1)) {
				   echo $error1;
				   }
				?>
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Chemistry</td>
				<td><input type="text" name="Chemistry">
					<?php 

				   if (isset($error2)) {
				   echo $error2;
				   }
				?>

				</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Maths</td>
				<td><input type="text" name="Maths">
					<?php 

				   if (isset($error3)) {
				   echo $error3;
				   }
				?>
				</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Hindi</td>
				<td><input type="text" name="Hindi">
					<?php 

				   if (isset($error4)) {
				   echo $error4;
				   }
				?>
				</td>
			</tr>
			<tr>
				<td>5</td>
				<td>Sanskrit</td>
				<td><input type="text" name="Sanskrit">
					<?php 

				   if (isset($error5)) {
				   echo $error5;
				   }
				?>		
				</td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="Submit" value="Submit" style="margin:7px;background-color: grey;width:150px;height: 30px;"></td>
			</tr>
		</table>
		<?php

		if (isset($valid1) && isset($valid2) && isset($valid3) && isset($valid4) && isset($valid5)) {

		if($Average>=90){
			$Result ="<span style='color:green; font size:25px;'> E grade</span>" ;
		 } else if ($Average>=80 && $Average<90) {    
		    $Result ="<span style='color:blue; font size:25px;'>O grade</span>";  
		 } else if ($Average>=70 && $Average<=80) {    
		   $Result ="<span style='color:Orange; font size:25px;'>A grade</span>"; 
		 } else if ($Average>=60 && $Average<=70) {    
		    $Result = "<span style='color:yellow; font size:25px;'>B grade</span>";  
		 } else if ($Average>=50 && $Average<=60) {   
		    $Result ="<span style='color:purple; font size:25px;'>C grade</span>"; 
		 } else if ($Average>=40 && $Average<50) {    
		    $Result ="<span style='color:Pink; font size:25px;'>D grade</span>"; 
		 } else if ($Average<=40) {    
		    $Result ="<span style='color:red; font size:25px;'>Fail</span>"; 
		 }  

		?>

		<table border="1" width="50%" frame="box" style="margin-top: 20px; width:70% ;padding: 10px ; padding-bottom:15px;">
		<tr>
			<th colspan="2">Student Result</th>
		</tr>
		<tr>
			<td>Name</td>
			<td><?php echo (isset($Name)) ? $Name : '' ?></td>
		</tr>
		<tr>
			<td>Average	</td>
			<td><?php echo (isset($Average)) ? round($Average) : '' ?>%</td>
		</tr>
		<tr>
			<td>Total</td>
			<td><?php echo (isset($Total)) ? round($Total) : '' ?>/500</td>
		</tr>
		<tr>
		<td colspan="2" >
			<?php
			if (isset($Result)){
				echo $Result;
			}
			?>
		</td>
	</tr>
		
	</table>
<?php
                       
}
?>
	</form>
	</fieldset>

</body>
</html>