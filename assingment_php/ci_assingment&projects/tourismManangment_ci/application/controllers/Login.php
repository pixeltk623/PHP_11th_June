<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }



    public function index()
    
    {
        
            

        $this->load->library("form_validation");


        $this->form_validation->set_rules("em1","Email","required|valid_email");


        $this->form_validation->set_rules("pass1","Password","required|min_length[3]|max_length[10]");

        
        //form validations library using codigniter

        if($this->form_validation->run()==false)
        {


        $this->load->view('include/header');
        $this->load->view('index');
        $this->load->view('include/footer');
         

         }


         else


         {
        //login logic ....
        
        if($this->input->post("login"))

        
        {

            $em=$this->input->post("em1");
            
            $pass=$this->input->post("pass1");

            $data=array("uemail"=>$em,"upassword"=>$pass);
              
           


            $chk=$this->AdminModel->adminlog("tour_user",$data);

            if($chk!=false)

            {

           $this->session->set_userdata("uid",chk[0]->uid);
           
           $this->session->set_userdata("em1",chk[0]->uemail);

           $this->session->set_userdata('name',$em);
        
           $this->session->set_flashdata("success11","Your are Logged In Succefully");

            redirect(base_url(''));
            
        }

        else

        {

            $this->session->set_flashdata("error11","Your Email and Password are Incorect");

            redirect(base_url(''));

        }
    }

   
    }
}

}

?>