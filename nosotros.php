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

                         <p>Arapaima Expeditions es una empresa líder en turismo para viajes en cruceros a Iquitos, Perú. Estamos comprometidos a ofrecer a nuestros viajeros una experiencia única y memorable. Ofrecemos una variedad de experiencias de viaje en cruceros únicas, desde el hospital de los delfines de Iquitos hasta la selva amazónica y el río Amazonas. Nuestros cruceros incluyen alojamiento de lujo, comidas gourmet, actividades emocionantes y un equipo de guías profesionales. Estamos comprometidos a ofrecer a nuestros viajeros la mejor experiencia de viaje. Estamos comprometidos a respetar el medio ambiente y a contribuir a la preservación de la selva amazónica y sus paisajes. Nuestras operaciones son sostenibles y respetamos las prácticas</p>

                        
                         <h2 class="elementor-heading-title elementor-size-default">Nuestra Misión</h2>

<p>
Arapaima Expeditions se dedica a brindar experiencias únicas de viaje en crucero a la selva amazónica de Iquitos, Perú. Nuestra meta es proporcionar a nuestros clientes una experiencia de viaje inolvidable, mientras se mantienen seguros y saludables. Trabajamos de cerca con la comunidad local para promover la educación, el cuidado medioambiental y la sostenibilidad, para mantener la belleza y la diversidad de la selva para las generaciones futuras.
</p>

    <h2 class="elementor-heading-title elementor-size-default">Nuestra Visión</h2>

    <p>
    Nuestra visión es ser la empresa de cruceros de primera clase en la selva amazónica de Iquitos, Perú, haciendo que los viajes sean seguros y divertidos, educativos y respetuosos con el medio ambiente. Queremos ser la primera elección para aquellos que desean explorar la selva de una manera única y memorable. Estamos comprometidos a la sostenibilidad ambiental, así como a la promoción de la educación y el cuidado de la vida silvestre.
</p>
                                 </div>
                             

                </div>

            </div>
</div>


</section>



<?php require_once(__DIR__.'./templates/first_footer.php'); ?>
