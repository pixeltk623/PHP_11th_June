<?php

class register extends CI_Controller

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
		
	    $this->load->view("register");
		
	    $this->load->view("include/footer");
		
		
		
		//for insert a data in database...
		if($this->input->post("sub"))
		{
		
		$fname=$this->input->post("fname");
		
		$lname=$this->input->post("lname");
		
		$pass=$this->input->post("pass");
		
		$cpass=$this->input->post("cpass");
		
		if($pass==$cpass)
		{
		
		
		
	$data=array("firstname"=>$fname,"lastname"=>$lname,"password"=>$pass);
	
	
	//print_r($data);
	
	
	$result=$this->model->insdata("user",$data);
	
	
	if($result)
	{
	
	$this->session->set_flashdata('msg','Thanks for Registration with Us!');
	
	
	
	redirect(base_url().'login');	
			
			
	}
		}
	
		
	
else
{
	
	
	$this->session->set_flashdata('error','password does not matched!');
	
	
	
	redirect(base_url().'register');		
	
}
		}
	
		
		
	
	

	
		
	
			
			
		
	
	}
	
	
}





?>