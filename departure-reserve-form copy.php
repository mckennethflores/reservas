<?php

?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arapaima Expeditions</title>
   
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">
    <?php require_once("departure-reserve-form_fun.php"); ?>
  </head>
  <body>
    <!-- ************************************************************** -->
    <!-- *************************  cabecera  ************************* -->
    <!-- ************************************************************** -->
    <header>
        <div id="desktop" class="container-fluid header text-center">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <a href="https://arapaimaexpeditions.com/"><img class="logo" src="img/logo.png" alt="Arapaima Expeditions"></a>
                </div>
                <div class="col-md-8">
                    <ul class="menu ">
                        <li><a href="index.html">INICIO</a></li>
                        <li><a href="">PLANES</a></li>
                        <li><a href="">CRUCERO</a></li>
                        <li><a href="">ACTIVIDADES</a></li>
                        <li><a href="">TARIFAS</a></li>
                        <li><a href="">BLOG</a></li>
                        <li><a href="">CONTACTO</a></li>
                        <li><a href="">FAQ</a></li>
    
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="social">
                        <li><a href=""><i class="bi bi-facebook"></i></a></li>
                        <li><a href=""><i class="bi bi-instagram"></i></a></li>
                        <li><a href=""><i class="bi bi-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="mobile"  class="container-fluid header" >

            <div class="header-mb">
                <img class="logo-mb" src="img/logo-small.png" alt="Arapaima Expeditions">
                <i id="hamburguer" class="bi bi-list"></i>
                <i id="close"  class="hidden bi bi-x"></i>
            </div>
            <div class="body-mb">
                <ul id="menu-mb" class="hidden">
                    <li ><a href="">INICIO</a></li>
                        <li><a href="">PLANES</a></li>
                        <li class="active"><a href="">CRUCERO</a></li>
                        <li><a href="">ACTIVIDADES</a></li>
                        <li><a href="">TARIFAS</a></li>
                        <li><a href="">BLOG</a></li>
                        <li><a href="">CONTACTO</a></li>
                        <li><a href="">FAQ</a></li>
                </ul>
            </div>
        </div>
    </header>
    
    <!-- ************************************************************** -->
    <!-- *************************  /cabecera  ************************* -->
    <!-- ************************************************************** -->

    <!-- ************************************************************** -->
    <!-- *************************  departure reserve form  ************************* -->
    <!-- ************************************************************** -->
    <div class="espacio"></div>
    <section id="departureReserve" class="container">
        <div class="row">
            <h3>Reserva tus cabinas</h3>
            <div class="espacio-25"></div>
            <div class="container">
            <form id="frmDepRes" name="frmDepRes" method="POST">
                <!-- ************************************************************** -->
                <!-- ************************ ELEMENTOS OCULTOS ******************* -->
                <!-- ************************************************************** -->
                <input type="hidden" id="month" name="month" value="">
                <input type="hidden" id="year" name="year" value="">
                <input type="hidden" id="program" name="program" value="">
                <!-- ************************************************************** -->
                <!-- ************************ /ELEMENTOS OCULTOS ******************* -->
                <!-- ************************************************************** -->
               <div class="row">
                <!-- item -->
                    <div class="col-md-6 bordeCabina">
                           <div class="row">
                            <div class="col-md-4">
                                <img src="img/arapaima-img.jpg" width="100%" alt="">
                            </div>
                            <div class="col-md-8">
                                <h2>Habitación Standar</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus,</p>
                                <span>Precio $ 1700</span>
                                <input type="text" name="amount1" id="amount1" value="1">
                            </div>
                           </div>
                    </div>
                <!-- /item -->
                <!-- item -->
                    <div class="col-md-6 bordeCabina">
                           <div class="row">
                            <div class="col-md-4">
                                <img src="img/arapaima-img.jpg" width="100%" alt="">
                            </div>
                            <div class="col-md-8">
                                <h2>Habitación Doble</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus,</p>
                                <span>Precio $ 2700</span>
                                <input type="text" name="amount2" id="amount2" value="">
                            </div>
                           </div>
                    </div>
                <!-- /item -->
                <!-- item -->
                    <div class="col-md-6 bordeCabina">
                           <div class="row">
                            <div class="col-md-4">
                                <img src="img/arapaima-img.jpg" width="100%" alt="">
                            </div>
                            <div class="col-md-8">
                                <h2>Habitación Standar</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus,</p>
                                <span>Precio $ 1700</span>
                                <input type="text" value="">
                            </div>
                           </div>
                    </div>
                <!-- /item -->
                <!-- item -->
                    <div class="col-md-6 bordeCabina">
                           <div class="row">
                            <div class="col-md-4">
                                <img src="img/arapaima-img.jpg" width="100%" alt="">
                            </div>
                            <div class="col-md-8">
                                <h2>Habitación Standar</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus,</p>
                                <span>Precio $ 1700</span>
                                <input type="text" value="1">
                            </div>
                           </div>
                    </div>
                <!-- /item -->
               </div>
               <hr>
               <div class="row">
                    <div class="col-md-6">
                        <p>Total Reservation Price: <span>$8000</span> </p> <input type="text" id="price" name="price" value="8000">
                    </div>
                    <div class="col-md-12">
                         <input class="fullwidth btn btn-success" type="button" id="btnDepResFrm" name="btnDepResFrm" value="Continuar comprando">
                    </div>
               </div>

               <input type="hidden" name="volante" id="volante" value="">
               

               </form>
            </div>
        </div>
    </section>

        

    <!-- ************************************************************** -->
    <!-- *************************  /departure reserve form  ************************* -->
    <!-- ************************************************************** -->

    <!-- ************************************************************** -->
    <!-- *************************  informacion statica  ************************* -->
    <!-- ************************************************************** -->    
