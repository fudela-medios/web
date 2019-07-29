<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
	<title>Apartados</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<link rel="stylesheet" href="assets/css/matriz.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="shotcut icon" href="assets/css/images/logo4.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div id="page-wrapper">
		<!-- Header -->
		<?php 
			require 'menu.php';
		?>

	<section class="wrapper style1">
		<div class="container">
			<div>
				<section>
					<div class="box highlight">
						<i class="icon major fa-bookmark-o"></i>
						<h3>SERVICIOS Y PRODUCTOS</h3>
					</div>
				</section>
				<br><br>
				<div class="row">
					<section class="col-6">
						<div class="box highlight">
							<a href="servicios.php">
								<i class="icon major fa-hand-paper-o"></i>
								<h3>SERVICIOS</h3>
								<h1><p>Entrar</p></h1>
							</a>
						</div>
					</section>
					<section class="col-6">
						<div class="box highlight">
							<a href="productos.php">
								<i class="icon major fa-book"></i>
								<h3>PRODUCTOS</h3>
								<h1><p>Entra</p></h1>
							</a>
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>
	    <?php
			require 'copy.php'; 
		?>
<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			<script type="text/javascript">
			    document.oncontextmenu = function(){return false}
				$(function () {
					$('[data-toggle="tooltip"]').tooltip()
				})
			</script>
</body>
</html>