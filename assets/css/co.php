<!DOCTYPE html>
<html>
<head>
	<title>Contacto</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  	<link rel="stylesheet" type="text/css" href="css/util.css">
  	<link rel="stylesheet" type="text/css" href="css/main.css">
  	<link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/main1.css">
    <link rel="stylesheet" type="text/css" href="css/estilos1.css">
</head>
<body class="is-preload">
  <div id="page-wrapper">
    <div id="header">
      <?php require 'cont/menu.html'; ?>
    </div>
    <div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" method="post" action="cont/eco.php">
        <span class="contact100-form-title">
          Envia un mensaje
        </span>

        <label class="label-input100" for="first-name">Nombre del contacto</label>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
          <input id="first-name" class="input100" type="text" name="first-name" placeholder="Nombre">
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
          <input class="input100" type="text" name="last-name" placeholder="Apellido">
          <span class="focus-input100"></span>
        </div>

        <label class="label-input100" for="email">Email del contacto</label>
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input id="email" class="input100" type="text" name="email" placeholder="Ej. example@email.com">
          <span class="focus-input100"></span>
        </div>

        <label class="label-input100" for="phone">Numero de telefono</label>
        <div class="wrap-input100">
          <input id="phone" class="input100" type="text" name="phone" placeholder="Ej. +52 000 000000">
          <span class="focus-input100"></span>
        </div>

        <label class="label-input100" for="message">Mensaje</label>
        <div class="wrap-input100 validate-input" data-validate = "Message is required">
          <textarea id="message" class="input100" name="message" placeholder="Escriba su mensaje"></textarea>
          <span class="focus-input100"></span>
        </div>

        <div class="container-contact100-form-btn">
          <input  type="submit" class="contact100-form-btn" value="Enviar Mensaje" />
            
        </div>
      </form>

      <div class="contact100-more flex-col-c-m">
        <div class="flex-w size1 p-b-47">
          <div class="txt1 p-r-25">
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              Redes Sociales
            </span>
            <a target="_blank" href="https://twitter.com/"><img src="img/twitter.png" class="redes_sociales">@fudelamedios</a>
            <a target="_blank" href="https://www.instagram.com"><img src="img/instagram.png" class="redes_sociales">@fudelamedios</a>
          </div>
        </div>

        <div class="dis-flex size1 p-b-47">
          <div class="txt1 p-r-25">
            <span class="lnr lnr-phone-handset"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              Celular
            </span>

            <span class="txt3">
              <img src="img/telefono.png" class="redes_sociales">
               222 689 04 73
            </span>
            <span class="txt3">
              <img src="img/whatsapp.png" class="redes_sociales">
               55 48 88 08 90
            </span>
          </div>
        </div>

        <div class="dis-flex size1 p-b-47">
          <div class="txt1 p-r-25">
            <span class="lnr lnr-envelope"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              Email
            </span>

            <span class="txt3">
              contacto@fudelamedios.com
            </span>
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
  <script src="js/main.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
</body>
</html>