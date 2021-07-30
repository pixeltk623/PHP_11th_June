<?php
$str = 'My Name Is Sandip-Memariya';
// $newArray = preg_split('/(-| )/', $str);
$newArray = explode(' ',str_replace('-',' ',$str));
echo '<pre>';
print_r($newArray);

echo "<br>";
echo "<br>";

$array =array("Kumar", "Sunil", "Shivam");
$new2 = implode("','",$array);
echo "'$new2'";
?>