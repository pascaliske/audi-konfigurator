<?php
	/*!
	 *
	 * 
	 * 
	 */
	
	// model ID
	$theID = 88;
	
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
	<link rel="stylesheet" type="text/css" href="<?php echo HOME_DIR; ?>/bin/main.css" />
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
			<div>
				<?php
					echo $db -> getSpecificField('modelle', 'Name', 'ModellID', $theID);
				?>

				<input type="text" placeholder="text" />
				<input type="email" placeholder="email" />
				<input type="password" placeholder="password" />
				<input type="url" placeholder="url" />
				<input type="date" placeholder="date" />
				<input type="month" placeholder="month" />
				<input type="week" placeholder="week" />
				<textarea></textarea>
				<select>
					<option value="">Option 1</option>
					<option value="">Option 2</option>
					<option value="">Option 3</option>
					<option value="">Option 4</option>
					<option value="">Option 5</option>
				</select>
				<input type="search" placeholder="search" />
				<input type="submit" placeholder="Test" />
			</div>
			<div id="heading">
				<h1>Überschrift</h1>
				<p><?php $db -> test('test'); ?></p>
			</div>
			<form action="" method="">
				<div id="items">
					<label id="item1" class="item" for="">
						<div class="cmd">
							<input type="checkbox" name="" />
						</div>
						<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					</label>
					<label id="item2" class="item item-has-image" for="">
						<div class="cmd">
							<input type="radio" name="" />
						</div>
						<div class="image">
							<img src="http://placehold.it/220x150/&text=img" />
						</div>
						<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					</label>
					<label id="item3" class="item" for="">
						<div class="cmd">
							<input type="checkbox" name="" />
						</div>
						<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					</label>
					<label id="item4" class="item item-has-image" for="">
						<div class="cmd">
							<input type="checkbox" name="" />
						</div>
						<div class="image">
							<img src="http://placehold.it/220x150/&text=img" />
						</div>
						<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					</label>
					<label id="item5" class="item item-has-image" for="">
						<div class="cmd">
							<input type="checkbox" name="" />
						</div>
						<div class="image">
							<img src="http://placehold.it/220x150/&text=img" />
						</div>
						<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					</label>
					<label id="item6" class="item" for="">
						<div class="cmd">
							<input type="checkbox" name="" />
						</div>
						<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					</label>
				</div>
				<div id="footer">
					<input type="submit" value="Weiter..." />
				</div>
			</form>
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
					<li>os: <b><?php echo $core->getOS(); ?></b></li>
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
	<script type="text/javascript" src="<?php echo HOME_DIR; ?>/bin/main.js"></script>
</body>
</html>