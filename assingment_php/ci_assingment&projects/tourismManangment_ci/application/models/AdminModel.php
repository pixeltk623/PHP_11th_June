<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
    }


//admin login create a member function

public function adminlog($table,$data)
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





//insert all data


    public function insalldata($table,$data)

    {
     

        $query=$this->db->insert($table,$data);

        return $query;


    }


    // fetch main category
    public function fetchdata()
    {
        $this->db->order_by('mpcname','ASC');
        $query=$this->db->get('tour_mpcategory');
        return $query->result();
    }


    // fetch sub category
    // public function fetchdata1()
    // {
    //     // $this->db->order_by('spcname','ASC');
    //     $query=$this->db->get('tour_spcategory');
    //     return $query->result();
    // }



// display all data member function



function displayrecords($table)
{
$query=$this->db->get($table);
return $query->result();
}




 

    //delete main package category cerate a meber function


    public function delmcat($table,$where,$uid)

    {

         $qry=$this->db->delete($table,$where,$uid);


         return $qry;
  


    }


    public function editmcat($table,$where,$uid)

    {


       $qry=$this->db->get_where($table,$where,$uid);

       $result=$qry->result_array();


       return $result;




    }




    public function updmain($table,$data,$where,$uid)

    {

   
     $this->db->update($table,$data,$where,$uid);



    }




}



 




 
 
?>