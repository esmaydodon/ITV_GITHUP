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
         $(document).ready(function(){
//hace algo     
 $(".gestionarModelo").click(function(evento)
      {
          $("#listarModelo").css("display", "block");
          $("#editModelo").css("display", "block");
          $("#formulario-modelo-nuevo").css("display", "none");
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

</div><div class="urbangreymenu">

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
 <div id="formulario-modelo-nuevo" class="contacto">
 <form action="Registrandomodelo.php" method="post" enctype="multipart/form-data" onSubmit="return checkForm(this);" >
     nombre_modelo :<spam class="requerido" >*</spam><input type="text" onBlur="checkField(this);" name="nombre_modelo"  id="nombre_modelo" bsize="60" maxlength="120" value="" /> <br>
 
 <input type="hidden" name="estado_modelo" size="10"  value="1" /> <br/>
Marca: <?php
 $consulata_tipo2=dime('select * from  marca where estado_marca = 1 order by  idmarca desc') or die(mysql_error());	
    echo"<select id ='marca' name='marca' class='select'>
	     <option value='0'>Seleccione marca</option>";
		while($local = mysql_fetch_array($consulata_tipo2)){
    	echo"<option value='".$local['idmarca']."'>".$local['nombre_marca']."</option>";}
	echo"</select></br>"; 
        ?>
     <input type="submit" value="Registrar" />
</form>
    </div>
               <a class="button mediano azul" href="#">
             <span class="gestionarModelo" onclick="gestionarModelo()">Listar Modelos</span></a>
              <div id="listarModelo" class="oculto"></div>
              <div id="editModelo" class="oculto"></div>
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
