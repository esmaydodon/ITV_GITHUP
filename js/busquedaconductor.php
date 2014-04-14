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
		$cadbusca="SELECT * FROM clientes WHERE rucs LIKE '%$busqueda%' OR nombre_cliente LIKE '%$busqueda%' OR dni_cliente LIKE '%$busqueda%' LIMIT 10";	
	} elseif ($numero>1) {
		//SI HAY UNA FRASE SE UTILIZA EL ALGORTIMO DE BUSQUEDA AVANZADO DE MATCH AGAINST
		//busqueda de frases con mas de una palabra y un algoritmo especializado
		$cadbusca="SELECT * FROM clientes WHERE rucs LIKE '%$busqueda%' OR nombre_cliente LIKE '%$busqueda%' OR dni_cliente LIKE '%$busqueda%' LIMIT 10";	
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
if(!$cliente || !isset($cliente[md5($filas['idcliente'])]['identificador']) || $cliente[md5($filas['idcliente'])]['identificador']!= md5($filas['idcliente'])){ 
$cadenaAgregarQuitar="<a href='agregaCliente.php?SID&id=".$filas['idcliente']."&dedo=".$dedonde."'>
<img src='../imagenes/productonoagregado.gif' border='0' title='Agregar al Carrito'></a>";
		}else{
$cadenaAgregarQuitar="<a href='borracarCliente.php?SID&id=".$filas['idcliente']."&dedo=".$dedonde."'>
<img src='../imagenes/trash.gif' border='0' title='Agregar al Carrito'></a>";		
	}
        if ($filas['dni_cliente']!="") {
            echo"Dni:".$filas['dni_cliente']."<br>
		Cliente:".$filas['nombre_cliente']."<br>
		Direccion:".$filas['direccion_cliente'].$cadenaAgregarQuitar;
        }else{
            
            echo"Ruc:".$filas['ruc']."<br>
		Cliente:".$filas['nombre_cliente']."<br>
		Razon Social:".$filas['nombre_comercial_cliente']."<br>
		Direccion:".$filas['direccion_cliente'].$cadenaAgregarQuitar;
        }
		}
}
?>
