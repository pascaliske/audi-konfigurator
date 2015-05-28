<?php
/*!
 * the db class of the tool
 * 
**/

class db extends core {
	// vars
	private $conn;
	private $query;

	function __construct($host, $user, $password, $db) {
		$this -> conn = new mysqli($host, $user, $password, $db);

		if($this -> conn -> connect_errno) error($this -> conn -> connect_errno, $this -> conn -> connect_error);
	}

	public function insert($keys, $values) {

		// query
		$this -> query = "INSERT INTO users (id, user, password) VALUES (?, ?, ?)";

		// prepare query
		$stmt = $this -> conn -> prepare($query);

		// check stmt for errors
		try {
			if(!$stmt) throw new Exception($this -> conn -> errno.": ".$this -> conn -> error);
		} catch(Exception $e) {
			$this -> error(null, $e -> getMessage());
		}

		// bind params to query
		$stmt -> bind_param('iss', $id, $username, $password);

		// execute query
		$stmt -> execute();

		// close stmt
		$stmt -> close();

		// clear query
		$this -> query = null;
	}

	public function getData() {
		
	}
}
?>
