<?
include("../func/funciones.php");
$idp = $_POST['id'];
$query="UPDATE conductor SET  estado_conductor= '0' 
WHERE idconductor =$idp ";
mysql_query($query) or die(mysql_error()); 
echo "<div id='gestionarconductor' onclick='gestionarConductor()'>Actualizar Conductores</div>";

?>