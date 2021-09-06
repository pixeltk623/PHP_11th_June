<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model{


    public function __construct()
    {
        parent::__construct();
    }



    //insert all data


    public function insalldata($table,$data)

    {
     

        $query=$this->db->insert($table,$data);

        return $query;


    }

    // dislay record
    function displayrecords($table)
    {
    $query=$this->db->get($table);
    return $query->result_object();

    }

    function displaydata()
    {
    $query=$this->db->get("tour_mpcategory");
    return $query;

    }

    

    
    // create a member function user login

    public function userlog($table,$data)
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


}

?>