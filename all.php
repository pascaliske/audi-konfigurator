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
				<li class="<?php echo ($_GET['step'] == 'motoren' || $_GET['step'] == '') ? 'current': ''; ?>"><a href="<?php echo strtolower(HOME_DIR.'/'.$core -> getModelName($theID).'/'.$_GET['paket'].'/'); ?>motoren/">Motoren</a></li>
				<li class="<?php echo ($_GET['step'] == 'exterieur') ? 'current': ''; ?>"><a href="<?php echo strtolower(HOME_DIR.'/'.$core -> getModelName($theID).'/'.$_GET['paket'].'/'); ?>exterieur/">Exterieur</a></li>
				<li class="<?php echo ($_GET['step'] == 'interieur') ? 'current': ''; ?>"><a href="<?php echo strtolower(HOME_DIR.'/'.$core -> getModelName($theID).'/'.$_GET['paket'].'/'); ?>interieur/">Interieur</a></li>
				<li class="<?php echo ($_GET['step'] == 'sonderausstattung') ? 'current': ''; ?>"><a href="<?php echo strtolower(HOME_DIR.'/'.$core -> getModelName($theID).'/'.$_GET['paket'].'/'); ?>sonderausstattung/">Sonderausstattung</a></li>
				<li class="<?php echo ($_GET['step'] == 'meinaudi') ? 'current': ''; ?>"><a href="<?php echo strtolower(HOME_DIR.'/'.$core -> getModelName($theID).'/'.$_GET['paket'].'/'); ?>meinaudi/">Mein Audi</a></li>
			</ul>
		</div>
	</header>
	<section id="wrapper">
		<article id="content" class="">
		<?php
			switch ($_GET['step']) {
				// motoren
				default:
				case 'motoren':
				?>
					<div id="heading">
						<h1>Motoren</h1>
						<p><?php $db -> test('test'); ?></p>
					</div>
					<form action="<?php echo strtolower(HOME_DIR.'/'.$core -> getModelName($theID).'/'.$_GET['paket'].'/'); ?>exterieur/" method="post">
						<div id="items">
							<?php
								foreach ($db -> getAllDataFromTable('motoren', 'WHERE FahrzeugID = "'.$theID.'"') as $item) {
									echo '<label id="item'.$item['MotorID'].'" class="item" for="">';
										echo '<div class="cmd">';
											echo '<input type="radio" name="motor" value="'.$item['MotorID'].'" />';
										echo '</div>';
										echo '<div class="description">'.$item['Name'].'</div>';
									echo '</label>';
								}
							?>
						</div>
						<div id="footer">
							<input type="submit" name="submit" value="Weiter..." />
						</div>
					</form>
				<?php
				break;

				// exterieur
				case 'exterieur':
					if(isset($_POST['submit'])) {
						$_SESSION['motor'] = $_POST['motor'];
					}
				?>
					<div id="heading">
						<h1>Exterieur</h1>
						<p><?php $db -> test('test'); ?></p>
					</div>
					<form action="<?php echo strtolower(HOME_DIR.'/'.$core -> getModelName($theID).'/'.$_GET['paket'].'/'); ?>interieur/" method="post">
						<div id="items">
							<?php
								foreach ($db -> getAllDataFromTable('farben', null) as $item) {
									echo '<label id="item'.$item['FarbID'].'" class="item" for="">';
										echo '<div class="cmd">';
											echo '<input type="radio" name="farbe" value="'.$item['FarbID'].'" />';
										echo '</div>';
										echo '<div class="description">'.$item['Effekt'].' - '.$item['Farbton'].'</div>';
									echo '</label>';
								}
							?>
						</div>
						<div id="footer">
							<input type="submit" name="submit" value="Weiter..." />
						</div>
					</form>
				<?php
				break;

				// interieur
				case 'interieur':
					if(isset($_POST['submit'])) {
						$_SESSION['farbe'] = $_POST['farbe'];
					}
				?>
					<div id="heading">
						<h1>Interieur</h1>
						<p><?php $db -> test('test'); ?></p>
					</div>
					<form action="<?php echo strtolower(HOME_DIR.'/'.$core -> getModelName($theID).'/'.$_GET['paket'].'/'); ?>sonderausstattung/" method="post">
						<div id="items">
							<?php
								foreach ($db -> getAllDataFromTable('sitze', null) as $item) {
									echo '<label id="item'.$item['SitzID'].'" class="item" for="">';
										echo '<div class="cmd">';
											echo '<input type="radio" name="sitze" value="'.$item['SitzID'].'" />';
										echo '</div>';
										echo '<div class="description">'.$item['Name'].'</div>';
									echo '</label>';
								}
							?>
						</div>
						<div id="footer">
							<input type="submit" name="submit" value="Weiter..." />
						</div>
					</form>
				<?php
				break;

				// sonderausstattung
				case 'sonderausstattung':
					if(isset($_POST['submit'])) {
						$_SESSION['sitze'] = $_POST['sitze'];
					}
				?>
					<div id="heading">
						<h1>Sonderausstattungen</h1>
						<p><?php $db -> test('test'); ?></p>
					</div>
					<form action="<?php echo strtolower(HOME_DIR.'/'.$core -> getModelName($theID).'/'.$_GET['paket'].'/'); ?>meinaudi/" method="post">
						<div id="items">
							
						</div>
						<div id="footer">
							<input type="submit" name="submit" value="Weiter..." />
						</div>
					</form>
				<?php
				break;

				// mein audi
				case 'meinaudi':
					if(isset($_POST['submit'])) {
						//$_SESSION['farbe'] = $_POST['farbe'];
					}
				?>
					<div id="Mein Audi">
						<h1>Überschrift</h1>
						<p><?php $db -> test('test'); ?></p>
					</div>
					<form action="<?php echo strtolower(HOME_DIR.'/save/'); ?>" method="post">
						<div id="items">
							<?php
								echo "<pre>";
								print_r($_SESSION);
								echo "</pre>";
							?>
						</div>
						<div id="footer">
							<input type="submit" name="submit" value="Berechnen" />
						</div>
					</form>
				<?php
				break;
			}
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