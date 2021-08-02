<?php 
	date_default_timezone_set('Asia/Kolkata');
	session_start();
	echo "<pre>";

	print_r($_SESSION);

	if(isset($_SESSION['name'])) {
		echo $_SESSION['name'];
	}

	echo "<br>";
	if (isset($_SESSION['time'])) {
		echo date("Y-m-d H:i:s",$_SESSION['time']);
	}

	echo $_SESSION['email'];
	// echo $name;

?>