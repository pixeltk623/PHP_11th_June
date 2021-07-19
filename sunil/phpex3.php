<?php
   if(isset($_POST['submit'])){
   	$studentname = $_POST['studentname'];
   	$physics = $_POST['physics'];
   	$chemistry = $_POST['chemistry'];
   	$mathematics = $_POST['mathematics'];
   	$gujrati = $_POST['gujrati'];
   	$sanskrit = $_POST['sanskrit'];

      $objectmarks=$physics+$chemistry+$mathematics+$gujrati+$sanskrit;
      $grade=$objectmarks/5;
      
      if($grade>=90)
      {
      	$out = "Grade A";
      }
      elseif ($grade>=80) 
      {
         $out = "Grade B";
      } 
      elseif ($grade>=70)
      {
      	$out = "Grade C";
      }
      elseif ($grade>=60)
      {
      	$out = "Grade D";
      }    
      elseif ($grade>=50)
      {
      	$out = "Grade E";
      }    
      elseif ($grade>=45)
      {
      	$out = "Grade F";
      }
      else
      {
      	$out = "Fail";
      }        
   }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		td 
		{
			text-align: center;
		}
	</style>
</head>
<body>
	<form method="post">
	<table border="1" style="border-collapse: collapse;width: 50%; height: 500px;margin: auto;">
		<tr>
			<th>Student Name</th>
			<td><input type="text" name="studentname" placeholder="Enter Student Name"></td>
		</tr>
		<tr>
			<th>Physics</th>
			<td><input type="text" name="physics" placeholder="Enter Marks"></td>
		</tr>
		<tr>
			<th>Chemistry</th>
			<td><input type="text" name="chemistry" placeholder="Enter Marks"></td>
		</tr>
		<tr>
			<th>Mathematics</th>
			<td><input type="text" name="mathematics" placeholder="Enter Marks"></td>
		</tr>
		<tr>
			<th>Gujrati</th>
			<td><input type="text" name="gujrati" placeholder="Enter Marks"></td>
		</tr>
		<tr>
			<th>Sanskrit</th>
			<td><input type="text" name="sanskrit" placeholder="Enter Marks"></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;"><input type="submit" name="submit" value="submit"></td>
		</tr>
	</table>
<br><br>
	<table border="1px solid" width="60%" style="margin: auto;">
		<tr>
			<th colspan="2" style="color: maroon;"><?php echo $studentname; ?></th>
		</tr>
		<tr>
			<th>subject</th>
			<th>Marks</th>
		</tr>
		<tr>
			<td>Physics</td>
			<td><?php echo $physics; ?></td>
		</tr>

		<tr>
			<td>Chemistry</td>
			<td><?php echo $chemistry; ?></td>
		</tr>

		<tr>
			<td>Mathematics</td>
			<td><?php echo $mathematics; ?></td>
		</tr>

		<tr>
			<td>Gujrati</td>
			<td><?php echo $gujrati; ?></td>
		</tr>

		<tr>
			<td>Sanskrit</td>
			<td><?php echo $sanskrit; ?></td>
		</tr>

		<tr>
			<td>Object Marks</td>
			<th><?php echo $objectmarks; ?></th>
		</tr>

		<tr>
			<td>Percentage</td>
			<th><?php echo $grade; ?></th>
		</tr>

		<tr>
			<td>Grade</td>
			<th><?php echo $out; ?></th>
		</tr>
	</table>
</form>
</body>
</html>