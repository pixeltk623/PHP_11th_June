<?php 
	include_once 'database/database.php';
	if (isset($_POST['submit'])) {
		
		$fullName = $_POST['fname'];
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$password = md5($_POST['password']);
		$address = $_POST['address'];
		$city = $_POST['city'];

		if (isset($_POST['gender'])) {
			$gender = $_POST['gender'];
		} else {
			$gender = "";
		}

		if (isset($_POST['hobby'])) {
			$hobby = $_POST['hobby'];
			$hobby =  implode(",", $hobby);
			
		} else {
			$hobby = "";
		}
		
		
		$dob = $_POST['dob'];

		$profilePic = $_FILES['profilePic'];

		//move_uploaded_file($profilePic['tmp_name'], "uploads/". $newFileName);



		

		$size = number_format($profilePic['size'] / 1024);

		$ext = pathinfo($profilePic['name'], PATHINFO_EXTENSION);

		$newFileName = time().".".$ext;


		$queryCheckEmail = "SELECT * FROM users WHERE email = '$email'";

        $resultQ = mysqli_query($conn, $queryCheckEmail);

        if($resultQ->num_rows>0) {
            $errorEName =  "<h3 style='color:red; text-align: center;'>Email is Alreday Exits</h3>";
            $error3 = false;
        } else {
            $error3 = true;
        }

        $queryCheckUserName = "SELECT * FROM users WHERE username = '$uname'";

        $resultU = mysqli_query($conn, $queryCheckUserName);

        if($resultU->num_rows>0) {
            $errorUName =   "<h3 style='color:red; text-align: center;'>Username is Alreday Exits</h3>";
            $error4 = false;
        } else {
            $error4 = true;
        }
		if ($size>=10 && $size<=100) {
			$error1 = true;
		} else {
			$errorSize =  "<h3 style='color:red; text-align: center;'>Size Is Large</h3>";
			$error1 = false;
		}

		if($ext=='jpg' || $ext=='png' || $ext=='jpeg') {
			
			$error2 = true;
		} else {
			$fileError =  "<h3 style='color:red; text-align: center;'>Invalid File Type</h3>";
			$error2 = false;
		}

		// if (file_exists("uploads/". $newFileName)) {
		// 	echo "Present";
		// } else {
		// 	echo "Nahi hai";
		// }


		if ($error2 && $error1 && $error3 && $error4) {

			$query = "INSERT INTO `users`(`full_name`, `username`, `email`, `password`, `gender`, `hobby`, `city`, `dob`, `profile_pic`, `mobile_no`, `address`) VALUES ('$fullName','$uname','$email','$password','$gender','$hobby','$city','$dob','$newFileName', '$mobile','$address')";


			$result = mysqli_query($conn, $query);

			if ($result) {

				move_uploaded_file($profilePic['tmp_name'], "uploads/". $newFileName);
				
				$message = "<h2 style='text-align: center; color: green;'>Registration Done</h2>";
	 
			} else {
				$message = "<h2 style='text-align: center; color: red;'>Something Error</h2>";
			}
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
	<h1 style="text-align: center; color: blue;">New User Registration </h1>
	<?php 
		if (isset($message)) {
			echo $message;
		}

		if (isset($errorEName)) {
			echo $errorEName;
		}
		if (isset($errorUName)) {
			echo $errorUName;
		}
		if (isset($errorSize)) {
			echo $errorSize;
		}
		if (isset($fileError)) {
			echo $fileError;
		}

	?>
	<form method="post" enctype="multipart/form-data">
		<table border="1" style="border-collapse: collapse; width: 40%;">
			<tr>
				<th>Name</th>
				<td>
					<input type="text" name="fname" />
				</td>
			</tr>
			<tr>
				<th>Username</th>
				<td>
					<input type="text" class="text" value="" name="uname"   >
				</td>
			</tr>
			<tr>
				<th>Email</th>
				<td>
					<input type="text" class="text" value="" name="email"  >
				</td>
			</tr>
			<tr>
				<th>Password</th>
				<td>
					<input type="password" value="" name="password" >
				</td>
			</tr>
			<tr>
				<th>Mobile</th>
				<td>
					<input type="text" value="" name="mobile"  >
				</td>
			</tr>
			<tr>
				<th>Gender</th>
				<td>
					<input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
				</td>
			</tr>
			<tr>
				<th>Hobby</th>
				<td>
					<input type="checkbox" name="hobby[]" value="Cricket">Cricket
					<input type="checkbox" name="hobby[]" value="Football">Football  
				</td>
			</tr>
			<tr>
				<th>City</th>
				<td>
					<select name="city">
					   	<option value="">select</option>
						<option value="Vadodara">Vadodara</option>
						<option value="Darjeeling">Darjeeling</option>
						<option value="Bhavnagar">Bhavnagar</option>
						<option value="Anand">Anand</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>DOB</th>
				<td>
					<input type="date" value="" name="dob"  >
				</td>
			</tr>
			<tr>
				<th>Profile Pic</th>
				<td>
					<input type="file" value="" name="profilePic"  >
				</td>
			</tr>
			<tr>
				<th>Address</th>
				<td>
					<textarea name="address" style="width: 100%;"></textarea>
				</td>
			</tr>
			<tr>
				<th colspan="2" style="text-align: center;">
					<input type="submit" name="submit">
					<input type="reset" name="reset">
				</th>
			</tr>
			<tr>
				<th colspan="2" style="text-align: center;">
					<p>Already Registered User <a href="login.php">Login here</a></p>
				</th>
			</tr>
		</table>
	</form>
</body>
</html>