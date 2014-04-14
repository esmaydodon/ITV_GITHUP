<?
/*2009
 * kuraka v.7
 * http://kuraka.net 
 * 
 * Julio 2012 - Actualizado por NewtechPeru.com (http://NewtechPeru.com)
 */
session_start(); 
$carro=$_SESSION['carro']; 
$cliente=$_SESSION['cliente']; 
$documento=$_SESSION['documento']; 
?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("../func/funciones.php");
include('login.php');
?>
<script type="text/javascript" src="../js/ajax.js"></script>
<script type="text/javascript" src="../js/jquery-1.6.4.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.21.custom.min.js"></script> 
<script type="text/javascript" src="../js/easyzoom.js"></script>
<script type="text/javascript" src="../js/jquery.ui.datepicker-es.js"></script>
<script type="text/javascript" src="../js/jquery.PrintArea.js"></script>
<script type="text/javascript"> 
 $(document).ready(function(){
 	//para imprimir
        var options = {}; 
	$("a.prints").click(function(){
	$("div.section").printArea();
});

//para text calendario
 $(".campofecha").datepicker({
      showOn: 'both',
      buttonImage: 'imagenes/panel/calendar.png',
      buttonImageOnly: true,
      changeYear: true,
      numberOfMonths: 2
   });
 //para exportar al exel	
 
	$(".botonExcel").click(function(event) {
		$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
		$("#FormularioExportacion").submit();
});

 //para mostrar opciones de busqueda

 $("#consultafechaingreso").click(function(evento)
      {  $("#fechaingreso").css("display", "block");
          $("#fechascaducidad").css("display", "none");
          $("#cantidadminimaf").css("display", "none");
         });
 $("#consultafechacadaucidad").click(function(evento)
      {  $("#fechaingreso").css("display", "none");
        $("#fechascaducidad").css("display", "block");
        $("#cantidadminimaf").css("display", "none");
         });
 $("#consultacantidadminima").click(function(evento)
      {  $("#fechaingreso").css("display", "none");
        $("#fechascaducidad").css("display", "none");
        $("#cantidadminimaf").css("display", "block");
         });
         
       
         
  }) 		 
</script>
 <script type="text/javascript" src="../js/icomenu1.js"></script>
<meta name="verify-v1" content="HVBxLs/wqY+07YtWvJgwcuftNbp3xZ8iUvGLivZlvRA=" />
<title>Bienvenidos</title>
 

<link href="../css/menu2.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery-ui-1.8.21.custom.css" rel="stylesheet" type="text/css"></link>
<link href="../incawasi/css/estilo_home.css" rel="stylesheet" type="text/css" />
<link href="../css/adminPanel2.css" rel="stylesheet" type="text/css" />
<link href="../css/venta.css" rel="stylesheet" type="text/css" />

<style type="text/css">
 
 
 
 



</style> 
</head>

<body class="incawasi">
<div id="header"><!-- #header-->
   <div id="title">titulo</div>
<div id="logo">
  <a href="panel.php"><img src="imagenes/logo.jpg" width="208" height="73" /></a></div> 

</div>
<!-- end #header -->
<div id="menumain" style="margin: auto;">
  
<!-- end #header -->
</div>
<!---->
<div id="mainContent">
<div class="reporte">
  <?
include("../func/funciones.php");
$idc = $_POST['id'];
###############################################################################3
 ?>
    <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
 
