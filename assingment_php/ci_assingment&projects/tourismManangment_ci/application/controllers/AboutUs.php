<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUs extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }



    public function index()
    
    {
        
        $this->load->view('include/header');
        $this->load->view('aboutus');
        $this->load->view('include/footer');
}

}

?>