<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
	<title>Est&aacute;ndares y normas de calidad</title>
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
				<h2>Est&aacute;ndares y normas de calidad</h2>
				<div class="conta">
					<div class="columna-imagen">
						<div class="img-servicio">
							<img class="imagen-servicio" src="assets/css/images/calidaee.png">
						</div>
					</div>
					<div class="columna">
						<span class="texto-columna">Estos cursos están enfocados en mejorar la calidad de los procesos para la empresa y así ganar la confianza de los clientes.</span><br>
						<span class="apartados" id="ver" onclick="recupe('s');">Sistema Operativo de Calidad</span><br>
						<span class="apartados" id="ver" onclick="recupe('i');">ISO 9001 </span><br>
						<span class="apartados" id="ver" onclick="recupe('a');">Auditores Internos de Calidad</span><br>
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
			<div class="conte" id="sistema" style="display: none;">
				<h2>Sistema operativo de la calidad</h2>
				<span class="texto-columna">Los participantes de este curso aprenderán a administrar los procesos basándose en las normas de calidad, encaminando a la empresa a un proceso efectivo.</span><br>
				<span class="apartados">Conocer los conceptos básicos del Sistema Operativo de Calidad.</span><br>
				<span class="apartados">Identificar la importancia que tiene la gestión de la calidad establecida en un sistema de medición del desempeño. </span><br>
				<span class="apartados">Aplicar el Sistema Operativo de Calidad en el proceso para mejorar la calidad.</span><br>
			</div>
			<div class="conte" id="iso" style="display: none;">
				<h2>ISO 9001</h2>
				<span class="texto-columna">En este curso los participantes aprenderán la importancia de certificarse en el Sistema de Gestión de Calidad, ya que les permite competir en mercados nacionales e internacionales.</span><br>
				<span class="apartados">Introducción a la familia de Normas ISO 9000.</span><br>
				<span class="apartados">Conocer los requisitos de la norma ISO 9001 enfocada en los procesos.</span><br>
				<span class="apartados">Aplicar el Sistema de Gestión de Calidad en el proceso de la empresa de manera efectiva.</span><br>
			</div>
			<div class="conte" id="auditoria" style="display: none;">
				<h2>Auditores Internos de Calidad</h2>
				<span class="texto-columna">A través de este curso los participantes aprenderán cómo debe realizarse de forma adecuada una auditoría de calidad basada en la norma ISO 9001.</span><br>
				<span class="apartados">Conceptos básicos y requisitos de un plan de auditoría.</span><br>
				<span class="apartados">Aplicación de metodología con listas de verificación a través de casos prácticos.</span><br>
				<span class="apartados">Realizar un reporte final de la auditoría y valorar el costo de las acciones realizadas.</span><br>
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