<?php 
	
	abstract class User {

		abstract public function getName();
		abstract public function getAddress() : bool;
	}


	class Sunil extends User {

		public function getName() {
			echo "My Name is Sunil";
		}

		public function getAddress() :bool {

			return true;
		}

	}

	// class Sandip extends User {
		
	// 	public function getName() {
	// 		echo "My Name is Sandip";
	// 	}

	// 	public function getRollNo() {
	// 		echo "Roll No is 5";
	// 	}

	// }
	// class Nilesh extends User {
		
	// }
	// class RupaAndNirali extends User {
		
	// }
	// class Ritesh extends User {
		
	// }

	$object1 = new Sunil();
	// $object2 = new Sandip();

	echo "<pre>";

	print_r($object1->getName());
	print_r($object1->getAddress());
	// print_r($object2->getName());
	// print_r($object2->getRollNo());

?>