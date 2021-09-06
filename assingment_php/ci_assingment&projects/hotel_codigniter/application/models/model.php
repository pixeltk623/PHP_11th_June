<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model extends CI_Model 
{
      
    public function __construct()

    {
    
            parent::__construct();

    }
         
//create a member function for insertalla data

  public function insalldata($table,$data)
  
  
  {
           
    $query=$this->db->insert($table,$data); //this is a library of insert data in codeigniter

    return $query;
    
  }


  //create a member function for login 

  public function login_auth($table,$data)

  {
    
    $query=$this->db->get_where($table,$data);
    if($query->num_rows()==1)
    {
         
      return $query->result();

    }
    else
    {  
  
    return false;
 
  }

}


//create a member function for show profile

//create a member function for show all data


public function selectalldata($table)

{

  $query=$this->db->get($table);

  return $query->result_object();
  
  
}

public function select_where($table,$where)

{

  $query=$this->db->get_where($table,$where);
  $count = $query->num_rows();
  if($count==1)
  {

    return $query->row();
  }  

  else
  {

    return $query->result_object();
  }
  
}
  //create a member function for show profile with join tables

  // public function select_where_join($table,$table1,$on,$where)

  // {
  //       $this->db->select();
  //       $this->db->from($table);
  //       $this->db->join($tabl1,$on);
  //       $this->db->where($where);
  //       $res =$this->db->get();
  //       return $res->result_object();
       

  // }


  //create a member functions for edit data

  public function editprofile($table,$data,$where,$custid)
  {
       
    return $this->db->update($table,$data,$where,$custid);

  }

//update profile of user create a member function 

public function updateprofile($table,$data,$where,$custid)

{
      
  $this->db->update($table,$data,$where,$custid);

 //return $query;

}


//delete profile odf user

public function deletealldata($table,$where,$id)

{

  $this->db->delete($table,$where,$id);

}



}



?>