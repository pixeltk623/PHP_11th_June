<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Profile extends CI_Controller

{
     public function __construct()


     {

        parent:: __construct();

        $this->load->model("model");


     }

     public function index()
    {
      
       if($this->session->userdata('custid'))
       {  
      
       $this->load->view('header.php');
       $this->load->view('menu.php',$this->session->userdata('custid'));
       
       $custid=array("custid"=>$this->session->userdata("custid"));
       $data['shw']=$this->model->select_where("customer",$custid); 

       $this->load->view('myprofile.php',$data);
       $this->load->view('footer.php');
      
      }

      }


      //upload image and update profile

      public function upload_data()

      {

         $where=array("custid"=>$this->session->userdata("custid"));
         //$where=array("custid",$custid);
         
         $data['shw']=$this->model->select_where("customer",$where); 
         
         $this->load->view('myprofile.php',$data);

         if($this->input->post("upd"))

         {
              
            $config['upload_path']='./uploads/';
            $config['allowed_types']= 'gif|jpg|png';
            $config['max_size']= '1024';
            // $config['max_width']= '4000';
            // $config['max_height']= '4000';
            $pimage=basename($_FILES["img"]["name"]);
            $path=$config['upload_path'].$pimage;
            $this->load->library('upload',$config);
            $fnm=$this->input->post("fname");
            $lnm=$this->input->post("lname");
            $em=$this->input->post("em");
            $g=$this->input->post("gender");
            $h=implode(",",$this->input->post("chk"));
            $cn=$this->input->post("country");

            if(!$this->upload->do_upload('img'))

            {

               $error=array('error'=>$this->upload->display_errors());

               redirect(base_url()."Profile");


            }

            else
            {

            

               $data=array("photo"=>$path,"firstname"=>$fnm,"lastname"=>$lnm,"email"=>$em,"gender"=>$g,"hobby"=>$h,"cname"=>$cn);

               //print_r($data);

               $this->model->editprofile("customer",$data,$where,$custid);

               redirect(base_url()."Profile");


            }

   

         }
      }         
  //delete a profile of user..

       public function Delete()

       {
           $id=$this->uri->segment(3);
           $where=array("custid"=>$id);
           $this->model->deletealldata('customer',$where,$id);
            
           redirect(base_url()."Login/Logout");


       }
      
          







     
   }






?>