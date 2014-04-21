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
$cadena_placa=strlen($placa_vehiculo);
$anio_fabricasion= quitar($_POST['anio_fabricasion']);
$modelo= quitar($_POST['modelo']);
//$estado_vehiculo= quitar($_POST['estado_vehiculo']);
$tipo= quitar($_POST['tipo']);
$idvehiculo= quitar($_POST['idvehiculo']);
//fecha
//$textfechaguia= strtotime($_POST['textfechaguia']);
//$fechaguiaMysql =date('Y-m-d',$textfechaguia); 
//fecha end
    if ($cadena_placa >"10") {
     
        echo 'LA PLACA NO MAYOR A 10 CARACTERES, REGRESAR'.
            "<a href='javascript:history.go(-1)'>Atras</a>";
    }
 else {
if($placa_vehiculo != "" && $anio_fabricasion != "" && 
        $modelo != "" && $tipo != ""  ) 
       { 

    
    
 $consulta = dime("UPDATE vehiculo 
    SET  placa_vehiculo= '$placa_vehiculo',
        anio_fabricasion='$anio_fabricasion',
        idmodelo='$modelo',
            idtipo='$tipo'
                 
WHERE idvehiculo =$idvehiculo") or die (ovni("ModificandoVehiculo.php"));
echo "<script>document.location.href='vehiculo.php'</script>";

} 



 else{
          echo "introdusca datos minimos:placa, año, modelo, tipo, <a href='javascript:history.go(-1)'>Atras</a> ";}
          } 
?> 