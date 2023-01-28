<?php
require_once("Config/Config.php");

if(isset($_SESSION['languague_'])){
    
    $lang = $_SESSION['languague_'];
}else{
    $_SESSION['languague_'] = "es";
    $lang = $_SESSION['languague_'];
}
// Recojo los datos del inicio.php

$month = isset($_GET['month']);
$year = isset($_GET['year']);
$id = microtime(true);
//echo "$month $year $id";

$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Problemas con la conexión");
$conexion2 = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Problemas con la conexión");

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

    <!-- ************************************************************** -->
    <!-- *************************  portada  ************************* -->
    <!-- ************************************************************** -->
    <div class="espacio-25"></div>
<section class="bnSeleccione">
    <div class="capaSeleccione">
        <h1 class="bannerTitSeleccione">arapaima expeditions</h1>
    </div>
</section>
    <!-- ************************************************************** -->
    <!-- *************************  /portada  ************************* -->
    <!-- ************************************************************** -->

        <!-- ************************************************************** -->
    <!-- *************************  informacion statica  ************************* -->
    <!-- ************************************************************** -->    


    <div class="container-fluid barraSeleccione">
        <ul class="availability-breadcrumb">
            <li class="active">Encuentra tu crucero</li>
            <li class="line active"></li>
            <li class="active">Selecciona la fecha</li>
            <li class="line "></li>
            <li class="">Seleccione habitación</li>
            <li class="line"></li>
            <li>Confirmation</li>
            </ul>
    </div>

    <div class="espacio"></div>


    <div class="container">
        <div class="row">
<?php
$registros = mysqli_query($conexion, "SELECT * FROM paquete") or
die("Problemas en el select:" . mysqli_error($conexion));

while ($reg = mysqli_fetch_array($registros)) {

$programaid = $reg['id'];

$programa = $reg['programa'];
$programa_en = $reg['programa_en'];

$nombre = $reg['nombre'];
$nombre_en = $reg['nombre_en'];

$imagen = $reg['imagen'];


?>
<!-- ************************************************************************-->
<!-- *************************    Progrmaas    ***************************-->
<!-- ************************************************************************-->

<div class="col-md-6 col-xs-12 divProgL">
    <img src="img/<?= $imagen ?>" alt="">
</div>
<div class="col-md-6 col-xs-12 divProgR">
    <h3><?= $lang == 'es' ? $programa : $programa_en ?></h3>
    <h2><?= $lang == 'es' ? $nombre : $nombre_en ?></h2>
    
        <div class="row">
            <div class="col-md-4">
                <ul>
                    <li>Gym</li>
                    <li>boutique</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li>Dining room</li>
                    <li>Lounge</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li>Rainforest spa</li>
                    <li>Sun deck & pool</li>
                </ul>
            </div>
        </div>
 
    <span><?= $lang == 'es' ? F_S_ES : F_S_EN ?></span>
    <div class="espacio-25"></div>
    <div class="row ">
        
    <?php

    $fecsal = mysqli_query($conexion2, "SELECT `id` AS fechasalidaid, `nombre`, `paqueteid` FROM `fechasalida` WHERE paqueteid = $programaid") or
    die("Problemas en el select:" . mysqli_error($conexion));

    while ($reg2 = mysqli_fetch_array($fecsal)) {

        $fechasalidaid = $reg2['fechasalidaid'];
    ?>
        <div class="col-md-3 divBox">
            <label class="divRad" for="sds">
                 <input type="radio" name="fechadesalida_name" id="fecsal_<?= $reg2['fechasalidaid']; ?>" value="<?= $fechasalidaid; ?>"><?= $reg2['nombre']; ?>
            </label>
        </div>
    <?php
        }
    ?>
    </div>
    <div class="espacio-25"></div>
    <input type="text" name="fechadesalidaid" id="fechadesalidaid">
    <input class="btn btn-success" onclick="btnProgramas(<?= $programaid ?>)"  type="button" value="<?= $lang == 'es' ? BT_F_S_ES : BT_F_S_EN ?>">
</div>

<div class="espacio"></div>

<!-- ************************************************************************-->
<!-- *************************    /Progrmaas    ***************************-->
<!-- ************************************************************************-->
<?php
}

mysqli_close($conexion);
?>
        </div>
    </div>
    
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
				<li><a href="#"> +51 992 034 855</a></li>
             
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
    <script src="js/departure-list.js"></script>
   <script src="js/bootstrap.min.js"></script>
<!--    <script src="js/bootstrap.min.js.map"></script> -->
</body>
</html>