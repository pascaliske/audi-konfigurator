<?php
	require 'config.php';

	function error($errno, $error) {
		if($errno !== null) {
			console('error', $errno.': '.$error);
			echo '<pre><code>'.htmlspecialchars($errno.': '.$error).'</code></pre>';
		} else {
			console('error', $error);
			echo '<pre><code>'.htmlspecialchars($error).'</code></pre>';
		}
	}

	function console($type, $message) {
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
					$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

					if($conn -> connect_errno) error($conn -> connect_errno, $conn -> connect_error);

					// query
					$query = "INSERT INTO users (id, user, password) VALUES (?, ?, ?)";

					// prepare query
					$stmt = $conn -> prepare($query);
					
					// bind params to query
					$stmt -> bind_param('iss', $username, $password);

					//execute query
					$stmt -> execute();

					try {
						if(!$stmt) throw new Exception($conn -> errno.": ".$conn -> error);
					} catch(Exception $e) {
						error(null, $e -> getMessage());
					}
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
