<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller

{
     public function __construct()


     {

        parent:: __construct();

        $this->load->model("adminmodel");


     }


     public function index()

     {

        $this->load->view('admin/sidebar.php');

        $this->load->view('admin/header.php');
            
           
        $this->load->view('admin/dashboard.php');
           

        $this->load->view('admin/footer.php');
             

     }



}


?>