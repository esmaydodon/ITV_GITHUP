<?php
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = "unijimpe@gmail.com";
$mail->FromName = "Nombre del Remitente";
$mail->Subject = "Subject del correo";
$mail->AddAddress("tucorreo@email.com","Tu nombre");

$body  = "Hola <strong>amigo</strong><br>";
$body .= "probando <i>PHPMailer<i>.<br><br>";
$body .= "<font color='red'>Saludos</font>";
$mail->Body = $body;
$mail->AltBody = "Hola amigo\nprobando PHPMailer\n\nSaludos";
$mail->AddAttachment("images/foto.jpg", "foto.jpg");
$mail->AddAttachment("files/demo.zip", "demo.zip");
$mail->Send();
?>