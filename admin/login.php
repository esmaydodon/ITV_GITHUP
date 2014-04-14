<?php 
//estas variables son para guardar datos de los usuarios en caso de que tengan sus kis  en sus sistema y de estas ser corrrectas
include("../func/funciones.php");
      $loginCorrecto = false;   $adminCorrecto = false; $ventas=false;
      $idUsuarioL;  $nickUsuarioL;  $emailUsuarioL;    $NombreUsuarioL;  $tipoUsuarioL; 
      if(isset($_COOKIE["usNick"]) && isset($_COOKIE["usPass"] ) && isset($_COOKIE["idlocal"] )) 
        { 
        $result = dime("SELECT u.*,ul.idlocal FROM usuarios u inner join usuarios_local ul on
u.idusuarios=ul.idusuarios WHERE u.nick_usuario='".$_COOKIE["usNick"]."' 
        AND u.pass_usuario='".$_COOKIE["usPass"]."'"); //los que estan guardadas en los kokies
      if($row = mysql_fetch_array($result)) 
        { 
        $loginCorrecto = true; 
        $idUsuarioL = $row["idusuarios"]; 
        $nickUsuarioL = $row["nick_usuario"]; 
        $emailUsuarioL = $row["email_usuario"]; 
        $NombreUsuarioL = $row["nombre_usuario"]; 
        $idLocal = $row["idlocal"]; 
	    $tipoUsuarioL = $row["tipos_usuarios_idtipos_usuarios"];
		
		$result2 = mysql_query("SELECT * FROM usuarios WHERE nick_usuario='".$_COOKIE["usNick"]."' 
        AND pass_usuario='".$_COOKIE["usPass"]."' and tipos_usuarios_idtipos_usuarios = 1 "); 
		if($row2 = mysql_fetch_array($result2)) 
        { $adminCorrecto = true; }//super admin
        } 
        else 
        { 
        //Destruimos las cookies. tengo problemas cono estos al momento de suvir la imagen
        setcookie("usNick","x",time()-3600); 
        setcookie("usPass","x",time()-3600); 
        } 
        mysql_free_result($result); 
        } 
        ?>
