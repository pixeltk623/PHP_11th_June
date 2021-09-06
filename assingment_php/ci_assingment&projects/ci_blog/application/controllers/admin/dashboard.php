<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//error_reporting(0);

class dashboard extends CI_Controller


{
	
    public function __construct()
	
	{

       parent:: __construct();
	   
	   $this->load->model("adminmodel");
	  

	}
	
	
	//admin login page load----
	
	
	public function index()
	
	
	{
		
		$this->load->helper('url');
		
		$this->load->view("admin/include/header");
		
		$this->load->view("admin/include/slidebar");
		
		$this->load->view("admin/dashboard");
		
		
		$this->load->view("admin/include/footer");
		
      
		
	    }
	
}

?>