<?php
session_start();

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password =  $_POST['password'];

	if ($username == '' && $password == '') {
		$error = "<h4 style='color:red; text-align:center;'>Username or Password can not be blank</h4>";
	} else {
		if ($username == '') {
			$error1 = "<h4 style='color:red; text-align:center;'>Username can not be blank</h4>";
		} elseif ($password == '') {
			$error2 = "<h4 style='color:red; text-align:center;'>Password can not be blank</h4>";
		} else {
			if ($username == 'admin' && $password == '12345') {
				$_SESSION['username'] = $username;
				header("Location: dashboard.php");
			} else {
				$error3 = "<h4 style = 'color: red'>User name or password is wrong</h4>";
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
	<title>Document</title>
</head>
<style>
	table {
		margin: auto;
		width: 40%;
	}

	table tr,
	td {
		padding: 20px;
	}
</style>

<body>

	<form method="POST">
		<table border="1" style="border-collapse: collapse;">
			<tr>

				<td colspan="2">
					<h1 style="text-align: center;">
						Public Login System
					</h1> <br>
					<?php
					if (isset($error3)) {
						echo $error3;
					} ?>
					<?php
					if (isset($error)) {
						echo $error;
					}
					?>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="username"><span style="color: red;"></span><?php if (isset($error1)) {
																							echo $error1;
																						}
																						?></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"><span style="color: red;"></span>
					<?php if (isset($error2)) {
						echo $error2;
					} ?>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;"><input type="submit" name="submit"></td>
			</tr>
		</table>


	</form>
</body>

</html>