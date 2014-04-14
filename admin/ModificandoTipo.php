<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$idtipo = quitar($_POST["idtipo"]);
$descripcion_tipo = quitar($_POST["descripcion_tipo"]);
//$estado_tipo= quitar($_POST['estado_tipo']);
$consulta = dime("UPDATE tipo 
    SET  descripcion_tipo= '$descripcion_tipo'    
WHERE idtipo =$idtipo") or die (ovni("modificandoTipo.php"));
echo "<script>document.location.href='tipo.php'</script>"; 
?>
