<?php
/*
define ("SERVIDOR", "localhost");//localhost
define ("USUARIO", "kurakane_root");//root
define ("CLAVE", "1234");//1234
 define ("BASE", "kurakane_sitv");//bbasicokuraka
*/
define ("SERVIDOR", "localhost");//localhost
define ("USUARIO", "root");//root
define ("CLAVE", "1234");//1234
define ("BASE", "kurakane_itv");//bbasicokuraka
$link = mysql_connect(SERVIDOR, USUARIO, CLAVE);
if (!$link) {
    die('No se pudo conectar con el servidor : ' . mysql_error());
}

$db_selected = mysql_select_db(BASE, $link);
if (!$db_selected) {
    die ('no se pudo conectar con la Base de Datos... ' . mysql_error());
}
define("conex", $link);// para bd.php funcion de query
/*si no defino el conex no funciona ya que nesesita los datos de conex
 * es seguro por que aun no selecciona la BD*/ 
###-------------------------------------------------------------------------###
function dime($sql){
  if ( ! $query = mysql_query($sql,conex)){
 
  return false;
  }
return $query;
}
// no para  whiles... :P
function nombres_campos($sql) {
  if ( ! $query = mysql_fetch_array($sql) ){
  stderr ("Error al efectuar la Sentencia SQL");
  return false;
  }
return $query;
}
function campo_bd($sql) {
$query = mysql_query($sql) or die(mysql_error());
$ovni1= mysql_fetch_array($query);
return $ovni1;
}

function cantidad($sql) {
  if ( ! $query = mysql_num_rows($sql) ){
  return false;
  }
return $query;
}
function ovni($cadena) {
$cadena2="Error Consulta ".$cadena.":".mysql_errno()." : ".mysql_error()."";
return $cadena2;	
}
//para el timepo formato de cha
function tm($cadena) {
$fecha_ingreso = date("Y-m-d",strtotime($cadena));
    return $fecha_ingreso;	
}

?>