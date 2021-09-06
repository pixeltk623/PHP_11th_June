<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddSubPackageCategory extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('AdminModel');
    }



    public function index(){
       
       
        
            //   validation library

        $this->load->library("form_validation");


        $this->form_validation->set_rules("spcname","Add Sub Packge Category","required");
 
        $this->form_validation->set_rules("mpcat","Select Main Packge Category","required");

        if($this->form_validation->run()==false)
        {
        $this->load->view("admin/include/header");
		
		$this->load->view("admin/include/slidebar");
		
        $data['tour_mpcategory']=$this->AdminModel->fetchdata();
        $this->load->view('admin/addsubpackagecategory', $data);
		
		
		$this->load->view("admin/include/footer");
         
        }
        else
        {
          //insert a category


          if($this->input->post("addcat"))

          {

            date_default_timezone_set("Asia/Calcutta");

            $catnm=$this->input->post("spcname");
            $mpcat=$this->input->post("mpcat");
            
        
            
            $cdate=date("d/m/y");
           

            $data=array("spcname"=>$catnm,"mpcid"=>$mpcat,"spcdate"=>$cdate);


            $this->AdminModel->insalldata("tour_spcategory",$data);


            $this->session->set_flashdata("success1","Category Added Succefully");

            redirect(base_url()."admin/AddSubPackageCategory");





          }
          }
 
         
 
    }

   

 
}

?>