<?php
 $file=fopen("javascript.txt","w") or die("does not exist");

  $name="Hi my name is Brijesh\n";
  fwrite($file,$name);

  $name1="Hi my name is Rajesh\n";
  fwrite($file,$name1);


  
  $name2="Hi my name is Kumar\n";
  fwrite($file,$name2);



  
  $name3="Hi my name is Nimesh\n";
  fwrite($file,$name3);

  fclose($file);

?>