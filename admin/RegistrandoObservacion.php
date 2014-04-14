<?php 
session_start(); 

$observacion=$_SESSION['observacion']; 
$vehiculo=$_SESSION['vehiculo']; 
$conductor=$_SESSION['conductor']; 
//resivimos variables

include("../func/funciones.php");
#registramos vehiculo
$lugar_inspeccion = quitar($_POST["lugar_inspeccion"]);
$idconductor = quitar($_POST["idconductor"]);
$idvehiculo = quitar($_POST["idvehiculo"]);
$fecha_itv= quitar($_POST['fecha_itv']);
$checklist= quitar($_POST['checklist']);
$sticker= quitar($_POST['sticker']);
$condicion= quitar($_POST['condicion']);
$tecnico= quitar($_POST['tecnico']);
$empresa= quitar($_POST['empresa']);
$idusuarios= quitar($_POST['idusuarios']);

//$detalle_conductor = quitar($_POST["detalle_conductor"]);
/*formato a fecha mysql*/ 
$tDate = strtotime($_POST['fecha_itv']);
$dateToMySQL = date("Y-m-d",$tDate); // Formato de Date en mysql es: aaaa-mm-dd
$hora=date("Y-m-d H:i:s",$tDate);
//$fecha=date("d/m/Y H:i:s",$timestamp);
/*formato fecha mysql end*/
#aqui inbtroducimos lo que es el ITVVVVV ))))))))))))))))))))))))))))))))))))
$consulta = "INSERT INTO itv(checklist,fecha_itv,sticker,idconductor,idempresa
		,idvehiculo,idtecnico,idcondicion,idlugar_inspeccion)  
 VALUES ('$checklist','$dateToMySQL','$sticker',
	'$idconductor','$empresa','$idvehiculo','$tecnico','$condicion','$lugar_inspeccion')";	
$result = dime($consulta)or die(ovni("Oo.php"));					 
//sacamos el id del ultimo iditv
 $iditv=mysql_insert_id();
//echo $consulta; por cada observacion al vehiculo hace ejecuta este array )))))))))))))
foreach($observacion as $k => $v){
$insertardetallepago=dime("INSERT INTO  itv_has_observacion 
        (iditv,idobservacion,estado) values 
        ('$iditv',".$v['idobservacion'].",1)");
#$consultap=dime($actualizarStok);
//echo $actualizarStok;
	  } 
//$actualizarnumeroconductor=dime("UPDATE conductor_servicio SET condicion = '$numero_conductor' WHERE lugar_inspeccion =".$lugar_inspeccion)or die(ovni("actualizandonumero conductor ser numero"));	  
 $_SESSION[] = array();
session_destroy();//estoy entendiendo quela seion se puedo terminar (php5) con esto basta 
echo "<script>document.location.href='itv.php'</script>";

?> 