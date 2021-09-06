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
	public function insertData($table, $data) {
		$arrayKey = array_keys($data);
		$colName = "`".implode("`,`", $arrayKey)."`";
		$values = "'".implode("','", $data)."'";
		$this->query = "INSERT INTO $table ($colName) VALUES ($values)";
		return $this->result = mysqli_query($this->conn, $this->query);
	}
	public function deleteData($table, $data) {
		$this->query = "DELETE FROM $table WHERE id=".$data;
		return $this->result = mysqli_query($this->conn, $this->query);
	}
	public function editData($table, $data) {

		$this->query = "SELECT * FROM $table WHERE id=".$data;
		$this->result = mysqli_query($this->conn, $this->query);
		return $this->result = mysqli_fetch_object($this->result);
	}
	public function updateData($table, $data) {
		$this->query = "UPDATE $table SET `class`='".$data['class']."',`name`='".$data['course']."' WHERE id=".$data['cid'];
		return $this->result = mysqli_query($this->conn, $this->query);
	}

}

?>