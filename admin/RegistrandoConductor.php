<?php 
include("../func/funciones.php");
#resivimos las variables
$descripcion_conductor = quitar($_POST["descripcion_conductor"]);
$ap_mat_conductor= quitar($_POST['ap_mat_conductor']);
$ap_pat_conductor= quitar($_POST['ap_pat_conductor']);
$direccion_conductor= quitar($_POST['direccion_conductor']);
$email_conductor= quitar($_POST['email_conductor']);
$movil_conductor= quitar($_POST['movil_conductor']);
$dni_conductor= quitar($_POST['dni']);
$telefono_conductor= quitar($_POST['telefono_conductor']);
$estado_conductor= quitar($_POST['estado_conductor']);
 

//fecha
//$textfechaguia= strtotime($_POST['textfechaguia']);
//$fechaguiaMysql =date('Y-m-d',$textfechaguia); 
//fecha end

if($descripcion_conductor != "" && $ap_mat_conductor != "" && 
        $ap_pat_conductor != "" && $email_conductor != "" && $telefono_conductor != "") 
       {   
$consulta = "INSERT INTO conductor(descripcion_conductor,ap_mat_conductor,ap_pat_conductor,email_conductor,direccion_conductor,dni_conductor,telefono_conductor,estado_conductor,movil_conductor)  
 VALUES ('$descripcion_conductor','$ap_mat_conductor','$ap_pat_conductor','$email_conductor','$direccion_conductor','$dni_conductor','$telefono_conductor','$estado_conductor','$movil_conductor')";
$result = dime($consulta)or die(ovni("registrandoconductor.php"));	
//echo $consulta;
echo "<script>document.location.href='conductor.php'</script>";
}
 else{
          echo "introdusca datos <a href='javascript:history.go(-1)'>Atras</a> ";}
?> 