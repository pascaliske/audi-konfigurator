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
	<link rel="stylesheet" type="text/css" href="<?php echo HOME_DIR; ?>/bin/main.css" />
</head>
<body>
	<div id="modelle">
		<ul>
			<li class="fixed">
				<?php echo $core -> getModelName(1); ?>
				<ul>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(1, 1); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+1" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(1); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(1, 2); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+2" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(2); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(1, 3); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+3" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(3); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(1, 4); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+4" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(4); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(1, 0); ?>motoren/">
							<!-- <img src="http://placehold.it/370x220/&text=Kein+Paket" /> -->
							<div>
								<h3>Ohne Paket</h3>
								<p>Description</p>
							</div>
						</a>
					</li>
				</ul>
			</li>
			<li class="fixed">
				<?php echo $core -> getModelName(3); ?>
				<ul>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(3, 1); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+1" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(1); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(3, 2); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+2" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(2); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(3, 3); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+3" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(3); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(3, 4); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+4" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(4); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(3, 0); ?>motoren/">
							<!-- <img src="http://placehold.it/370x220/&text=Kein+Paket" /> -->
							<div>
								<h3>Ohne Paket</h3>
								<p>Description</p>
							</div>
						</a>
					</li>
				</ul>
			</li>
			<li class="fixed">
				<?php echo $core -> getModelName(4); ?>
				<ul>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(4, 1); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+1" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(1); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(4, 2); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+2" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(2); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(4, 3); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+3" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(3); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(4, 4); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+4" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(4); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(4, 0); ?>motoren/">
							<!-- <img src="http://placehold.it/370x220/&text=Kein+Paket" /> -->
							<div>
								<h3>Ohne Paket</h3>
								<p>Description</p>
							</div>
						</a>
					</li>
				</ul>
			</li>
			<li class="fixed">
				<?php echo $core -> getModelName(5); ?>
				<ul>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(5, 1); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+1" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(1); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(5, 2); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+2" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(2); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(5, 3); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+3" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(3); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(5, 4); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+4" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(4); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(5, 0); ?>motoren/">
							<!-- <img src="http://placehold.it/370x220/&text=Kein+Paket" /> -->
							<div>
								<h3>Ohne Paket</h3>
								<p>Description</p>
							</div>
						</a>
					</li>
				</ul>
			</li>
			<li class="fixed">
				<?php echo $core -> getModelName(6); ?>
				<ul>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(6, 1); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+1" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(1); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(6, 2); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+2" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(2); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(6, 3); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+3" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(3); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(6, 4); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+4" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(4); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(6, 0); ?>motoren/">
							<!-- <img src="http://placehold.it/370x220/&text=Kein+Paket" /> -->
							<div>
								<h3>Ohne Paket</h3>
								<p>Description</p>
							</div>
						</a>
					</li>
				</ul>
			</li>
			<li class="fixed">
				<?php echo $core -> getModelName(7); ?>
				<ul>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(7, 1); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+1" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(1); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(7, 2); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+2" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(2); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(7, 3); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+3" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(3); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(7, 4); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+4" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(4); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(7, 0); ?>motoren/">
							<!-- <img src="http://placehold.it/370x220/&text=Kein+Paket" /> -->
							<div>
								<h3>Ohne Paket</h3>
								<p>Description</p>
							</div>
						</a>
					</li>
				</ul>
			</li>
			<li class="fixed">
				<?php echo $core -> getModelName(8); ?>
				<ul>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(8, 1); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+1" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(1); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(8, 2); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+2" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(2); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(8, 3); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+3" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(3); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(8, 4); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+4" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(4); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(8, 0); ?>motoren/">
							<!-- <img src="http://placehold.it/370x220/&text=Kein+Paket" /> -->
							<div>
								<h3>Ohne Paket</h3>
								<p>Description</p>
							</div>
						</a>
					</li>
				</ul>
			</li>
			<li class="fixed">
				<?php echo $core -> getModelName(99); ?>
				<ul>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(99, 1); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+1" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(1); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(99, 2); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+2" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(2); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(99, 3); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+3" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(3); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(99, 4); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+4" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(4); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(99, 0); ?>motoren/">
							<!-- <img src="http://placehold.it/370x220/&text=Kein+Paket" /> -->
							<div>
								<h3>Ohne Paket</h3>
								<p>Description</p>
							</div>
						</a>
					</li>
				</ul>
			</li>
			<li class="fixed">
				<?php echo $core -> getModelName(88); ?>
				<ul>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(88, 1); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+1" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(1); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(88, 2); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+2" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(2); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(88, 3); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+3" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(3); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(88, 4); ?>meinaudi/">
							<!-- <img src="http://placehold.it/370x220/&text=Paket+4" /> -->
							<div>
								<h3><?php echo $core -> getPaketName(4); ?></h3>
								<p>Description</p>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo HOME_DIR.$core -> generatePaketURL(88, 0); ?>motoren/">
							<!-- <img src="http://placehold.it/370x220/&text=Kein+Paket" /> -->
							<div>
								<h3>Ohne Paket</h3>
								<p>Description</p>
							</div>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo HOME_DIR; ?>/bin/main.js"></script>
</body>
</html>