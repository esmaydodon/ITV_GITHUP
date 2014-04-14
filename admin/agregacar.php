<?php  
session_start(); 
//con session_start() creamos la sesión 
//si no existe o la retomamos si ya ha 
//sido creada 
extract($_REQUEST); 
//la función extract toma las claves 
//de una matriz asoiativa y las 
//convierte en nombres de variable, 
//asignándoles a esas variables 
//valores iguales a los que tenía 
//asociados en la matriz. Es decir, 
//convierte a $_GET['id'] en $id, 
//sin que tengamos que tomarnos el 
//trabajo de escribir 
//$id=$_GET['id'];
#modificado x  www.kuraka.net  -  mmq   
include("../func/funciones.php");
$dedonde=$_POST["dedoc"];

//incluímos la conexión a nuestra 
//base de datos 
if(!isset($cantidad)){$cantidad=1;} 
//Como también vamos a usar este 
//archivo para actualizar las 
//cantidades, hacemos que cuando 
//la misma no esté indicada sea 
//igual a 1 
//PARA EL CHECKBOX
if(!empty($_POST['seleccion'])) {
    if(isset($_SESSION['observacion'])) 
$observacion=$_SESSION['observacion'];
    
foreach ($_POST['seleccion'] as $id){
  $qry2=dime("select * from observacion  where  estado_observacion='1' and idobservacion='".$id."'"); 
$row2=mysql_fetch_array($qry2); 
 
   $observacion[md5($id)]=array('identificador'=>md5($id), 
                        'idobservacion'=>$id,
						'cantidad'=>$cantidad,
						'idsub_observacion'=>$row2['idsub_observacion'] ,
						'estado_observacion'=>$row2['estado_observacion'],
						'descripcion_observacion'=>$row2['descripcion_observacion']
						);
}
$_SESSION['observacion']=$observacion; 
 
    header("Location:itv.php?".SID);  
 
}else{
//PARA EL CHECKBOX END
$qry=dime("select * from observacion where  estado_observacion='1' and idobservacion='".$id."'"); 
$row=mysql_fetch_array($qry); 
//Si ya hemos introducido algún 
//producto en el observacion lo 
//tendremos guardado temporalmente 
//en el array superglobal 
//$_SESSION['observacion'], de manera 
//que rescatamos los valores de 
//dicho array y se los asignamos 
//a la variable $observacion, previa  
//comprobación con isset de que 
//$_SESSION['observacion'] ya haya sido 
//definida 
if(isset($_SESSION['observacion'])) 
$observacion=$_SESSION['observacion']; 
//Ahora introducimos el nuevo 
//producto en la matriz $observacion, 
//utilizando como índice el id 
//del producto en cuestión, 
//encriptado con md5. 
//Utilizamos md5 porque genera 
//un valor alfanumérico que luego, 
//cuando busquemos un producto 
//en particular dentro de la 
//matriz, no podrá ser confundido 
//con la posición que ocupa dentro 
//de dicha matriz, como podría 
//ocurrir si fuera sólo numérico. 
//Cabe aclarar que si el producto 
//ya había sido agregado antes, 
//los nuevos valores que le 
//asignemos reemplazarán a los 
//viejos.  
//Al mismo tiempo, y no porque 
//sea estrictamente necesario 
//sino a modo de ejemplo, 
//guardamos más de un valor en 
//la variable $observacion, valiéndonos 
//de nuevo de la herramienta array. 
#agregamos los valores al array de session Oo
   $observacion[md5($id)]=array('identificador'=>md5($id), 
                        'idobservacion'=>$id,
						'cantidad'=>$cantidad,
						  'idsub_observacion'=>$row2['idsub_observacion'] ,
						'estado_observacion'=>$row2['estado_observacion'],
						'descripcion_observacion'=>$row2['descripcion_observacion']
						);
//Ahora dentro de la sesión 
//($_SESSION['observacion']) tenemos 
//sólo los valores que teníamos 
//(si es que teníamos alguno)  
//antes de ingresar a esta página 
//y en la variable $observacion tenemos 
//esos mismos valores más el que 
//acabamos de sumar. De manera que  
//tenemos que actualizar (reemplazar) 
//la variable de sesión por la 
//variable $observacion. 
$_SESSION['observacion']=$observacion; 
//Y volvemos a nuestro catálogo de 
//artículos. La cadena SID representa 
//al identificador de la sesión, que, 
//dependiendo de la configuración del 
//servidor y de si el usuario tiene 
//o no activadas las cookies puede 
//no ser necesario pasarla por la url. 
//Pero para que nuestro observacion funcione, 
//independientemente de esos factores, 
//conviene escribirla siempre. 
if (!isset($dedonde)) {
    header("Location:itv.php?".SID); 
}else{
    header("Location:itv.php?".SID);  
}

}

?> 