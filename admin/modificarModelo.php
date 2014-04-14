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
$consulta = dime("select m.*,ma.idmarca,ma.nombre_marca from modelo m inner join marca ma on
m.idmarca=ma.idmarca where m.estado_modelo=1 and m.idmodelo = '".mysql_escape_string($idc)."'");
while($documentos = mysql_fetch_array($consulta)){
$html=" 
<form action='modificandoModelo.php' method='post' enctype='multipart/form-data'  class='contacto' >
     nombre_modelo :<spam class='requerido' >*</spam><input type='text'   name='nombre_modelo'  id='nombre_modelo' bsize='60' maxlength='120' value='".$documentos['nombre_modelo']."' />  
 <input type='hidden' name='idmodelo' size='10'  value='".$documentos['idmodelo']."' /> <br/>
 <input type='hidden' name='estado_modelo' size='10'  value='1' /> <br/>
 Marca:<select id ='marca' name='marca' class='select'>
      <option value=''".$documentos['idmarca']."''>".$documentos['nombre_marca']."</option>'        
 ".  $consulata_tipo2=dime('select * from  marca where estado_marca = 1 order by  idmarca desc') or die(mysql_error());
		while($local = mysql_fetch_array($consulata_tipo2)){
    	$html.= "<option value='".$local['idmarca']."'>".$local['nombre_marca']."</option>' ";
        }
	$html.= "</select></br> 
     <input type='submit' value='Registrar' />
</form>
";	
	};
	echo $html;
	
 
?>

</body>
</html>