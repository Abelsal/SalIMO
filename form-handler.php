<?php
$name = $?POST['name'];
$visitor_email = $?POST['email'];
$telefono = $?POST['telefono'];
$mensaje = $?POST['mensaje'];
$email_from = 'salazarimo.com.mx'

$email_subject = 'Cotizacion, mensaje, etc'
$email_body = "Nombre: $name.\n "
             "correo: $visitor_email.\n "
             "telefono: $telefono.\n "
             "Mensaje: $mensaje.\n ";

$to = 'logistica@salazarimo.com.mx'
$headers = "De $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
$header("Location: contact.html");
?>