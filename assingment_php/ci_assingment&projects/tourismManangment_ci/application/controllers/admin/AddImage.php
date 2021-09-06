<?php

class AddImage extends CI_Controller {

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
        $this->load->view("admin/addimage",array("error"=>""));
         }
     }

     public function upload(){
         $config['upload_path']="./upload/";
         $config['allowed_types']= "jpg|jpeg|gif|png";
      
         $this->load->library("upload",$config);
 
       
         if(!$this->upload->do_upload()){
 
               $this->session->set_flashdata("error","No file selected");
             redirect(base_url()."admin/addimage");
          
         }
         else{

             $file_data=$this->upload->data();
            foreach($file_data as $img)
         {  
             $date=date("d/m/y");
             $data=array("photo"=>$img,"imgdate"=>$date);
             
             $this->model->insalldata("tour_gallery",$data);
       
            $this->session->set_flashdata("success","Image Upload successfully");
            redirect(base_url()."admin/addimage");

         }
         }
     
}
}
?>