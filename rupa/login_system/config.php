<?php
  
  $conn = mysqli_connect("localhost","root","","loginsystem");
  // 1st parameter =host (localhost) 
  //2nd parameter =username
  //3rd parameter =password
  //4th parameter = database name

  if (!$conn) {
  	echo "DB Error";
  }

?>
