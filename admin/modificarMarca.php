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
$consulta = dime("select * from marca where idmarca= '".mysql_escape_string($idc)."'");
while($documentos = mysql_fetch_array($consulta)){
$html=" 
 <form action='Modificandomarca.php' method='post' enctype='multipart/form-data' class='contacto' >
     nombre_marca :<spam class='requerido' >*</spam>
     <input type='text'  name='nombre_marca'  id='nombre_marca' bsize='60' maxlength='120' value='".$documentos['nombre_marca']."' /> <br>
 <input type='hidden' name='idmarca' size='10'  value='".$documentos['idmarca']."' /> <br/>
 <input type='hidden' name='estado_marca' size='10'  value='1' /> <br/>
     <input type='submit' value='Registrar' />
</form>
";	
	};
	echo $html;
	
 
?>

</body>
</html>