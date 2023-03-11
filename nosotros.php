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

                         <p><?= $lang == 'es' ? US_ES : US_EN ?></p>

                        
                         <h2 class="elementor-heading-title elementor-size-default"><?= $lang == 'es' ? MISSION_TITLE_ES : MISSION_TITLE_EN ?></h2>

<p><?= $lang == 'es' ? MISSION_ES : MISSION_EN ?></p>

    <h2 class="elementor-heading-title elementor-size-default"><?= $lang == 'es' ? VISION_TITLE_ES : VISION_TITLE_EN ?></h2>

    <p><?= $lang == 'es' ? VISION_ES : VISION_EN ?></p>
                                 </div>
                             

                </div>

            </div>
</div>


</section>



<?php require_once(__DIR__.'./templates/first_footer.php'); ?>
