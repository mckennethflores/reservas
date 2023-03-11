<?php
/* ob_start(); */
require_once("Config/Config.php");
require_once("Config/Global.php");


if(isset($_SESSION['languague_'])){
    
    $lang = $_SESSION['languague_'];
}else{
    $_SESSION['languague_'] = "es";
    $lang = $_SESSION['languague_'];
}


$IDUSUARIO = $_GET['idusuario'];
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
    <div class="espacio-25"></div>

    <!-- ************************************************************** -->
    <!-- *************************  /portada  ************************* -->
    <!-- ************************************************************** -->

    <!-- ************************************************************** -->
    <!-- *************************  informacion statica  ************************* -->
    <!-- ************************************************************** -->    


<div class="espacio-25"></div>
<form action="index.php" method="post">
    <div class="container">
        <div class="row">
            <div class="congratu">
            <p class="text-center tit"><?= $lang == 'es' ? REGISTERED_ORDER_ES : REGISTERED_ORDER_EN ?></p>
            </div>
<?php

    $fecsal = mysqli_query($conexion, "SELECT
    pedidos.idpedido,
    sb_usuarios.nomusuario,
    pedidos.fechapedido,
    DATE_FORMAT(pedidos.fechapedido, '%d-%m-%Y %H:%i') AS fecha_,
    pedidos.recojoen,
    pedidos.tipodepago,
    pedidos.total,
    pedidos.delivery,
    pedidos.pagacon,
    pedidos.subtotal,
    pedidos.idstore,
    pedidos.idusuario
    FROM pedidos 
           INNER JOIN sb_usuarios ON sb_usuarios.idusuario = pedidos.idusuario
    
    WHERE pedidos.idusuario='$IDUSUARIO' ORDER BY  pedidos.idpedido DESC LIMIT 1") or
    die("Problemas en el select:" . mysqli_error($conexion));

    while ($reg2 = mysqli_fetch_array($fecsal)) {

?>


        <p class="order text-center"><b>Pedido: N°: <span><?= $reg2["idpedido"] ?></span></b> </p>


        <p class="congr"><?= $lang == 'es' ? REGISTERED_ORDER_ES : REGISTERED_ORDER_EN ?>:</p>

    <!-- ************************************************************************-->
    <!-- *************************    Confirmacion    ***************************-->
    <!-- ************************************************************************-->
                <div class="col-md-6">
                    <h5>BBVA Dolares</h5>
                    <div class="titCong">
                        0011 0011-0301-0100142577-94
                    </div>
                    <div class="desCong">
                        CCI:  011-301-000100142577-94
                    </div>
                    

                </div>
                <div class="col-md-6">
                    <h5>BBVA Soles</h5>
                    <div class="titCong">
                    0011-0301-0100142569-91
                    </div>
                    <div class="desCong">
                        CCI:  011-301-000100142569-91
                    </div>
                    <div class="desCong">
                       <b>CODIGO SWIFT: BCONPEPL</b>
                    </div>
                     
                </div>
    <!-- ************************************************************************-->
    <!-- *************************    /Confirmacion    ***************************-->
    <!-- ************************************************************************-->                          
    

        </div>
    </div>
    <div class="espacio"></div>
<div class="container">
    <div class="row">
        <p><?= $lang == 'es' ? CUSTOMER_ES : CUSTOMER_EN ?>: <span><?= $reg2["nomusuario"]; ?></span></p>
        <p><?= $lang == 'es' ? ORDER_DATE_ES : ORDER_DATE_EN ?>: <span>  <?= $reg2["fecha_"]; ?></span></p>
        <div class="totalShop"> <?= $lang == 'es' ? PRICE_ES : PRICE_EN ?>: S/ <?= $reg2["total"]; ?>
        <br>
        </div>
    </div>
</div>
    <div class="container">

        <div class="row">
            <div class="col-md-12 btn1Center">
            <!--     <input class="btn btn-primary" id="" type="submit" value="SALIR"> -->

                <a class="btn btn-primary" href="index.php">Continuar Comprando</a>
            </div>
        </div>
    </div>
</form> 

<?php
        }
    ?>
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
    <script src="js/script.js"></script>
   <script src="js/bootstrap.min.js"></script>
<!--    <script src="js/bootstrap.min.js.map"></script> -->
</body>
</html>