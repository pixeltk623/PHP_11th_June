<?php 
	class Admin extends CI_Controller
	{
		
		// function __construct(argument)
		// {
		// 	# code...
		// }

		public function index() {
			
			// echo $_SERVER['REQUEST_URI'];
			// die;
			return $this->load->view('admin/login');
		}

		

	}

?>