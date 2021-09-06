<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller

{
     public function __construct()


     {                                                                                      

        parent:: __construct();

        $this->load->model("model");


     }


     public function index()

     {
  
      //  $this->load->helper(array('form', 'url'));

      $this->load->library('session');
      $this->load->library('form_validation');
       
      $this->form_validation->set_rules('em', 'Email', 'required|valid_email');

      $this->form_validation->set_rules('pass', 'Password', 'required');



      if($this->form_validation->run()==false)
      {
                

       $this->load->view('header.php');
         
       $this->load->view('menu.php');
         
       $this->load->view('login.php');
       
       $this->load->view('footer.php');
      

      }

      else
      {
           
        if($this->input->post("log"))

        {
 
        
           $em=$this->input->post("em");
           $pass=$this->input->post("pass");
           $data=array("email"=>$em,"password"=>$pass);
           $chk=$this->model->login_auth('customer',$data);

           if(!$chk==false)
           {
    

           
            // $this->session->set_userdata("custid",$custid[0]->custid);
            
            // $this->session->set_userdata("em",$em[0]->email);

            
            // $this->session->set_userdata("fname",$fname[0]->firstname);
           
            $session=array(

               'custid' => $chk[0]->custid,
               'em' => $chk[0]->email,
               'fname' => $chk[0]->firstname,
               'logged_in'=>TRUE 

            );
         
            
            $this->session->set_userdata($session);


            $this->session->set_flashdata('success','You are Logged In Successfuly as a Customer!');

            redirect(base_url()."Home");


           }
           else
           {

            
            $this->session->set_flashdata('error','Your Email and Password are Wrong try again!');

            redirect(base_url().'Login');
           }

          
        }
   

      }
           

    }

    public function Logout()

    {
              
           $this->session->unset_userdata("custid");
           
           $this->session->unset_userdata("em");
           
           $this->session->unset_userdata("fname");

           $this->session->sess_destroy();


           $this->session->set_flashdata('logoutsuccess','You are Logout Succefully');

           redirect(base_url().'Login');
          
       
       }

}


?>