<?php 
	session_start();
	include_once 'database/database.php';
	if (isset($_POST['submit'])) {
		$otp = $_POST['otp'];

		$query = "SELECT * FROM `forgot_password` WHERE otp = '$otp' AND is_verfied=0";

		$result = mysqli_query($conn,  $query);



		$data = mysqli_fetch_object($result);

		$_SESSION['userId_otp'] = $data->user_id;

    	if ($result->num_rows>0) {

    		$queryU = "UPDATE `forgot_password` SET `is_verfied`=1 WHERE id = '$data->id'"; 

    		mysqli_query($conn, $queryU);

    		$satausDone =  "OTP is Verified";
    	} else {
    		$sataus =   "Wrong OTP";
    	}
	}

	if (isset($_POST['Change_Password'])) {
		$Password = md5($_POST['Password']);

		$queryUpdatePass = "UPDATE `users` SET `password` = '$Password' WHERE id = ".$_SESSION['userId_otp'];

		$resultChange  = mysqli_query($conn, $queryUpdatePass);

		if ($resultChange) {
			
			unset($_SESSION['userId_otp']);

			header("Location: index.php");

		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
		if (isset($sataus)) {
			echo $sataus;
		}
	?>
	<form method="post">
		<label>OTP</label>
		<input type="number" name="otp" required
		<?php 

			if (isset($satausDone)) {
				echo "disabled";
			}

		?>
		>
		<input type="submit" name="submit" <?php 

			if (isset($satausDone)) {
				echo "disabled";
			}

		?>>

		<br><br>

		<?php 
			if (isset($satausDone)) {
				?>
				<label>New Password</label>
		<input type="Password" name="Password">
		<input type="submit" name="Change_Password">
				<?php
			}
		?>
		
	</form>

</body>
</html>