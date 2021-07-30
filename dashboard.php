<?php 
	
	session_start();

	// echo "<pre>";

	// print_r($_SESSION);

	if (!isset($_SESSION['uname'])) {
		
		header("Location: login.php");
	}

?>

<a href="logout.php">Log Out</a>
<h1>Hello</h1>