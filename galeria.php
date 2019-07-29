<!DOCTYPE HTML>
<html>
	<head>
		<title>GALERÍA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<link rel="stylesheet" href="assets/css/matriz.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shotcut icon" href="assets/css/images/logo4.ico">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/galeriainicio.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
					<?php 
				        require 'menu.php';
				    ?>
			<!-- Highlights -->
			    <div class="barra-regreso">
					<div class="contenedor-barra">
							<a class="lugar" href="index.php">
								<span class="lugar-barra">Inicio/</span>
							</a>
							<a class="lugar" href="galeria.php">
								<span class="lugar-barra">Galer&iacute;a</span>
							</a>				
					</div>
				</div>
				<section class="wrapper style1">
					<div class="container">
						<div>
							<section >
							    <div class="box highlight">
							        <i class="icon major fa-bookmark-o"></i>
							    </div>
								<div class="texto-galeria">
									<span align="center">Sea bienvenido a la galería fotográfica y videoteca de FUDELA Medios.</span><br>
                                    <span align="justify">Los videos exponen tanto desarrollos inmobiliarios y áreas que pueden generarse como el tipo de
producciones en v&iacute;deo que se puede crear.</span>
								</div>
							</section>
							<br><br>
							<div class="row">
								<section class="col-6">
									<div class="box highlight">
										<nav id="submenu">
										    <li class="parent">
										    	<a href="#">
													<i class="icon major fa-camera"></i>
													<h3>Galería fotográfica</h3>
												</a>
										        <ul>
										            <li><a class="opc" href="agroturismo.php">Agroturismo</a></li> 
										            <li><a class="opc" href="bicicross.php">Bicicross</a></li>
										            <li><a class="opc" href="camping.php">Camping</a></li>
										             <li><a class="opc" href="ciclismo.php">Ciclismo de montaña</a></li>
										            <li><a class="opc" href="clubgolf.php">Club de golf</a></li> 
										            <li><a class="opc" href="clubhipico.php">Club hípico</a></li> 
										            <li><a class="opc" href="granjatematica.php">Granja temática</a></li> 
										            <li><a class="opc" href="hoteles.php">Hoteles / Condo-Hotel</a></li> 
										            <li><a class="opc" href="laberinto.php">Laberinto</a></li>
										            <li><a class="opc" href="minigolf.php">Mini golf</a></li>
										            <li><a class="opc" href="pared.php">Pared de escalar</a></li>
										            <li><a class="opc" href="pesca.php">Pesca recreativa</a></li>
										            <li><a class="opc" href="puente.php">Puentes colgantes</a></li>
                                                    <li><a class="opc" href="senderismo.php">Senderismo</a></li>
                                                    <li><a class="opc" href="telesilla.php">Telesilla escénica</a></li>
                                                    <li><a class="opc" href="tirolesa.php">Tirolesa</a></li>
										            <li><a class="opc" href="viviendas.php">Viviendas</a></li>
										        </ul>
										    </li>
										 </nav>
									</div>
								</section>
								<section class="col-6">
									<div class="box highlight">
										<a href="videos.php">
											<i class="icon major fa-video-camera"></i>
											<h3>Videoteca</h3>
										</a>
									</div>
								</section>
							</div>
						</div>
					</div>
				</section>
		</div>
		<div class="espacio-menu"></div>
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