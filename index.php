<!DOCTYPE html>
<!-- saved from url=(0081)https://signout.live.com/content/dam/imp/surfaces/mail_signout/v7/mail/es-pe.html -->
<?
include("func/funciones.php");
//include('login.php');

?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>ITV</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
<body dir="ltr" class="ltr normal es-419">
    <div id="confirm">
        <div id="brand" class="newmail">
            <a href="http://itv.kuraka.net/">
                <img src="imagenes/logo.png" alt="iTV">
            </a>
        </div>
        <h2>ku-nuve.</h2>
 
    </div>
    <div id="mboxDefault" class="mboxDefault">
        <div id="offer">
            <img src="./Outlook_files/big-feedback_ltr.png" alt="Esperamos que estés disfrutando de Outlook.">
            <h1>&nbsp;</h1>
             
          <div id="formulario"> 
            <form action="admin/validar.php" method="post">
            <input type="hidden" value="2" name="tipoUsuario" />
            <span class="texto">Cuenta:<span>
            <input type="text" name="usuario_text" /></span>         
            Password:<span><input type="text" name="pass_text" /></span>
            <span> <?php
 $consulata_tipo2=dime('select * from  local order by  idlocal desc') or die(mysql_error());	
    echo"<select id ='local' name='local' class='select'>
	     <option value='0'>Seleccione Local</option>";
		while($local = mysql_fetch_array($consulata_tipo2)){
    	echo"<option value='".$local['idlocal']."'>".$local['nombre_local']."</option>";}
	echo"</select></br>"; 
        ?></span><span><input class="newmail" type="submit" name="Submit" value="sss"  />
        </span>	
          </form></div>
</p>
            <a id="follow" href="https://twitter.com/marlonmq">@Marlonmq</a>
        </div>
    </div>
    <div id="footer">
        <span id="ftrCopy">©2012 Kuraka</span>
        <a href="#" id="ftrTerms">Términos</a>
        <a href="#" id="ftrPrivacy">Grupo</a>
    </div>


</body></html>