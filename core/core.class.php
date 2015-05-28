<?php
/*!
 * the core class of the tool
 * 
**/

class core {
	// vars
	public $db;
	
	function __construct() {
		$this -> db = new db(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	}

	public function error($errno, $error) {
		if($errno !== null) {
			if(DEBUGMODE) $this -> console('error', $errno.': '.$error);
			echo '<pre><code>'.htmlspecialchars($errno.': '.$error).'</code></pre>';
		} else {
			if(DEBUGMODE) $this -> console('error', $error);
			echo '<pre><code>'.htmlspecialchars($error).'</code></pre>';
		}
	}

	public function console($type, $message) {
		switch ($type) {
			case 'error':
				echo '<script>console.error("'.$message.'")</script>';
				break;
			case 'log':
				echo '<script>console.log("'.$message.'")</script>';
				break;
			default:
				echo '<script>console.log("'.$message.'")</script>';
				break;
		}
	}
}
?>
