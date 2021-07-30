<?php

$name = array("My Name is Nilesh Kumar");

$name = explode(" " , "My Name is Nilesh Kumar"); 
echo "<pre>";

print_r($name);
echo "</pre>";




$data = array("name","email","mobile");

	$data1 =  implode(" ' , ' ", $data);
    echo  " '$data1' ";


    


?>