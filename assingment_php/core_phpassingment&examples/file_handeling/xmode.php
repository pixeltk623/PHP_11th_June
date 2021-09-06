<?php
$file=fopen("javascript.txt","x+") or die("File does not exist");

if($file)

{

 echo "File oppend successfully";

}

else
{
echo "error while open a file";

}


fclose($file);


?>