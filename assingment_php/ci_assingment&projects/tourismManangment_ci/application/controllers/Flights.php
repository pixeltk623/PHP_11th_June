<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flights extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }



    public function index()
    
    {
        
        $this->load->view('include/header');
     $this->load->view('flights');
        $this->load->view('include/footer');
        
}
 


    
}

?>