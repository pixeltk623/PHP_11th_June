<?php
$conn = mysqli_connect('localhost','root','','login_system');
    if(!isset($conn)){
        echo "not connected"; 
    }
?>