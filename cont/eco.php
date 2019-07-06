<?php
 ini_set( 'display_errors', 1 );
 error_reporting( E_ALL );
 $nom = $_POST['first-name'];
 $ape = $_POST['last-name'];
 $from = $_POST['email'];
 $tele = $_POST['phone'];
 $mens = $_POST['message'];
 $to = "contacto@fudelamedios.com";
 $subject = "Contacto";
 $mensaje ='Nombre: '.$nom.' '.$ape.' Mensaje:'.$mens;
 if (mail($to,$subject,$mensaje)){
	header("Location: ../contacto.php")
 }
 else{
 	echo ('Error');
 }
?>