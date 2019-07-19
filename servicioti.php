<!DOCTYPE html>
<html>
<head>
	<title>Tecnolog&iacute;as de informaci&oacute;n</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="assets/css/matriz.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="shotcut icon" href="assets/css/images/logo4.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/serviciosti.css">
</head>
<body class="is-preload">
	<div id="page-wrapper">
		<!-- Header -->
		<?php 
			require 'menu.php';
		?>
		<div class="m">
		<div class="con">
			<div class="conte">
				<h2>Tecnolog&iacute;as de informaci&oacute;n</h2>
			</div>
			<div class="conta">

				<div class="columna-imagen">
					<div class="img-servicio">
						<img class="imagen-servicio" src="assets/css/images/informatica.jpg">
					</div>
				</div>
				<div class="columna">
					<span class="texto-columna">Enfocado a el manejo de software de ofimática, edición de foto y video básico y avanzado, mantenimiento preventivo y correctivo a equipos de cómputo.</span>
					<span class="texto">Contamos con cursos y capacitaciones para las siguientes áreas:</span><br>
				<span class="apartados" id="ver" onclick="rec('o');">Cursos de Office (Excel, Word, PowerPoint).</span><br>
				<span class="apartados" id="ver" onclick="rec('m');">Curso de manejo de sistema operativo Mac (Básico)</span><br>
				<span class="apartados" id="ver" onclick="rec('l');">Curso de manejo de sistema operativo Linux (Básico)</span><br>
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
			</div><br>
			<div class="conte" id="o" style="display: none;">
				<h2>Curso de Office</h2><br>
				<span class="texto-columna" align="justify">Este curso comprende los conocimientos básicos para que cualquier persona pueda utilizar Word, PowerPoint y Excel de mejor forma, viendo los siguientes puntos:</span><br>
				<div class="conta">
					<div class="columnaa">
						<span class="apartados">El entorno de Word 2016</span><br>
						<span class="apartados">Edición básica</span><br>
						<span class="apartados">Formato del documento</span><br>
						<span class="apartados">Estilos</span><br>
						<span class="apartados">Diseño de página</span><br>
						<span class="apartados">Tablas</span><br>
						<span class="apartados">Imágenes y gráficos</span><br>
					</div>
					<div class="columnab">
						<span class="apartados">Organigramas y diagramas</span><br>
						<span class="apartados">Plantillas</span><br>
						<span class="apartados">Combinar correspondencia</span><br>
						<span class="apartados">Esquemas</span><br>
						<span class="apartados">Tablas de contenidos, de ilustraciones e índices</span><br>
						<span class="apartados">Marcadores, referencias cruzadas y notas al pie</span><br>
						<span class="apartados">Seguridad</span><br>
						<span class="apartados">Macros</span><br>
					</div>
				</div>
			</div>
			<div class="conte" id="m"  style="display: none;">
				<h2>Curso de manejo de sistema operativo Mac</h2><br>
				<span class="texto-columna" align="justify">Este curso dará a los participantes el conocimiento sobre el entorno de MAC, así como diferentes actividades que se pueden realizar.</span><br>
					<span class="apartados">Instalación y configuración del sistema</span><br>
					<span class="apartados">Optimización del sistema</span><br>
					<span class="apartados">Instalación y administración de aplicaciones</span><br>
					<span class="apartados">Administración de usuarios.</span><br>
			</div>
			<div class="conte" id="l"  style="display: none;">
				<h2>Curso de manejo de sistema operativo GNU/Linux</h2><br>
				<span class="texto" align="justify">
				    Permite a los participantes obtener el conocimiento para trabajar sobre un entorno GNU/Linux, que abarca desde los comandos básicos, las herramientas que dispone el sistema operativo, la instalación del entorno de trabajo hasta la administración de procesos y usuarios.</span><br>
					<span class="apartados">Instalación y Configuración GNU/Linux</span><br>
					<span class="apartados">Shell y comandos básicos</span><br>
					<span class="apartados">Gestionar directorios y ficheros</span><br>
					<span class="apartados">Administración de procesos y usuarios</span><br>
			</div>
		</div>
	</div>
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
				$(function () {
					$('[data-toggle="tooltip"]').tooltip()
				})
			</script>
			<script src="assets/js/notificaciones.js"></script>
			<script src="assets/js/menus.js"></script>
			<script src="assets/js/displayelementos.js"></script>
</body>
</html>