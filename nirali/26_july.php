<?php 
    
  $arrayValue = array("name","email","mobile");

	// result = 'name','email','mobile'

	echo "'".implode("','", $arrayValue)."'";

	echo "<br>";



  $strings = "My Name is Nirali sharma";
  echo "<pre>";

	print_r(explode(' ', $strings));
