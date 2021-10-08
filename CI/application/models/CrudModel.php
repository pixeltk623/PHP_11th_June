<?php 
	

	class CrudModel extends CI_Model
	{
		
		function __construct()
		{
			
		}

		public function getAllData($pageNo = 0)
        {		
        		// $perPageData = 5;
          //       $query = $this->db->get('employee', $perPageData,$pageNo);

        	$query = $this->db->get('employee');
                return $query->result();
        }

        public function InsertData($data) {

        	return $this->db->insert('employee', $data);
        }
	}

?>