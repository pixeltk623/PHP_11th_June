<?php 
	
	
	if (isset($_POST['submit'])) {
		
		$name = $_POST['name'];

		if($name=='') {
			$error =  "Name Can Not Be Blank";
		} else {
			$nameOfUser = $name;
		}

	}
	

	// $data = array("first_name"=>"sharvan","last_name"=>"kumar");

	// echo $data['first_name'];
	// echo "<pre>";

	// print_r($data);

	// die;

	// echo "<pre>";

	// print_r($_POST);

	//echo $_POST['name'];

	/*if(isset($_POST['name'])) {
		echo $_POST['name'];
	}*/
	//$nameOfUser = "Sharvan Kumar";

	//echo $nameOfUser;

	//isset(var)

	//echo isset($nameOfUser);



	// if(isset($nameOfUser)) {
	// 	echo $nameOfUser;
	// } else {
	// 	echo "Value is Not Set";
	// }

	// $_GET  // Get the value From url => array form 

	// $_GET['name'] // we fetch single value from array

	// $_POST

	// $_POST['name']

	
	//echo $_GET;

	// echo "<pre>";

	// print_r($_GET);

	//echo $_GET['name'];
	// if(isset($_GET['name'])) {
	// 	echo $_GET['name'];
	// }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		table tr th,td {
			padding: 10px;
		}

		table  {
			margin: auto;
		}
	</style>
</head>
<body>
	<h1 style="text-align: center; color: blue;">User Details</h1>
	<form method="post" enctype="multipart/form-data">
		<table border="1" style="border-collapse:collapse;">
			<tr>
				<th>Name</th>
				<td><input type="text" name="name">
					<span style="color:red;"><?php if (isset($error)) {
						echo $error;
					} ?></span>
				</td>
			</tr>

			<tr>
				<th colspan="2"><input type="submit" name="submit"></th>
			</tr>
		</table>
	</form>
	<?php 

		if (isset($nameOfUser)) {
			?>
			<h1 style="text-align:center; color: blue;"><?php echo $nameOfUser; ?></h1>
			<?php
		}

	?>

	<?php 

		if (isset($nameOfUser)) {
			echo "<h1 style='text-align:center; color: blue;''>".$nameOfUser."</h1>";
		}

	?>

	
	
</body>
</html>