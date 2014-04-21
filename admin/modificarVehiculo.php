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
$consulta = dime("select v.idvehiculo,v.placa_vehiculo,
v.anio_fabricasion,v.estado_vehiculo,v.idmodelo,v.idtipo,
m.nombre_modelo,t.descripcion_tipo from vehiculo as v inner join modelo as m on
v.idmodelo=m.idmodelo inner join   tipo as t on
v.idtipo=t.idtipo  where v.estado_vehiculo =1 and v.idvehiculo = '".mysql_escape_string($idc)."'");
while($documentos = mysql_fetch_array($consulta)){
$html=" 
<form action='modificandoVehiculo.php' method='post' enctype='multipart/form-data'  class='contacto' >
Placa Vehiculo :<spam class='requerido' >*</spam>
 <input type='text'   name='placa_vehiculo'  id='placa_vehiculo' bsize='60' maxlength='120' value='".$documentos['placa_vehiculo']."' />  
Año de Fabricacion :<spam class='requerido' >*</spam>
<input type='text'   name='anio_fabricasion'  id='anio_fabricasion' bsize='60' maxlength='120' value='".$documentos['anio_fabricasion']."' />  
 <input type='hidden' name='idmodelo' size='10'  value='".$documentos['idmodelo']."' /> <br/>
 <input type='hidden' name='idtipo' size='10'  value='".$documentos['idtipo']."' /> <br/>
 <input type='hidden' name='estado_vehiculo' size='10'  value='1' /> <br/>
 <input type='hidden' name='idvehiculo' size='10'  value='".$documentos['idvehiculo']."' /> <br/>
 

Modelo:<select id ='modelo' name='modelo' class='select'>
      <option value='".$documentos['idmodelo']."'>".$documentos['nombre_modelo']."</option>'        
 ".  $consulata_tipo2=dime('select * from  modelo where estado_modelo = 1 order by  idmodelo desc') or die(mysql_error());
		while($local = mysql_fetch_array($consulata_tipo2)){
    	$html.= "<option value='".$local['idmodelo']."'>".$local['nombre_modelo']."</option>' ";
        }
	$html.= "</select></br> 
            
Tipo:<select id ='tipo' name='tipo' class='select'>
      <option value='".$documentos['idtipo']."'>".$documentos['descripcion_tipo']."</option>'        
 ".  $consulata_tipo2=dime('select * from  tipo where estado_tipo = 1 order by  idtipo desc') or die(mysql_error());
		while($local = mysql_fetch_array($consulata_tipo2)){
    	$html.= "<option value='".$local['idtipo']."'>".$local['descripcion_tipo']."</option>' ";
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