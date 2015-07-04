<?php
	/*!
	 *
	 * 
	 * 
	 */
	
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
?>
<!DOCTYPE html>
<html>
<head>
	<title>Audi Konfigurator</title>
	<base href="">
	<link rel="stylesheet" type="text/css" href="bin/main.css" />
</head>
<body>
	<header id="header">
		<div class="steps">
			<ul>
				<li class=""><a href="#uebersicht">Übersicht</a></li>
				<li class="current"><a href="#motoren">Motoren</a></li>
				<li class=""><a href="#exterieur">Exterieur</a></li>
				<li class=""><a href="#interieur">Interieur</a></li>
				<li class=""><a href="#sonderausstattung">Sonderausstattung</a></li>
				<li class=""><a href="#meinaudi">Mein Audi</a></li>
			</ul>
		</div>
	</header>
	<section id="wrapper">
		<article id="content" class="">
			index.php
		</article>
		<aside id="sidebar">
			<div class="price">
				<h3>Ihr Fortschritt</h3>
				<div class="progress">
					<p></p>
					<div id="progressbar"></div>
				</div>
				<h3>Ihre Auswahl</h3>
				<ul>
					<li>host: <b><?php echo DB_HOST ?></b></li>
					<li>port: <b><?php echo DB_PORT ?></b></li>
					<li>user: <b><?php echo DB_USER ?></b></li>
					<li>password: <b><?php echo DB_PASSWORD ?></b></li>
					<li>db: <b><?php echo DB_NAME ?></b></li>
					<li>debug: <b><?php echo (DEBUGMODE) ? 'true' : 'false' ?></b></li>
				</ul>
			</div>
		</aside>
	</section>
	<footer id="branding">
		<p>&copy; <?php echo date("Y"); ?></p>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="bin/main.js"></script>
</body>
</html>