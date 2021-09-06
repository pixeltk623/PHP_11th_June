<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//error_reporting(0);

class addblog extends CI_Controller


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
	
		$this->load->view("admin/addblogs");
         
		
		$this->load->view("admin/include/footer");
		
		
	}
	
	public function do_upload()
	{ 
	
	
	   
		
		if($this->input->post("sub"))
		{
			
		 $config['upload_path']          = './uploads/';
         $config['allowed_types']        = 'gif|jpg|png';
         $config['max_size']             = 1000;
         $config['max_width']            = 1024;
         $config['max_height']           = 768;
		 
		$bimg=basename($_FILES["img"]["name"]);
		
		$path=$config['upload_path'].$bimg;
		

         $this->load->library('upload', $config);
	
		
		 $title=$this->input->post("title");
		
		 $desc=$this->input->post("desc");
		
	
	      
		if(! $this->upload->do_upload('img'))
		{
			
			
			
	     $error = array('error' => $this->upload->display_errors()); 
		 
		 	

		 redirect(base_url()."admin/addblog");
			
		}
	
	
	else
	{
		
		$data=array("photo"=>$path,"title"=>$title,"descriptions"=>$desc);
		
		
		
		
		//print_r($data);
			
		$this->adminmodel->insertblog("addblogs",$data);	
		
		
		
	
	   redirect(base_url().'admin/addblog');
	
	

		
	}
		
		}
	
		
		
  }
		
			
		
	
}

?>