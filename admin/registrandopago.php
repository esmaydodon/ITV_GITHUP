<?php 
session_start(); 
$carro=$_SESSION['carro']; 
$cliente=$_SESSION['cliente']; 
$documento=$_SESSION['documento']; 
include("../func/funciones.php");
#registramos cliente
//podria asginarle del  array de sesion pero
$iddocumento_servicio = quitar($_POST["iddocumento_servicio"]);
$iddocumentos = quitar($_POST["iddocumentos"]);
$id_cliente = quitar($_POST["id_cliente"]);
$idlocalXD = quitar($_POST["idlocal"]);
//$detalle_documento = quitar($_POST["detalle_documento"]);
/*formato a fecha mysql*/ 
$tDate = strtotime($_POST['fecha']);
$dateToMySQL = date("Y-m-d",$tDate); // Formato de Date en mysql es: aaaa-mm-dd
$hora=date("Y-m-d H:i:s",$tDate);
//$fecha=date("d/m/Y H:i:s",$timestamp);
/*formato fecha mysql end*/
$numero_documento= quitar($_POST['numero_actual']);
$monto_total= quitar($_POST['monto_total']);
$idusuarios= quitar($_POST['idusuarios']);

$consulta = "INSERT INTO pago(idusuarios,
		idcliente,
		iddocumento_servicio,
		fecha_pago,
		numero_documento,
		monto,idlocal,hora_pago)  
 VALUES ('$idusuarios','$id_cliente',
 		'$iddocumento_servicio',
		'$dateToMySQL','$numero_documento','$monto_total','$idlocalXD','$hora')";
	
$result = dime($consulta)or die(ovni("Oo.php"));					 
//sacamos el id del ultimo pago
$idpago=mysql_insert_id();
//echo $consulta;
foreach($carro as $k => $v){
$NuevaCantidad =($v['stock']-$v['cantidad']);
$actualizarStok="UPDATE productos SET Cantidad_producto = '$NuevaCantidad' WHERE idproductos =".$v['idproductos'];
$result2 = dime($actualizarStok)or die(ovni("Oo.php"));
//llenamos datos en detalle de pago
$monto_pago=($v['cantidad']*$v['precio']);
$insertardetallepago=dime("INSERT INTO  detalle_de_pago 
        (idpago,idproductos,cantidad_pago,montounitario_pago,monto_pago) values 
        ('$idpago',".$v['idproductos'].",".$v['cantidad'].",".$v['precio'].",'$monto_pago')");
#$consultap=dime($actualizarStok);
//echo $actualizarStok;
	  } 
$actualizarnumerodocumento=dime("UPDATE documento_servicio SET numero_actual = '$numero_documento' WHERE iddocumento_servicio =".$iddocumento_servicio)or die(ovni("actualizandonumero documento ser numero"));	  
 $_SESSION[] = array();
session_destroy();//estoy entendiendo quela seion se puedo terminar (php5) con esto basta 
echo "<script>document.location.href='vender.php'</script>";

?> 