<section class="staticData">
    <h1>arapaima expeditions</h1>
    <p>Nuestro viaje es una oportunidad única de ver algunos de los paisajes más
        impresionantes y disfrutar de la naturaleza en todo su esplendor. Los
        bosques exuberantes y la vida salvaje se combinan con las interminables
        extensiones del río para ofrecerte una experiencia verdaderamente mágica.
        Navega por el río en nuestra embarcacion mientras disfrutas de la belleza
        salvaje sin límites. <br>
        
        ¡Es una oportunidad única que no deberías perderte! </p>
</section>
<section class="callToAction">
     <h2>>> Reserva y busca tu profesor ya! <<</h2>
</section>
<section class="callToAction4">
    <h3> Nuestros autos </h3>
</section>
<section class="callToAction3">
    
    <div class="divImageText1">
        <div class="dIleft"><img src="img/logo-small.png" alt=""></div>
        <div class="dIright"></div>
    </div>
    <div class="divImageText2">
        <div class="dI2left">
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
        <h3 class="title2">Nuestras actividades</h3>
    </div>
    <div class="activities">
        <!-- ********************** -->
        <!-- ******** box ********* -->
        <!-- ********************** -->
        <div class="act_box">
            <div class="titulo">
                <h4></h4>
            </div>
            <div class="imgBox">
                <img src="img/imagen1.jpg" alt="">
            </div>
        </div>
        <div class="act_box">
            <div class="titulo">
                <h4>avistamiento <br>

                    de flora y <br>
                    
                    fauna</h4>
            </div>
            <div class="imgBox">
                <img src="img/imagen2.jpg" alt="">
            </div>
        </div>
        <div class="act_box">
            <div class="titulo">
                <h4>excursion a la <br>

                    selva de <br>
                    
                     los espejos</h4>
            </div>
            <div class="imgBox">
                <img src="img/imagen3.jpg" alt="">
            </div>
        </div>
        <div class="act_box">
            <div class="titulo">
                <h4>pesca de <br>
                    pirañas</h4>
            </div>
            <div class="imgBox">
                <img src="img/imagen4.jpg" alt="">
            </div>
        </div>
        <div class="act_box">
            <div class="titulo">
                <h4>visita comunidad <br>
                    de puerto prado</h4>
            </div>
            <div class="imgBox">
                <img src="img/imagen5.jpg" alt="">
            </div>
        </div>
        <div class="act_box">
            <div class="titulo">
                <h4>visita al centro de <br>
                    rescate de los <br>
                    manaties</h4>
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
        <h3 class="title2">Opiniones de nuestros clientes</h3>
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
                <p>Mi viaje por el río Amazonas con la 
                    empresa Arapaima Expeditions fue una
                    experiencia inolvidable. Tuve la 
                    oportunidad de ver la increíble 
                    fauna y flora del Amazonas y visitar
                    algunas de las comunidades indígenas
                    locales. La empresa fue muy respetuosa con el medio ambiente y las comunidades indígenas, y siempre se aseguraron de que todo estuviera  en orden para garantizar nuestra seguridad y comodidad. 
                    Sin duda recomendaría este viaje a 
                    cualquiera interesado en explorar 
                    el Amazonas Peruano.</p>
            </div>
            <div class="text hidden" id="text2">
                <p>Los recomiendo!. Arapaima fue una experiencia inolvidable, los mejores.</p>
            </div>
            <div class="text hidden" id="text3">
                <p>Mi viaje por el río Amazonas con la 
                    empresa Arapaima Expeditions fue una
                    experiencia inolvidable. Tuve la 
                    oportunidad de ver la increíble 
                    fauna y flora del Amazonas y visitar
                    algunas de las comunidades indígenas
                    locales. La empresa fue muy respetuosa con el medio ambiente y las comunidades indígenas, y siempre se aseguraron de que todo estuviera  en orden para garantizar nuestra seguridad y comodidad. 
                    Sin duda recomendaría este viaje a 
                    cualquiera interesado en explorar 
                    el Amazonas Peruano.</p>
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
		<a href="#"><img src="img/logo-small.png" alt=""></a>
        <span>La mejor forma de aprender a conducir es con Luva</span>
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
				<li><a href="#"> +51 963 332 647</a></li>
             
				<li><a href="#">info@luva.com</a></li>
			 
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/general.js"></script>
    <script src="js/departure-reserve-form.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>