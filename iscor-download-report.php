<?php

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "info@efrix.net"; //Direcciones a las que se enviara el correo
$email_from ="noreply@iscor.com"; //Direccion que quieras que le aparezca al cliente
$email_subject = "Download Report Form"; //Asunto
$email_bcc = "info@efrix.net, webmaster@morraldeyute.com"; //Direcciones copias ocultas

// Variables del mensaje
$nombre = $_POST['nombre'];
$correo =  $_POST['correo'];
$telefono =  $_POST['telefono'];
$empresa =  $_POST['empresa'];

$contenido=
"Nombre : " . $nombre .
"\nCorreo : " . $correo .
"\nTelefono : " . $telefono .
"\nEmpresa : " . $empresa;

$header =
'From: '.$email_from."\r\n".
'Bcc: ' .$email_bcc. "\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $contenido, $header);

header("Location:http://efrix.net/demos/download-report/dwnrep.html");

?>
