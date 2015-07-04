<?php
/*!
 * the core class of the tool
 * 
**/

class core {
	// vars
	public $db;
	
	function __construct() {
		// init new db connection
		$this -> db = new db(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	}
	
	// modell functions
	public function getModelName($id=null) {
		if($id != null) {
			return $this -> db -> getSpecificField('modelle', 'Name', 'ModellID', $id);
		}
	}

	public function generateModelURL($model=null) {
		if($model != null) {
			return strtolower('/'.$this -> db -> getSpecificField('modelle', 'Name', 'ModellID', $model).'/');
		}
	}

	// paket functions
	public function getPaketName($id) {
		if($id != null) {
			return $this -> db -> getSpecificField('pakete', 'Name', 'PaketID', $id);
		}
	}

	public function generatePaketURL($model=null, $paket=null) {
		if($model != null) {
			if($paket == 0) {
				return strtolower($this -> generateModelURL($model).'none/');
			} else {
				return strtolower($this -> generateModelURL($model).$this -> db -> getSpecificField('pakete', 'Name', 'PaketID', $paket).'/');
			}
		}
	}

	// escape strings to css class name conventions
	public function escapeClass($string=null) {
		if($string != null) {
			// change 'ß' to 'ss'
			$string = ereg_replace('ä', 'ae', $string);
			$string = ereg_replace('ö', 'oe', $string);
			$string = ereg_replace('ü', 'ue', $string);

			// change german 'ä,ö,ü' to 'ae,oe,ue'
			$string = ereg_replace('ß', 'ss', $string);

			return $string;
		}
	}

	// debug functions
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