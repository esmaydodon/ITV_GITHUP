<?php
session_start(); 
 
 
$vehiculo=$_SESSION['vehiculo']; 
$conductor=$_SESSION['conductor']; 
/* WWW.KURAKA.NET - 2012 
 * Ing. Marlon Martos Quiroz.
 * Ing. TOBIAS PAUL GARCIA CAMPOS
 * Ing. 
 */

?>
<?
include("../func/funciones.php");
 include('login.php');
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EMPRESA</title>
<link rel="stylesheet" type="text/css" href="../css/especial.css"></link>

<style type="text/css">    
.submenu{display: none} </style>
<!--[if IE]>
    <style type="text/css"> 
    /* coloque las reparaciones de css para todas las versiones de IE en este comentario condicional */
    .twoColHybLtHdr #sidebar1 { padding-top: 30px; }
    .twoColHybLtHdr #mainContent { zoom: 1; padding-top: 15px; }
    /* la propiedad zoom propia que se indica más arriba proporciona a IE el hasLayout que puede necesitar para evitar diversos errores */
    </style>
    <![endif]-->
    
    <script type="text/javascript" src="../js/ajax.js"></script>
<!--<script type="text/javascript" src="../js/jquery.js"></script>-->
<!--<script type="text/javascript" src="../js/jquery.js"></script>-->
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <!---->
<script type="text/javascript" src="../js/jquery-ui-1.8.21.custom.min.js"></script> 
<script type="text/javascript" src="../js/jquery.ui.datepicker-es.js"></script>
<script type="text/javascript" src="../js/jquery.PrintArea.js"></script>
<script type="text/javascript" src="../js/ddaccordion.js">

/***********************************************
* Accordion Content script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* This notice must stay intact for legal use
***********************************************/

</script>
<script src="../SpryAssets/SpryEffects.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
function MM_effectShake(targetElement)
{
	Spry.Effect.DoShake(targetElement);
}
//-->
</script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='imagenes/plus.gif' class='statusicon' />", "<img src='imagenes/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "normal" //speed of animation: "fast", "normal", or "slow"
})


</script>
</head>

<body class="twoColHybLtHdr">

    <div align="left"></div>
<div id="container">
      <div id="header">
        <h1 align="center" class="encabezado"> INSPECCION TECNICA VEHICULAR
          <!-- end #header -->
          <img src="imagenes/Logo.jpg" alt="Autonort" width="204" height="59" /></h1>
  </div>
<div id="sidebar1"> 
       
<div class="urbangreymenu">

<h3 class="headerbar">Empresa</h3>
<ul>
<li><a href="empresa.php">Registrar Empresa</a></li>
</ul>
<h3 class="headerbar">Conductor</h3>
<ul>
<li><a href="conductor.php">Registrar Conductor</a></li>
</ul>
<h3 class="headerbar">Vehiculos</h3>
<ul>
<li><a href="marca.php">Registrar Marca</a></li>
<li><a href="modelo.php">Registrar Modelo</a></li>
<li><a href="tipo.php">Registrar Tipo</a></li>
<li><a href="vehiculo.php">Registrar Vehiculo</a></li>
<li><a href="conductor_vehiculo.php">Registrar Conductor / Vehiculo</a></li>
<li><a href="empresa_vehiculo.php">Registrar Empresa / Vehiculo</a></li>
 
</ul>

<h3 class="headerbar">Periodo</h3>
<ul>
<li><a href="periodo.php" >Registrar Periodo</a></li>
 		
</ul>
<h3 class="headerbar">Tecnico</h3>
<ul>
<li><a href="tecnico.php" >Registrar Tecnico</a></li>
 		
</ul>
<h3 class="headerbar">Lugar de Inspeccion</h3>
<ul>
<li><a href="lugar.php" >Registrar Lugar Inspeccion</a></li>
 		
</ul>
<h3 class="headerbar">Observacion</h3>
<ul>
<li><a href="observacion.php" >Registrar Observacion</a></li>
 		
</ul>
<h3 class="headerbar">Condicion</h3>
<ul>
<li><a href="condicion.php" >Registrar Condicion</a></li>
 		
</ul>
<h3 class="headerbar">Itv</h3>
<ul>
<li><a href="itv.php" >Registrar Itv</a></li>
 		
</ul>

</div>

      <!-- end #menu --></div>
      <div id="mainContent">
       <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->    
       <div class='busquedaclientes' > 
                      <div style="padding: 10px 0px 10px 10px; font-size: 24px; -moz-border-radius: 3px; border-radius: 3px; width: auto; float: right;">
      
