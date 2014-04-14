<?
include("../func/funciones.php");
//########################################################
$consulta = dime("select p.codigo_producto,p.descripcion_producto,p.Cantidad_producto,g.fecha_guia,p.fecha_caducidad_pro,p.precio,p.ruta_img1  from productos p inner join 
guias g on p.guias_idguias = g.idguias
order by fecha_caducidad_pro desc  ");
$comentarios="<table width='600' border='1' class='tabla'><div class='' >	
        <tr class='encabezado' ><td>codigo</td><td>Descripcion</td> <td>Cantidad</td><td>fecha Ingreso</td><td>fecha fin</td></td><td>Limite</td><td>Imagen</td></tr>";
$procedemail=false;
$cerodias=false;
$cerodias2=false;
$cerodias3=false;
$cerodias4=false;
$cerodias5=false;
$cerodias6=false;
$cerodias7=false;
$cerodiasnegativo=false;
$cerodiaspararato=false;

while($productos = mysql_fetch_array($consulta)){
    #para fecha
    $fecha_fin = strtotime($productos['fecha_caducidad_pro']);
    $fecha_final=strtotime("-3 days", $fecha_fin);
$quedan_dias=ceil(($fecha_fin-time())/86400);
switch($quedan_dias){
  case 0:
    $dias="<div> hoy</div>";
    $color="style ='background-color: crimson;'"; 
    $cerodias=true;

    
    #si vencen hoy entonces mandar la lista de los que an vencido#
    break;
  case 1:
    $dias=" <div> manana</div>  ";
      $color="style ='background-color: darkorange;'";
      $cerodias1=true;
      #si vencen hoy entonces mandar la lista de los que an vencido#
    break;
case 2:
    $dias=" <div style ='color: darkorange;'> pasado manana</div>  ";
    $color="style ='background-color: darkKhaki;'";
    $cerodias2=true;
    break;
case 3:
    $dias=" <div > Esta por vencer</div>  ";
    $color="style ='background-color: darkKhaki;'";
    $cerodias3=true;
    break;
case 4:
    $dias=" <div> Esta por vencer</div>  ";
    $color="style ='background-color: darkKhaki;'";
    $cerodias4=true;
    break;
case 5:
    $dias=" <div style =''> Esta por vencer</div>  ";
    $color="style ='background-color: darkKhaki;'";
    $cerodias5=true;
    break;
case 6:
    $dias=" <div style =''> Esta por vencer</div>  ";
    $color="style ='background-color: darkKhaki;'";
    $cerodias6=true;
    break;
case 7:
    $dias=" <div style =''> Esta por vencer</div>  ";
    $color="style ='background-color: darkKhaki;'";
    $cerodias7=true;
    break;
#si vencen hoy entonces mandar la lista de los que an vencido#
  default:
    
    if ($quedan_dias < 0) {
      $dias ="<div>an pasado ".$quedan_dias." dias</div>";   
      $color="style ='background-color: maroon;'";
      $cerodiasnegativo=true;
    }  else {
        $dias="dentro de ".$quedan_dias." dias";
        $color="style ='background-color: chartreuse;'";
        $cerodiaspararato=true;
    }
      
}
/*
 
$cerodiasnegativo=false;
$cerodiaspararato=false;
 */

    #para fecha  - end 
  
	/*
         * 
    $cadena = ereg_replace( "([     ]+)","%20",$productos['ruta_img1']);
	$comentarios .= "
        <tr ".$color." ><td>". $productos['codigo_producto']."</td><td>". $productos['descripcion_producto']."</td><td>".$productos['Cantidad_producto']."</td>
            <td> ". $productos['fecha_guia']."</td>
            <td>". $productos['fecha_caducidad_pro']." </td>
               <td>".$dias."</td> 
            <td> 
        <a class='zoom' href=".$cadena." style='cursor:pointer; ' >
            <!--<img  src=".$cadena." width='64px' height='64px >--> <img src='../imagenes/camera32.png' width='16' height='16'> </a>
                </td></tr>";
  
	}
        $comentarios.="</tr></table>";
         *
         */
/*
 * 
 //###########################par mandar mails #####fecha de caducidad##
 
#$comentarios="aki basicamente iria todo el cuerpo del mensaje ";
$nombre="Ingrese al sistema para gestionar dichos productos http://www.demo.newtechperu.com/admin/";
$email_contacto ="soporte@newtechperu.com";#no siempre quien envia aparece en el mensaje en el footer
$telefono="969783646";
require("class.phpmailer.php");
########################################yea###########
$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = "marlon.martos@newtechperu.com";// de quien envia
$mail->FromName = "caxaventas";// nombre de quien Envia (empresa)
$mail->Subject = "Datos de  su Compra";// contenido del correo
$mail->AddAddress("marlon.martos@newtechperu.com","marlon inca02, ema");
$mail->AddCC("marlon.martos@newtechperu.com");
$mail->AddBCC("diosgoogle@hotmail.com");
############## ahora cuerpo
$body  = "Hola <strong>Estimado cliente</strong><br>";
$body .= $comentarios."<br>";
$body .= $nombre."<br>"
		.$email_contacto."<br>"
		.$telefono."<br><font color='red'>Saludos</font>";
$mail->Body = $body;
############## 
$mail->AltBody = "Hola amigo\nprobando PHPMailer\n\nSaludos";
$mail->AddAttachment("files/demo.zip", "demo.zip");
$mail->Send();
########################################yea end
 
//############################par mandar mails end##fecha de caducidad#####
 * 
 */

$cadena = ereg_replace( "([     ]+)","%20",$productos['ruta_img1']);
	$comentarios .= "
        <tr ".$color." ><td>". $productos['codigo_producto']."</td><td>". $productos['descripcion_producto']."</td><td>".$productos['Cantidad_producto']."</td>
            <td> ". $productos['fecha_guia']."</td>
            <td>". $productos['fecha_caducidad_pro']." </td>
               <td>".$dias."</td> 
            </tr>";
        
        ####para mandar el mail function mail ###

}
if ($cerodias= TRUE or  $cerodias2= TRUE or  $cerodias3= TRUE or $cerodias4= TRUE or $cerodias5= TRUE or $cerodias6= TRUE or $cerodias7= TRUE or $cerodiasnegativo= TRUE ) {
          ################cuerpo mensaje####
	
        #$comentarios="aki basicamente iria todo el cuerpo del mensaje ";
$nombre="Ingrese al sistema para gestionar dichos productos http://www.demo.newtechperu.com/admin/";
$email_contacto ="soporte@newtechperu.com";#no siempre quien envia aparece en el mensaje en el footer
$telefono="969783646";
require("class.phpmailer.php");
########################################yea###########
$mail = new PHPMailer();
$mail->Mailer="smtp";
$mail->Helo = "www.caxaventas.com";
$mail->SMTPAuth=true;
$mail->Host = "localhost";
$mail->From = "soporte@caxaventas.com";// de quien envia
$mail->FromName = "caxaventas";// nombre de quien Envia (empresa)
$mail->Subject = "Datos de  su Compra";// contenido del correo
$mail->AddAddress("oscuridadtye@hotmail.com","marlon inca02, ema");
$mail->AddCC("marlon.martos@newtechperu.com");
$mail->AddBCC("diosgoogle@hotmail.com");
############## ahora cuerpo
$body  = "Hola <strong>Estimado cliente</strong><br>";
$comentarios.="</tr></table>";
$body .= $comentarios."<br>";
$body .= $nombre."<br>"
		.$email_contacto."<br>"
		.$telefono."<br><font color='red'>Saludos</font>";
$mail->Body = $body;
############## 
$mail->AltBody = "Hola amigo\nprobando PHPMailer\n\nSaludos";
$mail->AddAttachment("files/demo.zip", "demo.zip");
$mail->Send();
########################################yea end
        
        ################cuerpo mensaje#### end
}


?>