<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$idmodelo = quitar($_POST["idmodelo"]);
$nombre_modelo = quitar($_POST["nombre_modelo"]);
$idmarca = quitar($_POST["marca"]);
//$estado_tipo= quitar($_POST['estado_tipo']);
$consulta = dime("UPDATE modelo 
    SET  nombre_modelo= '$nombre_modelo',idmarca='$idmarca'    
WHERE idmodelo=$idmodelo") or die (ovni("modificandoModelo.php"));
echo "<script>document.location.href='modelo.php'</script>"; 
?>
