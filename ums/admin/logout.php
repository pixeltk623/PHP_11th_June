<?php 
	
	session_start();

	// echo "<pre>";
	// print_r($_SESSION);

	unset($_SESSION['admin_id']);
	unset($_SESSION['is_admin_login']);

	header("Location: index.php");

?>