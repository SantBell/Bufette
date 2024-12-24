<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$asunto = $_POST['subject'];
$textmessage = $_POST['textmessage'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "asunto: " . $subject . " \r\n";
$message .= "Mensaje: " . $_POST['textmessage'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'ssorianobello@yahoo.com.com';
'$asunto = 'Mensaje de... (Escribe como quieres que se vea el remitente de tu correo)';'

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>