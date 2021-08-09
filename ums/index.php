<?php 
	include_once 'database/database.php';

	if (isset($_POST['login'])) {
		
		$unameEmail = $_POST['uemail'];
		$password = md5($_POST['password']);

		$query = "SELECT * FROM users WHERE username = '$unameEmail'";

	    $result = mysqli_query($conn, $query);

	      	if ($result->num_rows>0) {
	          
	         echo  $queryCp = "SELECT * FROM users WHERE (username = '$unameEmail' AND password = '$password') OR (email = '$unameEmail' AND password = '$password')";
	          $resultCp = mysqli_query($conn, $queryCp);

	          if($resultCp->num_rows>0) {
	            header("Location: dashboard.php");
	          } else {
	           echo $message =  "<h5 style='color: red; text-align: center;'>Password is Wrong</h5>";
	          }

	        } else {
	           echo $message =  "<h5 style='color: red; text-align: center;'>Username is InValid</h5>";
	    }

	}

	if (isset($_POST['signup'])) {
		
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



		

		$size = number_format($profilePic['size'] / 1024);

		$ext = pathinfo($profilePic['name'], PATHINFO_EXTENSION);

		$newFileName = time().".".$ext;


		$queryCheckEmail = "SELECT * FROM users WHERE email = '$email'";

        $resultQ = mysqli_query($conn, $queryCheckEmail);

        if($resultQ->num_rows>0) {
            $errorEName =  "Email is Alreday Exits";
            $error3 = false;
        } else {
            $error3 = true;
        }

        $queryCheckUserName = "SELECT * FROM users WHERE username = '$uname'";

        $resultU = mysqli_query($conn, $queryCheckUserName);

        if($resultU->num_rows>0) {
            $errorUName =   "Username is Alreday Exits";
            $error4 = false;
        } else {
            $error4 = true;
        }



		if ($size>=10 && $size<=100) {
			$error1 = true;
		} else {
			echo "Size Is Large";
			$error1 = false;
		}

		if($ext=='jpg' || $ext=='png' || $ext=='jpeg') {
			echo "Ok";
			$error2 = true;
		} else {
			echo "Invalid File Type";
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
				
				$message = "<h2 style='text-align: center; color: white;'>Registration Done</h2>";
	 
			} else {
				$message = "<h2 style='text-align: center; color: red;'>Something Error</h2>";
			}
		} else {

			$message = "Error";

		}
	
		

		


	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login System</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegent Tab Forms,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default',       
							width: 'auto', 
							fit: true 
						});
					});
				   </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700,200italic,300italic,400italic,600italic|Lora:400,700,400italic,700italic|Raleway:400,500,300,600,700,200,100' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="main">
		<h1>Registration and Login System</h1>
		<?php 
			if (isset($message)) {
				echo $message;
			}
		?>
	 <div class="sap_tabs">	
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			  <ul class="resp-tabs-list">
			  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><div class="top-img"><img src="images/top-note.png" alt=""/></div><span>Register</span>
			  	  	
				</li>
				  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><div class="top-img"><img src="images/top-lock.png" alt=""/></div><span>Login</span></li>
				  <li class="resp-tab-item lost" aria-controls="tab_item-2" role="tab"><div class="top-img"><img src="images/top-key.png" alt=""/></div><span>Forgot Password</span></li>
				  <div class="clear"></div>
			  </ul>		
			  	 
			<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
					<div class="facts">
					
						<div class="register">
							<form name="registration" method="post" action="" enctype="multipart/form-data">
								<p>Full Name </p>
								<input type="text" class="text" value=""  name="fname"  >
								<p>Username </p>
								<input type="text" class="text" value="" name="uname"   >
								<p>Email Address </p>
								<input type="text" class="text" value="" name="email"  >
								<p>Password </p>
								<input type="password" value="" name="password" >
								<p>Mobile No. </p>
								<input type="text" value="" name="mobile"  >
								<p>Gender</p>
								<input type="radio" name="gender" value="Male">Male
								<input type="radio" name="gender" value="Female">Female
								<p>Hobby</p>
								<input type="checkbox" name="hobby[]" value="Cricket">Cricket
								<input type="checkbox" name="hobby[]" value="Football">Football
								<input type="checkbox" name="hobby[]" value="Tenis">Tenis
								<input type="checkbox" name="hobby[]" value="Baseball">Baseball
								<p>City</p>
								<select name="city">
									<option value="">select</option>
									<option value="Vadodara">Vadodara</option>
									<option value="Vadodara">Darjeeling</option>
									<option value="Vadodara">Bhavnagar</option>
									<option value="Vadodara">Anand</option>
								</select>

								<p>DOB </p>
								<input type="date" value="" name="dob"  >
								<p>Profile Pic </p>
								<input type="file" value="" name="profilePic"  >
								<p>Address </p>
								<textarea name="address" style="width: 100%;"></textarea>

								<div class="sign-up">
									<input type="reset" value="Reset">
									<input type="submit" name="signup"  value="Sign Up" >
									<div class="clear"> </div>
								</div>
							</form>

						</div>
					</div>
				</div>		
			 <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
					 	<div class="facts">
							 <div class="login">
							<div class="buttons">
								
								
							</div>
							<form name="login" action="" method="post">
								<input type="text" class="text" name="uemail" value="" placeholder="Enter your registered email"  ><a href="#" class=" icon email"></a>

								<input type="password" value="" name="password" placeholder="Enter valid password"><a href="#" class=" icon lock"></a>

								<div class="p-container">
								
									<div class="submit two">
									<input type="submit" name="login" value="LOG IN" >
									</div>
									<div class="clear"> </div>
								</div>

							</form>
					</div>
				</div> 
			</div> 			        					 
				 <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
					 	<div class="facts">
							 <div class="login">
							<div class="buttons">
								
								
							</div>
							<form name="login" action="" method="post">
								<input type="text" class="text" name="femail" value="" placeholder="Enter your registered email"   ><a href="#" class=" icon email"></a>
									
										<div class="submit three">
											<input type="submit" name="send" onClick="myFunction()" value="Send Email" >
										</div>
									</form>
									</div>
				         	</div>           	      
				        </div>	
				     </div>	
		        </div>
	        </div>
	     </div>

</body>
</html>