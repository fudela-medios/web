<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
	<title>Recursos humanos</title>
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
				<h2>Recursos humanos</h2>
				<div class="conta">
					<div class="columna-imagen">
						<div class="img-servicio">
							<img class="imagen-servicio" src="assets/css/images/recursoshee.png">
						</div>
					</div>
					<div class="columna">
						<span class="texto-columna">Enfocado a evitar los gastos generados por la contratación constante que genera el índice de rotación de la empresa, al no descubrir las habilidades laborales de un trabajador antes de ser contratado.</span><br>
						<span class="apartados" id="ver" onclick="recu('r');">Reclutamiento de personal</span><br>
						<span class="apartados" id="ver" onclick="recu('n');">Negociación y resolución de conflictos </span><br>
						<span class="apartados" id="ver" onclick="recu('c');">Contratación y despido.</span><br>
						<div class="barra-regreso" style="background-color: #CEE3F6;">
							<div class="contenedor-barra">
								<div class="elementos-barra">
									
								</div>
								<div class="elementos-barra">
									<div class="item-barra">
										<button class="boton-regresar" onclick="mandar();">M&aacute;s informaci&oacute;n.</button>	
									</div>
								</div>					
							</div>
						</div>
					</div>
				</div>
			</div><br>
			<div class="conte" id="r" style="display: none;">
				<h2>Reclutamiento de personal</h2>
				<span class="texto-columna">Enseñará a los participantes la forma de aplicar técnicas de reclutamiento eficaces para seleccionar personal con las habilidades requeridas, que puedan adaptarse a un ambiente laboral y que permita reducir el índice de rotación de personal.</span><br>
				<span class="apartados">Identificar el perfil ideal para un puesto de trabajo de acuerdo a las necesidades de la empresa.</span><br>
				<span class="apartados">Aplicar el proceso de selección y reclutamiento de manera óptima.</span><br>
				<span class="apartados">Realizar de manera adecuada una entrevista de trabajo.</span><br>
				<span class="apartados">Guiar al nuevo personal a las estrategias de la empresa.</span><br>
			</div>
			<div class="conte" id="n" style="display: none;">
				<h2>Negociación y resolución de conflictos</h2>
				<span class="texto-columna">Este curso está enfocado a los ámbitos de la negociación, para conocer las reglas y estrategias existentes en la solución de conflictos en el personal.</span><br>
				<span class="apartados">Reglas de negociación.</span><br>
				<span class="apartados">Desarrollo de la negociación.</span><br>
				<span class="apartados">Solución de conflictos a través de la negociación.</span><br>
			</div>
			<div class="conte" id="c" style="display: none;">
				<h2>Contratación y despido</h2>
				<span class="texto-columna">Este curso permite a los participantes conocer los fundamentos necesarios para la contratación y el despido de trabajadores por medio de la Ley Federal de Trabajo y así evitar riesgos y gastos por demandas en juicios laborales.</span><br>
				<span class="apartados">Conocer las bases legales de una contratación y de la terminación de un contrato laboral </span><br><span class="apartados"> establecidas en la Ley Federal de Trabajo.</span><br>
				<span class="apartados">Desarrollar el procedimiento correcto para contratar y despedir personal.</span><br>
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
				$(function () {
					$('[data-toggle="tooltip"]').tooltip()
				})
			</script>
			<script src="assets/js/displayelementos.js"></script>
</body>
</html>