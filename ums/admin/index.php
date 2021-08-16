<?php 
	include_once '../database/database.php';

	session_start();
	if (isset($_POST['login'])) {
		
		$unameEmail = $_POST['Username'];
		$password = md5($_POST['password']);

		$query = "SELECT * FROM admin WHERE username = '$unameEmail' OR email = '$unameEmail'";

	    $result = mysqli_query($conn, $query);

	    // echo "<pre>";

	    // print_r($result);
	    // die;

      	if ($result->num_rows>0) {
          
        	$queryCp = "SELECT * FROM admin WHERE (username = '$unameEmail' AND password = '$password') OR (email = '$unameEmail' AND password = '$password')";
          	$resultCp = mysqli_query($conn, $queryCp);

          	$userDetails = mysqli_fetch_assoc($resultCp);

          	// echo "<pre>";
          	// print_r($userDetails);
          	// die;

        	if($resultCp->num_rows>0) {

        		$_SESSION['admin_id'] = $userDetails['id'];
        		$_SESSION['is_admin_login'] = true;

            	header("Location: dashboard.php");
          	} else {
           		$message =  "<h3 style='color: red; text-align: center;'>Password is Wrong</h3>";
          	}
        } else {
           	$message =  "<h3 style='color: red; text-align: center;'>Username OR Email is InValid</h3>";
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
			padding: 10px;
		}

		table tr th {
			text-align: left;
		}
	</style>
</head>
<body>
	<h1 style="text-align: center; color: blue;">Admin Login </h1>
	<?php 
			if (isset($message)) {
				echo $message;
			}
	?>
	<form method="post" enctype="multipart/form-data">
		<table border="1" style="border-collapse: collapse; width: 40%;">
			<tr>
				<th>Email Or Username</th>
				<td>
					<input type="text" name="Username" />
				</td>
			</tr>
			<tr>
				<th>Password</th>
				<td>
					<input type="password" name="password" />
				</td>
			</tr>
			<tr>
				<th colspan="2" style="text-align: center;">
					<input type="submit" name="login" value="Login">
				</th>
			</tr>
			
		</table>
	</form>
</body>
</html>