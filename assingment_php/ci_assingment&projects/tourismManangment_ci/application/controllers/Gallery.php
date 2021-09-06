<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('AdminModel');
    }

    function index(){

        $this->load->view("include/header");
		 
      
       $data['data']=$this->AdminModel->displayrecords("tour_gallery");
       $this->load->view('gallery', $data);

         
      // $this->load->view("admin/manageuser");
      
      $this->load->view("include/footer");
    }
}