<?php 
include("../func/funciones.php");
#resivimos las variables
$nombre_marca = quitar($_POST["nombre_marca"]);
 
$estado_marca= quitar($_POST['estado_conductor']);
 

//fecha
//$textfechaguia= strtotime($_POST['textfechaguia']);
//$fechaguiaMysql =date('Y-m-d',$textfechaguia); 
//fecha end

if($nombre_marca != ""  ) 
       {   
$consulta = "INSERT INTO marca(nombre_marca,estado_marca)  
 VALUES ('$nombre_marca','$estado_marca')";
$result = dime($consulta)or die(ovni("registrandonombre_marca.php"));	
//echo $consulta;
echo "<script>document.location.href='marca.php'</script>";
}
 else{
          echo "introdusca datos <a href='javascript:history.go(-1)'>Atras</a> ";}
?> 