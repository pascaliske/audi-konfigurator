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

	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$correct = false;
		foreach ($db -> getAllDataFromTable('benutzer', null) as $user) {
			if($username == $user['Username'] && $password == $user['Password']) {
				$correct = true;
				break;
			} else {
				$correct = false;
			}
		}

		if ($correct == true) {
			header("Location: ".dirname($_SERVER['PHP_SELF'])."/modelle/", TRUE, 301);
		} else {
			echo "<div class='msg error'>Der Benutzername und/oder das Passwort sind leider falsch.</div>";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="<?php echo HOME_DIR; ?>/bin/main.css">
	</head>
	<body>
		<div id="wrapper" class="login" data-uri="<?php echo HOME_DIR; ?>">
			<form action="" method="post">
				<input class="left" type="text" name="username" placeholder="Benutzername" />
				<input class="right" type="password" name="password" placeholder="Passwort" />
				<button class="submit" type="submit" name="submit"> </button>
			</form>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo HOME_DIR; ?>/bin/main.js"></script>
	</body>
</html>