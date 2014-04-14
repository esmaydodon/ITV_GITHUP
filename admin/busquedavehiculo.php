<?php
#modificado x  www.kuraka.net  -  mmq 
ob_start("ob_gzhandler"); 
session_start();
include("../func/funciones.php");
$busqueda=$_POST['busqueda'];
$dedonde=$_POST['dedo'];
// DEBO PREPARAR LOS TEXTOS QUE VOY A BUSCAR si la cadena existe
if ($busqueda<>''){
	//CUENTA EL NUMERO DE PALABRAS
	$trozos=explode(" ",$busqueda);
	$numero=count($trozos);
//	echo $numero;
	if ($numero==1) {
		//SI SOLO HAY UNA PALABRA DE BUSQUEDA SE ESTABLECE UNA INSTRUCION CON LIKE
		$cadbusca="SELECT * FROM vehiculo WHERE placa_vehiculo LIKE '%$busqueda%' and estado_vehiculo= 1   LIMIT 10";	
	} elseif ($numero>1) {
		//SI HAY UNA FRASE SE UTILIZA EL ALGORTIMO DE BUSQUEDA AVANZADO DE MATCH AGAINST
		//busqueda de frases con mas de una palabra y un algoritmo especializado
		$cadbusca="SELECT * FROM vehiculo WHERE placa_vehiculo LIKE '%$busqueda%' and estado_vehiculo= 1   LIMIT 10";	
		/*$cadbusca="SELECT * , MATCH ( nombre_producto, descripcion_producto ) AGAINST ( '$busqueda' ) AS Score FROM productos WHERE MATCH ( nombre_producto, descripcion_producto ) AGAINST ( '$busqueda' ) ORDER BY Score DESC LIMIT 50;";*/
	}
	function limitarPalabras($cadena, $longitud, $elipsis = "..."){
		$palabras = explode(' ', $cadena);
		if (count($palabras) > $longitud)
			return implode(' ', array_slice($palabras, 0, $longitud)) . $elipsis;
		else
			return $cadena;#
	}

	#echo $cadbusca;
	$resultado =dime($cadbusca)or die(ovni("busqueda:"));
	while($filas=mysql_fetch_array($resultado)){
				#qui meto el if y variables cadena
if(!$vehiculo || !isset($vehiculo[md5($filas['idvehiculo'])]['identificador']) || $vehiculo[md5($filas['idvehiculo'])]['identificador']!= md5($filas['idvehiculo'])){ 
$cadenaAgregarQuitar="<a href='agregaVehiculo.php?SID&id=".$filas['idvehiculo']."&dedo=".$dedonde."'>
<img src='../imagenes/productonoagregado.gif' border='0' title='Agregar al Carrito'></a>";
		}else{
$cadenaAgregarQuitar="<a href='borracarVehiculoSecion.php?SID&id=".$filas['idvehiculo']."&dedo=".$dedonde."'>
<img src='../imagenes/trash.gif' border='0' title='Agregar al Carrito'></a>";		
	}
        if ($filas['dni_conductor']!="") {
            echo"Placa:".$filas['placa_vehiculo']."<br>
		Modelo:".$filas['idmodelo']." ".$filas['ap_mat_conductor']."<br>
		Tipo:".$filas['idtipo'].$cadenaAgregarQuitar;
        }else{
            
            echo"Placa:".$filas['placa_vehiculo']."<br>
		Modelo:".$filas['idmodelo']."<br>
		Tipo:".$filas['idtipo']."<br>
		Direccion:".$filas['direccion_conductor'].$cadenaAgregarQuitar;
        }
		}
}
?>
