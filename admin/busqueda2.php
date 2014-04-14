<?php
#modificado x  www.kuraka.net  -  mmq 
ob_start("ob_gzhandler"); 
session_start();
include("../func/funciones.php");
$busqueda=$_POST['busqueda'];
// DEBO PREPARAR LOS TEXTOS QUE VOY A BUSCAR si la cadena existe
if ($busqueda<>''){
	//CUENTA EL NUMERO DE PALABRAS
	$trozos=explode(" ",$busqueda);
	$numero=count($trozos);
//	echo $numero;
	if ($numero==1) {
		//SI SOLO HAY UNA PALABRA DE BUSQUEDA SE ESTABLECE UNA INSTRUCION CON LIKE
		$cadbusca="select o.*  from observacion  o WHERE o.estado_observacion='1' and  o.descripcion_observacion LIKE '%$busqueda%'";	
	} elseif ($numero>1) {
		//SI HAY UNA FRASE SE UTILIZA EL ALGORTIMO DE BUSQUEDA AVANZADO DE MATCH AGAINST
		//busqueda de frases con mas de una palabra y un algoritmo especializado
		$cadbusca="select o.*  from observacion  o WHERE o.estado_observacion='1' and o.descripcion_observacion LIKE '%$busqueda%'";
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
        echo"<form action='agregacar.php' method='POST'>
            <imput type=hidde value='itv' name='dedoc'>
            <table border= '1' class='tabla'>
            <tr>
           
            <td>Descripcion</td>
           
<td>Select</td>            
<td>Imagen</td>
            
            <td>Agregar/Quitar</td></tr>";
	while($filas=mysql_fetch_array($resultado)){
            $cadena = ereg_replace( "([     ]+)","%20",$filas['ruta_img1']);
				#qui meto el if y variables cadena
if(!$observacion|| !isset($observacion[md5($filas['idobservacion'])]['identificador']) || $observacion[md5($filas['idobservacion'])]['identificador']!= md5($filas['idobservacion'])){ 
$cadenaAgregarQuitar="<td><a href='agregacar.php?id=".$filas['idobservacion']."'>
<img src='../imagenes/productonoagregado.gif' border='0' title='Agregar al Carrito'></a>
 </td>";
		}else{
$cadenaAgregarQuitar="<td><a href='borracarObservacionSecion.php?SID&id=".$filas['idobservacion']."'>
<img src='../imagenes/trash.gif' border='0' title='Agregar al Carrito'></a></td>";		
	} 
        echo" <tr>
            <td>".$filas['codigo_producto']." </td>
    <td>".limitarPalabras($filas['descripcion_observacion'],60)."</td>
 
   <td><input type='checkbox' name='seleccion[]' value='".$filas['idobservacion']."'></td>
   <td><a class='zoom' href=".$cadena." style='cursor:pointer; ' onMouseOver=imagenProducto(".$filas['idobservacion'].") >
      <img  src='".$cadena."' width='50' height='50'> </a></td>"
   .$cadenaAgregarQuitar."";
                
                }
                echo "</tr></table>
                     <input type='hidden' value='itv' name='dedoc'></input>
                     <input type='hidden' value='1' name='estado_observacion'></input>
                   <input type='submit' name='Submit' value='Enviar'> </form>";
}
?>
