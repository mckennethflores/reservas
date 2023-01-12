<?php
require_once("Config/Config.php");

$lang = $_SESSION['languague_'];

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
                        <li><a href=""><?= $lang == 'es' ? NAV_SERVICE2_ES : NAV_SERVICE2_EN ?></a></li>
                        <li><a href=""><?= $lang == 'es' ? NAV_SERVICE3_ES : NAV_SERVICE3_EN ?></a></li>
                        <li><a href="contacto.php"><?= $lang == 'es' ? NAV_CONTACT_ES : NAV_CONTACT_EN ?></a></li>

    
                    </ul>
                </div>
                <div class="col-md-2">
                <ul class="social">
                        <li><a target="_blank" href="https://api.whatsapp.com/send?phone=51992034855&text=Hola%20Arapaima,%20deseo%20mas%20informaci%C3%B3n%20mi%20nombre%20es:"><i class="fa fa-whatsapp " aria-hidden="true"></i> (+51) 992 034 855</a></li>
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
                        <li class="active"><a href="index.html">INICIO</a></li>
                        <li><a href="nosotros.html">Nosotros</a></li>
                        <li><a href="">CRUCERO</a></li>
                        <li><a href="">ACTIVIDADES</a></li>
                        <li><a href="">TARIFAS</a></li>
                        <li><a href="">BLOG</a></li>
                        <li><a href="contacto.html">CONTACTO</a></li>
                        <li><a href="">FAQ</a></li>
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
        <h1 class="bannerTit">Nosotros</h1>
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
            <li><a href="#">Inicio</a></li> / 
            <li class="active"><strong> Nosotros </strong></li>
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
                        <h2 class="text-success" style="text-align: center;">NOSOTROS</h2>

                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p>

                             <h2 class="elementor-heading-title elementor-size-default">Nuestra Visión</h2>

                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p>

                                 <h2 class="elementor-heading-title elementor-size-default">Nuestra Misión</h2>

                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p>

                                 </div>
                                 <a id="divWhatsapp" class="btn btn-success text-white btnCenter"><i class="fa fa-whatsapp " aria-hidden="true"></i> Deseo reservar ahora!</a>

                </div>

            </div>
</div>


</section>

 

 
 

    <!-- ************************************************************** -->
    <!-- *************************  /informacion statica  ************************* -->
    <!-- ************************************************************** -->    
    <div class="espacio"></div>
    <footer>
        <div class="espacio"></div>
        <div class="contenedor1">
            <div class="box1">
            <a href="#"><img src="img/logo.png" alt=""></a>
            <span>Explore y surque las aguas <br> del rio Amazonas a bordo del <br>
                Crucero Arapaima Expeditions. <br> Vive la experiencia!
    
            </span>
            </div>
            <div class="box1">
                <h3>Arapaima</h3>
                <ul class="links">
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Paquetes</a></li>
                    <li><a href="#">Contacto</a></li>
     
                </ul>
            </div>
            <div class="box1">
                <h3>Contact</h3>
                <ul class="linksCont">
                    <li><a href="#">Calle Alfonso Ugarte N°547 Iquitos Perú
                    </a></li>
                    <li><a href="#"> +51 992 034 855</a></li>
                 
                    <li><a href="#">info@arapaimaexpeditions.com</a></li>
                 
                </ul>
            </div>
            <div class="box1">
                <h3>Redes sociales</h3>
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
        <script src="js/script.js"></script>
       <script src="js/bootstrap.min.js"></script>
    <!--    <script src="js/bootstrap.min.js.map"></script> -->
    </body>
    </html>