<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
	<title>Liderazgo</title>
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
				<h2>Liderazgo</h2>
				<div class="conta">
					<div class="columna-imagen">
						<div class="img-servicio">
							<img class="imagen-servicio" src="assets/css/images/liderazgoee.png">
						</div>
					</div>
					<div class="columna-texto">
						<span class="texto-columna">Obtener competencias que permitan identificar áreas de oportunidad en la participación de equipos de trabajo, a través de las características que debe tener un líder.</span><br>
						<br>
						
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
			<div class="conte" id="estudio" style="display: none;">
				<h2>El estudio del liderazgo</h2>
				<span class="texto-columna">En este curso los participantes conocerán las habilidades que los caracterice como un líder y que les brinde la capacidad de solucionar problemas dentro de la empresa.</span><br>
				<span class="apartados" id="verc">¿Qué es un líder?</span><br>
				<span class="apartados" id="verc">Tipos de liderazgo.</span><br>
				<span class="apartados" id="verc">Características de liderazgo.</span><br>
			</div>
			<div class="conte" id="competencia" style="display: none;">
				<h2>Competencias de un líder para lograr el cambio</h2>
				<span class="texto-columna">Durante este curso los participantes podrán adquirir las competencias necesarias para tener un liderazgo que logre cambios dentro de la empresa.</span><br>
				<span class="apartados" id="verc">Modelo de competencias de liderazgo.</span><br>
				<span class="apartados" id="verc">Liderazgo y el resultado en los equipos de trabajo.</span><br>
				<span class="apartados" id="verc">Importancia del liderazgo en las empresas actuales.</span><br>
			</div>
			<div class="conte" id="formacion" style="display: none;">
				<h2>Formación de líderes en equipos de trabajo</h2>
				<span class="texto-columna">En este curso los participantes aprenderán a motivar y a delegar actividades dentro de un equipo de trabajo que permitan mejorar la productividad dentro de la empresa.</span><br>
				<span class="apartados" id="verc">Inteligencia emocional</span><br>
				<span class="apartados" id="verc">Teorías de motivación</span><br>
				<span class="apartados" id="verc">Emplear técnicas de motivación que ayuden en el rendimiento del equipo de trabajo.</span><br>
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
</html>