<?php
session_start();
unset($_SESSION["em"]);
session_destroy();

echo "<h3 align='center' style='color:red'>You are Successfuly Logout !</h3>";

header("refresh:4,login.php");



?>