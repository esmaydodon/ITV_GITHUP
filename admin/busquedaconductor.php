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
		$cadbusca="SELECT * FROM conductor WHERE dni_conductor LIKE '%$busqueda%' OR ap_pat_conductor  LIKE '%$busqueda%' OR ap_mat_conductor LIKE '%$busqueda%'
                    OR email_conductor LIKE '%$busqueda%' OR telefono_conductor LIKE '%$busqueda%' OR descripcion_conductor LIKE '%$busqueda%' LIMIT 10";	
	} elseif ($numero>1) {
		//SI HAY UNA FRASE SE UTILIZA EL ALGORTIMO DE BUSQUEDA AVANZADO DE MATCH AGAINST
		//busqueda de frases con mas de una palabra y un algoritmo especializado
		$cadbusca="SELECT * FROM conductor WHERE dni_conductor LIKE '%$busqueda%' OR ap_pat_conductor  LIKE '%$busqueda%' OR ap_mat_conductor LIKE '%$busqueda%'
                    OR email_conductor LIKE '%$busqueda%' OR telefono_conductor LIKE '%$busqueda%' OR descripcion_conductor LIKE '%$busqueda%' LIMIT 10";	
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
if(!$conductor || !isset($conductor[md5($filas['idconductor'])]['identificador']) || $conductor[md5($filas['idconductor'])]['identificador']!= md5($filas['idconductor'])){ 
$cadenaAgregarQuitar="<a href='agregaConductor.php?SID&id=".$filas['idconductor']."&dedo=".$dedonde."'>
<img src='../imagenes/productonoagregado.gif' border='0' title='Agregar al Carrito'></a>";
		}else{
$cadenaAgregarQuitar="<a href='borracarConductorSecion.php?SID&id=".$filas['idconductor']."&dedo=".$dedonde."'>
<img src='../imagenes/trash.gif' border='0' title='Agregar al Carrito'></a>";		
	}
        if ($filas['dni_conductor']!="") {
            echo"Dni:".$filas['dni_conductor']."<br>
		Nombre:".$filas['ap_pat_conductor']." ".$filas['ap_mat_conductor']."<br>
		DNI:".$filas['direccion_conductor'].$cadenaAgregarQuitar;
        }else{
            
            echo"Ruc:".$filas['ruc']."<br>
		Cliente:".$filas['nombre_conductor']."<br>
		Razon Social:".$filas['nombre_comercial_conductor']."<br>
		Direccion:".$filas['direccion_conductor'].$cadenaAgregarQuitar;
        }
		}
}
?>
