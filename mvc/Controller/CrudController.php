<?php 
	include_once 'Model/CrudModel.php';
	class CrudController extends CrudModel {

		public function __construct() {

			parent::__construct();

			if (isset($_SERVER['PATH_INFO'])) {
				
				switch ($_SERVER['PATH_INFO']) {
					case '/add_course':
						include_once 'View/add_course.php';
						break;
					
					default:
						# code...
						break;
				}

			} else {
				$result = $this->getData('courses');

				include_once 'View/show.php';
			}
		}

	}

	$object = new CrudController;

	// echo "<pre>";

	// print_r($object);

?>