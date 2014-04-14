<?php
session_start();


$vehiculo = $_SESSION['vehiculo'];
$conductor = $_SESSION['conductor'];
$observacion = $_SESSION['observacion'];
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

            $(document).ready(function(){
     
                //para text calendario
                $(".campofecha").datepicker({
                    showOn: 'both',
                    buttonImage: 'imagenes/panel/calendar.png',
                    buttonImageOnly: true,
                    changeYear: true,
                    numberOfMonths: 2
                });
            });
        </script>
        <link href="../css/jquery-ui-1.8.21.custom.css" rel="stylesheet" type="text/css"></link>
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
                        <li   ><a href="periodo.php" >Registrar Periodo</a></li>

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
                     <!--  sacamos datos -->
                    <!-- Buscar Conductor -->
                    <form name="frmbusqueda2"  onKeyPress="buscarConductor();" class="contacto" >
                        <input type="hidden" value="itv" name="dedoc"></input>
                        Buscar Conductor: 
                        <input type="text" name="dato" id="dato"/></form>
                    <fieldset>
                        <div id="resultadoBusqueda2"></div></fieldset><br>
                       <!-- / Buscar Conductor -->
                        <!--  Buscar Vehiculo -->
                            <form name="frmbusqueda3"  onKeyPress="buscarVehiculo();" class="contacto">
                            <input type="hidden" value="itv" name="dedoc"></input>
                            Buscar Vehiculo: 
                            <input type="text" name="dato" id="dato"/></form>
                        <fieldset>
                            <div id="resultadoBusqueda3"></div></fieldset>
                             <!-- / Buscar Vehiculo -->
                      
                         <form name="frmbusqueda" action="" onKeyPress="buscarDato2();">
                          <div align="center">Termino a buscar:
                            <input type="text" name="dato" /> 
                         <!--<a href="vender.php?<?php echo SID ?>" title="Ver seleccionados " >Atrás</a>-->

                          </div>
                        </form>
                        <fieldset><legend>Resultado</legend>
                        <div id="imagenpro">imagen</div>
                        <div id="resultadoBusqueda"></div>

                        </fieldset>
                                            
                             <!-- / Buscar Observacion -->
                     <!-- / sacamos datos -->
                             <form action="RegistrandoObservacion.php" method="post" enctype="multipart/form-data" onSubmit="return checkForm(this);" >
                            <?
                            //////////////////////////////////////////////////////////////////////
                            if ($conductor) {
                                foreach ($conductor as $k => $d) {
                                    if (!$d || !isset($d[md5($d['idconductor'])]['identificador']) || $d[md5($d['idconductor'])]['identificador'] != md5($d['idconductor'])) {
                                        $cadenaAgregarQuitar = "<a href='borracarConductorSecion.php?SID&id=" . $d['idconductor'] . "&dedo=itv&eliminaconductor=1'>
<img src='../imagenes/trash.gif' border='0' title='Agregar al Carrito'></a>";
                                    } else {
                                        $cadenaAgregarQuitar = "<a  class='ocultar_para_imprimir'  href='agregaConductor.php?SID&id=" . $d['idConductor'] . "&dedo=" . $dedonde . "'>
<img src='../imagenes/productonoagregado.gif' border='0' title='Agregar al Carrito'></a>";
                                    }

                                    echo" <fieldset> Nombre:" . $d['descripcion_conductor'] . "<br>";
                                    echo" Apellido Paterno:" . $d['ap_pat_conductor'] . "<br>";
                                    echo" Apellido Materno:" . $d['ap_mat_conductor'] . "<br>";
                                    echo"Dni:" . $d['dni_conductor'] . "-<br>";
                                    echo " <input type='hidden' name='idconductor' value='" . $d['idconductor'] . "'></input>";
                                    echo $cadenaAgregarQuitar . "</fieldset> ";
                                }
                            }
                            //////////////////////////////////////////////////////////////////////
                            if ($vehiculo) {
                                foreach ($vehiculo as $k => $d) {
                                    if (!$d || !isset($d[md5($d['idvehiculo'])]['identificador']) || $d[md5($d['idvehiculo'])]['identificador'] != md5($d['idvehiculo'])) {
                                        $cadenaAgregarQuitar = "<a href='borracarVehiculoSecion.php?SID&id=" . $d['idvehiculo'] . "&dedo=itv&eliminavehiculo=1'>
<img src='../imagenes/trash.gif' border='0' title='Agregar al Carrito'></a>";
                                    } else {
                                        $cadenaAgregarQuitar = "<a  class='ocultar_para_imprimir'  href='agregaVehiculo.php?SID&id=" . $d['idvehiculo'] . "&dedo=itv'>
<img src='../imagenes/productonoagregado.gif' border='0' title='Agregar al Carrito'></a>";
                                    }

                                    echo" <fieldset> Placa:" . $d['placa_vehiculo'] . "<br>";
                                    echo" Modelo:" . $d['idmodelo'] . "<br>";
                                    echo" Tipo:" . $d['idtipo'] . "<br>";
                                    echo"Año:" . $d['anio_fabricasion'] . "<br>";
                                    echo " <input type='hidden' name='idvehiculo' value='" . $d['idvehiculo'] . "'></input>";
                                    echo $cadenaAgregarQuitar . "</fieldset> ";
                                }
                            }
                            
                            
                            //////////////////////////////////////////////////////////////////////
                            if ($observacion) {
                                foreach ($observacion as $k => $d) {
                                    if (!$d || !isset($d[md5($d['idobservacion'])]['identificador']) || $d[md5($d['idconductor'])]['identificador'] != md5($d['idconductor'])) {
                                    $cadenaAgregarQuitar="<td><a href='borracarObservacionSecion.php?SID&id=".$d['idobservacion']."'>
<img src='../imagenes/trash.gif' border='0' title='Agregar al Carrito'></a>";
                                    } else {
                                        $cadenaAgregarQuitar = "<a  class='ocultar_para_imprimir'  href='agregacar.php?SID&id=" . $d['idobservacion'] . "&dedo=" . $dedonde . "'>
<img src='../imagenes/productonoagregado.gif' border='0' title='Agregar al observacion'></a>";
                                    }

                                    echo" <fieldset> Nombre:" . $d['descripcion_observacion'] . "<br>";
                            
                                    echo  "-<br>";
                                    echo " <input type='hidden' name='idobservacion' value='" . $d['idobservacion'] . "'></input>";
                                    echo $cadenaAgregarQuitar . "</fieldset> ";
                                }
                            }
                            //////////////////////////////////////////////////////////////////////
                            ?>
                            checklist:<spam class="requerido" >*</spam><input type="text" onBlur="checkField(this);" name="checklist"  id="checklist" bsize="60" maxlength="120" value="" /> <br>
                                fecha_itv:<spam class="requerido" >*</spam><input type="text" onBlur="checkField(this);" name="fecha_itv"  id="fecha_itv" bsize="60" maxlength="120" value="" class="campofecha" /> <br>
                                    sticker :<spam class="requerido" >*</spam><input type="text" onBlur="checkField(this);" name="sticker"  id="sticker" bsize="60" maxlength="120" value="" /> <br>
                                        




                                            <?php
                                            /* //combo conductor
                                              $consulata_tipo2=dime('select * from  conductor where estado_conductor = 1 order by  idconductor desc') or die(mysql_error());
                                              echo"<select id ='conductor' name='conductor' class='select'>
                                              <option value='0'>Seleccione Conductor</option>";
                                              while($local = mysql_fetch_array($consulata_tipo2)){
                                              echo"<option value='".$local['idconductor']."'>".$local['descripcion_conductor']."</option>";}
                                              echo"</select></br>";
                                             */
                                            ?> 


                                        Empresa: <?php
                                        $consulata_tipo2 = dime('select * from  empresa where estado_empresa = 1 order by  idempresa desc') or die(mysql_error());
                                        echo"<select id ='empresa' name='empresa' class='select'>
         <option value='0'>Seleccione empresa</option>";
                                        while ($local = mysql_fetch_array($consulata_tipo2)) {
                                            echo"<option value='" . $local['idempresa'] . "'>" . $local['razon_social_empresa'] . "</option>";
                                        }
                                        echo"</select></br>";
                                        ?>  





                                            Tecnico: <?php
                                            $consulata_tipo2 = dime('select * from  tecnico     order by  idtecnico desc') or die(mysql_error());
                                            echo"<select id ='tecnico' name='tecnico' class='select'>
	     <option value='0'>Seleccione tecnico</option>";
                                            while ($local = mysql_fetch_array($consulata_tipo2)) {
                                                echo"<option value='" . $local['idtecnico'] . "'>" . $local['descripcion_tecnico'] . $local['ap_pat__tecnico'] . $local['ap_mat__tecnico'] . "</option>";
                                            }
                                            echo"</select></br>";
                                            ?> 


                                            condicion: <?php
                                            $consulata_tipo2 = dime('select * from  condicion     order by  idcondicion desc') or die(mysql_error());
                                            echo"<select id ='condicion' name='condicion' class='select'>
	     <option value='0'>Seleccione condicion</option>";
                                            while ($local = mysql_fetch_array($consulata_tipo2)) {
                                                echo"<option value='" . $local['idcondicion'] . "'>" . $local['descripcion_condicion'] . "</option>";
                                            }
                                            echo"</select></br>";
                                            ?>                    
                                            Lugar_inspeccion : <?php
                                            $consulata_tipo2 = dime('select * from  lugar_inspeccion  where estado_lugar=1   order by  idlugar_inspeccion  desc') or die(mysql_error());
                                            echo"<select id ='lugar_inspeccion' name='lugar_inspeccion' class='select'>
	     <option value='0'>Seleccione lugar_inspeccion</option>";
                                            while ($local = mysql_fetch_array($consulata_tipo2)) {
                                                echo"<option value='".$local['idlugar_inspeccion'] . "'>" . $local['descripcion_lugar_inspeccion'] . "</option>";
                                            }
                                            echo"</select></br>";
                                            ?>  

                                            <input type="hidden" name="estado_observacion" size="10"  value="1" /> <br/>

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
