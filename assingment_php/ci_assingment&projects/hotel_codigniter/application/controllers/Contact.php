<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller

{
     public function __construct()


     {

        parent:: __construct();

        $this->load->model("model");


     }


     public function index()

     {
 //  $this->load->helper(array('form', 'url'));

 $this->load->library('form_validation');
       
 $this->form_validation->set_rules('name', 'Name', 'required');
 $this->form_validation->set_rules('em','Email', 'required|valid_email');
 $this->form_validation->set_rules('sub', 'Subject', 'required');

 $this->form_validation->set_rules('msg', 'Message', 'required');
 


 if($this->form_validation->run()==false)
 {
           

  $this->load->view('header.php');
    
  $this->load->view('menu.php');
    
  $this->load->view('contact.php');
  
  $this->load->view('footer.php');
 

 }

 else
 {
      
   if($this->input->post("sub"))

   {

      $nm=$this->input->post("name");
      $em=$this->input->post("em");
      $sub=$this->input->post("sub");
      $msg=$this->input->post("msg");
      
      
      $data=array("name"=>$nm,"email"=>$em,"subject"=>$sub,"message"=>$msg);


      $this->model->insalldata('contact',$data);

      $this->session->set_flashdata("success","Thanks for Contact with us Our team will contact Soon!");

      redirect(base_url()."Contact");





   }


 }
      

}



}


?>