
<!-- Core PHP 
	array
	loops

	simple crud 
		4 - 5
	search 
		=> Daily 
			1 =>  04 oct 


	oops 

		MVC 
			4 - 5
	Crud -Ajax
			4 - 5 -->



<!-- 1. Square
2. triangle
3. Circle -->

<?php 
	
	interface Area {
		public function calArea() :int;
	}

	class AreaOfSquare implements Area {
		public $side;
		public function __construct($side=0) {
			$this->side = $side;
		}

		public function calArea() :int {

			return (int) ($this->side*$this->side);
		}

	}

	class AreaOfTriangle implements Area {
		public $base;
		public $height;
		public function __construct($base=0, $height=0) {
			$this->base = $base;
			$this->height = $height;
		}

		public function calArea() :int {

			return (int) (($this->base*$this->height)/2);
		}

	}

	class AreaOfCircle implements Area {
		const PI = 3.14;
		public $radius;
		public function __construct($radius=0) {
			$this->radius = $radius;
		}

		public function calArea() :int {

			return (int) (self::PI * $this->radius * $this->radius);
		}

	}


	$objectS = new AreaOfSquare(5);
	$objectT = new AreaOfTriangle(5,5);
	$objectC = new AreaOfCircle(5);

	echo $objectS->calArea();
	echo "<br>";
	echo $objectT->calArea();
	echo "<br>";
	echo $objectC->calArea();


?>