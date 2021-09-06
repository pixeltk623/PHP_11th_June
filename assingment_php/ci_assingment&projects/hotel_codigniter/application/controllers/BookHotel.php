<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BookHotel extends CI_Controller

{
     public function __construct()


     {

        parent:: __construct();

        $this->load->model("model");


     }


     public function index()

     {

        $this->load->view('header.php');
          
        $this->load->view('menu.php');



        $this->load->view('bookhotel.php',$data);
        
        $this->load->view('footer.php');
            

     }



}


?>