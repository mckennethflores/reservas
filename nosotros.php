<?php
require_once("Config/Config.php");

if(isset($_SESSION['languague_'])){
    
    $lang = $_SESSION['languague_'];
}else{
    $_SESSION['languague_'] = "es";
    $lang = $_SESSION['languague_'];
}
?>

<!doctype html>
<html lang="es-ES">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arapaima Expeditions</title>
   
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
  </head>
  <body>
    <!-- ************************************************************** -->
    <!-- *************************  cabecera  ************************* -->
    <!-- ************************************************************** -->
    <header>
        <div id="desktop" class="container-fluid header text-center">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <a href="index.php"><img class="logo" src="img/logo.png" alt="Arapaima Expeditions"></a>
                </div>
                <div class="col-md-8">
                    <ul class="menu ">
                    <li><a href="index.php"><?= $lang == 'es' ? NAV_HOME_ES : NAV_HOME_EN ?></a></li>
                        <li><a href="nosotros.php"><?= $lang == 'es' ? NAV_ABOUT_ES : NAV_ABOUT_EN ?></a></li>
                        <li><a href=""><?= $lang == 'es' ? NAV_SERVICE1_ES : NAV_SERVICE1_EN ?></a></li>
       <!--                  <li><a href=""><?= $lang == 'es' ? NAV_SERVICE2_ES : NAV_SERVICE2_EN ?></a></li>
                        <li><a href=""><?= $lang == 'es' ? NAV_SERVICE3_ES : NAV_SERVICE3_EN ?></a></li> -->
                        <li><a href="contacto.php"><?= $lang == 'es' ? NAV_CONTACT_ES : NAV_CONTACT_EN ?></a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="social">
                        <li><a target="_blank" href="https://api.whatsapp.com/send?phone=51963332647&text=Hola%20Arapaima,%20deseo%20mas%20informaci%C3%B3n%20mi%20nombre%20es:"><i class="fa fa-whatsapp " aria-hidden="true"></i> (+51) 963 332 647</a></li>
                  </ul>
                  <ul class="idioma">
                    <li><a href="index.php?lang=en">Engish</a></li>
                    <li><a href="index.php?lang=es">Español</a></li>
                  </ul>
                </div>
            </div>
        </div>
        <div id="mobile"  class="container-fluid header" >

            <div class="header-mb">
                <img class="logo-mb" src="img/logo-small.png" alt="Arapaima Expeditions">
                <ul class="eng">
                        <li><a href="index.php?lang=en">Engish</a></li>
                        <li><a href="index.php?lang=es">Español</a></li>
                </ul>
                <i id="hamburguer" class="fa fa-bars" aria-hidden="true"></i>
                <i  id="close" class="hidden fa fa-times" aria-hidden="true"></i>
            </div>
            <div class="body-mb">
                <ul id="menu-mb" class="hidden">
                        <li class="active"><a href="index.php"><?= $lang == 'es' ? NAV_HOME_ES : NAV_HOME_EN ?></a></li>
                        <li><a href="nosotros.php"><?= $lang == 'es' ? NAV_ABOUT_ES : NAV_ABOUT_EN ?></a></li>
                        <li><a href=""><?= $lang == 'es' ? NAV_SERVICE1_ES : NAV_SERVICE1_EN ?></a></li>
<!--                         <li><a href=""><?= $lang == 'es' ? NAV_SERVICE2_ES : NAV_SERVICE2_EN ?></a></li>
                        <li><a href=""><?= $lang == 'es' ? NAV_SERVICE3_ES : NAV_SERVICE3_EN ?></a></li> -->
                        <li><a href="contacto.php"><?= $lang == 'es' ? NAV_CONTACT_ES : NAV_CONTACT_EN ?></a></li>
                </ul>
            </div>
        </div>
    </header>
    
    <!-- ************************************************************** -->
    <!-- *************************  /cabecera  ************************* -->
    <!-- ************************************************************** -->

    <!-- ************************************************************** -->
    <!-- *************************  portada  ************************* -->
    <!-- ************************************************************** -->
<section class="banner">
    <div class="capa">
        <h1 class="bannerTit"><?= $lang == 'es' ? N_ES : N_EN ?></h1>
    </div>
    
</section>
    <!-- ************************************************************** -->
    <!-- *************************  /portada  ************************* -->
    <!-- ************************************************************** -->

    <!-- ************************************************************** -->
    <!-- *************************  informacion statica  ************************* -->
    <!-- ************************************************************** -->    


    <div class="container-fluid detalle">
        <ul class="breadcrumb">
            <li><a href="#"><?= $lang == 'es' ? NAV_HOME_ES : NAV_HOME_EN ?></a></li> / 
            <li class="active"><strong> <?= $lang == 'es' ? N_ES : N_EN ?> </strong></li>
        </ul>
    </div>

