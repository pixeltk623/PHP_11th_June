<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller

{
     public function __construct()


     {

        parent:: __construct();

        $this->load->model("model");


     }

     public function index()
    {
      
       if(!$this->session->userdata('custid'))
       {  

       $this->load->library('session');   
	    $this->load->view('header.php');
       
  
       $data['shwcat']=$this->model->selectalldata('category');
       $this->load->view('menu.php',$data);

       $this->load->view('slider.php');
       $this->load->view('index.php');
       $this->load->view('footer.php');
      
         
      }
      
      else
      {

       $this->load->view('header.php');
     
      
        $data['shwcat']=$this->model->selectalldata("category");
        $this->load->view('menu.php',$this->session->userdata('custid'),$data);
       //  $this->load->view('slider.php');
       $this->load->view('index.php');
       $this->load->view('footer.php');
      
      }

      }
		

	}






?>