<form id="cantidadminimaf" name="frmdocumentodatos"  action="" method="POST" enctype="multipart/form-data" class="contacto" style="width: 300px;">
                <div><label>Documento:</br><? $consulata_guia=dime("select d.iddocumentos,d.nombre_documento,l.nombre_local from documentos d  inner join documento_servicio ds on
d.iddocumentos = ds.iddocumentos inner join local l on
ds.idlocal =l.idlocal  where d.estado_documento='1' and l.idlocal='$idLocal'

order by  d.iddocumentos desc");
    echo"<select id ='documento' name='documento' class='select' onchange='mostrardatosDocumento()' >
	     <option value=''>Seleccione</option>";
		while($tipoProg=mysql_fetch_array($consulata_guia)){
    	echo"<option  value='".$tipoProg['iddocumentos'] ."'>".$tipoProg['nombre_documento'] ."-".$tipoProg['nombre_local']."</option>";}
	echo"</select>
        
";?> </label></div>  
 
    </form> 
<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
  <div class='busquedaclientes' > 
  <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
                      <div style="padding: 10px 0px 10px 10px; font-size: 24px; -moz-border-radius: 3px; border-radius: 3px; width: auto; float: right;">
      
<form name="frmbusqueda2"  onKeyPress="buscarClienteFactura();" class="contacto">
                <input type="hidden" value="1" name="dedoc"></input>
    Buscar Cliente:
  <input type="text" name="dato" id="dato"/></form>
 <fieldset>
 <div id="resultadoBusqueda2"></div></fieldset>

      </div> 
<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!grabarbBD!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
  </div>
  <div class="section">
   <div class="documento">
     <div id="datosdocumento"> </div>
     <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!sesion de documento!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
                        <div  style="float: left;
	margin-left: 50px;
	margin-left: 0px;
	margin-top: 20px;">
                  <?php 
if($documento){
	 foreach($documento as $k => $d){
             if(!$d || !isset($d[md5($d['iddocumentos'])]['identificador']) || $d[md5($d['iddocumentos'])]['identificador']!= md5($d['iddocumentos'])){ 
$cadenaAgregarQuitar="<a href='borracarDocumentoSecion.php?SID&id=".$d['iddocumentos']."&dedo=".$dedonde."&eliminadocumento=1'>
<img src='../imagenes/trash.gif' border='0' title='Agregar al Carrito'></a>";	
		}else{
	$cadenaAgregarQuitar="<a  class='ocultar_para_imprimir'  href='agregaCliente.php?SID&id=".$d['idcliente']."&dedo=".$dedonde."'>
<img src='../imagenes/productonoagregado.gif' border='0' title='Agregar al Carrito'></a>";
	}
		 echo"<h2>".$d['nombre_documento']."<br>";
		   echo" Numero:".$d['numero_actual']."<br>";
		   echo"Serie:".$d['numero_serie']."<br>";
		   echo"Fecha:".$d['fecha']."<br>";
		  echo $cadenaAgregarQuitar."</h2>"; }
	 }
?>                
                  </div>
     <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!sesion de documento end!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
                   <div id="divFormularioAdministar">
                  <?php 
if($cliente){
	 foreach($cliente as $k => $c){
             if(!$c || !isset($c[md5($c['idcliente'])]['identificador']) || $c[md5($c['idcliente'])]['identificador']!= md5($c['idcliente'])){ 
$cadenaAgregarQuitar="<a href='borracarCliente.php?SID&id=".$c['idcliente']."&dedo=".$dedonde."'>
<img src='../imagenes/trash.gif' border='0' title='Agregar al Carrito'></a>'";	
		}else{
	$cadenaAgregarQuitar="<a  class='ocultar_para_imprimir'  href='agregaCliente.php?SID&id=".$c['idcliente']."&dedo=".$dedonde."'>
<img src='../imagenes/productonoagregado.gif' border='0' title='Agregar al Carrito'></a>'";
	}
		 echo"<h2>Nombre:".$c['nombre_cliente']."<br>";
		   echo" RUC:".$c['ruc']."<br>";
		   echo"DNI:".$c['dni_cliente']."<br>";
		  echo"Direccion:".$c['direccion_cliente'].$cadenaAgregarQuitar."</h2>"; }
	 }
?>                
                  </div>

     <div id="tabla">
   
<table width="720" border="0" cellspacing="0" cellpadding="0" align="center">
<tr bgcolor="" class="tit">
<td width="105">CANTIDAD</td>
<td width="207">DESCRIPCION</td>
<td colspan="2" align="center">PRECIO UNITARIO</td><td width="100" align="center">SUBTOTAL</td>
<td width="100" align="center">Borrar</td>
<td width="159" align="center">Actualizar</td>
</tr>
<?php 
 $color=array("#ffffff","#F0F0F0");  $contador=0;  $suma=0; 
 foreach($carro as $k => $v){ 
 $subto=$v['cantidad']*$v['precio']; 
 $suma=$suma+$subto; //por qui  hacer la modificacion para otros prodfuctos actualizar bd Oo
 $contador++; 
 ?> 
 <form name="frmagregarcarro" method="post" action="agregacar.php?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?>"> 
 <tr bgcolor="<?php echo $color[$contador%2]; ?>" class='prod'> 
 <td><div class="stock"><b><?php echo ($v['stock']-$v['cantidad']) ?></b></div>
     <input type="hidden" value="1" name="dedoc"></input>
   <input name="cantidad" onkeyup ="viendostock()" type="text" id="cantidad" value="<?php echo $v['cantidad'] ?>" size="8">  
    <input name="id" type="hidden" id="id" value="<?php echo $v['idproductos'] ?>"></td> 
 <td><?php echo $v['descripcion_producto'] ?></td> 
 <td width="43" align="center">&nbsp;</td> 
 <td width="136" align="center"><?php echo $v['precio'] ?></td>
 <td width="100" align="center"><?php echo ($v['precio']*$v['cantidad']) ?></td> 
 <td align="center">
     <a href="borracar.php?id=<?=$v['idproductos']?>&dedon=1">
         <img src="../imagenes/trash.gif" width="12" height="14" border="0"></a></td> 
 <td align="center"> 
 <input name="df" type="image" src="imagenes/panel/Knob Refresh.png" width="20" height="20" border="0"></td>

 </tr>
 <tr bgcolor="<?php echo $color[$contador%2]; ?>" class='prod'>

 </form>
<?php }?> <td align="center">&nbsp;</td>
<td align="center"><?php  #echo $v['identificador'] ?></td>
<td align="center">&nbsp;</td>
<td align="center">SUBTOTAL: $</td>
<td align="center"><?php 
echo number_format($suma,3);
$sub=number_format($suma,3);
$imp=0.18;
$igv=number_format($sub*$imp,3);
?></td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>  <tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">IGV</td>
     <td align="center"><?php echo $igv;  ?></td>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
   </tr>
   <tr>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td align="center">TOTAL</td>
     <td align="center"><?php echo number_format($igv+$suma,3); $total=number_format($igv+$suma,3); ?></td>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
   </tr>

 
</table> 
<div align="center"><span class="prod">Total de Articulos: <?php echo count($carro); ?></span></div><br> 
<div align="center"><span class="prod">
        Continuar la seleccion de productos</span> 
 <a href="catalogo.php?<?php echo SID;?>">
     <img src="imagenes/panel/Knob Add.png"  border="0" align="absmiddle"></a>&nbsp; 
 <a href="regpago.php?<?php echo SID;?>&costo=<?php echo $suma; ?>"><!--<img src="../imagenes/finalizarcompra.gif" width="135" height="16" border="0" align="absmiddle">--></a><a href="cancelar.php">(X)</a>
</div> 
 </div>
    </div>  </div>
<input type='hidden' id='datos_a_enviar' name='datos_a_enviar' />
<a href='javascript:void(0)' class='prints' title='imprimir' onclick="guardacompra()">
    <img src='../admin/imagenes/panel/imprimir.jpg' alt='edit' />Imprimir</a>
<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!grabarbBD!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
<form name="formularioGuardar" action="registrandopago.php" method="post">
<?  
 foreach($documento as $k => $d){
     echo " <input type='hidden' name='iddocumento_servicio' value='".$d['iddocumento_servicio']."'></input>";
     echo " <input type='hidden' name='iddocumentos' value='".$d['iddocumentos']."'></input>";
     echo " <input type='hidden' name='numero_actual' value='".$d['numero_actual']."'></input>";
 }
 echo " <input type='hidden' name='idusuarios' value='".$idUsuarioL."'></input>";
 echo " <input type='hidden' name='idlocal' value='".$idLocal."'></input>";
foreach($cliente as $q => $c){
	  echo " <input type='hidden' name='id_cliente' value='".$c['idcliente']."'>";      
	  }
	  echo "<textarea style='display:none;'   name='detalle_documento' id='textarea' cols='45' rows='5'>";
	 foreach($carro as $k => $v){ 
	  $unidad=$v['cantidad']>1?" unidades de ":" unidad de "; 
  
	 echo $v['cantidad'].$unidad.$v['descripcion_producto'].","; 
	 }  echo "</textarea>"; 
	 echo "<input type='hidden' name='fecha' value='".date("Y-m-d H:i:s")."'> ";  
	 //$copnsulta=dime("select numero_documento from      documentos order by numero_documento desc  ")or die(ovni("Oo"));
	 //$numeroDocumento = mysql_fetch_assoc($copnsulta);
	 //echo "<input type='hidden' name='numero_documento' value='000".(($numeroDocumento['numero_documento'])+1)."'> ";
	 echo "<input type='hidden' name='monto_total' value='".number_format($igv+$sub,3)."'> ";
	  ?>
      
 <input type="submit" name="Submit" value="Registrar Pago"/>
 
</form>
<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!grabarbBD!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
  
                   
</div>
    
 <div id="footer">
     <div class="derecha"> </div>
<!-- end #footer --></div>
<!-- end #container --></div>
	 <script>

	 </script>
</body>
</html>