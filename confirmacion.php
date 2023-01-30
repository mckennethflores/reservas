<?php
require_once("Config/Config.php");

if(isset($_SESSION['languague_'])){
    
    $lang = $_SESSION['languague_'];
}else{
    $_SESSION['languague_'] = "es";
    $lang = $_SESSION['languague_'];
}


$month = $_GET['month'];
$year = $_GET['year'];
$program = $_GET['program'];
$fec = $_GET['fec'];
$total_input = $_GET['total_input'];

/*  $array = [
    'month' => $month,
    'year' => $year,
    'program' => $program,
    'fec' => $fec,
    'total_input' => $total_input];

 var_dump($array); */

 require_once("confirmacion_fun.php");

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
            <li class="line active"></li>
            <li class="active">Seleccione habitación</li>
            <li class="line active"></li>
            <li class="active">Confirmation</li>
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
   
<div class="espacio-25"></div>
<form action="" id="formulario" name="formulario" method="post">
    <div class="container">
        <div class="row">
        
                    <input type="text" name="month" id="month" value="<?= $month ?>">
                    <input type="text" name="year" id="year" value="<?= $year ?>">
                    <input type="text" name="program" id="program" value="<?= $program ?>">
                    <input type="text" name="fec" id="fec" value="<?= $fec ?>">
                    <input name="total_input" id="total_input" type="text" value="<?= $total_input ?>">
                    <input  type="text" name="idusuario" id="idusuario" value="">
                    <input  type="text" name="tipodepago" id="tipodepago" value="">

    <!-- ************************************************************************-->
    <!-- *************************    Confirmacion    ***************************-->
    <!-- ************************************************************************-->

    <div class="col-md-6 ConfL" id="divContainerDatosDelUsuario">
        <fieldset>
            <legend>Enter your personal information:</legend>

        


           <!--  <div class="form-group">
                    <label for="formGroupExampleInput">Nombre</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Juan P.">
            </div> -->
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control validEmail" id="email_input" name="email_input" aria-describedby="emailHelp" placeholder="Enter email">
               <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
           <!--  <div class="form-group">
                <label for="formGroupExampleInput">Celular</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="987654321">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Ciudad</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Lima">
            </div> -->
        </fieldset>

    </div>
    <div class="col-md-6 ConfR hidden" id="divContainerMetodoDePago">

    <fieldset>
        <legend>Elegir metodo de pago</legend>

        <div>
        <input type="radio" id="transfer" name="methodPay" value="Transferencia"
                checked>
        <label for="transfer">Transferencia Bancaria</label>
        </div>

        <!-- <div>
        <input type="radio" id="dewey" name="methodPay" value="dewey">
        <label for="dewey">Pago con VISA</label>
        </div> -->

        <div>
        <input type="radio" id="paypal" name="methodPay" value="Paypal">
        <label for="paypal">Pago con Paypal</label>
        </div>
    </fieldset>
    </div>
                
    <!-- ************************************************************************-->
    <!-- *************************    /Confirmacion    ***************************-->
    <!-- ************************************************************************-->


    </div>
    </div>
    <div class="espacio"></div>

    <div class="container" id="botnConfirmarCompra">

        <div class="row">
            <div class="col-md-12 btn1Center">
                <input class="btn btn-primary" id="btnConfirmPurcharse" onclick="confirmOrder()" type="button" value="Continuar">
            </div>
        </div>
    </div>
    <div class="container hidden" id="botnConfirmarCompraDos">

        <div class="row">
            <div class="col-md-12 btn1Center">
                <input class="btn btn-primary" id="btnConfirmPurcharse2" onclick="confirmOrderDos()" type="button" value="Continuar Compra">
            </div>
        </div>
    </div>



</form>

    <!-- ************************************************************** -->
    <!-- *************************  /informacion statica  ************************* -->
    <!-- ************************************************************** -->    
   

<!-- Modal Login -->
<div id="modal-login" class="modal fade modal-default" tabindex="-1" role="dialog" data-backdrop="static">
				  <div class="modal-dialog modal-xl" role="document">
				    <div class="modal-content ">
				      <div class="modal-header">
				        <h5 class="modal-title">Inicia sesión</h5>
				        <button type="button" class="close" data-dismiss="modal" onclick="closeModal('login')" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	<div class="row mb-4">
                            <form action="" id="formLogin" name="formLogin">
				      		<div class="col-md-12">	
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Email</label>
                                            <input type="text" class="form-control" id="email_login" name="email_login" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Contraseña</label>
                                            <input type="password" class="form-control" id="password_login" name="password_login" placeholder="***">
                                        </div>
                                        <p></p> <br>
                                        <div class="form-group">
                                            
                                            <input type="button" class="form-control btn btn-info" id="btnLoginUser" name="btnLoginUser" value="Iniciar Sesión">
                                        </div>
							</div>
                            </form>
				      	</div>

				      	<div class="row lista-imagenes">
				      		
				      	</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" onclick="closeModal('login')" data-dismiss="modal">Cerrar</button>
				      </div>
				    </div>
				  </div>
				</div>
<!-- /Modal Login -->


<!-- Modal Register -->
    <div id="modal-register"  class="modal fade modal-default" >
				  <div class="modal-dialog modal-xl" role="document">
				    <div class="modal-content ">
				      <div class="modal-header">
				        <h5 class="modal-title">Registrate</h5>
				        <button type="button" class="close" data-dismiss="modal" onclick="closeModal('register')" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
                        
				      </div>
				      <div class="modal-body">
				      	<div class="row mb-4">
                            <form action="" id="formRegister" name="formRegister">
				      		<div class="col-md-12">	
                                        <div class="form-group hidden">
                                            <label for="formGroupExampleInput">Email</label>
                                            <input type="text" class="form-control" id="email_register" name="email_register" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Password</label>
                                            <input type="password" class="form-control" id="password_register" name="password_register" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Re-Password</label>
                                            <input type="password" class="form-control" id="rpassword_register" name="rpassword_register" placeholder="">
                                        </div>
                                        <p></p> <br>
                                        <div class="form-group">
                                            
                                            <input type="button" class="form-control btn btn-info" id="btnRegister" name="btnRegister" value="Registrarse">
                                        </div>
							</div>
                            </form>
				      	</div>

				      	<div class="row lista-imagenes">
				      		
				      	</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" onclick="closeModal('register')" data-dismiss="modal">Cerrar</button>
				      </div>
				    </div>
				  </div>
				</div>
<!-- /Modal Register -->



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
<script>
        const base_url = "<?= base_url(); ?>";
      
    </script>
    <script src="js/general.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/confirmacion.js"></script>
<!--    <script src="js/bootstrap.min.js.map"></script> -->

</body>
</html>