<?php 
	
	include 'config.php';

	$query = "SELECT id, class, name, DATE_FORMAT(created_at, '%Y-%m-%d') As Datecreated FROM `courses`";
	$result = mysqli_query($conn,$query);

	while ($response[] = mysqli_fetch_assoc($result)) {}

	$finalData = array_filter($response);
	
	echo json_encode($finalData);

?>