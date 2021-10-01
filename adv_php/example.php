<?php 
	
	abstract class TypeOfPerson {

		abstract public function getPersonType() : string;

	} 

	class Person extends TypeOfPerson {
		
		private $name;
		private $gender;

		function __construct($name, $gender='')
		{
			$this->name = $name;
			$this->gender = $gender;
		}

		public function getPersonType() :string {
			
			if ($this->gender=='Male') {
				$fullName = "Mr. ".$this->name;				
			} elseif($this->gender=='Female') {
				$fullName = "Mrs. ".$this->name;	
			} else {
				$fullName = "Nahi jante hai. ".$this->name;	
			}

			return $fullName;
		}
	}

	$object = new Person("XYZ");

	echo $object->getPersonType();

	// echo "<pre>";

	// print_r($object);
?>