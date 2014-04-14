<?php 
include("../func/funciones.php");
#resivimos las variables
$nombre_tipo = quitar($_POST["nombre_tipo"]);
 
 
$estado_tipo= quitar($_POST['estado_tipo']);
 

//fecha
//$textfechaguia= strtotime($_POST['textfechaguia']);
//$fechaguiaMysql =date('Y-m-d',$textfechaguia); 
//fecha end

if($nombre_tipo != ""  ) 
       {   
$consulta = "INSERT INTO tipo(descripcion_tipo,estado_tipo)  
 VALUES ('$nombre_tipo','$estado_tipo')";
$result = dime($consulta)or die(ovni("registrandotipo.php"));	
//echo $consulta;
echo "<script>document.location.href='tipo.php'</script>";
}
 else{
          echo "introdusca datos <a href='javascript:history.go(-1)'>Atras</a> ";}
?> 