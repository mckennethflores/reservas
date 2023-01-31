<?php
require_once("Config/Config.php");

if(isset($_SESSION['languague_'])){
    
    $lang = $_SESSION['languague_'];
}else{
    $_SESSION['languague_'] = "es";
    $lang = $_SESSION['languague_'];
}
//
$month = $_GET['month'];
$year = $_GET['year'];
$program = $_GET['program'];
$fechasalidaid = $_GET['fechasalidaid'];
$nombreinput = $_GET['nombre_input'];


require_once("departure-reserve-form_fun.php");

$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Problemas con la conexión");
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
                        <li><a href=""><?= $lang == 'es' ? NAV_SERVICE2_ES : NAV_SERVICE2_EN ?></a></li>
                        <li><a href=""><?= $lang == 'es' ? NAV_SERVICE3_ES : NAV_SERVICE3_EN ?></a></li>
                        <li><a href="contacto.php"><?= $lang == 'es' ? NAV_CONTACT_ES : NAV_CONTACT_EN ?></a></li>
                </ul>
            </div>
        </div>
    </header>
    
    <!-- ************************************************************** -->
    <!-- *************************  /cabecera  ************************* -->
    <!-- ************************************************************** -->

    
    <div class="espacio-25"></div>
<section class="bnSeleccione">
    <div class="capaSeleccione">
        <h1 class="bannerTitSeleccione">arapaima expeditions</h1>
    </div>
</section>

    <!-- ************************************************************** -->
    <!-- *************************  departure reserve form  ************************* -->
    <!-- ************************************************************** -->

    <div class="container-fluid barraSeleccione">
        <ul class="availability-breadcrumb">
            <li class="active">Encuentra tu crucero</li>
            <li class="line active"></li>
            <li class="active">Selecciona la fecha</li>
            <li class="line active"></li>
            <li class="active">Seleccione habitación</li>
            <li class="line"></li>
            <li>Confirmation</li>
            </ul>
    </div>

    <div class="espacio"></div>

<div class="container">
    <div class="row">
        <div class="col-md-3 dBck">
           <a href="">< Atras</a> 
        </div>
        <div class="col-md-9"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 dProg">Programa <?= $program ?></div>
                <div class="col-md-6 dProg"> Fecha de Salida:  <span><?= $nombreinput ?></span></div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<div class="espacio-25"></div>
