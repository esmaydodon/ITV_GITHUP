<?php

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
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
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
    $(document).ready(function(){
//hace algo     
 $(".gestionarConductor").click(function(evento)
      {
          $("#listarConductor").css("display", "block");
          $("#editConductor").css("display", "block");
          $("#formulario-conductor-nuevo").css("display", "none");
}); 
//hace algo end 

 })
 
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
         <!-- nuevo cliente -->
 <div id="formulario-conductor-nuevo" class="contacto">
 <table>
 <form action="RegistrandoConductor.php" method="post" enctype="multipart/form-data" onSubmit="return checkForm(this);" >
     <tr><td align="left">Descripci&oacute;n</td><td align="right"><spam class="requerido" >*</spam><input type="text" onBlur="checkField(this);" name="descripcion_conductor"  id="descripcion_conductor" bsize="60" maxlength="120" value="" /></td></tr>
          <tr><td align="left">Apellido Paterno</td><td align="right"><spam class="requerido" >*</spam><input type="text" name="ap_pat_conductor" id="ap_pat_conductor" size="60"  value="" onBlur="checkField(this);" /></td></tr>
         <tr><td align="left">Apellido Materno</td><td align="right"><spam class="requerido" >*</spam><input type="text" name="ap_mat_conductor" size="12" maxlength="120"  onBlur="checkField(this);"  id="ap_mat_conductor" value="" /></td></tr>
         <tr><td align="left">DNI</td><td align="right"><spam class="requerido" >*</spam><input type="text" name="dni" size="12" maxlength="120"  onBlur="checkField(this);"  id="dni" value="" /></td></tr>
           
                 <tr><td align="left">Direcci&oacute;n</td><td align="right"><input type="text" name="direccion_conductor" id="direccion_conductor" size="50" maxlength="50" value="" onBlur="checkField(this);" /></td></tr>
                     <tr><td align="left">E-Mail</td><td align="right"><spam class="requerido" >*</spam><input type="text" name="email_conductor" id="email_conductor" size="15" maxlength="30" value="" onBlur="checkField(this);" /></td></tr>
                       <tr><td align="left">Telefono Fijo</td><td align="right"><spam class="requerido" >*</spam><input type="text" name="telefono_conductor" size="10" maxlength="20" value="" onblur="checkField(this)" /></td></tr>
                       <tr><td align="left">Telefono M&oacute;vil</td><td align="right"><input type="text" name="movil_conductor" id="movil_conductor" onBlur="checkField(this);" size="15" maxlength="50" value="" /></td></tr>
 
                            
 <input type="hidden" name="estado_conductor" size="10"  value="1" /> <br/>
     <tr><td><input type="submit" value="Registrar" /></td><td></td></tr>
</form>
</table>
    </div>
         <a class="button mediano azul" href="#"><span class="gestionarConductor" onclick="gestionarConductor()">Listar Conductores</span></a>
              <div id="listarConductor" class="oculto"></div>
              <div id="editConductor" class="oculto"></div>
              
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