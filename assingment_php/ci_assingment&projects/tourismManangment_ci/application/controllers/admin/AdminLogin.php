<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('AdminModel');
    }



    public function index()
    
    {
        
            

        $this->load->library("form_validation");


        $this->form_validation->set_rules("em","Email","required|valid_email");


        $this->form_validation->set_rules("pass","Password","required|min_length[3]|max_length[10]");

        
        //form validations library using codigniter

        if($this->form_validation->run()==false)
        {


        $this->load->view('admin/login');
         

         }


         else


         {
        //login logic ....
        
        if($this->input->post("log"))

        
        {

            $em=$this->input->post("em");
            
            $pass=$this->input->post("pass");

            $data=array("email"=>$em,"password"=>$pass);
              
            


            $chk=$this->AdminModel->adminlog("admin",$data);

            if($chk!=false)

            {
                
                
           $this->session->set_flashdata("aid",chk[0]->aid);
           
           $this->session->set_flashdata("em",chk[0]->email);     

           $this->session->set_userdata("name",$em);
           

            $this->session->set_flashdata("success","Your are Logged In Succefully");

            redirect(base_url()."admin/Dashboard");
                
        }

        else

        {

            $this->session->set_flashdata("error","Your Email and Password are Incorect");

            redirect(base_url()."admin/Adminlogin");

        }
    }

   
    }
}

}

?>