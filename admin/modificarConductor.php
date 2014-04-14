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
$consulta = dime("select * from conductor where idconductor= '".mysql_escape_string($idc)."'");
while($documentos = mysql_fetch_array($consulta)){
$html=" 
 <form action='modificandoConductor.php' method='post' enctype='multipart/form-data' class='contacto' >
     descripcion_conductor :<spam class='requerido' >*</spam><input type='text' name='descripcion_conductor'  id='descripcion_conductor' bsize='60' maxlength='120' value='".$documentos['descripcion_conductor']."' /> <br>
          ap_pat_conductor:<spam class='requerido' >*</spam><input type='text' name='ap_pat_conductor' id='ap_pat_conductor' size='60'  value='".$documentos['ap_pat_conductor']."' /><br>
         ap_mat_conductor :<spam class='requerido' >*</spam><input type='text' name='ap_mat_conductor' size='12' maxlength='120'    id='ap_mat_conductor' value='".$documentos['ap_mat_conductor']."' /> <br>
         DNI :<spam class='requerido' >*</spam><input type='text' name='dni_conductor' size='12' maxlength='120'    id='dni' value='".$documentos['dni_conductor']."' /> <br>
           
                 direccion_conductor:<input type='text' name='direccion_conductor' id='direccion_conductor' size='50' maxlength='50' value='".$documentos['direccion_conductor']."' /><br>
                     email_conductor:<spam class='requerido' >*</spam><input type='text' name='email_conductor' id='email_conductor' size='15' maxlength='30' value='".$documentos['email_conductor']."' /> <br>
                       telefono_conductor:<spam class='requerido' >*</spam><input type='text' name='telefono_conductor' size='10' maxlength='20' value='".$documentos['telefono_conductor']."'  /> <br/> 
                       movil_conductor:<input type='text' name='movil_conductor' id='movil_conductor'  size='15' maxlength='50' value='".$documentos['movil_conductor']."' /><br> 
 
                            
 <input type='hidden' name='estado_conductor' size='10'  value='1' /> <br/>
 <input type='hidden' name='idconductor' size='10'  value='".$documentos['idconductor']."' /> <br/>
     <input type='submit' value='Registrar' />
</form>";	
	};
	echo $html;
	
 
?>

</body>
</html>