<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class adminmodel extends CI_Model

{
  
  public function __construct()
  
  {
	  
	parent:: __construct(); 
  
  }
  
  //admin login procedure start here..
  
 public function login_check($tab,$data)

  {
	  
	 $qry=$this->db->get_where($tab,$data);  
	  
	  if($qry->num_rows()==1)
	  
	  {
		  
		return $qry->result();  
		  
	  }
	  
	  else
	  
	  {
		  
		  return false;
		  
		  
	  }
	  
	  
	  
  }
  
  
  //add blogs or insert data in blogs table...
  
  public function insertblog($tab,$data)
  {
	  
	$this->db->insert($tab,$data);  
	   
	//  return $i;
  
  }
  
  //show blogs here...

  public function shwblogs()

  {
	
  $query = $this->db->query("SELECT * FROM addblogs");//your argument 
  $result = $query->result_array();
  return $result;//passing data as Objective Array
	  
	  
  }
  
  //function for delete blogs...
 
  public function deleteblogs($table,$where,$bid)
  
  {
	  
      $this->db->delete($table,$where,$bid);
	  
	  
	   // $this->db->last_query();   
	  
  }
  
	  
	  
 //function for edit blogs...
  
  
  public function editblogs($table,$where,$bid)
  
  {
	  
      $qry=$this->db->get_where($table,$where,$bid);
	  
	  
	  $result=$qry->result_array();
	  
	  
	  return $result;
	  
	  
	   // $this->db->last_query();   
	  
  }
	  
 //function for update blogs...
  
  
  public function updblogs($table,$data,$where,$bid)
  
  {
	  
     $this->db->update($table,$data,$where,$bid);
	  	  
	  
	   // $this->db->last_query();   
	  
  }	
	
}


?>