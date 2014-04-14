<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>

<?php 
$nombre=$_POST["Nombre_text"];
$email_contacto=$_POST["Email_text"];
$empresa=$_POST["Empresa_text"];
$cargo=$_POST["Cargo_text"];
$pais=$_POST["Pais_text"];
$telefono=$_POST["Telefono_text"];
$comentarios=$_POST["Comentarios"];

require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->Host = "localhost";
 
$mail->From = "webmaster@incawasi.org";// de quien envia
$mail->FromName = "Remitente".$nombre;// nombre de quien Envia (webmaster)
$mail->Subject = "Formulario de Contactenos:";// contenido del correo
$mail->AddAddress("oscuridadtye@hotmail.com","Marlon MArtos Quiroz inca2");
$mail->AddAddress("marlonmartos@hotmail.com","marlon inca02");
$mail->AddCC("marlon@kuraka.net");
$mail->AddBCC("diosgoogle@hotmail.com");
 
$body  = "Hola <strong>amigo</strong><br>";
$body .= $comentarios."<i>comentarios<i>.<br><br>";
$body .= $nombre."<br>".$email_contacto."<br>".$empresa."<br>".$cargo."<br>".$pais."<br>".$telefono."<br><font color='red'>Saludos</font>";
$mail->Body = $body;
$mail->AltBody = "Hola amigo\nprobando PHPMailer\n\nSaludos";
$mail->AddAttachment("files/demo.zip", "demo.zip");
$mail->Send();
echo "Datos enviados<br>";
echo $nombre."<br>".$email_contacto."<br>".$empresa."<br>".$cargo."<br>".$pais."<br>".$telefono."<br>".$comentarios;
?>
</body>
</html>