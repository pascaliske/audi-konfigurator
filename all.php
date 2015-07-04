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
					</div>
					<form action="<?php echo strtolower(HOME_DIR.'/'.$core -> getModelName($theID).'/'.$_GET['paket'].'/'); ?>exterieur/" method="post">
						<div id="items">
							<?php
								foreach ($db -> getAllDataFromTable('motoren', 'WHERE FahrzeugID = "'.$theID.'"') as $item) {
									echo '<label id="item'.$item['MotorID'].'" class="item item-has-image" for="">';
										echo '<div class="cmd">';
											echo '<input type="radio" name="motor" value="'.$item['MotorID'].'" />';
											echo '<input type="hidden" name="model" value="'.$core -> getModelName($theID).'" />';
										echo '</div>';
										echo '<img src="'.HOME_DIR.'/bin/images/motoren/'.$item['Bild'].'" class="image" />';
										echo '<ul class="description">';
											echo '<li>Name: '.$item['Name'].'</li>';
											echo '<li>Leistung: '.$item['PSZahl'].' PS ('.$item['kWZahl'].' kW)</li>';
											echo '<li>Kraftstoff: '.$item['Kraftstoff'].'</li>';
										echo '</ul>';
										echo '<div class="item-price">'.$db->formatPrice($item['Preis']).'</div>';
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
						$_SESSION['model'] = $_POST['model'];
						$_SESSION['motor'] = $_POST['motor'];
					}
				?>
					<div id="heading">
						<h1>Exterieur</h1>
						<p><?php $db -> test('test'); ?></p>
					</div>
					<form action="<?php echo strtolower(HOME_DIR.'/'.$core -> getModelName($theID).'/'.$_GET['paket'].'/'); ?>interieur/" method="post">
						<div id="items">
							<h3>Wagenfarbe</h3>
							<br />
							<?php
								foreach ($db -> getAllDataFromTable('farben', null) as $item) {
									echo '<label id="item'.$item['FarbID'].'" class="item item-color '.$core -> escapeClass($item['Farbton']).'" for="">';
										echo '<div class="cmd">';
											echo '<input type="radio" name="farbe" value="'.$item['FarbID'].'" />';
										echo '</div>';
										echo '<div class="color"></div>';
										echo '<div class="description">'.$item['Effekt'].' - '.$item['Farbton'].'</div>';
										echo '<div class="item-price">'.$db -> formatPrice($item['Preis']).'</div>';
									echo '</label>';
								}
							?>
							<br /><br />
							<h3>Felgen</h3>
							<br />
							<?php
								foreach ($db -> getAllDataFromTable('felgen', null) as $item) {
									echo '<label id="item'.$item['FelgenID'].'" class="item" for="">';
										echo '<div class="cmd">';
											echo '<input type="radio" name="felge" value="'.$item['FelgenID'].'" />';
										echo '</div>';
										echo '<ul class="description">';
											echo '<li>Name: '.$item['Name'].'</li>';
											echo '<li>Größe: '.$item['Groesse'].' Zoll</li>';
											echo '<li>Farbe: '.$item['Farbe'].'</li>';
											echo '<li>Hersteller: '.$item['Hersteller'].'</li>';
										echo '</ul>';
										echo '<div class="item-price">'.$db->formatPrice($item['Preis']).'</div>';
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
						$_SESSION['felge'] = $_POST['felge'];
					}
				?>
					<div id="heading">
						<h1>Interieur</h1>
						<p><?php $db -> test('test'); ?></p>
					</div>
					<form action="<?php echo strtolower(HOME_DIR.'/'.$core -> getModelName($theID).'/'.$_GET['paket'].'/'); ?>meinaudi/" method="post">
						<div id="items">
							<?php
								foreach ($db -> getAllDataFromTable('sitze', null) as $item) {
									echo '<label id="item'.$item['SitzID'].'" class="item" for="">';
										echo '<div class="cmd">';
											echo '<input type="radio" name="sitz" value="'.$item['SitzID'].'" />';
										echo '</div>';
										echo '<div class="description">'.$item['Name'].'</div>';
										echo '<div class="item-price">'.$db->formatPrice($item['Preis']).'</div>';
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
				case 'zubehoer':
					if(isset($_POST['submit'])) {
						$_SESSION['sitz'] = $_POST['sitz'];
					}
				?>
					<div id="heading">
						<h1>Zubehör</h1>
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
						$_SESSION['sitz'] = $_POST['sitz'];
						$results = $_SESSION;
						session_destroy($_SESSION);
					?>
						<div id="heading">
							<h1>Übersicht</h1>
						</div>
						<form action="<?php echo strtolower(HOME_DIR.'/save/'); ?>" method="post">
							<div id="items">
								<?php
									foreach ($results as $result => $value) {
										switch ($result) {
											case 'model':
												echo '<input type="hidden" name="car[model][name]" value="'.$value.'" />';
											break;
											case 'motor':
												echo '<div class="item item-column">';
													echo '<h3>Motor:</h3>';
													echo '<ul>';
														$motor = $db -> getAllDataFromTable('motoren', 'WHERE MotorID = "'.$value.'"')[0];
														echo '<li>'.$motor['Name'].'</li>';
														echo '<li>Leistung: '.$motor['PSZahl'].' PS ('.$motor['kWZahl'].' kW)</li>';
														echo '<li>Verbrauch innerorts: '.$motor['VerbrauchInnerorts'].' l/100km</li>';
														echo '<li>Verbrauch ausserorts: '.$motor['VerbrauchAusserorts'].' l/100km</li>';
														echo '<li>Verbrauch kombiniert: '.$motor['VerbrauchKombiniert'].' l/100km</li>';
														echo '<li>CO2-Emmissionen: '.$motor['CO2Emmission'].' g/km</li>';
													echo '</ul>';
												echo '</div>';
												echo '<input type="hidden" name="car[motor][id]" value="'.$motor['MotorID'].'" />';
												echo '<input type="hidden" name="car[motor][preis]" value="'.$motor['Preis'].'" />';
											break;
											case 'felge':
												echo '<div class="item item-column">';
													echo '<h3>Felgen:</h3>';
													echo '<ul>';
														$felge = $db -> getAllDataFromTable('felgen', 'WHERE FelgenID = "'.$value.'"')[0];
														echo '<li>'.$felge['Name'].'</li>';
														echo '<li>Groesse: '.$felge['Groesse'].' Zoll</li>';
														echo '<li>Farbe: '.$felge['Farbe'].'</li>';
														echo '<li>Hersteller: '.$felge['Hersteller'].'</li>';
													echo '</ul>';
												echo '</div>';
												echo '<input type="hidden" name="car[felge][id]" value="'.$felge['FelgenID'].'" />';
												echo '<input type="hidden" name="car[felge][preis]" value="'.$felge['Preis'].'" />';
											break;
											case 'sitz':
												echo '<div class="item item-column">';
													echo '<h3>Sitze:</h3>';
													echo '<ul>';
														$sitz = $db -> getAllDataFromTable('sitze', 'WHERE SitzID = "'.$value.'"')[0];
														echo '<li>'.$sitz['Name'].'</li>';
													echo '</ul>';
												echo '</div>';
												echo '<input type="hidden" name="car[sitz][id]" value="'.$sitz['SitzID'].'" />';
												echo '<input type="hidden" name="car[sitz][preis]" value="'.$sitz['Preis'].'" />';
											break;
											case 'farbe':
												echo '<div class="item item-column">';
													echo '<h3>Farbe:</h3>';
													echo '<ul>';
														$farbe = $db -> getAllDataFromTable('farben', 'WHERE FarbID = "'.$value.'"')[0];
														echo '<li>'.$farbe['Farbton'].'</li>';
														echo '<li>Effekt: '.$farbe['Effekt'].'</li>';
													echo '</ul>';
												echo '</div>';
												echo '<input type="hidden" name="car[farbe][id]" value="'.$farbe['FarbID'].'" />';
												echo '<input type="hidden" name="car[farbe][preis]" value="'.$farbe['Preis'].'" />';
											break;
										}
									}
								?>
							</div>
							<div id="footer">
								<input type="submit" name="submit" value="Berechnen" />
							</div>
						</form>
					<?php
					} else {
					?>
						<div id="heading">
							<h1>Fehler</h1>
							<p>Es ist ein Fehler aufgetreten. Bitte starten Sie die Konfiguration erneut!<br />Klicken Sie <a href="<?php echo HOME_DIR.'/modelle/'; ?>">hier</a>, um neu zu beginnen!</p>
						</div>
					<?php
					}
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