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
			$this->load->library('pagination');

		}

		public function pagination($page_no = 0) {

			
			$data['data'] = $this->CrudModel->getAllData($page_no);

			return $this->load->view('show', $data);

		}

		public function index() {

			// $config['total_rows'] = 50;
			// $config['per_page'] = 5;
			
			// $this->pagination->initialize($config);
			// echo $this->pagination->create_links();

			//die;
			
			$data['data'] = $this->CrudModel->getAllData();

			return $this->load->view('show', $data);

			// echo "<pre>";

			// print_r($data);
			
		}

		public function edit($id) {
			$query = $this->db->get_where('employee', array('id' => $id));

			$data['data'] = $query->result();
			return $this->load->view('edit', $data);

		

		}

		public function update($id) {
			$data = array(
      			"name" => $this->input->post("name"),
      			"email" => $this->input->post("email")
      		);

			$this->db->where('id', $id);
    		$data = $this->db->update('employee', $data);


    		if ($data) {
				$this->session->set_flashdata(
				array("className" => "alert-success", "message" => 'Employee Record Deleted'));
			} else {
				$this->session->set_flashdata(
				array("className" => "alert-danger", "message" => 'Mai Data Insert Nahi Karne dunga'));
			}
			redirect(base_url());
		}

		public function add_employee() {
			
			return $this->load->view('create');
		}

		public function delete($id) {
			$data = $this->db->delete('employee', array('id' => $id));

			if ($data) {
				$this->session->set_flashdata(
				array("className" => "alert-success", "message" => 'Employee Record Deleted'));
			} else {
				$this->session->set_flashdata(
				array("className" => "alert-danger", "message" => 'Mai Data Insert Nahi Karne dunga'));
			}
			redirect(base_url());
		}

		public function store() {

			$data = array(
      			"name" => $this->input->post("name"),
      			"email" => $this->input->post("email")
      		);
			$data = $this->CrudModel->InsertData($data);

			if ($data) {
				$this->session->set_flashdata(
				array("className" => "alert-success", "message" => 'Employee Record Created'));
			} else {
				$this->session->set_flashdata(
				array("className" => "alert-danger", "message" => 'Mai Data Insert Nahi Karne dunga'));
			}
			redirect(base_url());

			//$query = "INSERT INTO `employee` (`name`, `email`) VALUES ('sds', 'asdas@mai')";

			//$this->db->query($query);



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