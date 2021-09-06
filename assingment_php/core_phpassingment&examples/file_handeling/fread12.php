<?php
 $file=fopen("javascript.txt","r+") or die("does not exist");

echo fread($file,255);

 fclose($file);

 ?>