<section class="staticData">
    <!-- titulo -->

    <!-- /titulo -->
    <div class="espacio"></div>

    <div class="container">
        <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 detalle bg_blanco" style="line-height: 25px; margin: 0px !important; padding: 0px !important;"> 
                        <h2 class="text-success" style="text-align: center;"><?= $lang == 'es' ? N_ES : N_EN ?></h2>

                         <p>Arapaima Expeditions es una empresa líder en turismo para viajes en cruceros a Iquitos, Perú. Estamos comprometidos a ofrecer a nuestros viajeros una experiencia única y memorable. Ofrecemos una variedad de experiencias de viaje en cruceros únicas, desde el hospital de los delfines de Iquitos hasta la selva amazónica y el río Amazonas. Nuestros cruceros incluyen alojamiento de lujo, comidas gourmet, actividades emocionantes y un equipo de guías profesionales. Estamos comprometidos a ofrecer a nuestros viajeros la mejor experiencia de viaje. Estamos comprometidos a respetar el medio ambiente y a contribuir a la preservación de la selva amazónica y sus paisajes. Nuestras operaciones son sostenibles y respetamos las prácticas</p>

                        
                         <h2 class="elementor-heading-title elementor-size-default">Nuestra Misión</h2>

<p>
Arapaima Expeditions se dedica a brindar experiencias únicas de viaje en crucero a la selva amazónica de Iquitos, Perú. Nuestra meta es proporcionar a nuestros clientes una experiencia de viaje inolvidable, mientras se mantienen seguros y saludables. Trabajamos de cerca con la comunidad local para promover la educación, el cuidado medioambiental y la sostenibilidad, para mantener la belleza y la diversidad de la selva para las generaciones futuras.
</p>

    <h2 class="elementor-heading-title elementor-size-default">Nuestra Visión</h2>

    <p>
    Nuestra visión es ser la empresa de cruceros de primera clase en la selva amazónica de Iquitos, Perú, haciendo que los viajes sean seguros y divertidos, educativos y respetuosos con el medio ambiente. Queremos ser la primera elección para aquellos que desean explorar la selva de una manera única y memorable. Estamos comprometidos a la sostenibilidad ambiental, así como a la promoción de la educación y el cuidado de la vida silvestre.
</p>
                                 </div>
                             

                </div>

            </div>
</div>


</section>


<div class="espacio"></div>
<footer>
    <div class="espacio"></div>
	<div class="contenedor1">
		<div class="box1">
		<a href="#"><img src="img/logo.png" alt=""></a>
        <span><?= $lang == 'es' ? F_ES : F_EN ?>

        </span>
		</div>
		<div class="box1">
			<h3>Arapaima</h3>
			<ul class="links">
            <li><a href="nosotros.php"><?= $lang == 'es' ? NAV_ABOUT_ES : NAV_ABOUT_EN ?></a></li>

				<li><a href="contacto.php"><?= $lang == 'es' ? NAV_CONTACT_ES : NAV_CONTACT_EN ?></a></li>
 
			</ul>
		</div>
		<div class="box1">
			<h3><?= $lang == 'es' ? F_2_ES : F_2_EN ?></h3>
			<ul class="linksCont">
				<li><a href="#"><?= $lang == 'es' ? F_ADR_ES : F_ADR_EN ?>
                </a></li>
				<li><a href="#"> +51 963 332 647</a></li>
             
				<li><a href="#">info@arapaimaexpeditions.com</a></li>
			 
			</ul>
		</div>
		<div class="box1">
			<h3><?= $lang == 'es' ? F_T_ES : F_T_EN ?></h3>
			<ul class="linksocial">
				<li><a href="#"><i class="fa fa-facebook " aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram " aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin " aria-hidden="true"></i></a></li>
				
			</ul>
		</div>
	</div>
	<div class="contenedor2">
		<div class="compa"> <span>ARAPAIMA EXPEDITIONS  © | All rights reserved 2023</span></div>
		<div class="copyr"> <a href="#">Powered By FR SYSTEM S.A.C.</a></div>


	</div>
</footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/general.js"></script>
    <script src="js/script.js"></script>
   <script src="js/bootstrap.min.js"></script>
<!--    <script src="js/bootstrap.min.js.map"></script> -->
</body>
</html>