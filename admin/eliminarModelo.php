<?
include("../func/funciones.php");
$idp = $_POST['id'];
$query="UPDATE modelo SET  estado_modelo= '0' 
WHERE idmodelo =$idp ";
mysql_query($query) or die(mysql_error()); 
echo "<div  onclick='gestionarModelo()'>Actualizar Modelo</div>";

?>