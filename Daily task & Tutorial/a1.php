<!-- 
SESSION => store => server
In PHP, a session provides a way to store web page visitor preferences on a web server in the form of variables that can be used across multiple pages. ... The information is retrieved from the web server when a session is opened at the beginning of each web page. The session expires when the web page is closed -->

<?php 
	
	date_default_timezone_set('Asia/Kolkata');
	session_start();

	// $_SESSION => array

	// $_SESSION['name']

	$_SESSION['email'] = "email@gmail.com";

	echo "<pre>";

	print_r($_SESSION);

	// echo time();

	// echo "<br>";
	// echo date("Y-m-d H:i:s",time());
	// die;

	// $name = "Sharvan";

	// $_SESSION['name'] = $name;
	// $_SESSION['time'] = time();

?>