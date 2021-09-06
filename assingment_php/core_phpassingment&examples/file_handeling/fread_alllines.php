<?php
 $file=fopen("ajax.txt","r") or die("does not exist");
//  echo fread($file,filesize("ajax.txt")); //fgets will return a single


echo fread($file,1555); //fgets will return a single
?>