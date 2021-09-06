<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//error_reporting(0);


class showblog extends CI_Controller


{
	
    public function __construct()
	
	{

       parent:: __construct();
	   
	   $this->load->model("adminmodel");
	  

	}
	
		//show blogs...........

		public function index()
		
		{
			
		$this->load->helper('url');
		
		$this->load->view("admin/include/header");
		
		$this->load->view("admin/include/slidebar");
	
		$this->load->view("admin/include/footer");	

      $data['myblogs']=$this->adminmodel->shwblogs("addblogs"); 
  
    //print_r($data); exit;

     $this->load->view('admin/showblogs', $data);	
				
	}
	//delete blogs from admin blog
	public function delete()	
	{
		
	 //$bid=array("aid"=>$bid);	
	$bid=$this->uri->segment(4);
	 $where=array("bid"=>$bid);
	 // print_r($where);
	$this->adminmodel->deleteblogs('addblogs',$where,$bid);
	 
	 redirect(base_url()."admin/showblog");
	 
   
	}
	//for edit blogs..
	
	public function edit()
	
	{
	
		$this->load->helper('url');
		$this->load->view("admin/include/header");	
		$this->load->view("admin/include/slidebar"); 	
		$this->load->view("admin/include/footer");	
		
	 $bid=$this->uri->segment(4);
	 
	 $where=array("bid"=>$bid);
	 
	 $data['ed']=$this->adminmodel->editblogs("addblogs",$where,$bid); 
  
    //print_r($data); exit;

     $this->load->view('admin/editblog',$data);			
		
	}
	
	//update blogs..	
	//for edit blogs..
	public function update()
	
	{
		$this->load->helper('url');	
		$this->load->view("admin/include/header");
		$this->load->view("admin/include/slidebar");
		$this->load->view("admin/include/footer");	
	
		if($this->input->post("upd"))
		{		
			
	     $bid=$this->input->post("bid");
		 
		 $title=$this->input->post("title");
		
		 $desc=$this->input->post("desc");
	      $where=array("bid"=>$bid);
		
		  //print_r($where); exit;
		$data=array("title"=>$title,"descriptions"=>$desc);
	 
	      $this->adminmodel->updblogs("addblogs",$data,$where,$bid); 
    //print_r($data); exit;

         
	   redirect(base_url().'admin/showblog');
	
			
		}
		
		
	}
	
}
	
	
		
		
			
			
		

?>		