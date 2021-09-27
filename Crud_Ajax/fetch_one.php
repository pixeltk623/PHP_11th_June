<?php

	include 'config.php';

	$query = "SELECT id, class, name, DATE_FORMAT(created_at, '%Y-%m-%d') As Datecreated FROM `courses` WHERE id = '".$_POST['eid']."'";
	$result = mysqli_query($conn,$query);

	$finalData = mysqli_fetch_assoc($result);

	echo json_encode($finalData);

?>
