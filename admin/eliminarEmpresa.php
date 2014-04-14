<?
include("../func/funciones.php");
$idp = $_POST['id'];
$query="UPDATE empresa SET  estado_empresa= '0' 
WHERE idempresa =$idp ";
mysql_query($query) or die(mysql_error()); 
echo "<div id='gestionarEmpresa' onclick='gestionarEmpresas()'>Actualizar Empresas</div>";

?>