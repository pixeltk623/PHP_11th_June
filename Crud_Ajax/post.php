<?php 
	include 'config.php';
	if (isset($_POST)) {	
		$class =  $_POST['class'];
		$courseName =  $_POST['courseName'];
		$query = "INSERT INTO `courses`(`class`, `name`) VALUES ('$class', '$courseName')";
		$result = mysqli_query($conn,$query);
		echo json_encode($result);
	}
?>