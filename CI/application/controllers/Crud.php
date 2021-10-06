<?php 
	class Crud extends CI_Controller
	{
		public $name;
        public $email;
        //public $date;

		function __construct()
		{
			parent::__construct();
			$this->load->model('CrudModel');
		}

		public function index() {
			
			$data['data'] = $this->CrudModel->getAllData();

			return $this->load->view('show', $data);

			// echo "<pre>";

			// print_r($data);
			
		}

		public function add_employee() {
			
			return $this->load->view('create');
		}


		public function store() {

			$query = "INSERT INTO `employee` (`name`, `email`) VALUES ('sds', 'asdas@mai')";

			$this->db->query($query);



			//$form_data = $this->input->post();
      		// $name = $this->input->post("name");
      		// $email = $this->input->post("email");

      		// $data = array(
      		// 	"name" => $this->input->post("name"),
      		// 	"email" => $this->input->post("email")
      		// );

      		// echo "<pre>";

      		// print_r($data);


      		//$this->name    = $_POST['name']; // please read the below note
            //$this->email  = $_POST['email'];
            //$this->date     = time();

            // echo "<pre>";

            // print_r($this);
            // die;

      		//$this->db->insert('employee', $data);
		}
		

	}

?>