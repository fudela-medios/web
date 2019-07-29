<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
	<title>Direcci&oacute;n gerencial</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<link rel="stylesheet" href="assets/css/matriz.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="shotcut icon" href="assets/css/images/logo4.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/serviciosti.css">
</head>
<body>
	<div id="page-wrapper">
		<!-- Header -->
		<?php 
			require 'menu.php';
		?>
		<div class="m">
		<div class="con">
			<div class="conte" >
				<h2>Direcci&oacute;n gerencial</h2>
				<div class="conta">
					<div class="columna-imagen">
						<div class="img-servicio">
							<img class="imagen-servicio" src="assets/css/images/gerenciaa.png">
						</div>
					</div>
					<div class="columna-texto">
						<span class="texto-columna">Cursos para directores o gerentes de empresas, que ayudarán a desarrollar habilidades de dirección y planeación para lograr que la empresa vaya en la dirección que se desea.</span><br>
						
						<br><br><br>
						<div class="barra-regreso" style="background-color: #CEE3F6;">
							<div class="contenedor-barra">
								<div class="elementos-barra">
									
								</div>
								<div class="elementos-barra">
									<div class="item-barra">
										<button class="boton-regresar" onclick="mandar();">Para mayor informaci&oacute;n.</button>	
									</div>
								</div>					
							</div>
						</div>
					</div>
				</div>
			</div><br>
			<div class="conte" id="tdecisiones" style="display: none;">
				<h2>Toma de decisiones</h2>
				<span class="texto-columna">En este curso los participantes tomarán decisiones de manera óptima gracias a las diversas técnicas que existen.</span><br>
				<span class="apartados" id="verc">¿Qué es la toma de decisiones?</span><br>
				<span class="apartados" id="verc">Técnicas y métodos para la toma de decisiones</span><br>
				<span class="apartados" id="verc">Aplicación de técnicas en casos prácticos.</span><br>
			</div>
			<div class="conte" id="pestrategica" style="display: none;">
				<h2>Planeación estratégica</h2>
				<span class="texto-columna">Al finalizar este curso los participantes podrán planear de forma adecuada la dirección a la que quieren dirigir su empresa para posicionarla en un mejor mercado y cumplir los objetivos.</span><br>
				<span class="apartados" id="verc">Conceptos básicos de planeación estratégica.</span><br>
				<span class="apartados" id="verc">Partes que conforman un plan estratégico.</span><br>
				<span class="apartados" id="verc">Diseñar un plan estratégico.</span><br>
			</div>
			<div class="conte" id="hgerencia" style="display: none;">
				<h2>Habilidades gerenciales</h2>
				<span class="texto-columna">En este curso los participantes aplicarán métodos de liderazgo y delegación de actividades para mejorar la productividad y el desempeño de los trabajadores en la empresa.</span><br>
				<span class="apartados" id="verc">Inteligencia emocional.</span><br>
				<span class="apartados" id="verc">Métodos para la administración del tiempo.</span><br>
				<span class="apartados" id="verc">Coaching e integración de grupos de trabajo.</span><br>
			</div>
		</div>
		</div>
		<?php
			require 'copy.php'; 
		?>
	</div>
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
			<script src="assets/js/displayelementos.js"></script>
</body>
</body>
</html>