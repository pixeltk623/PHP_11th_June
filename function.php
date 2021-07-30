<!-- 1. Functions are "self contained" modules of code that accomplish a specific task. 

2.Functions usually (Akasar) "take in" data, process it, and "return" a result.

3.Once a function is written, it can be used over and over and over again. Functions can be "called" from the inside of other functions. -->

<?php 
	
	function addTwoNumber() { // return type

		return "10";

	}

	function addTwoNumberNew() { // No return type

		echo "10";

	}

	function sumOfTwoNumber($a,$b) {
		return $a+$b;
	}

	function evenOddChecker($number=null) { // default parameter

		if($number=='') {
			$result = "Not a Valid Number";
		} else {
			if($number%2==0) {
				$result =  "Even";
			} else {
				$result =  "Odd";
			}
		}
		

		return $result;
	}

	//echo addTwoNumber();

	//echo sumOfTwoNumber(5,10);

	//echo evenOddChecker(45);
	//echo evenOddChecker(100);

?>