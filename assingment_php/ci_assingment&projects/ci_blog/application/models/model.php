<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model

{
	
   public function __construct()
   {
	 
	 
	 parent:: __construct();  
   
     	   
	    }
	
	


//for user registration create a member function

public function insdata($tab,$data)

{
	
	
	$re=$this->db->insert($tab,$data);
	
	return $re;
	
	
}
	
	
     }

?>