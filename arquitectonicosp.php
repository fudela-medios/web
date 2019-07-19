<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
	<title>Proyectos arquitect&oacute;nicos</title>
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
				<h2> Proyectos arquitect&oacute;nicos</h2>
				<div class="conta">
					<div class="columna-imagen">
						<div class="img-servicio">
							<img class="imagen-servicio" src="assets/css/images/arquitecturapp.png">
						</div>
					</div>
					<div class="columna">
						<span class="texto-columna">Enfocado a la realización de proyectos, dando seguimiento a las necesidades del usuario. En &aacute;reas tales como:</span><br>
						<span class="apartados" id="ver" onclick="recuperavalor('v');" >Vivienda</span><br>
						<span class="apartados" id="ver" onclick="recuperavalor('c');">Comercio</span><br>
						<span class="apartados" id="ver" onclick="recuperavalor('r');">Remodelaciones</span><br>
						<span class="apartados" id="ver" onclick="recuperavalor('a');">Ampliaciones</span><br>
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
			<div class="conte" id="vivienda" style="display: none;">
				<h2>Vivienda</h2>
				<div class="conta">
					<div class="columna-imagen">
						<div class="img-servicio">
							<img class="imagen-servicio" src="assets/css/images/catalogo/vivienda/7.jpg">
						</div>
					</div>
					<div class="columna">
						<span class="texto-columna">De todos los niveles, as&iacute; como la aplicaci&oacute;n de tecnolog&iacute;as para hacerlas mas amigables con el ambiente, con el uso de eco tecnolog&iacute;as (paneles solares, calentadores solares, focos led, pintura con nanotecnolog&iacute;a, equipos ahorradores).</span><br>
					</div>
				</div>
			</div>
			<div class="conte" id="comercio" style="display: none;">
				<h2> Comercio</h2>
				<div class="conta">
					<div class="columna-imagen">
						<div class="img-servicio">
							<img class="imagen-servicio" src="assets/css/images/catalogo/vivienda/7.jpg">
						</div>
					</div>
					<div class="columna">
						<span class="texto-columna">Dise&ntilde;o personalizado para un uso mas optimo del espacio e instalaciones para dar los servicios de acuerdo a las necesidades.</span><br>
					</div>
				</div>
			</div>
			<div class="conte" id="remodelacion" style="display: none;">
				<h2>Remodelaciones</h2>
				<div class="conta">
					<div class="columna-imagen">
						<div class="img-servicio">
							<img class="imagen-servicio" src="assets/css/images/catalogo/vivienda/6.jpg">
						</div>
					</div>
					<div class="columna">
						<span class="texto-columna">Propuestas personalizas de acuerdo a las necesidades del cliente y aplicando la tecnolog&iacute;a mas actual a los espacios a intervenir.</span><br>
					</div>
				</div>
			</div>
			<div class="conte" id="ampliaciones" style="display: none;">
				<h2>Ampliaciones</h2>
				<div class="conta">
					<div class="columna-imagen">
						<div class="img-servicio">
							<img class="imagen-servicio" src="assets/css/images/catalogo/vivienda/2.jpg">
						</div>
					</div>
					<div class="columna">
						<span class="texto-columna">Las Ampliaciones de acuerdo a las necesidades del usuario y espacio disponible.</span><br>
					</div>
				</div>
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