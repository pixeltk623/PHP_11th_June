<?php
	
	Class ParentClass {

		private $Income = "50000";

		public function getIncomeOfParent() {

			echo $this->Income;
		}

	}

	class Child extends ParentClass
	{
		
		public function getIncome() {

			echo "";
		}
		
	}


	$object = new Child;

	$object->getIncomeOfParent();

	echo "<pre>";

	print_r($object->getIncome());

?>