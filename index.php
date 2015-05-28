<?php
	// load all required files
	require 'config.php';
	require 'core\core.class.php';
	foreach (glob("core\classes\*.subclass.php") as $class) {
		include $class;
	}

	$core = new core();
	$db = $core -> db;

?>
<!DOCTYPE html>
<html lang="de">
<head>
	<title>Audi Konfigurator</title>
	<meta name="charset" content="utf-8" />

	<link rel="stylesheet" type="text/css" href="app.css">
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<menu id="menu" role="navigation">
				<div class="menu-btn">
					<ul>
						<li>First List Point</li>
						<li>2</li>
						<li>Third Point</li>
						<li>4</li>
						<li>5</li>
					</ul>
				</div>
				<div class="user-btn">
					<ul>
						<li>First List Point</li>
						<li>2</li>
						<li>3</li>
						<li>Fourth Point</li>
						<li>5</li>
					</ul>
				</div>
			</menu>
			<div id="preview">
				<?php
					$db -> test('hallo');

					echo "<br /><br />";

					$db -> getAllDataFromTable('users');
				?>
			</div>
			<div id="logo"></div>
		</header>
		<section id="main" role="main">
			<form>
				<ul class="motors">
					<li class="item">
						<input type="checkbox" />
					</li>
				</ul>
				<!-- <input type="radio" /><br />
				<input type="radio" /><br /> -->
			</form>
		</section>
		<footer id="branding">
			BRANDING FOOTER
		</footer>
	</div>
</body>
</html>
