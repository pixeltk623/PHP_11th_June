<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('AdminModel');
    }

   
    public function index(){;
        $sess = $this->session->userdata("name");
        if(empty($sess))
        {
            $this->session->set_flashdata('error', 'Session has Expired. Please login');
            redirect(base_url()."admin/Adminlogin");
        }
        else
        {
            
        
        $this->load->view("admin/include/header");
		
		$this->load->view("admin/include/slidebar");
		
		$this->load->view("admin/dashboard");
		
		
		$this->load->view("admin/include/footer");
         
    
    }
}

   
}

?>