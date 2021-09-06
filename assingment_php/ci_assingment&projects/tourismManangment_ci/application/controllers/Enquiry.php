<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }



    public function index()
    
    {
        // $this->load->view('enquiry');
// $data['title']= "Teats";
        // $this->load->view('include/header');
        $data['h']=$this->model->displaydata();   
       
        $this->load->view('enquiry',$data);
        // $this->load->view('include/footer');
}

}

?>