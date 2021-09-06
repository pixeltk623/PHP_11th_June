<?php
function name(&$a)  //&$a is a refrence variable
{
    echo "My name is :Prateek";

}

$b="My name is :Brijesh";
echo $b."<br>";
name($a);


?>