<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageUser extends CI_Controller{

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
		
         $data['data']=$this->AdminModel->displayrecords("tour_user");
         $this->load->view('admin/manageuser', $data);

       	
		// $this->load->view("admin/manageuser");
		
		$this->load->view("admin/include/footer");
         
         
 
         }
 
    }
      //delete main packages category


      public function delete()

      {
    
    
        $uid=$this->uri->segment(4);
    
        $where=array("uid"=>$uid);
    
        $this->AdminModel->delmcat('tour_user',$where,$uid);
    
        redirect(base_url()."admin/ManageUser");
    
    
    
       
    
    
       }

       //edit main category 


   public function edit()


   {

     
 $this->load->view("admin/include/header");
        
$this->load->view("admin/include/slidebar");

 // $this->load->view("admin/editmaincat");

// $this->load->view("admin/include/slidebar");

        

    $uid=$this->uri->segment(4);

    $where=array("uid"=>$uid);
    
    $edm["user"]=$this->AdminModel-> editmcat('tour_user',$where,$uid);

    // redirect(base_url()."admin/ShowMaincat",$edm);



   $this->load->view("admin/editdata",$edm);
    


   }
    


//    update data
 
   public function update()

   {

     

   
$this->load->helper('url');

 $this->load->view("admin/include/header");
        
$this->load->view("admin/include/slidebar");


     
     if($this->input->post("upduser"))

     {

        
        
        $uid=$this->input->post("uid");

        $uname=$this->input->post("uname");

        $uem=$this->input->post("uem");

        $umob=$this->input->post("umob");

        $where=array("uid"=>$uid);

        $data=array("uname"=>$uname,"uemail"=>$uem,"umobile"=>$umob);


        // print_r($data);


$this->AdminModel->updmain('tour_user',$data,$where,$uid);


    redirect(base_url().'admin/ManageUser');
    



 


     }
 
    }


   }

?>