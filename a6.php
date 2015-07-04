<?php
	/*!
	 * Template: A6
	 * 
	 * 
	 */
	// start form session
	session_start();

	// model ID
	$theID = 6;
	
	// load all required files
	require 'config.php';
	require (MAMP) ? 'core/core.class.php' : 'core\core.class.php';
	$path = (MAMP) ? 'core/classes/' : 'core\classes\\';
	foreach (glob($path.'*.subclass.php') as $class) {
		require $class;
	}

	// init core
	$core = new core();

	// load db connection
	$db = $core -> db;

	include 'all.php';
?>