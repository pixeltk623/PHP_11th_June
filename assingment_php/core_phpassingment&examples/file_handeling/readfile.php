<?php
 $file=fopen("ajax.txt","r") or die("does not exist");
 echo fgets($file); //fgets will return a single

?>