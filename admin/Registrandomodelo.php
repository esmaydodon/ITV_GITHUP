<?php 
include("../func/funciones.php");
#resivimos las variables
$nombre_modelo = quitar($_POST["nombre_modelo"]);
 
$idmarca= quitar($_POST['marca']);
$estado_modelo= quitar($_POST['estado_modelo']);
 

//fecha
//$textfechaguia= strtotime($_POST['textfechaguia']);
//$fechaguiaMysql =date('Y-m-d',$textfechaguia); 
//fecha end

if($nombre_modelo != ""  ) 
       {   
$consulta = "INSERT INTO modelo(nombre_modelo,idmarca,estado_modelo)  
 VALUES ('$nombre_modelo','$idmarca','$estado_modelo')";
$result = dime($consulta)or die(ovni("registrandomodelo.php"));	
//echo $consulta;
echo "<script>document.location.href='modelo.php'</script>";
}
 else{
          echo "introdusca datos <a href='javascript:history.go(-1)'>Atras</a> ";}
?> 