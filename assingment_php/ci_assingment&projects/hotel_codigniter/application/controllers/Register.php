<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller

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
       
       $this->form_validation->set_rules('fname', 'Firstname', 'required');
       $this->form_validation->set_rules('lname', 'Lastname', 'required');
       $this->form_validation->set_rules('em', 'Email', 'required|valid_email|is_unique[customer.email]');

       $this->form_validation->set_rules('pass', 'Password', 'required');
       $this->form_validation->set_rules('cpass', 'Confirm Password Confirmation', 'required');


       if($this->form_validation->run()==false)
       {
                 

        $this->load->view('header.php');
          
        $this->load->view('menu.php');
          
        $this->load->view('register.php');
        
        $this->load->view('footer.php');
       

       }

       else
       {
            
         if($this->input->post("reg"))

         {

            $fnm=$this->input->post("fname");
            $lnm=$this->input->post("lname");
            $em=$this->input->post("em");
            $pass=$this->input->post("pass");
            $cpass=$this->input->post("cpass");
            $rdate=date("d/m/y");
            
            $data=array("firstname"=>$fnm,"lastname"=>$lnm,"email"=>$em,"password"=>$pass,"rdate"=>$rdate);


            $this->model->insalldata('customer',$data);

            $this->session->set_flashdata("success","Thanks for Register as a Customer with Us!");

            redirect(base_url()."Login");

            // $this->load->view('login');
            




         }
    

       }
            

     }



}


?>