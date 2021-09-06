<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }



    public function index(){
      
        $this->load->library("form_validation");
        // password encript library
        // $this->load->library('encrypt');


        $this->form_validation->set_rules("name","Name","required");

        $this->form_validation->set_rules("em","Email","required|valid_email|is_unique[tour_user.uemail]");

        $this->form_validation->set_rules("mob","Mobile","required|max_length[10]|min_length[10]");

        $this->form_validation->set_rules("pass","Password","required|max_length[8]|min_length[3]");

        if($this->form_validation->run()==false)
        { 

         $this->load->view('include/header');
         $this->load->view('index');
         $this->load->view('include/footer');

         $this->session->set_flashdata("error","Please Fill All Filed Required");

         
        }
        else
        {   
            date_default_timezone_set('Asia/Kolkata'); 

            if($this->input->post("join")){
                
                
                
                $name=$this->input->post("name");
                $em=$this->input->post("em");
                $mob=$this->input->post("mob");
             
                 $pass=$this->input->post("pass");
                
                // $key = 'super-secret-key';
                // $pass_word = $this->encrypt->encode($pass,$key);

                $date=date("d/m/y H:i a");

                $data=array("uname"=>$name,"umobile"=>$mob,"uemail"=>$em,"upassword"=>$pass,"udate"=>$date);

                $this->model->insalldata("tour_user",$data);

                $this->session->set_flashdata("success","Your Registration Complate Successfully");

                redirect(base_url(''));
            }
        }


         
        
 
  
    } // index funcition close
         

   
}
 

?>