<form action="" id="frmDepRes" name="frmDepRes" method="POST">

                    <input type="<?= WP_DEBUG == true ? "text" : "hidden" ?>" name="month" id="month" value="<?= $month ?>">
                    <input type="<?= WP_DEBUG == true ? "text" : "hidden" ?>" name="year" id="year" value="<?= $year ?>">
                    <input  type="<?= WP_DEBUG == true ? "text" : "hidden" ?>" name="program" id="program" value="<?= $program ?>">
                    <input  type="<?= WP_DEBUG == true ? "text" : "hidden" ?>" name="nombre_input" id="nombre_input" value="<?= $nombreinput ?>">
                    <input  type="<?= WP_DEBUG == true ? "text" : "hidden" ?>" name="fec" id="fec" value="<?= $fechasalidaid ?>">
                   <!-- <label for="cantidad">cantidad -->
                   <input  type="<?= WP_DEBUG == true ? "text" : "hidden" ?>" name="cantidad" id="cantidad_input" value="0">
                   <!-- </label> -->

                <div class="container">
                    <div class="row">
                <?php
                    $registros = mysqli_query($conexion, "SELECT * FROM tipo_habitacion") or
                die("Problemas en el select:" . mysqli_error($conexion));

                while ($reg = mysqli_fetch_array($registros)) {

                    $habitacionid = $reg['id'];
                    $nombre = $reg['nombre'];
                    $nombre_en = $reg['en'];
                    $imagen = $reg['imagen'];
                    $precio = $reg['precio'];
                    $cabana_disp = $reg['cabana_disp'];
                    $personasporhabitacion = $reg['personasporhabitacion'];

                ?>
                    <!-- ************************************************************************-->
                <!-- *************************    Habitación    ***************************-->
                <!-- ************************************************************************-->
                        
                <div class="col-md-6 ">
                    <div class="habCont">
                        <div class="row responProg">
                            <div class="col-md-4 habContL">
                                <img src="img/<?= $imagen ?>" alt="">
                            </div>
                            <div class="col-md-8 habContR">
                                <div class="tit">
                                    <h2><?= $lang == 'es' ? $nombre : $nombre_en ?></h2>
                                </div>
                                <div class="bod">
                                    <!-- <label for="">Id habitacion <?= $habitacionid ?></label> -->
                                    <input  type="<?= WP_DEBUG == true ? "text" : "hidden" ?>" name="precio<?= $habitacionid ?>" id="precio<?= $habitacionid ?>" value="<?= $precio ?>">
                                    <input  type="<?= WP_DEBUG == true ? "text" : "hidden" ?>" name="numerodepersonas_input_<?= $habitacionid ?>" id="numerodepersonas_input_<?= $habitacionid ?>" value="<?= $personasporhabitacion ?>">
                                    <input  type="<?= WP_DEBUG == true ? "text" : "hidden" ?>"  id="resCantPorPre<?= $habitacionid ?>" value="<?= $personasporhabitacion*$precio ?>">
                                    <input  type="<?= WP_DEBUG == true ? "text" : "hidden" ?>"  class='precioOcultoCalcularJs' id="montoTotalCadaHabtacion<?= $habitacionid ?>" value="0">

                                      <!--  captura el value1
                                    captura el value2
                                    hacer multiplicacion
                                    luego eso lo pones en value del total 

                                    if presiona el otro
                                    obtengo el ultimo valor del total y lo guardo
                                    capturo el value1
                                    capturo el value2
                                    hacer multiplicacion
                                    el resultado lo sumo
                                    
                                    y lo muestro

                                    if presiona el otro
                                    obtengo el ultimo valor del total y lo guardo. 
                                    capturo el value 1
                                    capturo el value 2 
                                    hacer multiplicacion
                                    y el resultado lo sumo con value 1 y value 2
                                    y lo muestro

                                    
                                    var valortotal == 0 -->

                                    <div class="row">
                                        <div class="col-md-6 bodL">
                                            <div class="bodLPrice"><span id="divPrice"><?= $precio ?></span><?= $lang == 'es' ? D_1_ES : D_1_EN ?></div>
                                            <div class="bodLCab"><?= $lang == 'es' ? D_2_ES : D_2_EN ?> <span id="divCabanas"><?= $cabana_disp ?></span> </div>
                                            <span class="habDis">Max <span id="numerodepersonas"><?= $personasporhabitacion ?></span> <?= $lang == 'es' ? D_3_ES : D_3_EN ?></span>
                                        </div>
                                        <div class="col-md-6 bodR">
                                                <div class="bodRUp"><?= $lang == 'es' ? D_4_ES : D_4_EN ?></div>
                                                <div class="bodRDown">
                                                    <button type="button" class="btnCalc decrementar<?= $habitacionid ?>" onclick="decrementar('<?= $habitacionid ?>','<?= $cabana_disp ?>')" >-</button>
                                                        <input type="text" class="inpCal"  id="input<?= $habitacionid ?>" value="0" readonly>
                                                    <button type="button" class="btnCalc incrementar<?= $habitacionid ?>" onclick="incrementar('<?= $habitacionid ?>','<?= $cabana_disp ?>')">+</button>
                                                </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ************************************************************************-->
                <!-- *************************    /Habitación    ***************************-->
                <!-- ************************************************************************-->
                <?php
                }

                //mysqli_close($conexion);
                ?>


                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="prTot">
                                Total precio de reservación <span class="priceReservation">$ 0</span>
                                <input  type="<?= WP_DEBUG == true ? "text" : "hidden" ?>" id="total_input" name="total_input" >
                            </div>
                            </div>
                            
                        <div class="col-md-6"></div>
                    </div>
                    <div class="rwo">
                        <div class="col-md-12 btn1Center">
                            <input class="btn btn-success" id="btnDepResFrm" type="button" value="CONTINUAR">
                        </div>
                    </div>
                </div>



</form>


    <!-- ************************************************************** -->
    <!-- *************************  informacion statica  ************************* -->
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
    <script src="js/departure-reserve-form.js"></script>
   <script src="js/bootstrap.min.js"></script>
<!--    <script src="js/bootstrap.min.js.map"></script> -->
</body>
</html>