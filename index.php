<?php
require_once("Config/Config.php");

if (isset($_GET['lang'])){
    $languague = $_GET['lang'];
  $languague_ = trim($languague);

  $_SESSION['languague_'] = $languague_;
}else{
    $lang = "es";
}
if(isset($_SESSION['languague_'])){
    $lang = $_SESSION['languague_'];
    //session_destroy();
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
<!--                         <li><a href=""><?= $lang == 'es' ? NAV_SERVICE2_ES : NAV_SERVICE2_EN ?></a></li>
                        <li><a href=""><?= $lang == 'es' ? NAV_SERVICE3_ES : NAV_SERVICE3_EN ?></a></li> -->
                        <li><a href="contacto.php"><?= $lang == 'es' ? NAV_CONTACT_ES : NAV_CONTACT_EN ?></a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="social">
                        <li><a target="_blank" href="https://api.whatsapp.com/send?phone=51963332647&text=Hola%20Arapaima,%20deseo%20mas%20informaci%C3%B3n%20mi%20nombre%20es:"><i class="fa fa-whatsapp " aria-hidden="true"></i>  (+51) 963 332 647</a></li>
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

    <div class="portada">
        <div id="layerUp">
          <div class="layerUp">
            <h1>"<?= $lang == 'es' ? PORT_TIT_ES : PORT_TIT_EN ?>"</h1>
          </div>
          <div class="layerDown">
            <div class="month">
              <div class="mup">
                <span><?= $lang == 'es' ? BTN_MONTH_ES : BTN_MONTH_EN ?></span>
              </div>
              <div class="mdown">
                <select class="optMonth" name="optMonth" id="optMonth">
                  <option value="1">ENERO</option>
                  <option value="2">FEBRERO</option>
                  <option value="3">MARZO</option>
                  <option value="4">ABRIL</option>
                  <option value="5">MAYO</option>
                  <option value="6">JUNIO</option>
                  <option value="7">JULIO</option>
                  <option value="8">AGOSTO</option>
                  <option value="9">SETIEMBRE</option>
                  <option value="10">OCTUBRE</option>
                  <option value="11">NOVIEMBRE</option>
                  <option value="12">DICIEMBRE</option>
                </select>
              </div>
            </div>
            <div class="year">
              <div class="yup">
                <span><?= $lang == 'es' ? BTN_YEAR_ES : BTN_YEAR_EN ?></span>
              </div>
              <div class="ydown">
                <select class="optYear" name="optYear" id="optYear">
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                </select>
              </div>

            </div>
            <div class="search">
              <input id="btnSearch" type="button" value="<?= $lang == 'es' ? BTN_SEAR_ES : BTN_SEAR_EN ?>">
            </div>
          </div>
        </div>
        <video id="video" width="100%"  autoplay muted>
          <source src="img/Video2.mp4" type="video/mp4">
          <source src="img/video2.wmv" type="video/wmv">
        Your browser does not support the video tag.
        </video>
      </div>

    <!-- ************************************************************** -->
    <!-- *************************  /portada  ************************* -->
    <!-- ************************************************************** -->

    <!-- ************************************************************** -->
    <!-- *************************  informacion statica  ************************* -->
    <!-- ************************************************************** -->    
<section class="staticDataHome">
    <h1><?= $lang == 'es' ? TIT_ES : TIT_EN ?></h1>
    <p><?= $lang == 'es' ? T_TXT_ES : T_TXT_EN ?> <br>
         </p>
</section>
<section class="callToAction">
     <h2>>><?= $lang == 'es' ? CTA_ES : CTA_EN ?><<</h2>
</section>
<section class="callToAction4">
    <h3> <?= $lang == 'es' ? T2_ES : T2_EN ?> </h3>
</section>
<section class="callToAction3">
    
    <div class="divImageText1">
        <div class="dIleft"><img src="img/logo-small.png" alt=""></div>
        <div class="dIright"></div>
    </div>
    <div class="divImageText2">
        <div class="dI2left ">
            <p>Nuestra embarcación el arapaima, ofrece a los huéspedes 

                la oportunidad de sumergirse en la belleza y la maravilla 
                
                de la selva tropical mientras disfrutan de un lujo sin igual. 
                
                Esta embarcación única les brinda la oportunidad de experimentar 
                
                la naturaleza y el confort al mismo tiempo.</p>
        </div>
        <div class="dI2right"><input id="btnSearch2" type="button" value="BUSCAR"></div>
    </div>
</section>
<section id="ourActivities">
    <div class="title">
        <div class="espacio"></div>
        <h3 class="title2"><?= $lang == 'es' ? T3_ES : T3_EN ?></h3>
    </div>
    <div class="activities">
        <!-- ********************** -->
        <!-- ******** box ********* -->
        <!-- ********************** -->
        <div class="act_box">
            <div class="titulo">
                <h4><?= $lang == 'es' ? OA_1_ES : OA_1_EN ?></h4>
            </div>
            <div class="imgBox">
                <img src="img/imagen1.jpg" alt="">
            </div>
        </div>
        <div class="act_box">
            <div class="titulo">
                <h4><?= $lang == 'es' ? OA_2_ES : OA_2_EN ?></h4>
            </div>
            <div class="imgBox">
                <img src="img/imagen2.jpg" alt="">
            </div>
        </div>
        <div class="act_box">
            <div class="titulo">
                <h4><?= $lang == 'es' ? OA_3_ES : OA_3_EN ?></h4>
            </div>
            <div class="imgBox">
                <img src="img/imagen3.jpg" alt="">
            </div>
        </div>
        <div class="act_box">
            <div class="titulo">
                <h4><?= $lang == 'es' ? OA_4_ES : OA_4_EN ?></h4>
            </div>
            <div class="imgBox">
                <img src="img/imagen4.jpg" alt="">
            </div>
        </div>
        <div class="act_box">
            <div class="titulo">
                <h4><?= $lang == 'es' ? OA_5_ES : OA_5_EN ?></h4>
            </div>
            <div class="imgBox">
                <img src="img/imagen5.jpg" alt="">
            </div>
        </div>
        <div class="act_box">
            <div class="titulo">
                <h4><?= $lang == 'es' ? OA_6_ES : OA_6_EN ?></h4>
            </div>
            <div class="imgBox">
                <img src="img/imagen6.jpg" alt="">
            </div>
        </div>
       
        <!-- ********************** -->
        <!-- ******* /box ********* -->
        <!-- ********************** -->        
    </div>
</section>
<section class="reviews">
    <div class="title">
        <div class="espacio"></div>
        <h3 class="title2"><?= $lang == 'es' ? T_R_ES : T_R_EN ?></h3>
    </div>
    <div class="rbox">
        <div class="rbLeft">
            <span class="" id="img1">
                <img src="img/rev1.png" alt="">
                <span>Juan Garcia</span>
            </span>
            <span class="hidden" id="img2">
                <img src="img/rev2.jpg" alt="">
                <span >Carla Perez</span>
            </span>
        </div>
        <div class="rbRight">
            <div class="star">
                <ul class="linksocial2">
                    <li><a href="#"><i class="fa fa-star " aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star " aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star " aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star " aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star " aria-hidden="true"></i></a></li>
                   
                    
                </ul>
            </div>
            <div class="text" id="text1">
                <p><?= $lang == 'es' ? R1_ES : R1_EN ?></p>
            </div>
            <div class="text hidden" id="text2">
                <p><?= $lang == 'es' ? R2_ES : R2_EN ?></p>
            </div>
            <div class="text hidden" id="text3">
            <p><?= $lang == 'es' ? R1_ES : R1_EN ?></p>
            </div>
            <div class="bullets">
                <ul class="linksocial3">
                    <i onclick="carrouselRev(1)" id="c_btn1" class="fa fa-circle" aria-hidden="true"></i>
                    <i onclick="carrouselRev(2)" id="c_btn2" class="fa fa-circle-o" aria-hidden="true"></i>
                </ul>
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
    <script src="js/inicio.js"></script>
   <script src="js/bootstrap.min.js"></script>
<!--    <script src="js/bootstrap.min.js.map"></script> -->
</body>
</html>