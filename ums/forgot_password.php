<?php 

include_once 'database/database.php';
date_default_timezone_set("Asia/Kolkata");



include_once '../mail.php';


if (isset($_POST['submit'])) {
	
	$email = $_POST['email'];


	$query = "SELECT * FROM `users` WHERE email  = '$email'";

	$result = mysqli_query($conn,  $query);

    	if ($result->num_rows==0) {
    		echo "Email is Wrong";
    	} else {

    		$userData = mysqli_fetch_assoc($result);
    		$userName =$userData['full_name'];
    		$userID =$userData['id'];
    		$otp = rand(1000, 5000);

    		$html = "";

    		$html .= "<p>Hi ".$userName."</p>";
    		$html .= "<p>Your verification code to reset the password for your account is ".$otp."</p>";

    		$html .= "Thanks,";
			$html .= "UMS Management";

    		sendMail($email, $html, $userName);

    		$queryF = "INSERT INTO `forgot_password`(`user_id`, `otp`,`message`, `is_verfied`) VALUES ('$userID', '$otp','$html','0')";


    		$resultF = mysqli_query($conn,  $queryF);

    		if ($resultF) {
    			header("Location: verify_otp.php");
    		} else {
    			echo "Something Error";
    		}


    	}


}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post">
		<label>Email</label>
		<input type="email" name="email">
		<input type="submit" name="submit">
	</form>
</body>
</html>