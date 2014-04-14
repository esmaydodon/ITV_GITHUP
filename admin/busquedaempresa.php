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
		$cadbusca="SELECT * FROM empresa WHERE razon_social_empresa LIKE '%$busqueda%' or ruc_empresa LIKE '%$busqueda%' or email_empresa LIKE '%$busqueda%'
                    or telefono_empresa LIKE '%$busqueda%' and estado_empresa= 1   LIMIT 10";	
	} elseif ($numero>1) {
		//SI HAY UNA FRASE SE UTILIZA EL ALGORTIMO DE BUSQUEDA AVANZADO DE MATCH AGAINST
		//busqueda de frases con mas de una palabra y un algoritmo especializado
		$cadbusca="SELECT * FROM empresa WHERE razon_social_empresa LIKE '%$busqueda%' or ruc_empresa LIKE '%$busqueda%' or email_empresa LIKE '%$busqueda%'
                    or telefono_empresa LIKE '%$busqueda%' and estado_empresa= 1   LIMIT 10 ";	
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
if(!$empresa || !isset($empresa[md5($filas['idempresa'])]['identificador']) || $empresa[md5($filas['idempresa'])]['identificador']!= md5($filas['idempresa'])){ 
$cadenaAgregarQuitar="<a href='agregaempresa.php?SID&id=".$filas['idempresa']."&dedo=".$dedonde."'>
<img src='../imagenes/productonoagregado.gif' border='0' title='Agregar al Carrito'></a>";
		}else{
$cadenaAgregarQuitar="<a href='borracarVehiculoSecion.php?SID&id=".$filas['idempresa']."&dedo=".$dedonde."'>
<img src='../imagenes/trash.gif' border='0' title='Agregar al Carrito'></a>";		
	}
        if ($filas['dni_conductor']!="") {
            echo"Placa:".$filas['razon_social_empresa']."<br>
		Modelo:".$filas['idmodelo']." ".$filas['ap_mat_conductor']."<br>
		Tipo:".$filas['idtipo'].$cadenaAgregarQuitar."<br>";
        }else{
            
            echo"Placa:".$filas['razon_social_empresa']."<br>
		Modelo:".$filas['idmodelo']."<br>
		Tipo:".$filas['idtipo']."<br>
		Direccion:".$filas['direccion_conductor'].$cadenaAgregarQuitar."<br>";
        }
		}
}
?>
