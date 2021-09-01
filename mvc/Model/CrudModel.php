<?php 
	
class CrudModel {

	private $serverName = "localhost";
	private $userName = "root";
	private $password = "";
	private $databaseName = "php_11th_june";
	public $conn;
	public $query;
	public $result;
	public $response;


	public function __construct() {

		$this->dbConnect();
	}

	public function dbConnect() {

		$this->conn = mysqli_connect($this->serverName, $this->userName, $this->password, $this->databaseName);

		return $this->conn;

	}


	public function getData($table) {

		$this->query = "SELECT * FROM $table";
		$this->result = mysqli_query($this->conn, $this->query);

		while ($this->response[] = mysqli_fetch_object($this->result)) {}

		return array_filter($this->response);

	}

}

?>