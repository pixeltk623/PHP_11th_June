<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller

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
		
	    $this->load->view("home");
		
		
	    $this->load->view("include/footer");
	    
	
	}
	
	
	
	
	
}





?>