function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}

	return xmlhttp;
}
/*carrito*/
//ici
function buscarDato(){
	resul = document.getElementById('resultadoBusqueda');
	bus=document.frmbusqueda.dato.value;

	ajax=objetoAjax();
	ajax.open("POST", "busqueda.php",true);	
	resul.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			resul.innerHTML = ajax.responseText
		}
	}//alert("hola");
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("busqueda="+bus)
}
function buscarDatoProveedor(){
	resul = document.getElementById('resultadoBusquedaProveedor');
	bus=document.frmbusquedaProveedor.dato.value;

	ajax=objetoAjax();
	ajax.open("POST", "busquedaProveedor.php",true);	
	resul.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			resul.innerHTML = ajax.responseText
		}
	}//alert("hola");
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("busqueda="+bus)
}
function buscarDatoCliente(){
	resul = document.getElementById('resultadoBusquedaCliente');
	bus=document.frmbusquedaCliente.dato.value;

	ajax=objetoAjax();
	ajax.open("POST", "busquedaCliente.php",true);	
	resul.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			resul.innerHTML = ajax.responseText
		}
	}//alert("hola");
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("busqueda="+bus)
}
function buscarDato2(){
	resul = document.getElementById('resultadoBusqueda');
	bus=document.frmbusqueda.dato.value;
ajax=objetoAjax();
	ajax.open("POST", "busqueda2.php",true);	
	resul.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			resul.innerHTML = ajax.responseText
		}
	}//alert("hola");
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("busqueda="+bus)}
function buscarDato22(){
	resul = document.getElementById('resultadoBusqueda');
	bus=document.frmbusqueda.dato.value;
ajax=objetoAjax();
	ajax.open("POST", "busqueda22.php",true);	
	resul.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			resul.innerHTML = ajax.responseText
		}
	}//alert("hola");
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("busqueda="+bus)}	
function buscarDatoBoleta(){
	resul = document.getElementById('resultadoBusqueda');
	bus=document.frmbusqueda.dato.value;
ajax=objetoAjax();
	ajax.open("POST", "busqueda22Boleta.php",true);	
	resul.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			resul.innerHTML = ajax.responseText
		}
	}//alert("hola");
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("busqueda="+bus)}	
	function buscarDatoContrato(){
	resul = document.getElementById('resultadoBusqueda');
	bus=document.frmbusqueda.dato.value;
ajax=objetoAjax();
	ajax.open("POST", "busqueda22Contrato.php",true);	
	resul.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			resul.innerHTML = ajax.responseText
		}
	}//alert("hola");
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("busqueda="+bus)}	
function buscarempresa(){
	resul = document.getElementById('resultadoBusqueda2');
	bus=document.frmbusqueda2.dato.value;
	dedonde=document.frmbusqueda2.dedoc.value;
	
ajax=objetoAjax();
	ajax.open("POST","busquedaempresa.php",true);
	resul.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			resul.innerHTML = ajax.responseText
		}
	}//alert("hola");
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("busqueda="+bus+"&dedo="+dedonde)
 }
 function buscarPlaca(){
	resul = document.getElementById('resultadoBusqueda4');
	bus=document.frmbusqueda2.dato.value;
	dedonde=document.frmbusqueda2.dedoc.value;
	
ajax=objetoAjax();
	ajax.open("POST","busquedaVehiculoporPlaca.php",true);
	resul.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			resul.innerHTML = ajax.responseText
		}
	}//alert("hola");
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("busqueda="+bus+"&dedo="+dedonde)
 }
function buscarConductor(){
	resul = document.getElementById('resultadoBusqueda2');
	bus=document.frmbusqueda2.dato.value;
	dedonde=document.frmbusqueda2.dedoc.value;
	
ajax=objetoAjax();
	ajax.open("POST","busquedaconductor.php",true);
	resul.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			resul.innerHTML = ajax.responseText
		}
	}//alert("hola");
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("busqueda="+bus+"&dedo="+dedonde)
 }	
function buscarVehiculo(){
	resul = document.getElementById('resultadoBusqueda3');
	bus=document.frmbusqueda3.dato.value;
	dedonde=document.frmbusqueda3.dedoc.value;
	
ajax=objetoAjax();
	ajax.open("POST","busquedavehiculo.php",true);
	resul.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			resul.innerHTML = ajax.responseText
		}
	}//alert("hola");
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("busqueda="+bus+"&dedo="+dedonde)
 }	
