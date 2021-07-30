<?php 

session_start();
// usename = "admin"
// pass = 123 

if (isset($_POST['submit'])) {
	
	$uname = $_POST['uname'];
	$password = $_POST['password'];

	if($uname=='admin' && $password == '123') {

		$_SESSION['uname'] = $uname;
		header("Location: dashboard.php");
	} else {
		$error =  "<h4 style='color:red; text-align:center;'>Username or Password is Wrong</h4>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table {
			margin: auto;
		}

		table tr th,td {
			padding: 20px;
		}
	</style>
</head>
<body>
	<h1 style="text-align: center;">Login System</h1>
	<?php 

		if (isset($error)) {
			echo $error;
		}

	?>
	<form method="post">
		<table border="1" style="border-collapse: collapse; widows: 50%;">
			<tr>
				<th>Email: </th>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<th>Password: </th>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<th colspan="2">
					<input type="submit" name="submit">
				</th>
			</tr>
		</table>
	</form>
</body>
</html>