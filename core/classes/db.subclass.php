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

	// insert new row
	public function insertRow($keys, $values) {
		// query
		$this -> query = "INSERT INTO users (id, user, password) VALUES (?, ?, ?)";

		// prepare query
		$stmt = $this -> conn -> prepare($query);

		// check stmt for errors
		try {
			if(!$stmt) throw new Exception($this -> conn -> errno.": ".$this -> conn -> error);
		} catch(Exception $e) {
			// output possible errors
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

	// get all data from table
	public function getAllDataFromTable($table) {
		// query
		$this -> query = "SELECT * FROM ".$table;

		// call data
		try {
			if($result = $this -> conn -> query($this -> query)) {
				while ($array = $result -> fetch_assoc()) {
					echo 'id = '.$array['id'].'<br />';
					echo 'user = '.$array['user'].'<br />';
					echo 'password = '.$array['password'].'<br /><br />';
				}
			} else throw new Exception($this -> conn -> errno.": ".$this -> conn -> error);
		} catch(Exception $e) {
			// output possible errors
			$this -> error(null, $e -> getMessage());
		}
	}

	public function test($msg) {
		echo $msg;
	}
}
?>
