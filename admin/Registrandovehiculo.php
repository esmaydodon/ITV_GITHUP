<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php 
include("../func/funciones.php");
#resivimos las variables
$placa_vehiculo = quitar($_POST["placa_vehiculo"]);
$anio_fabricasion= quitar($_POST['anio_fabricasion']);
$modelo= quitar($_POST['modelo']);
$estado_vehiculo= quitar($_POST['estado_vehiculo']);
$tipo= quitar($_POST['tipo']);
//fecha
//$textfechaguia= strtotime($_POST['textfechaguia']);
//$fechaguiaMysql =date('Y-m-d',$textfechaguia); 
//fecha end

if($placa_vehiculo != "" && $anio_fabricasion != "" && 
        $modelo != "" && $tipo != ""  ) 
       {   
$consulta = "INSERT INTO vehiculo(placa_vehiculo,anio_fabricasion,idmodelo,idtipo,estado_vehiculo)  
 VALUES ('$placa_vehiculo','$anio_fabricasion','$modelo','$tipo','$estado_vehiculo')";
$result = dime($consulta)or die(ovni("registrandovehiculo.php"));	
//echo $consulta;
echo "<script>document.location.href='vehiculo.php'</script>";
}
 else{
          echo "introdusca datos <a href='javascript:history.go(-1)'>Atras</a> ";}
?> 