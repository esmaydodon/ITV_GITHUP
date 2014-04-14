<?php 
session_start(); 
$vehiculo=$_SESSION['vehiculo']; 
$conductor=$_SESSION['conductor']; 
include("../func/funciones.php");
#registramos cliente
$idconductor = quitar($_POST["idconductor"]);
$idvehiculo = quitar($_POST["idvehiculo"]);
#$idlocalXD = quitar($_POST["idlocal"]);
//$detalle_documento = quitar($_POST["detalle_documento"]);
/*formato a fecha mysql 
$tDate = strtotime($_POST['fecha']);
$dateToMySQL = date("Y-m-d",$tDate); // Formato de Date en mysql es: aaaa-mm-dd
$hora=date("Y-m-d H:i:s",$tDate);*/
//$fecha=date("d/m/Y H:i:s",$timestamp);
/*formato fecha mysql end*/
 $idusuarios= quitar($_POST['idusuarios']);
$consulta = "INSERT INTO conductor_has_vehiculo(conductor_idconductor,
		vehiculo_idvehiculo)  
 VALUES ('$idconductor','$idvehiculo')";
$result = dime($consulta)or die(ovni("Oo.php"));					 
//sacamos el id del ultimo pago
#$idpago=mysql_insert_id();
//echo $consulta;
 $_SESSION[] = array();
session_destroy();//estoy entendiendo quela seion se puedo terminar (php5) con esto basta 
echo "<script>document.location.href='conductor_vehiculo.php'</script>";
?> 