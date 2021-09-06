<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddHotels extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('AdminModel');
    }

   
    public function index(){
        
         $this->load->view("admin/include/header");
		
	        $this->load->view("admin/include/slidebar");
		
		   // displadata 
      
           $result['data']= $this->AdminModel->displayrecords('admin');
           $this->load->view('admin/addhotels',$result);
        //    $this->session->set_flashdata("success","Thanks for Contact with us");
   
   
            // $this->load->view("admin/addhotels");
      
		
		
		$this->load->view("admin/include/footer");
         

        // displadata 
   
   
}

}

?>