<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$idmarca = quitar($_POST["idmarca"]);
$nombre_marca = quitar($_POST["nombre_marca"]);
//$estado_marca= quitar($_POST['estado_marca']);
$consulta = dime("UPDATE marca 
    SET  nombre_marca= '$nombre_marca'    
WHERE idmarca =$idmarca") or die (ovni("modificandoMarca.php"));
echo "<script>document.location.href='marca.php'</script>"; 
?>
