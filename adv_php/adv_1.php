<?php 
	
	class Employee {

		public $name = "Sharvan";
		private $salary = 1000;

		protected $address = "Baroda";

		public function getSalary() {

			return $this->salary;
		}

	}

	$object = new Employee;



	echo "<pre>";

	echo $object->getSalary();

	// echo $object->name;

	// echo "<br>";

	// echo $object->salary;

	// echo "<br>";

	// echo $object->address;

	



?>