<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<link rel='stylesheet' href='estilos.css'>
</head>
<body>
<div id="formularioProductos"><!--formulario de registro de productos-->
<form action="../RegistrandoProducto.php" method="post" enctype="multipart/form-data"  class='contacto'>
 <div><label>Codigo Producto:</label><input type="text" name="codigoProducto" size="60" maxlength="120" value="" />  </div>
Nombre Producto:<input type="text" name="cadenatexto" size="60" maxlength="120" value="" />  
 Unid Medida:
<input type="text" name="txtund" size="10" maxlength="5" value="" />
Medidas:<input type="text" name="txtmedidas" size="10" maxlength="5" value="" /> 
Precio:<input type="text" name="txtPrecio" size="10" maxlength="10" value="" /> 
Precio ML:<input type="text" name="txtPrecioM2" size="10" maxlength="10" value="" /> 
Precio Mayorista:<input type="text" name="txtPrecioMayorista" size="10" maxlength="10" value="" /> <br/>
 Cantidad:<input type="text" name="txtCantidad" size="10" maxlength="10" value="" /> <br/>
<b>Imagen: </b> <br/>
<input name="file1" type="file" id="file1" /><br/> 
<input type="submit" value="Registrar" />
</form>
 </div>
</body>
</html>