<form name="frmbusqueda2"  onKeyPress="buscarConductor();" class="contacto" >
                <input type="hidden" value="1" name="dedoc"></input>
    Buscar Conductor: 
  <input type="text" name="dato" id="dato"/></form>
 <fieldset>
 <div id="resultadoBusqueda2"></div></fieldset>

      </div> 
  </div>
       <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!buscarVehiculo!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
              <div class='busquedaclientes' > 
                      <div style="padding: 10px 0px 10px 10px; font-size: 24px; -moz-border-radius: 3px; border-radius: 3px; width: auto; float: right;">
      
<form name="frmbusqueda3"  onKeyPress="buscarVehiculo();" class="contacto">
                <input type="hidden" value="vehiculo" name="dedoc"></input>
    Buscar Vehiculo: 
  <input type="text" name="dato" id="dato"/></form>
 <fieldset>
 <div id="resultadoBusqueda3"></div></fieldset>

      </div> 
  </div>
       <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!buscarVehiculo end!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
         <!-- nuevo cliente -->
 <div id="formulario-vehiculo-nuevo" class="contacto">
 <form action="RegistrandoConductor_vehiculo.php" method="post" enctype="multipart/form-data" onSubmit="return checkForm(this);" >
   
 <input type="hidden" name="estado_conductor_vehiculo" size="10"  value="1" /> <br/>
                  <?php 
                    echo " <input type='hidden' name='idusuarios' value='".$idUsuarioL."'></input>";
                 
if($conductor){
	 foreach($conductor as $k => $d){
             if(!$d || !isset($d[md5($d['idconductor'])]['identificador']) || $d[md5($d['idconductor'])]['identificador']!= md5($d['idconductor'])){ 
$cadenaAgregarQuitar="<a href='borracarConductorSecion.php?SID&id=".$d['idconductor']."&dedo=".$dedonde."&eliminaconductor=1'>
<img src='../imagenes/trash.gif' border='0' title='Agregar al Carrito'></a>";	
		}else{
	$cadenaAgregarQuitar="<a  class='ocultar_para_imprimir'  href='agregaConductor.php?SID&id=".$d['idConductor']."&dedo=".$dedonde."'>
<img src='../imagenes/productonoagregado.gif' border='0' title='Agregar al Carrito'></a>";
	}
		 
		 echo" <fieldset> Nombre:".$d['descripcion_conductor']."<br>";  
		 echo" Apellido Paterno:".$d['ap_pat_conductor']."<br>";  
                 echo" Apellido Materno:".$d['ap_mat_conductor']."<br>";
		 echo"Dni:".$d['dni_conductor']."-<br>";
	echo " <input type='hidden' name='idconductor' value='".$d['idconductor']."'></input>";	   
		  echo $cadenaAgregarQuitar."</fieldset> "; }
	 }
         //////////////////////////////////////////////////////////////////////
         
         if($vehiculo){
	 foreach($vehiculo as $k => $d){
             if(!$d || !isset($d[md5($d['idvehiculo'])]['identificador']) || $d[md5($d['idvehiculo'])]['identificador']!= md5($d['idvehiculo'])){ 
$cadenaAgregarQuitar="<a href='borracarVehiculoSecion.php?SID&id=".$d['idvehiculo']."&dedo=".$dedonde."&eliminavehiculo=1'>
<img src='../imagenes/trash.gif' border='0' title='Agregar al Carrito'></a>";	
		}else{
	$cadenaAgregarQuitar="<a  class='ocultar_para_imprimir'  href='agregaVehiculo.php?SID&id=".$d['idvehiculo']."&dedo=".$dedonde."'>
<img src='../imagenes/productonoagregado.gif' border='0' title='Agregar al Carrito'></a>";
	}
		 
		 echo" <fieldset> Placa:".$d['placa_vehiculo']."<br>";  
		 echo" Modelo:".$d['idmodelo']."<br>";  
                 echo" Tipo:".$d['idtipo']."<br>";
		 echo"Año:".$d['anio_fabricasion']."<br>";
		   echo " <input type='hidden' name='idvehiculo' value='".$d['idvehiculo']."'></input>";	
		  echo $cadenaAgregarQuitar."</fieldset> "; }
	 }
?> 
     <input type="submit" value="Registrar" />
</form>
    </div>
 <!-- nuevo cliente END-->
      <!-- end #mainContent --></div>
    	<!-- Este elemento de eliminación siempre debe ir inmediatamente después del div #mainContent para forzar al div #container a que contenga todos los elementos flotantes hijos -->
    	<br class="clearfloat" />
    	<div id="footer">
        <p>Pie
</p>
      <!-- end #footer --></div>
    <!-- end #container --></div>
    </body>
</html>
