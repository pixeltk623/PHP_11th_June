<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddMainPackageCategory extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('AdminModel');
    }



    public function index(){

            //   validation library

        $this->load->library("form_validation");


        $this->form_validation->set_rules("mpcname","Add Main Packge Category","required");
 

        if($this->form_validation->run()==false)
        {
        $this->load->view("admin/include/header");
		
		$this->load->view("admin/include/slidebar");
		
		$this->load->view("admin/addmainpackagecategory");
		
		
		$this->load->view("admin/include/footer");
         
        }
        else
        {
          //insert a category


          if($this->input->post("addcat"))

          {

            date_default_timezone_set("Asia/Calcutta");

            $catnm=$this->input->post("mpcname");
            
        
            
            $cdate=date("d/m/y");
           

            $data=array("mpcname"=>$catnm,"cdate"=>$cdate);


            $this->AdminModel->insalldata("tour_mpcategory",$data);


            $this->session->set_flashdata("success1","Category Added Succefully");

            redirect(base_url()."admin/AddMainPackageCategory");





          }
          }


    
    }

   
}

?>