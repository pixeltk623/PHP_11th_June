<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//error_reporting(0);
class admin_login extends CI_Controller


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
		
        $this->load->view("admin/login");
		
	if($this->input->post("log"))
	{		
			
	 $em=$this->input->post("email");
	 
	 $pass=$this->input->post("pass");
	 
	 $data=array("email"=>$em,"password"=>$pass);
	 
	 //print_r($data);
	 
	 
	 $chk=$this->adminmodel->login_check('admin',$data);
	 
	 
	 
	 if($chk!=false)
	 
	 {
		
		  $this->session->set_userdata("aid",$chk[0]->aid);
		  
		  
		  $this->session->set_userdata("email",$chk[0]->email);
		  
		  
		  
		  $this->session->set_flashdata('success','Login succefully');
	  
			redirect(base_url()."admin/dashboard");
		
		
		} 
		
		
		
	 
	 
	 else
	 
	 {
		 
$this->session->set_flashdata('error','Username and password are incorect');



$this->load->view("admin/login"); 
		 
		 
		 
	 }
	 
	 	
		
		
		
		
		
	
		
		}
	
	
	
	}



}

?>