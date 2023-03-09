<?php
require_once("Config/Config.php");


if(isset($_SESSION['languague_'])){
    
    $lang = $_SESSION['languague_'];
}else{
    $_SESSION['languague_'] = "es";
    $lang = $_SESSION['languague_'];
}

?>
<?php require_once(__DIR__.'./templates/first_header.php'); ?>

    <!-- ************************************************************** -->
    <!-- *************************  portada  ************************* -->
    <!-- ************************************************************** -->
<section class="banner">
    <div class="capa">
        <h1 class="bannerTit"><?= $lang == 'es' ? C_ES : C_EN ?></h1>
    </div>
    
</section>

    <!-- ************************************************************** -->
    <!-- *************************  /portada  ************************* -->
    <!-- ************************************************************** -->
    <div class="container-fluid detalle">
        <ul class="breadcrumb">
            <li><a href="#"><?= $lang == 'es' ? NAV_HOME_ES : NAV_HOME_EN ?></a></li> / 
            <li class="active"><strong> <?= $lang == 'es' ? C_ES : C_EN ?> </strong></li>
        </ul>
    </div>
    <!-- ************************************************************** -->
    <!-- *************************  informacion statica  ************************* -->
    <!-- ************************************************************** -->    
<section class="staticData">
    <!-- titulo -->
    <h2 class="text-success"><?= $lang == 'es' ? C_ES : C_EN ?></h2>
    <!-- /titulo -->
    <div class="clearfix"></div>
    <div class="espacio"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="conProd">
                  <form action="" method="post">
                    
                        <div class="nombre">
                            <label class="frmInputCont" for="Nombre"><?= $lang == 'es' ? FRM_N_ES : FRM_N_EN ?> <span class="required">*</span></label>
                             <input  required for="Nombre" type="text" placeholder="<?= $lang == 'es' ? FRM_N_ES : FRM_N_EN ?>">
                        </div>
                        <div class="nombre">
                            <label class="frmInputCont" for="Nombre"><?= $lang == 'es' ? FRM_E_ES : FRM_E_EN ?> <span class="required">*</span></label>
                             <input  required for="Nombre" type="email" placeholder="<?= $lang == 'es' ? FRM_E_ES : FRM_E_EN ?>">
                        </div>
                        <div class="nombre">
                            <label class="frmInputCont"  for="Nombre"><?= $lang == 'es' ? FRM_C_ES : FRM_C_EN ?> <span class="required">*</span></label> 
                            <input required  for="Nombre" type="text" placeholder="<?= $lang == 'es' ? FRM_C_ES : FRM_C_EN ?>">
                        </div>
                        <div class="nombre">
                            <label class="frmInputCont"  for=""><?= $lang == 'es' ? FRM_M_ES : FRM_M_EN ?> <span class="required">*</span></label>
                            <textarea required name="" id="" cols="10" rows="5" placeholder="<?= $lang == 'es' ? FRM_M_ES : FRM_M_EN ?>"></textarea>
                        </div>
                        
                        <div><input class="btn btn-success" type="submit" value="<?= $lang == 'es' ? FRM_BT_ES : FRM_BT_EN ?>"></div>
                     
                  </form>
                </div>
            </div>
            <div class="col-md-6">
                
                <div class="descripciond">
                    <h3><?= $lang == 'es' ? F_T_ES : F_T_EN ?></h3>
                    <ul class="linksocialc">
                        <li><a target="_blank" href="https://facebook.com"><i class="fa fa-facebook " aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://instagram.com"><i class="fa fa-instagram " aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://linkedin.com"><i class="fa fa-linkedin " aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://tiktok.com"><img src="img/logos_tiktok-icon.png" alt=""></a></li>
                        <li><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter " aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://youtube.com"><i class="fa fa-youtube " aria-hidden="true"></i></a></li>
                        
                    </ul>
                   
                </div>
            </div>

        </div>
    </div>
</section>


    <!-- ************************************************************** -->
    <!-- *************************  /informacion statica  ************************* -->
    <!-- ************************************************************** -->    

  

<?php require_once(__DIR__.'./templates/first_footer.php'); ?>
