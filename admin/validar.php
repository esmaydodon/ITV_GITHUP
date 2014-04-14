<?php 
session_start(); extract($_REQUEST); 
//include ("includes/header.php");
include("../func/funciones.php");
        $nickN = quitar($_POST["usuario_text"]); 
        $passN = quitar($_POST["pass_text"]);
		$idlocal = quitar($_POST["local"]);
        $tipoUsuario = quitar($_POST["tipoUsuario"]);
     if($local  != "0" && $nickN != "" && $passN != ""   ) 
       { 
        $result = dime("SELECT idusuarios,pass_usuario,tipos_usuarios_idtipos_usuarios FROM usuarios WHERE nick_usuario='$nickN'   and estado_usuario='1'");      
        if($row = mysql_fetch_array($result)) //si devuelve filas entonces si existe las melas estas 
        { 
        if($row['pass_usuario'] == $passN) //ahora comprobamos si el pass_textword es correcto
        { 
            $yellocal=dime("select ul.idlocal,ul.idusuarios  from usuarios_local ul where ul.idlocal='$idlocal' and ul.idusuarios ='".$row['idusuarios']."' ");
            $numerofilas=  mysql_fetch_row($yellocal);
            if ($numerofilas !="") {
            setcookie("usNick",$nickN,time()+3600); 
        setcookie("usPass",$passN,time()+3600);
        setcookie("idlocal",$idlocal,time()+3600);      
            }else{ ?>
		    <SCRIPT LANGUAGE="javascript"> 
        location.href = "destruir.php"; 
            </SCRIPT>
		    <? } 
      
 if ($row['tipos_usuarios_idtipos_usuarios']=="1") {
     ?>
    <link href="../impre.css" rel="stylesheet" type="text/css" />

       <div align="center">
          <p><img src="../imagenes/loader.gif"   /></p>
          <p><span><span>Ingreso exitoso, ahora sera dirigido a la pagina principal</span>.</span> 
              </div>
            <SCRIPT LANGUAGE="javascript"> 
			       location.href = "index.php"; 
            </SCRIPT>      
         <?
 }elseif ($row['tipos_usuarios_idtipos_usuarios']=="2") {
            ?>
    <link href="../impre.css" rel="stylesheet" type="text/css" />

       <div align="center">
          <p><img src="../imagenes/loader.gif"   /></p>
          <p><span><span>Ingreso exitoso, ahora sera dirigido a la pagina principal</span>.</span> 
              </div>
            <SCRIPT LANGUAGE="javascript"> 
			       location.href = "vender.php"; 
            </SCRIPT>      
         <?                     
                        }
  
        } 
        else 
        { 
        echo "pass_textword incorrecto"; 
        } 
        } 
        else{ 
       echo "usuario_text no existente en la base de datos"; 
		 ?>
		    <SCRIPT LANGUAGE="javascript"> 
        location.href = "barado.php"; 
            </SCRIPT>
		    <? 
        } 
        mysql_free_result($result); 
        mysql_close();
        
       }else{
           
           echo 'Introdusca Datos: Usuario, Password y Local';
       } 
	    
        
        ?>
          </p>
</div>
