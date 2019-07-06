<!DOCTYPE HTML>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		<title>Contacto</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<link rel="stylesheet" href="assets/css/matriz.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shotcut icon" href="assets/css/images/logo4.ico">
		<link rel="stylesheet" type="text/css" href="assets/css/util.css">
		<link rel="stylesheet" type="text/css" href="assets/css/contac.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<?php 
			    	require 'menu.php';
				?>
			<!-- Highlights -->
			<h2 align="center" class="titulo" id="titulo-seccion">Contacto</h2>
			<div class="container">
			    
				<div class="container-contact100">
					<form  method="post" action="cont/eco.php">
						<label class="titulo" >Envia un mensaje</label>
						<label class="campo"for="first-name">Nombre del contacto</label>
						<div data-validate="Type first name">
						    <input id="first-name" type="text" name="first-name" placeholder="Nombre">
						</div>
						<br>
						<div data-validate="Type last name">
						    <input type="text" name="last-name" placeholder="Apellidos">
						</div>
						<label class="campo">Email del contacto</label>
						<div data-validate = "Valid email is required: ex@abc.xyz">
						    <input id="email" type="text" name="email" placeholder="Ej. example@email.com">
						</div>
						<label class="campo">N&uacute;mero de tel&eacute;fono</label>
						<div >
						    <input id="phone" type="text" name="phone" placeholder="Ej. +52 000 000000">
						</div>
						<label class="campo">Mensaje</label>
						<div data-validate = "Message is required">
						    <textarea id="message" class="input100" name="message" placeholder="Escriba su mensaje"></textarea>
						</div>
						<div class="boton">
						    <input  type="submit" class="contact100-form-btn" value="Enviar Mensaje" /> 
						</div>
					</form>
				</div>
				<div class="container-contact100">
					 <div class="contact100-more flex-col-c-m">
						        <div class="flex-w size1 p-b-47">
						          <div class="txt1 p-r-25">
						          </div>

						          <div class="flex-col size2">
						            <label class="titulo">
						              Redes Sociales
						            </label>
						            <div class="row">
										<section class="col-2">
											<div class="box highlight">
						            			<a target="_blank" href="https://twitter.com/"><img src="assets/css/images/twitter.png" class="redes"></a>
						            		</div>
						            	</section>
						            	<section class="col-1">
											<div class="box highlight">
												<a target="_blank" href="https://twitter.com/"><h3>@fudelamedios</h3></a>
											</div>
										</section>
						            </div>
						            <div class="row">
						            	<section class="col-2">
											<div class="box highlight">
												<a target="_blank" href="https://www.instagram.com"><img src="assets/css/images/instagram.png" class="redes"></a>
											</div>
										</section>
										<section class="col-1">
											<div class="box highlight">
												<a target="_blank" href="https://www.instagram.com"><h3>@fudelamedios</h3></a>
											</div>
										</section>
						        	</div>
						          </div>
						        </div>

						        <div class="dis-flex size1 p-b-47">
						          <div class="txt1 p-r-25">
						            <span class="lnr lnr-phone-handset"></span>
						          </div>

						          <div class="flex-col size2">
						            <label class="campo">
						              Tel&eacute;fono:
						            </label>

						            <label class="campo">
						              <img src="assets/css/images/telefono.png" class="redes_sociales">
						               222 689 04 73
						            </label>
						            <label class="campo">
						              <img src="assets/css/images/whatsapp.png" class="redes_sociales">
						               222 611 00 95 
						            </label>
						          </div>
						        </div>

						        <div class="dis-flex size1 p-b-47">
						          <div class="txt1 p-r-25">
						            <span class="lnr lnr-envelope"></span>
						          </div>

						          <div class="flex-col size2">
						            <label class="campo">
						              email:
						            </label>

						            <label class="campo">
						              contacto@fudelamedios.com
						            </label>
						            <label class="campo">
						              Horario: 10:00 - 18:00 hrs.
						            </label>
						          </div>
						          
						        </div>
						      </div>
				</div>
			</div>
			
		</div>

		<!-- Scripts -->
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="assets/js/main.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
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
	</body>
</html>