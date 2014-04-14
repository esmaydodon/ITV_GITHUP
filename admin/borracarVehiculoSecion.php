<?php 
session_start(); 
//con session_start() 
//creamos la sesión si  
//no existe o la retomamos 
//si ya ha sido creada 
extract($_GET); 
//Como antes, usamos 
//extract() por comodidad, 
//pero podemos no hacerlo 
//tranquilamente 
$vehiculo=$_SESSION['vehiculo']; 
$dedonde=$_GET["dedo"];
//Asignamos a la variable 
//$carro los valores 
//guardados en la sessión 
unset($vehiculo[md5($id)]); 
//la función unset borra 
//el elemento de un array  
//que le pasemos por 
//parámetro. En este caso 
//la usamos para borrar el 
//elemento cuyo id le pasemos 
//a la página por la url  
$_SESSION['vehiculo']=$vehiculo; 
//Finalmente, actualizamos 
//la sessión, como hicimos 
//cuando agregamos un producto 
//y volvemos al catálogo 
if (!isset($dedonde)) {
    header("Location:conductor_vehiculo.php?".SID); 
}  elseif (isset($dedonde) and $dedonde=="empresa") {
    header("Location:empresa_vehiculo.php?".SID);  
}elseif (isset($dedonde) and $dedonde=="itv") {
    header("Location:itv.php?".SID);  
}else{
    header("Location:conductor_vehiculo.php?".SID);  
}
?>