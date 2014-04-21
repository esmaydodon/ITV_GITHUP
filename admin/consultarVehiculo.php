 <?
include("../func/funciones.php");

$idc = $_POST['id'];//para naa practicamente :p
#para paginar
$RegistrosAMostrar=9;
//estos valores los recibo por GET enviados por aki  a un js 
if(isset($_GET['pag'])){
	$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
	$PagAct=$_GET['pag'];
//caso contrario los iniciamos
}else{
	$RegistrosAEmpezar=0;
	$PagAct=1;
} # para paginar
$consulta = dime("select t.*,m.nombre_modelo  from vehiculo t inner join modelo m on
    t.idmodelo=m.idmodelo where t.estado_vehiculo='1'
        order BY t.idvehiculo desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar  ")or 
die(ovni(" .php/consultando vehiculo"));
echo "  <h3>vehiculo</h3>
    <div id='myPrintArea'>
    <table width='600' border='1' class='tabla'> 
         <tr class='encabezado' >
         <td>Nombre vehiculo</td>
         <td>Nombre modelo</td>
         <td>Anio fabricasion</td>
         <td>Eli</td><td>Edi</td></tr>";
while($documentos = mysql_fetch_array($consulta)){
	echo "
<tr>
<td>". $documentos['placa_vehiculo']."</td>
<td>". $documentos['nombre_modelo']."</td>
<td>". $documentos['anio_fabricasion']."</td>
     <td>
     <a  style='cursor:pointer; text-decoration:underline;' onclick='eliminarVehiculo(".$documentos['idvehiculo'].")'>    <img src='../imagenes/remove.png' width='16' height='16'></a>
	 </td>
    <td> 
     <a  style='cursor:pointer; text-decoration:underline;' onclick='pedirDatosVehiculo(".$documentos['idvehiculo']. ")'><img   src='../imagenes/application_edit.png' width='16' height='16'></a> 
	 </td>
     </tr>
	";
	}
	#paginar	
$NroRegistros=mysql_num_rows(mysql_query("select t.*,m.nombre_modelo  from vehiculo t inner join modelo m on
    t.idmodelo=m.idmodelo where t.estado_vehiculo='1'"));
$PagAnt=$PagAct-1;
$PagSig=$PagAct+1;
$PagUlt=$NroRegistros/$RegistrosAMostrar;
//verificamos residuo para ver si llevará decimales
$Res=$NroRegistros%$RegistrosAMostrar;
if($Res>0) $PagUlt=floor($PagUlt)+1;
//desplazamiento
 echo "<tr><td colspan='9'>
<div style='margin-left: 121px;'>
<div  style=' clear:both; width:100%;'>
<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaVehiculo('1')\">Primero</a> ";
 if($PagAct<$PagUlt)  echo " <a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaVehiculo('$PagSig')\">Siguiente</a> ";

echo "<spam style='float:left;'><strong>Pagina ".$PagAct."/".$PagUlt."</strong></spam>";
if($PagAct>1) echo "<a style='text-decoration:underline;cursor:pointer;' onclick=\"PaginaVehiculo('$PagAnt')\">Anterior</a> ";
echo "<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaVehiculo('$PagUlt')\">Ultimo</a></div>";
echo "
<div></td></tr>            
</table>  </div>
";
?>