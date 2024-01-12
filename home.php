<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<!DOCTYPE html>
<html lang="es">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="Bienevenid@ a mi portafolio web site" />
        <meta name="keywords" content="portafolio,web,developer" />
        <meta name="author" content="Dario Santiago Chacon Vergaño" />
        <meta name="copyright" content="© 2023 DSCH-V">
        <meta name="application-name" content="portafolio web DSCH-V" />
        <title>Bienvenido, a mi portafolio</title>
        <!--CSS/index.css-->
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/mobile.css">
		<link href="assets/css/cweb-style.css" type="text/css" rel="stylesheet" />
        <link href="assets/css/user-registration.css" type="text/css" rel="stylesheet" />
        <!--CSS/index.css-->
        <!--Font Awesome-->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
		  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
		<!--Font Awesome-->
   </head>
   <body>
    <div class="main">
<!--Refresh-->
<div class="loading show" id="recargar">
  <div class="spin"></div>
</div>
 <!--Refresh-->
    <header>
      <a href="#" class="logo" onclick="refresh()">DSCH-V</a>
		<nav>
			<ul>
				<li><a href="#zona1">Inicio</a></li>
				<li><a href="#zona2" onclick="clickInA()">Nosotros</a></li>
				<li><a href="#zona3" onclick="clickInB()">Servicios</a></li>
		        <li><a href="#zona4" onclick="clickInC()">Portafolio</a></li>
				<li><a href="#zona5" onclick="clickInD()">Contacto</a></li>
                <li><a href="#"><i class="fas fa-user-circle fa-lg"></i><?php echo $username; ?></a></li>
				<li><span class="login-signup" title="cerrar seccion"><a href="logout.php"><i class="fas fa-sign-out-alt fa-lg"></i></a></span></li>
			</ul>
		</nav>
	</header>
  
   
	<section class="zona1" id="zona1">
        <section class="container">
            <h3 class="container__typing">
              !Bienvenido a mi portafolio..
            </h3>
          </section>
	</section>
    <section class="zona2" id="zona2">
		<div class="data-zone2">
      <img src="https://marketifythemes.net/html/waxon/img/about/2.jpg" class="data-img-zona2">
    <div class="data-zone2-title">
     <h3 class="data-title-zone2-res">
      Santiago
    </h3>
    <h3 class="data-title-zone2-res2">
      Vergaño
    </h3>
    <h5 class="data-title-prof-res3">Desarrollador de aplicaciones y desarrollador web</h5>
    <hr></hr>
    <div class="data-text-zone2">
    <p class="data-text-parrafo-zone2">Mi nombre es Santiago Vergaño. Soy un desarrollador y diseñador web profesional, y soy muy apasionado y dedicado a mi trabajo.</p>
    <p class="data-text-parrafo-zone2">Con 20 años de experiencia como desarrollador web profesional, he adquirido las habilidades y conocimientos necesarios para que tu proyecto sea un éxito. Disfruto cada paso del proceso de diseño, desde la discusión y la colaboración.</p>
    <a href="#" class="lead-data-zone2">Leer mas</a>
  </div>
    </div>
    </div>

    </section>
    <section class="zona3" id="zona3">
		
    </section>
    <section class="zona4" id="zona4">
		
    </section>
    <section class="zona5" id="zona5">
		
    </section>
    <section class="zona6" id="zona6">
	<div class="code-program">
	<h1 class="code-program-text">CODIGOS</h1>
	<ul>
	<table class="zone-content-code-program">
	<tr>
	<td>Icono</td>
	<td>Nombre</td>
	<td>Plataforma</td>
	<td>Archivo</td>
	<td>Descarga</td>
	<tr>
	<!--Codigos-->
	<td><i class="fab fa-spotify" id="spotify-code-pro"></i></td>
	<td>Spotify sin Ads.</td>
	<td>Spotify Inc.</td>
	<td>Bat</td>
	<td><a href="https://videoplayermp4.000webhostapp.com/Archivo%20Spotify%20sin%20Ad" download="Spotify sin Ads.rar" class="l-link-dataLiaL">Download</a></td>
	<tr>
	<!--Codigos-->
	<td><i class="fab fa-spotify" id="spotify-code-pro"></i></td>
	<td>Spotify sin Ads.</td>
	<td>Spotify Inc.</td>
	<td>Bat</td>
	<td><a href="https://videoplayermp4.000webhostapp.com/Archivo%20Spotify%20sin%20Ad" download="Spotify sin Ads.rar" class="l-link-dataLiaL">Download</a></td>
	<tr>
	<!--Codigos-->
	<td><i class="fab fa-spotify" id="spotify-code-pro"></i></td>
	<td>Spotify sin Ads.</td>
	<td>Spotify Inc.</td>
	<td>Bat</td>
	<td><a href="https://videoplayermp4.000webhostapp.com/Archivo%20Spotify%20sin%20Ad" download="Spotify sin Ads.rar" class="l-link-dataLiaL">Download</a></td>
	<tr>
	<!--Codigos-->
	<td><i class="fab fa-spotify" id="spotify-code-pro"></i></td>
	<td>Spotify sin Ads.</td>
	<td>Spotify Inc.</td>
	<td>Bat</td>
	<td><a href="https://videoplayermp4.000webhostapp.com/Archivo%20Spotify%20sin%20Ad" download="Spotify sin Ads.rar" class="l-link-dataLiaL">Download</a></td>
	<tr>
	<!--Codigos-->
	<td><i class="fab fa-spotify" id="spotify-code-pro"></i></td>
	<td>Spotify sin Ads.</td>
	<td>Spotify Inc.</td>
	<td>Bat</td>
	<td><a href="https://videoplayermp4.000webhostapp.com/Archivo%20Spotify%20sin%20Ad" download="Spotify sin Ads.rar" class="l-link-dataLiaL">Download</a></td>
	<tr>
	<!--Codigos-->
	<td><i class="fab fa-spotify" id="spotify-code-pro"></i></td>
	<td>Spotify sin Ads.</td>
	<td>Spotify Inc.</td>
	<td>Bat</td>
	<td><a href="javascript:openD(('https://hello.com'))" class="l-link-dataLiaL ">Download</a></td>
	<tr>
	<!--Codigos-->
	<td><i class="fab fa-spotify" id="spotify-code-pro"></i></td>
	<td>Spotify sin Ads.</td>
	<td>Spotify Inc.</td>
	<td>Bat</td>
	<td><a href="https://videoplayermp4.000webhostapp.com/Archivo%20Spotify%20sin%20Ad" download="Spotify sin Ads.rar" class="l-link-dataLiaL">Download</a></td>
	<tr>
	<!--Codigos-->
	<td><i class="fab fa-spotify" id="spotify-code-pro"></i></td>
	<td>Spotify sin Ads.</td>
	<td>Spotify Inc.</td>
	<td>Bat</td>
	<td><a href="https://videoplayermp4.000webhostapp.com/Archivo%20Spotify%20sin%20Ad" download="Spotify sin Ads.rar" class="l-link-dataLiaL">Download</a></td>
	<tr>
	<!--Codigos-->
	<td><i class="fab fa-spotify" id="spotify-code-pro"></i></td>
	<td>Spotify sin Ads.</td>
	<td>Spotify Inc.</td>
	<td>Bat</td>
	<td><a href="https://videoplayermp4.000webhostapp.com/Archivo%20Spotify%20sin%20Ad" download="Spotify sin Ads.rar" class="l-link-dataLiaL">Download</a></td>
	<tr>
	<!--Codigos-->
	<td><i class="fab fa-spotify" id="spotify-code-pro"></i></td>
	<td>Spotify sin Ads.</td>
	<td>Spotify Inc.</td>
	<td>Bat</td>
	<td><a href="https://videoplayermp4.000webhostapp.com/Archivo%20Spotify%20sin%20Ad.rar" download="Spotify sin Ads.rar" class="l-link-dataLiaL">Download</a></td>
	<tr>
	<!--Codigos-->
	<td><i class="fab fa-spotify" id="spotify-code-pro"></i></td>
	<td>Spotify sin Ads.</td>
	<td>Spotify Inc.</td>
	<td>Bat</td>
	<td><a href="https://videoplayermp4.000webhostapp.com/Archivo%20Spotify%20sin%20Ad" download="Spotify sin Ads.rar" class="l-link-dataLiaL">Download</a></td>
	<tr>
	<!--Codigos-->
	<td><i class="fab fa-spotify" id="spotify-code-pro"></i></td>
	<td>Spotify sin Ads.</td>
	<td>Spotify Inc.</td>
	<td>Bat</td>
	<td><a href="https://videoplayermp4.000webhostapp.com/Archivo%20Spotify%20sin%20Ad.rar" download="Spotify sin Ads.rar" class="l-link-dataLiaL">Download</a></td>
	<tr>
	<!--Codigos-->
	<td><i class="fab fa-spotify" id="spotify-code-pro"></i></td>
	<td>Spotify sin Ads.</td>
	<td>Spotify Inc.</td>
	<td>Bat</td>
	<td><a href="https://videoplayermp4.000webhostapp.com/Archivo%20Spotify%20sin%20Ad.rar" download="Spotify sin Ads.rar" class="l-link-dataLiaL">Download</a></td>
	<tr>
	<!--Codigos-->
	<td><i class="fab fa-spotify" id="spotify-code-pro"></i></td>
	<td>Spotify sin Ads.</td>
	<td>Spotify Inc.</td>
	<td>Bat</td>
	<td><a href="https://videoplayermp4.000webhostapp.com/Archivo%20Spotify%20sin%20Ad.rar" download="Spotify sin Ads.rar" class="l-link-dataLiaL">Download</a></td>
	<tr>
	<!--Codigos-->
	</table>
	</ul>
	</div>
	<style>
	.code-program {
    top: 180px;
    position: relative;
	}
	.code-program-text {
	 color: #fff; 
	 text-align: center;
	 margin-bottom: 20px;
	 }
	 #spotify-code-pro {
	  color: #02d70a; 
	 }
	  .zone-content-code-program {
	  height: 20vh;
	  overflow: scroll;
	  width: 100%;
      color: #fff;
	    line-height: 30px;
		font-size: 20px;
	left: -0px;
    position: relative;
	text-align: center;
	  }
	  .l-link-dataLiaL {
    text-decoration: none;
    color: gray;
    transition: 0.5s;
    padding: 10px;
   }
	 
	</style>
    </section>
  </div>
     <!--COKIE-->
 <div id="cajacookies">
  <p class="text-cokie">
  <i class="fas fa-cookie-bite fa-lg"></i>
  Este sitio web usa cookies, si permanece aquí acepta su uso.
  Puede leer más sobre el uso de cookies en nuestra <a href="#" class="cokie-polity">política de privacidad</a>
  <button onclick="aceptarCookies()" class="pull-right"><i class="fas fa-lock"></i> Aceptar y cerrar</button>
  </p>
  </div>
    <!--Cokie-->
    <footer>
     <div class="footer-p">
       <div class="icon-data-p">
        <h3>CODIGO</h3>
        <form id="passwordForm">
        <input type="password" id="password" placeholder="Codigo..">
        <button type="submit">Ok</button>
        </form>
       <p id="message"></p>
        </div>
       <div class="icon-data-p">
        <a href="javascript:openD(('https://www.facebook.com/dariosantiagochaconv'))" class="l-link-data"><i class="fa fa-facebook" id="data-link-la-li"></i></a>
        <a href="javascript:openD(('https://www.instagram.com/ds35524/'))" class="l-link-data"><i class="fa fa-instagram" id="data-link-la-li"></i></a>
        <a href="javascript:openD(('https://www.youtube.com/@dsch-v'))"  class="l-link-data"><i class="fa fa-youtube" id="data-link-la-li"></i></a>
        <a href="javascript:openD(('https://twitter.com/VerganoSantiago'))" class="l-link-data"><i class="fa fa-twitter" id="data-link-la-li"></i></a>
       </div>
       <div class="icon-data-p">
        <p>Copyright © 2023 DSCH-V - Todos los derechos reservados</p>
        </div>
     </div>
    </footer>
	<script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("abajo",window.scrollY>0);
		})
	</script>
   <!--Script exteriores-->
   <script src="./js/index.js"></script>
   <!--Script exteriores-->   
   </body>
</html>     