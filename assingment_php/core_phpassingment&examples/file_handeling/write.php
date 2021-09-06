<?php
$file=fopen("ajax.txt","w+") or die("File does not exist");

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