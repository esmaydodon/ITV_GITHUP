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
$empresa=$_SESSION['empresa']; 
$dedonde=$_GET["dedo"];
//Asignamos a la variable 
//$carro los valores 
//guardados en la sessión 
unset($empresa[md5($id)]); 
//la función unset borra 
//el elemento de un array  
//que le pasemos por 
//parámetro. En este caso 
//la usamos para borrar el 
//elemento cuyo id le pasemos 
//a la página por la url  
$_SESSION['empresa']=$empresa; 
//Finalmente, actualizamos 
//la sessión, como hicimos 
//cuando agregamos un producto 
//y volvemos al catálogo 
if (!isset($dedonde)) {
    header("Location:empresa_vehiculo.php?".SID); 
}  elseif (isset($dedonde) and $dedonde=="empresa") {
    header("Location:empresa_vehiculo.php?".SID);  
}else{
    header("Location:empresa_vehiculo.php?".SID);  
}
?>