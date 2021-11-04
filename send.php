<?php
error_reporting(0);
$correo_electronico= $_POST['Mail'];
$message= $_POST['Message'];

$mensaje = "Este mensaje fue enviado por " . $mail . " \r\n";
$mensaje .= "Su mensaje es: " . $message . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$header = 'From: ' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$para = 'yolmarestudio@gmail.com';
$asunto = 'CORREO DE IBLO';

mail($para, $asunto, utf8_decode($message), $header);

echo 'mensaje enviado correctamente';
header("Location:index.html")
?>