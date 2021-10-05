<?php 
	class Admin extends CI_Controller
	{
		
		// function __construct(argument)
		// {
		// 	# code...
		// }

		public function index() {
			
			return $this->load->view('admin/login');
		}

		

	}

?>