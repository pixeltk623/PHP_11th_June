<?php

class Logout extends CI_Controller{

 

        function index()
        {
            $this->session->unset_userdata("");
            $this->session->sess_destroy();
         
            redirect(base_url());
        }
    
}

?>