//compras
function compras(){
	idCuenta = 1;
	divContenido = document.getElementById('detalle3');
	ajax=objetoAjax();
	ajax.open("POST","listarCompras.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	
	}
//
//ayta
function imagenProducto(idProducto){
	divContenido = document.getElementById('imagenpro');
	ajax=objetoAjax();
	ajax.open("POST","consultarProductosImagen.php");
	divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idProducto)	//en realidad para na esto
 //	alert(idProducto); 
}
//ayta end
function gestionarP(){
	idCuenta = 1;
	divContenido = document.getElementById('detalle3');
	ajax=objetoAjax();
	ajax.open("POST","consultarProductos.php");
	divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function gestionarTipoUsuario(){
	idCuenta = 1;  
	divContenido = document.getElementById('listarTU');
	ajax=objetoAjax();
	ajax.open("POST","consultarTU.php"); 
	divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function gestionarLocalUsuario(){
	idCuenta = 1;  
	divContenido = document.getElementById('listarUsLo');
	ajax=objetoAjax();
	ajax.open("POST","consultarUsLo.php"); 
	divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function gestionarPagos(){
	idCuenta = 1;  
	divContenido = document.getElementById('listarPago');
	ajax=objetoAjax();
	ajax.open("POST","consultarPagos.php"); 
	divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function gestionarLocal(){
	idCuenta = 1;  
	divContenido = document.getElementById('listarLO');
	ajax=objetoAjax();
	ajax.open("POST","consultarLO.php"); 
	divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function gestionarDS(){
	idCuenta = 1;  
	divContenido = document.getElementById('listarDS');
	ajax=objetoAjax();
	ajax.open("POST","consultarDS.php"); 
	divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function gestionarPro(){
	idCuenta = 1;
	divContenido = document.getElementById('detalle3');
	ajax=objetoAjax();
	ajax.open("POST","consultarProvedores.php");
		divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function gestionarServ(){
	idCuenta = 1;
	divContenido = document.getElementById('listarServicios');
	ajax=objetoAjax();
	ajax.open("POST","consultarServicios.php");
		divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function gestionarCliente(){
	idCuenta = 1;
	divContenido = document.getElementById('listacliente');
	ajax=objetoAjax();
	ajax.open("POST","consultarClientes.php");
		divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function gestionarPersonal(){
	idCuenta = 1;
	divContenido = document.getElementById('listarPer');
	ajax=objetoAjax();
	ajax.open("POST","consultarPersonal.php");
		divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function gestionarGui(){
	idCuenta = 1;
	divContenido = document.getElementById('detalle72');
	ajax=objetoAjax();
	ajax.open("POST","consultarGuias.php");
		divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function gestionarEmpresas(){
	idCuenta = 1;
	divContenido = document.getElementById('listarEmpresas');
	ajax=objetoAjax(); 
	ajax.open("POST","consultarEmpresas.php");
		divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function gestionarTipo(){
	idCuenta = 1;
	divContenido = document.getElementById('listarTipo');
	ajax=objetoAjax(); 
	ajax.open("POST","consultarTipo.php");
		divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function gestionarVehiculo(){
	idCuenta = 1;
	divContenido = document.getElementById('listarVehiculo');
	ajax=objetoAjax(); 
	ajax.open("POST","consultarVehiculo.php");
		divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function gestionarModelo(){
	idCuenta = 1;
	divContenido = document.getElementById('listarModelo');
	ajax=objetoAjax(); 
	ajax.open("POST","consultarModelo.php");
		divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function gestionarMarca(){
	idCuenta = 1;
	divContenido = document.getElementById('listarMarca');
	ajax=objetoAjax(); 
	ajax.open("POST","consultarMarca.php");
		divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function gestionarConductor(){
	idCuenta = 1;
	divContenido = document.getElementById('listarConductor');
	ajax=objetoAjax(); 
	ajax.open("POST","consultarConductor.php");
		divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function gestionarDocumento(){
	idCuenta = 1;
	divContenido = document.getElementById('listarDocumentos');
	ajax=objetoAjax(); 
	ajax.open("POST","consultarDocumentos.php");
		divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
	
function gestionartipoP(){
	idCuenta = 1;
	divContenido = document.getElementById('detalle3');
	ajax=objetoAjax();
	ajax.open("POST","consultarTipoProductos.php");
	divContenido.innerHTML= '<img src="../imagenes/cargar.gif">'; 
	ajax.onreadystatechange=function(){
	if(ajax.readyState ==4){//alert(idCuenta); 
	divContenido.innerHTML=ajax.responseText}}
        ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
        ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function eliminarProducto(idProducto){
    var eliminar = confirm("De verdad desea Eliminar el Producto?")
	if (eliminar){
		divContenido = document.getElementById('detalle3');
	ajax=objetoAjax();
	ajax.open("POST","eliminarProductos.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idProducto)	
	}}
function eliminarDS(idcliente){
		divContenido = document.getElementById('listarDS');
                var eliminar = confirm("De verdad desea Eliminar Documento de Servicio?")
if (eliminar){
	ajax=objetoAjax();
	ajax.open("POST","eliminandoDocumentoservicio.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idcliente)	
	}}
function eliminarDocumento(idcliente){
		divContenido = document.getElementById('listarDocumentos');
                var eliminar = confirm("De verdad desea Eliminar Documento?")
if (eliminar){
	ajax=objetoAjax();
	ajax.open("POST","eliminarDocumento.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idcliente)	
	}}
function eliminarModelo(idcliente){
		divContenido = document.getElementById('listarModelo');
                var eliminar = confirm("De verdad desea Eliminar Dato?")
if (eliminar){
	ajax=objetoAjax();
	ajax.open("POST","eliminarModelo.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idcliente)	
	}}
function eliminarVehiculo(idcliente){
		divContenido = document.getElementById('listarVehiculo');
                var eliminar = confirm("De verdad desea Eliminar Dato?")
if (eliminar){
	ajax=objetoAjax();
	ajax.open("POST","eliminarVehiculo.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idcliente)	
	}}
function eliminarTipo(idcliente){
		divContenido = document.getElementById('listarTipo');
                var eliminar = confirm("De verdad desea Eliminar Dato?")
if (eliminar){
	ajax=objetoAjax();
	ajax.open("POST","eliminarTipo.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idcliente)	
	}}
function eliminarMarca(idcliente){
		divContenido = document.getElementById('listarMarca');
                var eliminar = confirm("De verdad desea Eliminar Dato?")
if (eliminar){
	ajax=objetoAjax();
	ajax.open("POST","eliminarMarca.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idcliente)	
	}}
function eliminarConductor(idcliente){
		divContenido = document.getElementById('listarConductor');
                var eliminar = confirm("De verdad desea Eliminar Dato?")
if (eliminar){
	ajax=objetoAjax();
	ajax.open("POST","eliminarConductor.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idcliente)	
	}}
function eliminarEmpresa(idcliente){
		divContenido = document.getElementById('listarEmpresas');
                var eliminar = confirm("De verdad desea Eliminar Dato?")
if (eliminar){
	ajax=objetoAjax();
	ajax.open("POST","eliminarEmpresa.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idcliente)	
	}}
function eliminarCliente(idcliente){
      var eliminar = confirm("De verdad desea Eliminar Cliente?")
	if (eliminar){
		divContenido = document.getElementById('listacliente');
	ajax=objetoAjax();
	ajax.open("POST","eliminarCliente.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idcliente)	
	}}
 function eliminarProductobuscado(idProducto){
   
		divContenido = document.getElementById('men');
	ajax=objetoAjax();
	ajax.open("POST","eliminarProductos.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//   alert(idProducto);
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idProducto)	
	}       
function eliminarTipoProducto(idProducto){
     var eliminar = confirm("De verdad desea Eliminar Categoria?")
	if (eliminar){
		divContenido = document.getElementById('detalle3');
	ajax=objetoAjax(); 
	ajax.open("POST","eliminarTipoProductos.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idProducto)	
	}}
function eliminarProveedor(idProducto){
		divContenido = document.getElementById('detalle3');
                var eliminar = confirm("De verdad desea Eliminar Proveedor?")
	if (eliminar){
	ajax=objetoAjax(); 
	ajax.open("POST","eliminandoProveedor.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idProducto);
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idProducto)	
	}}
function eliminarGuia(idProducto){
    var eliminar = confirm("De verdad desea Eliminar Guia?")
	if (eliminar){
		divContenido = document.getElementById('detalle72');
	ajax=objetoAjax(); 
	ajax.open("POST","eliminandoGuia.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idProducto);
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idProducto)	
	}}
function atender(idCompra){
		divContenido = document.getElementById('detalle3');
	ajax=objetoAjax();
	ajax.open("POST","atenderCompra.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCompra)	
	}		
function consultaCuenta(idCuenta){
	divContenido = document.getElementById('detalle');
	ajax=objetoAjax();
	ajax.open("POST","consultarCuentaAdmin.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){/*alert(idCuenta);*/
			divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	
	}
function registrarCliente(){ //alert("hola"); 
var nombreCliente =document.getElementById("NombreComprador").value;
var emailCliente =document.getElementById("EmailComprador").value;
var paisCliente =document.getElementById("pais").value;
var idCliente =document.getElementById("idCliente").value;
var tipoc =document.getElementById("tipoc1").value;
var montoo =document.getElementById("monto").value;
var fecha =document.getElementById("fecha1").value;
var IDproducto =document.getElementById("idp").value;
divContenido = document.getElementById('mensaje');
	ajax=objetoAjax();
	ajax.open("POST","registranDocliente.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCliente+"&nom="+nombreCliente+"&ema="+emailCliente+"&pai="+paisCliente+"&tipo="+tipoc+"&mon="+montoo+"&fecha2="+fecha+"&idproduc="+IDproducto)	
	}
function registrarAquien(){ //alert("hola"); 
var idusuario =document.getElementById("idusuario").value;//losaco de un hidden generado registrarCliente
var nombre1 =document.getElementById("nombre1").value;
var nombre2 =document.getElementById("nombre2").value;
var emailAquien =document.getElementById("aquienDedicaEmail").value;
var mensaje =document.getElementById("aquienDedicaMensaje").value;
divContenido = document.getElementById('mensaje2');
	ajax=objetoAjax();
	ajax.open("POST","registrandoDedicatoria.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("idu="+idusuario+"&nom="+nombre1+"&ema="+emailAquien+"&nom2="+nombre2+"&men="+mensaje)	
	}
function guardacompra(){ alert("hola");/* 
var idusuario =document.getElementById("idusuario").value;//losaco de un hidden generado registrarCliente
var nombre1 =document.getElementById("nombre1").value;
var nombre2 =document.getElementById("nombre2").value;
var emailAquien =document.getElementById("aquienDedicaEmail").value;
var mensaje =document.getElementById("aquienDedicaMensaje").value;
divContenido = document.getElementById('mensaje2');
	ajax=objetoAjax();
	ajax.open("POST","registrandoDedicatoria.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("idu="+idusuario+"&nom="+nombre1+"&ema="+emailAquien+"&nom2="+nombre2+"&men="+mensaje)	
	*/}

function pedirDatosCuenta(idUsuario){
	divContenido = document.getElementById('detalle');
	ajax=objetoAjax();
	ajax.open("POST","modificarCuentaAdmin.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);		
/*	alert(idUsuario);*/
	}	
function pedirDatosdetallepago(idUsuario){
	divContenido = document.getElementById('listarDetallePago');
	ajax=objetoAjax();
	ajax.open("POST","consultarDetallePago.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);		
/*	alert(idUsuario);*/
	}
function pedirDatosServicio(idUsuario){
	divContenido = document.getElementById('editServicios');
	ajax=objetoAjax();
	ajax.open("POST","modificarServicio.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);		
/*	alert(idUsuario);*/
	}
function pedirDatosTU(idUsuario){
	divContenido = document.getElementById('editTU');
	ajax=objetoAjax();
	ajax.open("POST","modificarTU.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);		
/*	alert(idUsuario);*/
	}	
function pedirDatosUsLo(idUsuario){
	divContenido = document.getElementById('editUsLo');
	ajax=objetoAjax();
	ajax.open("POST","modificarUsLO.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);
}
function pedirDatosLO(idUsuario){
	divContenido = document.getElementById('editLO');
	ajax=objetoAjax();
	ajax.open("POST","modificarLO.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);
}
/*	alert(idUsuario);*/
function pedirDatosDS(idUsuario){
	divContenido = document.getElementById('editDS');
	ajax=objetoAjax();
	ajax.open("POST","modificarDS.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);		
/*	alert(idUsuario);*/
	}	
function pedirDatosUsuario(idUsuario){
	divContenido = document.getElementById('editPer');
	ajax=objetoAjax();
	ajax.open("POST","modificarUsuarios.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);		
/*	alert(idUsuario);*/
	}	
function pedirDatosModelo(idUsuario){
	divContenido = document.getElementById('editModelo');
	ajax=objetoAjax();//chekar donde se mostrar�"""""""""""
	ajax.open("POST","modificarModelo.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);		
/*	alert(idUsuario);*/
	}	
function pedirDatosVehiculo(idUsuario){
	divContenido = document.getElementById('editVehiculo');
	ajax=objetoAjax();//chekar donde se mostrar�"""""""""""
	ajax.open("POST","modificarVehiculo.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);		
/*	alert(idUsuario);*/
	}	
function pedirDatosTipoProducto(idUsuario){
	divContenido = document.getElementById('detalle4');
	ajax=objetoAjax();//chekar donde se mostrar�"""""""""""
	ajax.open("POST","modificarTipoProducto.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);		
/*	alert(idUsuario);*/
	}	
function pedirDatosProducto(idUsuario){
	divContenido = document.getElementById('detalle5');
	ajax=objetoAjax();//chekar donde se mostrar�"""""""""""
	ajax.open("POST","modificarProducto.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);		
/*	alert(idUsuario);*/
	}	
function pedirDatosTipo(idUsuario){
	divContenido = document.getElementById('editTipo');
	ajax=objetoAjax();//chekar donde se mostrar�"""""""""""
	ajax.open("POST","modificarTipo.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);		
/*	alert(idUsuario);*/
	}	
function pedirDatosMarca(idUsuario){
	divContenido = document.getElementById('editMarca');
	ajax=objetoAjax();//chekar donde se mostrar�"""""""""""
	ajax.open("POST","modificarMarca.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);		
/*	alert(idUsuario);*/
	}	
function pedirDatosConductor(idUsuario){
	divContenido = document.getElementById('editConductor');
	ajax=objetoAjax();//chekar donde se mostrar�"""""""""""
	ajax.open("POST","modificarConductor.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);		
/*	alert(idUsuario);*/
	}	
function pedirDatosEmpresa(idUsuario){
	divContenido = document.getElementById('editEmpresa');
	ajax=objetoAjax();//chekar donde se mostrar�"""""""""""
	ajax.open("POST","modificarEmpresa.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);		
/*	alert(idUsuario);*/
	}	
function pedirDatosProveedor(idUsuario){
	divContenido = document.getElementById('detalle62');
	ajax=objetoAjax();//chekar donde se mostrar�"""""""""""
	ajax.open("POST","modificarproveedor.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);		
/*	alert(idUsuario);*/
	}		
function pedirDatosGuia(idUsuario){
	divContenido = document.getElementById('detalle73');
	ajax=objetoAjax();//chekar donde se mostrar�"""""""""""
	ajax.open("POST","modificarGuia.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);		
/*	alert(idUsuario);*/
	}		
function pedirDatosCliente(idcliente){
	divContenido = document.getElementById('listacliente-editar');
	ajax=objetoAjax();//chekar donde se mostrar�"""""""""""
	ajax.open("POST","modificarCliente.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idcliente);		
/*	alert(idUsuario);*/
	}		
/*carrito-end*/
function previo(idArticulo1){
	divResultado=  document.getElementById('previo');
	ajax=objetoAjax();
	ajax.open('POST','Articuloprevio.php',true);

	ajax.onreadystatechange=function(){
if(ajax.readyState==4){// se a recibido respuesta del servidor?
//if(ajax.status == 200){ //comprovar si la respuesta es valida
divResultado.innerHTML = ajax.responseText
//}
}}

ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
ajax.send("idArticulo="+idArticulo1)
//alert(idArticulo1);
	}
function PaginaDS(nropagina){
	//donde se mostrar� los registros
	divContenido = document.getElementById('listarDS');
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizar� el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open('GET', 'consultarDS.php?pag='+nropagina);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos
	//el valor por la url ?pag=nropagina
	ajax.send(null)}
function PaginaLO(nropagina){
	//donde se mostrar� los registros
	divContenido = document.getElementById('listarLO');
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizar� el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open('GET', 'consultarLO.php?pag='+nropagina);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos
	//el valor por la url ?pag=nropagina
	ajax.send(null)}
function Pagina(nropagina){
	//donde se mostrar� los registros
	divContenido = document.getElementById('detalle3');
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizar� el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open('GET', 'consultarProductos.php?pag='+nropagina);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos
	//el valor por la url ?pag=nropagina
	ajax.send(null)}
function Paginaservicio(nropagina){
	//donde se mostrar� los registros
	divContenido = document.getElementById('listarServicios');
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizar� el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open('GET', 'consultarServicios.php?pag='+nropagina);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos
	//el valor por la url ?pag=nropagina
	ajax.send(null)}
function PaginaUsuario(nropagina){
	//donde se mostrar� los registros
	divContenido = document.getElementById('listarPer');
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizar� el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open('GET', 'consultarPersonal.php?pag='+nropagina);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos
	//el valor por la url ?pag=nropagina
	ajax.send(null)}
//paginar documentos de producto
function PaginaVehiculo(nropagina){
 
	divContenido = document.getElementById('listarVehiculo');
	ajax=objetoAjax();
	 
	ajax.open('GET', 'consultarVehiculo.php?pag='+nropagina);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	 
	ajax.send(null)}
function PaginaModelo(nropagina){
 
	divContenido = document.getElementById('listarModelo');
	ajax=objetoAjax();
	 
	ajax.open('GET', 'consultarModelo.php?pag='+nropagina);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	 
	ajax.send(null)}
function PaginaMarca(nropagina){
 
	divContenido = document.getElementById('listarMarca');
	ajax=objetoAjax();
	 
	ajax.open('GET', 'consultarMarca.php?pag='+nropagina);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	 
	ajax.send(null)}
function PaginaConductor(nropagina){
	//donde se mostrar� los registros
	divContenido = document.getElementById('listarConductor');
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizar� el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open('GET', 'consultarConductor.php?pag='+nropagina);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos
	//el valor por la url ?pag=nropagina
	ajax.send(null)}
function PaginaEmpresa(nropagina){
	//donde se mostrar� los registros
	divContenido = document.getElementById('listarEmpresas');
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizar� el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open('GET', 'consultarEmpresas.php?pag='+nropagina);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos
	//el valor por la url ?pag=nropagina
	ajax.send(null)}
function PaginaDocumento(nropagina){
	//donde se mostrar� los registros
	divContenido = document.getElementById('listarDocumentos');
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizar� el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open('GET', 'consultarDocumentos.php?pag='+nropagina);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos
	//el valor por la url ?pag=nropagina
	ajax.send(null)}
//    paginar documentos de propducto end
//paginar fecha de producto
function Paginafecha(nropagina){
	//donde se mostrar� los registros
	divContenido = document.getElementById('productos_caducos');
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizar� el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open('GET', 'fecha.php?pag='+nropagina);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos
	//el valor por la url ?pag=nropagina
	ajax.send(null)}
//    paginar fecha de propducto end
function PaginaTipoProducto(nropagina){
	//donde se mostrar� los registros
	divContenido = document.getElementById('detalle3');
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizar� el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open('GET', 'consultarTipoProductos.php?pag='+nropagina);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos
	//el valor por la url ?pag=nropagina
	ajax.send(null)}
function Paginaprove(nropagina){
	//donde se mostrar� los registros
	divContenido = document.getElementById('detalle3');
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizar� el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open('GET', 'consultarProvedores.php?pag='+nropagina);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos
	//el valor por la url ?pag=nropagina
	ajax.send(null)}
function PaginaTU(nropagina){
	//donde se mostrar� los registros
	divContenido = document.getElementById('listarTU');
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizar� el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open('GET', 'consultarTU.php?pag='+nropagina);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos
	//el valor por la url ?pag=nropagina
	ajax.send(null)}
function Paginaguia(nropagina){
	//donde se mostrar� los registros
	divContenido = document.getElementById('detalle72');
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizar� el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open('GET', 'consultarGuias.php?pag='+nropagina);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos
	//el valor por la url ?pag=nropagina
	ajax.send(null)}
//dejar de promocionarproducto.php
function promocionar(promocionado){
divResultado=  document.getElementById('promocionar');

var eliminar = confirm("De verdad desea Dejar de Promocionar el Producto?")
if (eliminar){
//id=document.formulario.productos.value;	//XMLHttpRequest.open ( sMetodo, sURL [, bSincronia [, sUsuario [, sPwd ] ] ] );
ajax=objetoAjax();
//alert(idproductox);
//ajax.open(�POST�, �ejemploajax2.php�,true);
ajax.open('POST','dejardepromocionar.php',true);
//ajax.open(�GET�, �ejemploajax2.php?t1=�+t1+�&t2=�+t2,true);
//ajax.Open("GET","dejardepromocionar.php?idProducto="+idproductox,true);

ajax.onreadystatechange=function(){
if(ajax.readyState==4){// se a recibido respuesta del servidor?
//if(ajax.status == 200){ //comprovar si la respuesta es valida
divResultado.innerHTML = ajax.responseText
//}
}}

ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
ajax.send("idProducto="+promocionado)
//ajax.send(�t1=�+t1+�&t2=�+t2) //post
//ajax.send(null)
}} 
//promoxionarproducto.php
function promoxionar(promoxionado){// alert(promoxionado);
divResultado=  document.getElementById('promocionar');

var eliminar = confirm("De verdad desea  Promocionar el Producto?")
if (eliminar){
//id=document.formulario.productos.value;	//XMLHttpRequest.open ( sMetodo, sURL [, bSincronia [, sUsuario [, sPwd ] ] ] );
ajax=objetoAjax();
//alert(idproductox);
//ajax.open(�POST�, �ejemploajax2.php�,true);
ajax.open('POST','promocionando.php',true); 
//ajax.open(�GET�, �ejemploajax2.php?t1=�+t1+�&t2=�+t2,true);
//ajax.Open("GET","dejardepromocionar.php?idProducto="+idproductox,true);

ajax.onreadystatechange=function(){
if(ajax.readyState==4){// se a recibido respuesta del servidor?
//if(ajax.status == 200){ //comprovar si la respuesta es valida	
divResultado.innerHTML = ajax.responseText
//}
}}

ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
ajax.send("idProducto="+promoxionado)
//ajax.send(�t1=�+t1+�&t2=�+t2) //post
//ajax.send(null)
}} 
function eliminarServicio(idadticulo) {
var eliminar = confirm("De verdad desea Eliminar Servicio?")
	if (eliminar){
//	alert(idadticulo);
	divResultado=  document.getElementById('listarServicios');
	ajax=objetoAjax();
	ajax.open('POST','EliminandoServicio.php',true); 
    ajax.onreadystatechange=function(){
    if(ajax.readyState==4){// se a recibido respuesta del servidor?
//if(ajax.status == 200){ //comprovar si la respuesta es valida	
     divResultado.innerHTML = ajax.responseText
//}
}}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
ajax.send("id="+idadticulo)
//ajax.send(�t1=�+t1+�&t2=�+t2) //post
//ajax.send(null)
}
	
	}
function EliminaArticulo(idadticulo) {
var eliminar = confirm("De verdad desea Dejar de Promocionar el Producto?")
	if (eliminar){
//	alert(idadticulo);
	divResultado=  document.getElementById('DivMostarArticulos');
	ajax=objetoAjax();
	ajax.open('POST','EliminandoArticulo.php',true); 
    ajax.onreadystatechange=function(){
    if(ajax.readyState==4){// se a recibido respuesta del servidor?
//if(ajax.status == 200){ //comprovar si la respuesta es valida	
     divResultado.innerHTML = ajax.responseText
//}
}}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
ajax.send("idArticulo="+idadticulo)
//ajax.send(�t1=�+t1+�&t2=�+t2) //post
//ajax.send(null)
}
	
	}
function eliminarUsuario(idadticulo) {
var eliminar = confirm("De verdad desea Eliminar el Usuario/ Personal")
	if (eliminar){
//	alert(idadticulo);
	divResultado=  document.getElementById('editPer');
	ajax=objetoAjax();
	ajax.open('POST','EliminandoPersonal.php',true); 
    ajax.onreadystatechange=function(){
    if(ajax.readyState==4){// se a recibido respuesta del servidor?
//if(ajax.status == 200){ //comprovar si la respuesta es valida	
     divResultado.innerHTML = ajax.responseText
//}
}}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
ajax.send("id="+idadticulo)
//ajax.send(�t1=�+t1+�&t2=�+t2) //post
//ajax.send(null)
}
	
	}
        function eliminarUsLo(idadticulo) {
var eliminar = confirm("De verdad desea Eliminar el Usuario del LOCAL?")
	if (eliminar){
//	alert(idadticulo);
	divResultado=  document.getElementById('editUsLo');
	ajax=objetoAjax();
	ajax.open('POST','EliminandousLO.php',true); 
    ajax.onreadystatechange=function(){
    if(ajax.readyState==4){// se a recibido respuesta del servidor?
//if(ajax.status == 200){ //comprovar si la respuesta es valida	
     divResultado.innerHTML = ajax.responseText
//}
}}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
ajax.send("id="+idadticulo)
//ajax.send(�t1=�+t1+�&t2=�+t2) //post
//ajax.send(null)
}
	
	}
        function eliminarLO(idadticulo) {
var eliminar = confirm("De verdad desea Eliminar el LOCAL?")
	if (eliminar){
//	alert(idadticulo);
	divResultado=  document.getElementById('editLO');
	ajax=objetoAjax();
	ajax.open('POST','EliminandoLO.php',true); 
    ajax.onreadystatechange=function(){
    if(ajax.readyState==4){// se a recibido respuesta del servidor?
//if(ajax.status == 200){ //comprovar si la respuesta es valida	
     divResultado.innerHTML = ajax.responseText
//}
}}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
ajax.send("id="+idadticulo)
//ajax.send(�t1=�+t1+�&t2=�+t2) //post
//ajax.send(null)
}
	
	}
        function eliminarTU(idadticulo) {
var eliminar = confirm("De verdad desea Eliminar el Tipo de Usuario ")
	if (eliminar){
//	alert(idadticulo);
	divResultado=  document.getElementById('editTU');
	ajax=objetoAjax();
	ajax.open('POST','EliminandoTU.php',true); 
    ajax.onreadystatechange=function(){
    if(ajax.readyState==4){// se a recibido respuesta del servidor?
//if(ajax.status == 200){ //comprovar si la respuesta es valida	
     divResultado.innerHTML = ajax.responseText
//}
}}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
ajax.send("id="+idadticulo)
//ajax.send(�t1=�+t1+�&t2=�+t2) //post
//ajax.send(null)
}
	
	}
function editarArticulo(idadticulo) {
var eliminar = confirm("De verdad desea Dejar de Promocionar el Producto?")
	if (eliminar){
	//alert(idadticulo);
	divResultado=  document.getElementById('previo');
	ajax=objetoAjax();
	ajax.open('POST','editandoarticulo.php',true); 
    ajax.onreadystatechange=function(){
    if(ajax.readyState==4){// se a recibido respuesta del servidor?
//if(ajax.status == 200){ //comprovar si la respuesta es valida	
     divResultado.innerHTML = ajax.responseText
//}
}}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
ajax.send("idArticulo="+idadticulo)
//ajax.send(�t1=�+t1+�&t2=�+t2) //post
//ajax.send(null)
}
	
	}
        
     function mostrarfecha() 
{var indice = document.registroproductos.guias1.selectedIndex;
    var valor = document.registroproductos.guias1.options[indice].value;  
     //alert(valor);
	divContenido = document.getElementById('fechaguia');
        //divContenido = document.registroproductos.fechaguia.value;
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizar� el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open('GET', 'consultafechaguia.php?idp='+valor);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos
	//el valor por la url ?pag=nropagina
	ajax.send(null)
	//texto += "\nValor de la opcion escogida: " + valor
 }
      function mostrarGrafica() 
{//var indice = document.frmdocumentodatos.documento.selectedIndex;
      var fini = document.entrefechas.fecha_ingreso.value;  
      var ffin = document.entrefechas.fecha_caducidad.value;  
     
	divContenido = document.getElementById('mostrarGrafi');
        //divContenido = document.registroproductos.fechaguia.value;
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizar� el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open('GET', 'alphabarex1.php?f1='+fini+'&f2='+ffin);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
  alert(fini);
      alert(ffin);
	ajax.send(null)
	 
 }
      function mostrardatosDocumento() 
{var indice = document.frmdocumentodatos.documento.selectedIndex;
    var valor = document.frmdocumentodatos.documento.options[indice].value;  
     //alert(valor);
	divContenido = document.getElementById('datosdocumento');
        //divContenido = document.registroproductos.fechaguia.value;
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizar� el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open('GET', 'consultadatosdocumento.php?idp='+valor+'&dedoc='+1);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos
	//el valor por la url ?pag=nropagina
	ajax.send(null)
	//texto += "\nValor de la opcion escogida: " + valor
 }
function imprimir(id)
    {alert("hola");
        var imp;
        imp = window.open(" ","Formato de Impresion"); 
        imp.document.open(); 
        imp.document.append('style: ...'); 
        imp.document.append($('#'+id).html());
        imp.document.close();
        imp.print();   
        imp.close(); 
    }
    
    function confirmar()/*para comparar claves nueva clave  modificar para la bd*/
{ 
 
//var confirmar = confirm("De verdad desea Dejar de Promocionar el Producto?")
	//if (confirmar){
	//alert(idadticulo);
        id=document.FormClave.textfield0.value;
	divResultado=  document.getElementById('confirmar');
	ajax=objetoAjax();
	ajax.open('POST','consultandoClaveAnterior.php',true); 
    ajax.onreadystatechange=function(){
    if(ajax.readyState==4){// se a recibido respuesta del servidor?
//if(ajax.status == 200){ //comprovar si la respuesta es valida	
     divResultado.innerHTML = ajax.responseText
//}
}}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
ajax.send("id="+id)
//ajax.send(�t1=�+t1+�&t2=�+t2) //post
//ajax.send(null)
//}
	
	 
  /* confirmar=confirm("TIENE QUE VOLVER A INICIAR SESION CON SU NUEVA CLAVE");
    if (confirmar==true){ 
 document.form2.submit();} 
else  {return false;}
*/
} 

    function viendostock()/*para comparar claves nueva clave  modificar para la bd*/
{  mumero=document.frmagregarcarro.cantidad.value;
    alert(1);
 
//var confirmar = confirm("De verdad desea Dejar de Promocionar el Producto?")
	//if (confirmar){
	//alert(idadticulo);
        id=document.FormClave.textfield0.value;
	divResultado=  document.getElementById('confirmar');
	ajax=objetoAjax();
	ajax.open('POST','consultandoClaveAnterior.php',true); 
    ajax.onreadystatechange=function(){
    if(ajax.readyState==4){// se a recibido respuesta del servidor?
//if(ajax.status == 200){ //comprovar si la respuesta es valida	
     divResultado.innerHTML = ajax.responseText
//}
}}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
ajax.send("id="+id)
//ajax.send(�t1=�+t1+�&t2=�+t2) //post
//ajax.send(null)
//}
	
	 
  /* confirmar=confirm("TIENE QUE VOLVER A INICIAR SESION CON SU NUEVA CLAVE");
    if (confirmar==true){ 
 document.form2.submit();} 
else  {return false;}
*/
}
/* validacion de datos*/
	var demo_mode = false; // set to false to allow form submit
function checkFieldTask (aFieldName) {
        var bool = true;
        switch (aFieldName) {
                /*
                        checkFieldTask() customization instructions:

                        1. Hacer un nuevo "case" por cada campo que deseas validar.
                        2. Coloca tu validacion dentro de la sentencia "if"
                        3. Llama la funcion "failField" cuando la validacion falla, muestra un mensaje de error.
                        4. Configurar la variable "bool=false" cuando la validacion falló.
                        5. Llama la funcion "passField" cuando la validacion fue correcta.
                */
                case "razon_social_empresa":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir Datos.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "ruc_empresa":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir Datos</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "descripcion_conductor":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "ap_mat_conductor":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir  dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "ap_pat_conductor":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "direccion_conductor":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "descripcion_tecnico":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "ap_pat__tecnico":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "ap_mat__tecnico":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "direccion_tecnico":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "email_tecnico":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "telefono_tecnico":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "email_conductor":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "movil_conductor":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "telefono_conductor":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "nombre_marca":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "nombre_modelo":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "nombre_tipo":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "placa_vehiculo":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "anio_fabricasion":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "descripcion_lugar_inspeccion":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "numeroguia":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "nombre":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "dni":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "direccion":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "telefono1":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "nombre_tipo_usuario":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "observacion_tipo_usuario":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "nombreusuario":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "dniusuario":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "nickusuario":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "passusuario":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "emailusuario":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "telefonousuario":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "celularusuario":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "direccionusuario":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "nombre_local":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "ciudad_local":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "departamento_local":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "direccion_local":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "telefono_local":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
                case "descripcion_periodo":
                        if ($("#"+aFieldName).val()=="") {
                                failField(aFieldName,"<div style='color:red;'>Debes introducir dato.</div>");
                                bool = false;
                        } else {
                                passField(aFieldName);
                        }
                        break;
        }
        return bool;
}
function checkField (aField) {
        return checkFieldTask(aField.name);
}
function checkForm (aForm) {
        var bool = true;
        for (var i=0; i < aForm.elements.length; i++) {
                if (!checkFieldTask(aForm.elements[i].name)) {
                        bool = false;
                }
        }
        if (bool) {
                passField("subbtn");
                if (demo_mode) {
                        $("#myform").hide(250);
                        $("#instructions").html('Buen trabajo. <a href="#" onclick="demoShowForm();return false;">Mostrar formulario nuevamente</a>');
                        return false;
                }
        } else {
                failField("subbtn","Por favor resuelva los errores para procesar el formulario.");
        }
        return bool;
}
function passField (aFieldName) {
        $("#form_alert_"+aFieldName+"_msg").remove();
}
function failField (aFieldName,msg) {
        $("#form_alert_"+aFieldName+"_msg").remove(); // in case there are any from last time
        $("#"+aFieldName).after(alertMsgHTML(aFieldName,msg));
}
function alertMsgHTML (aFieldName, msg) {
        return '<div id="form_alert_'+aFieldName+'_msg" class="form_alert_msg">'+msg+'</div>';
}
function demoShowForm () {
        $("#instructions").text("Deja los campos en blanco y presiona tab o enviar y se reportará un error.");
        $("#myform").show(250);
}
$(document).ready(function(){
   document.myform.field1.focus();
});

/* validacion de datos end*/

	
	