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
	public function insertUser($user=null, $password=null) {
		// query
		$this -> query = "INSERT INTO benutzer (user, password) VALUES (?, ?);";
		
		// prepare stmt
		$stmt = $this -> conn -> prepare($this -> query);

		// check stmt for errors
		try {
			if(!$stmt) throw new Exception($this -> conn -> errno.": ".$this -> conn -> error);
		} catch(Exception $e) {
			// output possible errors
			$this -> error(null, $e -> getMessage());
		}

		// check function arguments
		if($user != null && $password != null) {
			// bind params to query
			$stmt -> bind_param('ss', $user, $password);

			// execute query
			$stmt -> execute();

			// close stmt
			$stmt -> close();

			// clear query
			$this -> query = null;

			echo 'Inserted user: '.$user.', '.$password;
		} else {
			$this -> error(null, 'Arguments are not correct! ('.$user.', '.$password.')');
		}
	}

	// get all data from table
	public function getAllDataFromTable($table, $condition=null) {
		// query
		$this -> query = ($condition == null) ? "SELECT * FROM ".$table : "SELECT * FROM ".$table." ".$condition;

		// call data
		$output = array();
		$result = $this -> executeQuery(true);
		while($array = $result -> fetch_array()) {
			$output[] = $array;
		}
		return $output;
	}

	// get specific field
	public function getSpecificField($table, $column, $idname, $id) {
		// query
		$this -> query = "SELECT ".$column." FROM ".$table." WHERE ".$idname." = ".$id;

		$result = $this -> executeQuery(true) -> fetch_array();

		return $result[0];
	}

	// execute query -> returns result object
	public function executeQuery($type=true) {
		if($type) {
			// call data
			try {
				if($result = $this -> conn -> query($this -> query)) {
					return $result;
				} else throw new Exception($this -> conn -> errno.": ".$this -> conn -> error);
			} catch(Exception $e) {
				// output possible errors
				$this -> error(null, $e -> getMessage());
			}
		}
	}

	public function test($msg='') {
		if($msg != '') {
			return $msg;
		} else {
			return 'test';
		}
	}
}
?>