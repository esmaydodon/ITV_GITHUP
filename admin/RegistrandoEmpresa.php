<?php 
include("../func/funciones.php");
#resivimos las variables
$razon_social_empresa = quitar($_POST["razon_social_empresa"]);
$direccion_empresa= quitar($_POST['direccion_empresa']);
$email_empresa= quitar($_POST['email_empresa']);
$movil_empresa= quitar($_POST['movil_empresa']);
$telefono_empresa= quitar($_POST['telefono_empresa']);
$Web= quitar($_POST['web_empresa']);
$ruc_empresa= quitar($_POST['ruc_empresa']);
$estado_empresa= quitar($_POST['estado_empresa']);
 

//fecha
//$textfechaguia= strtotime($_POST['textfechaguia']);
//$fechaguiaMysql =date('Y-m-d',$textfechaguia); 
//fecha end

if($razon_social_empresa != "" && $direccion_empresa != "" && 
        $email_empresa != "" && $telefono_empresa != "" && $ruc_empresa != "") 
       {   
$consulta = "INSERT INTO empresa(razon_social_empresa,direccion_empresa,email_empresa,telefono_empresa,movil_empresa,ruc_empresa,estado_empresa,web_empresa)  
 VALUES ('$razon_social_empresa','$direccion_empresa','$email_empresa','$telefono_empresa','$movil_empresa','$ruc_empresa','$estado_empresa','$Web')";
$result = dime($consulta)or die(ovni("registrandoguia.php"));	
//echo $consulta;
echo "<script>document.location.href='empresa.php'</script>";
}
 else{
          echo "introdusca datos <a href='javascript:history.go(-1)'>Atras</a> ";}
?> 