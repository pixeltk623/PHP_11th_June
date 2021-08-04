<button style="color: yellow;"><a href="logout.php">Logout</a></button>
<br>
<h1>Welcome To Luxurious Car World</h1>


<?php

session_start();

if (!isset($_SESSION['username'])) {
header('location : login.php');
}

?>


<img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/2022-chevrolet-corvette-z06-1607016574.jpg?crop=0.737xw:0.738xh;0.181xw,0.218xh&resize=640:*" alt="Car World">
