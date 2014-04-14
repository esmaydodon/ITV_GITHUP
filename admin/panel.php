<?
include("../func/funciones.php");
 include('login.php');
?><!DOCTYPE html>
<!-- saved from url=(0081)https://signout.live.com/content/dam/imp/surfaces/mail_signout/v7/mail/es-pe.html -->

<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ITV</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/menu2.css">
    
<script type="text/javascript" src="../js/ajax.js"></script>
<script type="text/javascript" src="../js/jquery-1.6.4.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.21.custom.min.js"></script> 
<script type="text/javascript" src="../js/easyzoom.js"></script>
<script type="text/javascript" src="../js/jquery.ui.datepicker-es.js"></script>
<script type="text/javascript" src="../js/jquery.PrintArea.js"></script>
<script type="text/javascript"> 
$(document).ready(function () {
  $('#nav > li > a').click(function(){
    if ($(this).attr('class') != 'active'){
      $('#nav li ul').slideUp();
      $(this).next().slideToggle();
      $('#nav li a').removeClass('active');
      $(this).addClass('active');
    }
  });
});
 </script>
 </head>

<body dir="ltr" class="ltr normal es-419">
    <div id="confirm">
        <div id="brand" class="newmail">
            <a href="http://itv.kuraka.net/">
                <img src="imagenes/logo.png" alt="Outlook"> 
          </a>
        </div>CONSULTAS | PLACAS | PERIORO |  CONSULTAR
</div> <? include ('ya.php'); ?>
    <div id="mboxDefault" class="mboxDefault">
        <div id="offer">
     
         <ul id="nav">
           <li><a href="#">Item 1</a>
    <ul>
      <li><a href="#">Sub-Item 1 a</a></li>
      <li><a href="#">Sub-Item 1 b</a></li>	
      <li><a href="#">Sub-Item 1 c</a></li>
    </ul>
    <a href="#">Item 2</a>
    <ul>
      <li><a href="#">Sub-Item 2 a</a></li>
      <li><a href="#">Sub-Item 2 b</a></li>
    </ul>
    <a href="#">Item 3</a>
    <ul>
      <li><a href="#">Sub-Item 3 a</a></li>
      <li><a href="#">Sub-Item 3 b</a></li>
      <li><a href="#">Sub-Item 3 c</a></li>
      <li><a href="#">Sub-Item 3 d</a></li>
    </ul>
    <a href="#">Item 4</a>
    <ul>
      <li><a href="#">Sub-Item 4 a</a></li>
      <li><a href="#">Sub-Item 4 b</a></li>
      <li><a href="#">Sub-Item 4 c</a></li>
    </ul>
  </li>
</ul>
          
  <div class  ="container">
           <fieldset id="signin_menu">
             <form method="post"id="signin"action="https://twitter.com/sessions">
      <label for="username">Username or email</label>
      <input id="username"name="username"value=""title="username"tabindex="4"type="text">
      </p>
      <p>
        <label for="password">Password</label>
        <input id="password"name="password"value=""title="password"tabindex="5"type="password">
      </p>
      <p class="remember">
        <input id="signin_submit"value="Sign in"tabindex="6"type="submit">
        <input id="remember"name="remember_me"value="1"tabindex="7"type="checkbox">
        <label for="remember">Remember me</label>
      </p>
      <p class="forgot-username"> <A id=forgot_username_link 
title=" If you remember your password, try logging in with your email"
href="#">Forgot your username?</A> </p>
    </form>
</fieldset>
</div>
        </div>
        
    </div>
    <div id="footer">
        <span id="ftrCopy">©2012 Kuraka</span>
        <a href="http://g.live.com/8seskydrive/tou" id="ftrTerms">Términos</a>
        <a href="http://g.live.com/8seskydrive/privacy" id="ftrPrivacy">Grupo</a>
    </div>


</body></html>