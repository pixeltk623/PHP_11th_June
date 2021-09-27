<?php

	include 'config.php';

  if (isset($_POST)) {

  $query = "DELETE FROM `courses` WHERE id = '".$_POST['did']."'";
  	$result = mysqli_query($conn,$query);
  	echo json_encode($result);
  }
?>
