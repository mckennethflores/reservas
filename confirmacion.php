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

 $menu_dos = true;
 require_once(__DIR__.'./templates/first_header.php'); 
?>


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
            <li class="active"><?= $lang == 'es' ? FIND_YOUR_CRUISE_ES : FIND_YOUR_CRUISE_EN ?></li>
            <li class="line active"></li>
            <li class="active"><?= $lang == 'es' ? SELECT_THE_DATE_ES : SELECT_THE_DATE_EN ?></li>
            <li class="line "></li>
            <li class="active"><?= $lang == 'es' ? SELECT_ROOM_ES : SELECT_ROOM_EN ?></li>
            <li class="line"></li>
            <li class="active"><?= $lang == 'es' ? CONFIRMATION_ES : CONFIRMATION_EN ?></li>
        </ul>
    </div>

    <div class="espacio"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-3 dBck">
               <a href="">< <?= $lang == 'es' ? 'Atras' : 'Back' ?></a>
            </div>
            <div class="col-md-9"></div>
        </div>
    </div>
   
<div class="espacio-25"></div>
<form action="" id="formulario" name="formulario" method="post">
    <div class="container">
        <div class="row" style="justify-content: center;">
            <input type="hidden" name="month" id="month" value="<?= $month ?>">
            <input type="hidden" name="year" id="year" value="<?= $year ?>">
            <input type="hidden" name="program" id="program" value="<?= $program ?>">
            <input type="hidden" name="fec" id="fec" value="<?= $fec ?>">
            <input type="hidden" name="total_input" id="total_input" value="<?= $total_input ?>">
            <input type="hidden" name="idusuario" id="idusuario" value="">
            <input type="hidden" name="tipodepago" id="tipodepago" value="">

            <!-- ************************************************************************-->
            <!-- *************************    Confirmacion    ***************************-->
            <!-- ************************************************************************-->

            <div class="col-md-6 ConfL" id="divContainerDatosDelUsuario">        
                <fieldset>
                    <legend>Enter your Email:</legend>
        
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control validEmail" id="email_input" name="email_input" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                </fieldset>        
            </div>
            <div class="col-md-6 ConfR hidden" id="divContainerMetodoDePago">
                <fieldset>
                    <legend><?= $lang == 'es' ? CHOOSE_PAYMENT_METHOD_ES : CHOOSE_PAYMENT_METHOD_EN ?></legend>        
                    <div>
                        <input type="radio" id="transfer" name="methodPay" value="Transferencia" checked>
                        <label for="transfer"><?= $lang == 'es' ? WIRE_TRANSFER_ES : WIRE_TRANSFER_EN ?></label>
                    </div>
                    <div>
                        <input type="radio" id="paypal" name="methodPay" value="Paypal">
                        <label for="paypal"><?= $lang == 'es' ? PAYMENT_WITH_PAYPAL_ES : PAYMENT_WITH_PAYPAL_EN ?></label>
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
    <div class="modal-content">
        <div class="modal-header"> <h6 id="titleModal"> </h6>
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
                        <label for="formGroupExampleInput">Name</label>
                        <input type="text" class="form-control" id="name_register" name="name_register" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Phone</label>
                        <input type="text" class="form-control" id="phone_register" name="phone_register" placeholder="">
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

<script> 
    const base_url = "<?= base_url(); ?>"; 
    const data_to_fill = <?php print(json_encode([
        'language_lc'=> ($lang == 'es') ? 'es_ES' : 'en_US',
        'email_business'=> 'sb-wxcaf25239092@business.example.com',
        'currency'=> 'USD',
        'amount'=> $_GET['total_input'],
        'item_name'=> ($lang == 'es') ? 'Plan elegido' : 'Chosen plan',
        'image_url'=> BASE_URL.'/img/logo-small.png',
        'success_return'=> BASE_URL.'/buy_now_button/receptor.php',
        'cancel_return' => BASE_URL.'/buy_now_button/pago_cancelado.php',
    ])); ?>; 

</script>

<script src="js/confirmacion.js"></script>

<?php require_once(__DIR__.'./templates/first_footer.php'); ?>

