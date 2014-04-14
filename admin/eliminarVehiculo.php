<?
include("../func/funciones.php");
$idp = $_POST['id'];
$query="UPDATE vehiculo SET  estado_vehiculo= '0' 
WHERE idvehiculo =$idp ";
mysql_query($query) or die(mysql_error()); 
echo "<div  onclick='gestionarVehiculo()'>Actualizar vehiculo</div>";

?>