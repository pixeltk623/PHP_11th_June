<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddCategory extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('AdminModel');
    }



    public function index(){
        $sess = $this->session->userdata("name");
        if(empty($sess))
        {
            $this->session->set_flashdata('error', 'Session has Expired. Please login');
            redirect(base_url()."admin/Adminlogin");
        }
         else
         {

        $this->load->view("admin/include/header");
		
		$this->load->view("admin/include/slidebar");
		
		$this->load->view("admin/addcategory");
		
		
		$this->load->view("admin/include/footer");
         }

          //insert a category


          if($this->input->post("addcat"))

          {

            date_default_timezone_set("Asia/Calcutta");

            $catnm=$this->input->post("catname");
            
            $desc=$this->input->post("desc");
            
            $cdate=date("d/m/y");
            $ctime=date("H:i:s a");
            

            $data=array("catname"=>$catnm, "description"=>$desc,"cdate"=>$cdate,"ctime"=>$ctime);


            $this->AdminModel->insalldata("category",$data);


            $this->session->set_flashdata("success1","Category Added Succefully");

            redirect(base_url()."admin/AddCategory");





          }


    
    }

   
}

?>