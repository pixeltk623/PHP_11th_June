<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }



    public function index()

    {

        $this->load->library("form_validation");

        $this->form_validation->set_rules("cname","Name","required");

        $this->form_validation->set_rules("cem","Email","required|valid_email");


        $this->form_validation->set_rules("sub","Subject","required");


        $this->form_validation->set_rules("mess","Message","required");

        
        if($this->form_validation->run()==false)
        {    
        $this->load->view('include/header');
        $this->load->view('contact');
        $this->load->view('include/footer');
        
        }

        else

        {
            date_default_timezone_set('Asia/Kolkata'); 

            if($this->input->post("contact"))

            {

              $fnm=$this->input->post("cname");

              $em=$this->input->post("cem");

    

              $sub=$this->input->post("sub");

              $dsc=$this->input->post("mess");

              $date=date("d/m/y");
            
              $data=array("conname"=>$fnm,"conemail"=>$em,"consubject"=>$sub,"conmessage"=>$dsc,"condate"=>$date);


  //  print_r($data);

              $this->model->insalldata("tour_contact",$data);


              $this->session->set_flashdata("success","Thanks for Contact with us");


            //    $this->load->view("Contact");

               redirect(base_url()."Contact");



            }




        }
    

    }

}

?>