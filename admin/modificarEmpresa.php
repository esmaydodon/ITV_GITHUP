<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?
include("../func/funciones.php");$idc = $_POST['id'];
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?
$consulta = dime("select idempresa,razon_social_empresa,direccion_empresa,email_empresa,telefono_empresa,movil_empresa,ruc_empresa,web_empresa
    from empresa where idempresa = '".mysql_escape_string($idc)."'");
while($documentos = mysql_fetch_array($consulta)){
$html=" 
  <form action='modificandoEmpresa.php' method='post' enctype='multipart/form-data'   class='contacto' >
     razon_social_empresa : <br>
     <textarea   name='razon_social_empresa'  id='razon_social_empresa' bsize='60' maxlength='120'  />".$documentos['razon_social_empresa']."</textarea> <br>
         ruc_empresa : 
		 <input type='text' name='ruc_empresa' size='12' maxlength='120'   id='ruc_empresa' value='".$documentos['ruc_empresa']."' /> <br>
direccion_empresa: 
<input type='text' name='direccion_empresa' size='60'  value='".$documentos['direccion_empresa']."' /><br>
email_empresa:<input type='text' name='email_empresa' size='50' maxlength='50' value='".$documentos['email_empresa']."' /><br>
telefono_empresa: <input type='text' name='telefono_empresa' size='15' maxlength='10' value='".$documentos['telefono_empresa']."' /> <br>
movil_empresa:<input type='text' name='movil_empresa' size='15' maxlength='50' value='".$documentos['movil_empresa']."' /><br> 
 
Web:<input type='text' name='Web' size='10' maxlength='20' value='".$documentos['web_empresa']."' /> <br/>
 <input type='hidden' name='estado_empresa' size='10'  value='1' /> <br/>
 <input type='hidden' name='idempresa' size='10'  value='".$documentos['idempresa']."' /> <br/>
     <input type='submit' value='Registrar' />
</form>";	
	};
	echo $html;
	
 
?>

</body>
</html>