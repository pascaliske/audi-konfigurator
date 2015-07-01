<?php
	/*!
	 * Template: A1
	 * 
	 * 
	 */
	// start form session
	session_start();

	// model ID
	$theID = 1;
	
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
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo HOME_DIR; ?>/bin/main.css" />
</head>
<body class="<?php echo strtolower($db -> getSpecificField('modelle', 'Name', 'ModellID', $theID)); ?>">
	<header id="header">
		<div class="steps">
			<ul>
				<li class=""><a href="<?php echo strtolower(HOME_DIR.'/'.$core -> getModelName($theID).'/'.$_GET['paket'].'/'); ?>motoren/">Motoren</a></li>
				<li class=""><a href="<?php echo strtolower(HOME_DIR.'/'.$core -> getModelName($theID).'/'.$_GET['paket'].'/'); ?>exterieur/">Exterieur</a></li>
				<li class=""><a href="<?php echo strtolower(HOME_DIR.'/'.$core -> getModelName($theID).'/'.$_GET['paket'].'/'); ?>interieur/">Interieur</a></li>
				<li class=""><a href="<?php echo strtolower(HOME_DIR.'/'.$core -> getModelName($theID).'/'.$_GET['paket'].'/'); ?>sonderausstattung/">Sonderausstattung</a></li>
				<li class="current"><a href="<?php echo strtolower(HOME_DIR.'/'.$core -> getModelName($theID).'/'.$_GET['paket'].'/'); ?>meinaudi/">Mein Audi</a></li>
			</ul>
		</div>
	</header>
	<section id="wrapper">
		<article id="content" class="">
		<?php
			
		?>
		</article>
		<aside id="sidebar">
			<div class="price">
				<h3>Ihr Fortschritt</h3>
				<div class="progress">
					<p></p>
					<div id="progressbar"></div>
				</div>
			</div>
		</aside>
	</section>
	<footer id="branding">
		<p>&copy; <?php echo date("Y"); ?></p>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo HOME_DIR; ?>/bin/main.js"></script>
</body>
</html>