<?php 
	
	trait message1 {
		public function welcomeMessage() {
			echo "Welcome To Our Vadodara";
		}
	}

	trait message2 {
		public function welcomeMessage1() {
			echo "Welcome To Our Vadodara";
		}
	}


	class Welcome {

		use message1, message2;
		public function greeting() {
			return "Hello Sir Welcome To Tops";
		}

	}

	$object = new Welcome();

	echo $object->greeting();
	echo "<br>";

	echo $object->welcomeMessage();

	echo "<br>";

	echo $object->welcomeMessage1();


	// echo "<pre>";

	// print_r($object);


?>