<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$idconductor = quitar($_POST["idconductor"]);
$descripcion_conductor = quitar($_POST["descripcion_conductor"]);
$ap_pat_conductor= quitar($_POST['ap_pat_conductor']);
$ap_mat_conductor= quitar($_POST['ap_mat_conductor']);
$dni_conductor= quitar($_POST['dni_conductor']);
$direccion_conductor= quitar($_POST['direccion_conductor']);
$email_conductor= quitar($_POST['email_conductor']);
$telefono_conductor= quitar($_POST['telefono_conductor']);
$movil_conductor= quitar($_POST['movil_conductor']);
//$estado_conductor= quitar($_POST['estado_conductor']);
$consulta = dime("UPDATE conductor 
    SET  descripcion_conductor= '$descripcion_conductor',
        ap_pat_conductor='$ap_pat_conductor',
        ap_mat_conductor='$ap_mat_conductor',
            direccion_conductor='$direccion_conductor',
                dni_conductor='$dni_conductor',
            telefono_conductor='$telefono_conductor',
            movil_conductor='$movil_conductor' WHERE idconductor =$idconductor") or die (ovni("modificandoConductor.php"));
echo "<script>document.location.href='conductor.php'</script>"; 
?>
