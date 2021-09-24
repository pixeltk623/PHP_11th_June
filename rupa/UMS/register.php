<?php
  include_once'database/database.php';

  if (isset($_POST['submit'])) {
  	
   $fullname = $_POST['fname'];
   $username = $_POST['uname'];
   $email = $_POST['email'];
   $password =md5($_POST['password']);
   $mobile = $_POST['mobile'];
   $address = $_POST['address'];
   $city = $_POST['city']; 


   if (isset($_POST['gender'])) {
   	 $gender = $_POST['gender'];
   }else{
       $gender = "";
   }
   
   if (isset($_POST['hobby'])) {
      $hobby = $_POST['hobby'];
      $hobby = implode(",", $hobby);
   }else{
      $hobby = "";
   }
  
   $dob = $_POST['dob'];

   //$profilepic = $_FILES['profilepic'];

  // echo "<pre>";
  //print_r($profilepic['name']);
   //move_uploaded_file($profilepic['tmp_name'], "uploads/".$profilepic['name']);

  // $size = number_format($profilepic['size'] / 1024);
  // $ext = pathinfo($profilepic['name'], PATHINFO_EXTENSION);

  // if (file_exists("uploads/".$profilepic['name'])) {
  // 	echo "present";
  // }else{
  //    echo "Not Present";
  // }
   

   //if ($size>10 && $size<100) {
   //	echo "valid Size";
   //}else{
   //  echo "invalid size";
   //}

   //if ($ext=='jpg' || $ext=='jpeg' || $ext=='png') {
   //	echo "valid File Extension ";
   //}else{
   //   echo "invalid File Extension";
   //}

 $profilepic = $_FILES['profilepic'];

   move_uploaded_file($profilepic['tmp_name'], "uploads/".$profilepic['name'] ); 


 // echo "<pre>";
 // print_r($profilepic['name']);

   $ext = pathinfo($profilepic['name'], PATHINFO_EXTENSION);

   $size = number_format($profilepic['size']/ 1024) ;

   //size validation

   // if ($size>=10 && $size<=100) {
   // 	echo "Size is Ok";
   // }else{
   //   echo "Size is large";
   // }

   // if ($ext=='jpg' || $ext=='png' || $ext=='jpeg') {
  	// echo "ok";
   // }else{
   //	echo"invalid file type";   
   // }

//**********to check whether file exists or not*********************//

   if (file_exists( "uploads/". $profilepic['name'] )) {
    	echo "Present";
   }else{
     echo "Not Present";
   }


   
		//$newFileName = time().".".$ext;


   $query = "INSERT INTO `users`( `full_name`, `username`, `email`, `password`, `gender`, `hobby`, `city`, `dob`, `profilePic`, `mobile`, `address`) VALUES (' $fullname',' $username',' $email',' $password',' $gender',' $hobby',' $city',' $dob',' ".$profilepic['name']." ',' $mobile',' $address')";

   $result = mysqli_query($conn,$query);

   if (!$result) {
   	$message = "<h2 style='color:red;text-align:center;'>Something Error</h2>";
   }else{
   	$message = "<h2 style='color:green;text-align:center;'>Registration Done</h2>";
   }
  
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		table tr,th,td{
			padding: 10px;
		}
		table{
			margin: auto;
		}
		table tr th {
			text-align: left;
		}
		input[type=text]{
			width: 60%;
		}

	</style>
</head>
<body>
	<h1 style="text-align:center;color: blue;">New User Registration</h1>
	<?php 
	if (isset($message)) {
		echo $message;
	}
	?>
	<form method="POST" enctype="multipart/form-data">
	<table border="1" style="border-collapse:collapse; width: 40%;">
		<tr>
			<th>Name</th>
			<td><input type="text" name="fname"></td>
		</tr>
		<tr>
			<th>UserName</th>
			<td>
				<input type="text" name="uname">
			</td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="text" name="password"></td>
		</tr>
		<tr>
			<th>Mobile</th>
			<td><input type="text" name="mobile"></td>
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
				<input type="checkbox" name="hobby[]" value="Badminton">Badminton
				<input type="checkbox" name="hobby[]" value="Tennis">Tennis
				<input type="checkbox" name="hobby[]" value="Carrom">Carrom
			</td>
		</tr>
		<tr>
			<th>City</th>
			<td>
				<select name="city">
					<option>Select</option>
					<option>Darjeeling</option>
					<option>Vadodara</option>
					<option>Surat</option>
					<option>Ahmedabad</option>
					<option>Bihar</option>		
				</select>
			</td>
		</tr>
		<tr>
			<th>DOB</th>
			<td>
				<input type="date" name="dob">
			</td>
		</tr>
		<tr>
			<th>Profile Pic</th>
			<td>
				<input type="file" name="profilepic">
			</td>
		</tr>
		<tr>
			<th>Address</th>
			<td>
				<textarea name="address" style="width:100%"></textarea>
			</td>
		</tr>
		<tr>
			<th colspan="2" style="text-align: center;">
				<input type="submit" name="submit">
				<input type="reset" name="reset">			
			</th>
		</tr>
	</table>
</form>

</body>
</html>