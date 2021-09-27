<?php

	include 'config.php';

	$query = "UPDATE `courses` SET `class`='".$_POST['class']."',`name`='".$_POST['courseName']."' WHERE `id`='".$_POST['id']."'";
	$result = mysqli_query($conn,$query);



	echo json_encode($result);

?>
