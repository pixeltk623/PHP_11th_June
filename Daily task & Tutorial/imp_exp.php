<?php 
		

	//Q1. My Name is Sharvan-Kumar ||  space && -
	

	// How can can convert array to string
	$arrayData = array("Kumar", "Sunil", "Shivam");

	echo $stringData = implode("  ", $arrayData);

	echo "<pre>";

	// print_r($arrayData);

	echo "<br>";

	echo $string = "My Name is Sharvan-Kumar";

	$array1 = explode(" ", $string);

	//print_r($array1);

	echo "<br>";

	$arrayValue = array("name","email","mobile");

	// result = 'name','email','mobile'

	echo implode("','", $arrayValue);


?>