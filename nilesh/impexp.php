<?php

$str = 'My Name is Nilesh-Kumar';
// $name = preg_split('/(-| )/',$str); 
$name = explode(' ',str_replace('-',' ',$str));
echo "<pre>";

print_r($name);

echo "</pre>";

echo "<br>";
echo "<br>";


$data = array('Nilesh', 'Kumar', 'Engineer', 'Coding');
$data1 = implode(" ' , ' ", $data);
echo "'$data1'";

?>
