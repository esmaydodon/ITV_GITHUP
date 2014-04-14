<?
include("../func/funciones.php");
$idp = $_POST['id'];
$query="UPDATE tipo SET  estado_tipo= '0' 
WHERE idtipo =$idp ";
mysql_query($query) or die(mysql_error()); 
echo "<div  onclick='gestionarTipo()'>Actualizar Tipos</div>";

?>