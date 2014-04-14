<?php 

$descripcion_tecnico=$_POST['descripcion_tecnico']; 
$ap_pat__tecnico=$_POST['ap_pat__tecnico']; 
$ap_mat__tecnico=$_POST['ap_mat__tecnico']; 
$direccion_tecnico=$_POST['direccion_tecnico']; 
$email_tecnico=$_POST['email_tecnico']; 
$telefono_tecnico=$_POST['telefono_tecnico']; 
$movil_tecnico=$_POST['movil_tecnico']; 

$estado_tecnico=$_POST['estado_tecnico']; 
include("../func/funciones.php");
#registramos client
#$idlocalXD = quitar($_POST["idlocal"]);
//$detalle_documento = quitar($_POST["detalle_documento"]);
/*formato a fecha mysql 
$fini2 = strtotime($_POST['fini']);
$dateToMySQL2 = date("Y-m-d",$fini2); // Formato de Date en mysql es: aaaa-mm-dd
$ffin2 = strtotime($_POST['ffin']);
$dateToMySQL3 = date("Y-m-d",$ffin2); // Formato de Date en mysql es: aaaa-mm-dd
//$hora=date("Y-m-d H:i:s",$tDate); */
//$fecha=date("d/m/Y H:i:s",$timestamp);
/*formato fecha mysql end*/
 $idusuarios= quitar($_POST['idusuarios']);
$consulta = "INSERT INTO tecnico(descripcion_tecnico,ap_pat__tecnico,ap_mat__tecnico,direccion_tecnico,
email_tecnico,telefono_tecnico,movil_tecnico,estado_tecnico)  
 VALUES ('$descripcion_tecnico','$ap_pat__tecnico','$ap_mat__tecnico','$direccion_tecnico'
 ,'$email_tecnico','$telefono_tecnico','$movil_tecnico','$estado_tecnico')";
$result = dime($consulta)or die(ovni("Oo.php"));					 
//sacamos el id del ultimo pago
#$idpago=mysql_insert_id();
//echo $consulta;
 $_SESSION[] = array();
session_destroy();//estoy entendiendo quela seion se puedo terminar (php5) con esto basta 
echo "<script>document.location.href='periodo.php'</script>";
?> 