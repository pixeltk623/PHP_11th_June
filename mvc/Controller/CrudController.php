<?php 
	session_start();
	include_once 'Model/CrudModel.php';
	class CrudController extends CrudModel {

		public function __construct() {

			parent::__construct();

			if (isset($_SERVER['PATH_INFO'])) {
				
				switch ($_SERVER['PATH_INFO']) {
					case '/add_course':
						if (isset($_POST['submit'])) {
							
							$data = array(
								'class' => $_POST['class'],
								'name' => $_POST['course']
							);

							$result = $this->insertData('courses', $data);

							if ($result) {
								$message = array("message" => "Data Inserted", "class" => "alert-success");
							} else {
								$message = array("message" => "Error", "class" => "alert-danger");
							}

							// echo "<pre>";

							// print_r($data);

						}
						include_once 'View/add_course.php';
						break;

					case '/edit':
						if (isset($_GET['id'])) {
							$result = $this->editData('courses', $_GET['id']);
						}

						include_once 'View/edit.php';
						break;

					case '/update':

						if (isset($_POST['submit'])) {
							$result = $this->updateData('courses', $_POST);

							if ($result) {
								$_SESSION['dataResult'] = array(
									"message" => "Data Updated", "class" => "alert-success"
								);
								
							} else {
								$_SESSION['dataResult'] = array(
									"message" => "Error", "class" => "alert-danger"
								);
							}
							header("Location: http://localhost/PHP_11th_June/mvc");
						}
						break;

					case '/delete':

						if (isset($_GET['id'])) {
							
							$result = $this->deleteData('courses', $_GET['id']);

							if ($result) {
								$_SESSION['dataResult'] = array(
									"message" => "Data Deleted", "class" => "alert-success"
								);
								
							} else {
								$_SESSION['dataResult'] = array(
									"message" => "Error", "class" => "alert-danger"
								);
							}
							header("Location: http://localhost/PHP_11th_June/mvc");
						}
					
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