<?php
class contact extends CI_Controller

{
    
	public function __construct()
	
	{
		
		
	     parent:: __construct();
		 
		 $this->load->model("model");	
		

		
		
	}
	
	
	//load view 
	
	public function index()
	
	{
		$this->load->helper('url');
		
	    $this->load->view("include/header");
		
	    $this->load->view("include/menu");
		
	    $this->load->view("include/slider");
		
	    $this->load->view("contact");
		
		
	    $this->load->view("include/footer");
	    
	
	}
	
	
	
	
	
}





?>