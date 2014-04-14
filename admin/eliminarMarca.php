<?
include("../func/funciones.php");
$idp = $_POST['id'];
$query="UPDATE marca SET  estado_marca= '0' 
WHERE idmarca =$idp ";
mysql_query($query) or die(mysql_error()); 
echo "<div  onclick='gestionarMarca()'>Actualizar Marcas</div>";

?>