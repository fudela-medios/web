<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
	<title>Atenci&oacute;n y servicio al cliente</title>
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
				<h2>Atenci&oacute;n y servicio al cliente</h2>
				<div class="conta">
					<div class="columna-imagen">
						<div class="img-servicio">
							<img class="imagen-servicio" src="assets/css/images/servicioclientee.png">
						</div>
					</div>
					<div class="columna">
						<span class="texto-columna">Los cursos permitirán desarrollar profesionalmente las habilidades del personal para que la atención a los clientes sea más agradable, ya que la atención es el factor más importante para lograr una lealtad con el cliente.</span><br>
						<span class="apartados" id="ver" onclick="recupera('t');">Técnicas para manejar a clientes difíciles.</span><br>
						<span class="apartados" id="ver" onclick="recupera('s');">Servicio al cliente interno</span><br>
						<span class="apartados" id="ver" onclick="recupera('a');">Atención telefónica</span><br>
						<br><br><br>
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
			<div class="conte" id="cdificil" style="display: none;">
				<h2>Técnicas para manejar a clientes difíciles</h2>
				<span class="texto-columna">Durante este curso, los participantes podrán adquirir la capacidad de manejar crisis creadas por los clientes insatisfechos por el servicio brindado a través de técnicas para tratar distintas actitudes.</span><br>
				<span class="apartados">Definición y aplicación del proceso CEDA.</span><br>
				<span class="apartados">Cómo se perciben las situaciones de crisis.</span><br>
				<span class="apartados">Situaciones de conflicto más difíciles.</span><br>
				<span class="apartados">Manejo apropiado de arreglos, quejas y sugerencias.</span><br>
			</div>
			<div class="conte" id="cinterno" style="display: none;">
				<h2>Servicio al cliente interno</h2>
				<span class="texto-columna">Este curso logrará que los participantes brinden un servicio al cliente de manera más empática y profesional.</span><br>
				<span class="apartados">Descubrir la importancia que tiene cada participante dentro de la empresa.</span><br>
				<span class="apartados">Definir el concepto de servicio interno.</span><br>
				<span class="apartados">Desarrollar conductas que les permitirán ofrecer un mejor servicio al cliente con calidad.</span><br>
			</div>
			<div class="conte" id="ctelefono" style="display: none;">
				<h2>Atención telefónica</h2>
				<span class="texto-columna">A lo largo de este curso los participantes aprenderán a aplicar técnicas telefónicas para mejorar la atención al cliente a través de éste medio, a su vez transmitirán una sensación de calidez hacia el cliente.</span><br>
				<span class="apartados">Fundamentos para ofrecer un servicio de calidad al cliente.</span><br>
				<span class="apartados">Técnicas telefónicas que permitan una comunicación efectiva con el cliente.</span><br>
				<span class="apartados">Solución de conflictos en la atención telefónica.</span><br>
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