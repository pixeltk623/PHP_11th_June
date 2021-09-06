<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddPackageCategory extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('AdminModel');
    }



    public function index(){
       
       
        
            //   validation library

        $this->load->library("form_validation");


        $this->form_validation->set_rules("pcname","Add Packge Category","required");
 
        $this->form_validation->set_rules("pcat","Select Sub Packge Category","required");

        if($this->form_validation->run()==false)
        {
        $this->load->view("admin/include/header");
		
		  $this->load->view("admin/include/slidebar");
		
         $data['tour_spcategorys']=$this->AdminModel->displayrecords("tour_spcategory");
         $this->load->view('admin/addpackagecategory', $data);

       
		
		$this->load->view("admin/include/footer");
         
        }
        else
        {
          //insert a category


          if($this->input->post("addcat"))

          {

            date_default_timezone_set("Asia/Calcutta");

            $catnm=$this->input->post("pcname");
            $spcat=$this->input->post("pcat");
            
        
            
            $cdate=date("d/m/y");
           

            $data=array("spcid"=>$spcat,"cname"=>$catnm,"sdate"=>$cdate);


            $this->AdminModel->insalldata("tour_category",$data);


            $this->session->set_flashdata("success1","Category Added Succefully");

            redirect(base_url()."admin/AddPackageCategory");

          

          

          }
          }
 
          
 
 
    }
 
 
}

?>