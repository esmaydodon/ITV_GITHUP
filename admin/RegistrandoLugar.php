<?php 
session_start(); 
$descripcion_lugar_inspeccion=$_POST['descripcion_lugar_inspeccion']; 
$estado_lugar=$_POST['estado_lugar']; 
include("../func/funciones.php");
#registramos cliente
 
#$idlocalXD = quitar($_POST["idlocal"]);
//$detalle_documento = quitar($_POST["detalle_documento"]);
/*formato a fecha mysql 
$fini2 = strtotime($_POST['fini']);
$dateToMySQL2 = date("Y-m-d",$fini2); // Formato de Date en mysql es: aaaa-mm-dd
$ffin2 = strtotime($_POST['ffin']);
$dateToMySQL3 = date("Y-m-d",$ffin2); */// Formato de Date en mysql es: aaaa-mm-dd
//$hora=date("Y-m-d H:i:s",$tDate);
//$fecha=date("d/m/Y H:i:s",$timestamp);
/*formato fecha mysql end*/
 $idusuarios= quitar($_POST['idusuarios']);
$consulta = "INSERT INTO lugar_inspeccion(descripcion_lugar_inspeccion,estado_lugar)  
 VALUES ('$descripcion_lugar_inspeccion','$estado_lugar')";
$result = dime($consulta)or die(ovni("Oo.php"));					 
//sacamos el id del ultimo pago
#$idpago=mysql_insert_id();
//echo $consulta;
 $_SESSION[] = array();
session_destroy();//estoy entendiendo quela seion se puedo terminar (php5) con esto basta 
echo "<script>document.location.href='lugar.php'</script>";
?> 