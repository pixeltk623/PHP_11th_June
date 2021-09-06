<?php
$arr=array(0=>"prateek",1=>"brijesh",2=>"meet",3=>"bhavika");
krsort($arr);
foreach($arr as $value)

{

    echo "My name is :".$value."<br>";
}

?>