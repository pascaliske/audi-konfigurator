<?php
	// server of the DB
	if(!defined(DB_HOST)) {
		define(DB_HOST, 'localhost');
	}

	// port of the DB
	if(!defined(DB_PORT)) {
		define(DB_PORT, '3306');
	}

	// socket of the DB
	if(!defined(DB_SOCKET)) {
		define(DB_SOCKET, '/Applications/MAMP/tmp/mysql/mysql.sock');
	}

	// username of the DB
	if(!defined(DB_USER)) {
		define(DB_USER, 'root');
	}

	// password of the DB
	if(!defined(DB_PASSWORD)) {
		define(DB_PASSWORD, 'roost');
	}

	// name of the DB
	if(!defined(DB_NAME)) {
		define(DB_NAME, 'mysql');
	}
?>
