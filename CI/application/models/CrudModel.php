<?php 
	

	class CrudModel extends CI_Model
	{
		
		function __construct()
		{
			
		}

		public function getAllData()
        {
                $query = $this->db->get('employee');
                return $query->result();
        }
	}

?>