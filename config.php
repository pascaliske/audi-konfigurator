<?php
	// win <-> mac path hack
	define("MAMP", true);

	// server of the DB
	if(!defined("DB_HOST")) {
		define("DB_HOST", "localhost");
	}

	// port of the DB
	if(!defined("DB_PORT")) {
		define("DB_PORT", "3306");
	}

	// username of the DB
	if(!defined("DB_USER")) {
		define("DB_USER", "root");
	}

	// password of the DB
	if(!defined("DB_PASSWORD")) {
		$password = (MAMP) ? "root" : "";
		
		define("DB_PASSWORD", $password);
	}

	// name of the DB
	if(!defined("DB_NAME")) {
		define("DB_NAME", "audi-konfigurator");
	}

	if(!defined("HOME_DIR")) {
		define("HOME_DIR", '//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']));
	}

	// DEBUGMODE
	if(!defined("DEBUGMODE")) {
		define("DEBUGMODE", true);
	}
?>