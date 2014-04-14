<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$idempresa = quitar($_POST["idempresa"]);
$razon_social_empresa = quitar($_POST["razon_social_empresa"]);
$direccion_empresa= quitar($_POST['direccion_empresa']);
$email_empresa= quitar($_POST['email_empresa']);
$movil_empresa= quitar($_POST['movil_empresa']);
$telefono_empresa= quitar($_POST['telefono_empresa']);
$Web= quitar($_POST['Web']);
$ruc_empresa= quitar($_POST['ruc_empresa']);
$estado_empresa= quitar($_POST['estado_empresa']);
$consulta = dime("UPDATE empresa 
    SET  razon_social_empresa= '$razon_social_empresa',
        direccion_empresa='$direccion_empresa',
        email_empresa='$email_empresa',
            telefono_empresa='$telefono_empresa',
                movil_empresa='$movil_empresa',
            ruc_empresa='$ruc_empresa',
            web_empresa='$Web'
WHERE idempresa =$idempresa") or die (ovni("modificandoEmpresa.php"));
echo "<script>document.location.href='empresa.php'</script>"; 
?>
