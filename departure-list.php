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


require_once("departure-list_fun.php");

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
    <div class="row " id="container-fechas<?= $programaid ?>">
        
    <?php

    $fecsal = mysqli_query($conexion2, "SELECT `id` AS fechasalidaid, `nombre`, `paqueteid` FROM `fechasalida` WHERE paqueteid = $programaid") or
    die("Problemas en el select:" . mysqli_error($conexion));

    while ($reg2 = mysqli_fetch_array($fecsal)) {

        $fechasalidaid = $reg2['fechasalidaid'];
        $nombre = $reg2['nombre'];
    ?> 
    
        <div class="col-md-3 divBox">
            <span>
                <label for="fecha_salida_<?= $fechasalidaid; ?>" class="">
                    <input  type="radio" name="fecha_salida" id="fecha_salida_<?= $fechasalidaid; ?>" value="value_<?= $fechasalidaid; ?>" onchange="focusBtn(<?= $fechasalidaid?>,<?= $programaid ?>, '<?= $nombre ?>')" class="radio validCheckbox" required ><?= $reg2['nombre']; ?>
                </label>
            </span>
        </div>
    <?php
        }
    ?>
    </div>   
   <!--  style="display: none;" -->
    <div class="espacio-25"></div>
    <input type="hidden" name="input_program_fec_<?= $programaid ?>" id="input_program_fec_<?= $programaid ?>">
    <input type="hidden" name="nombre_input<?= $programaid ?>" id="nombre_input<?= $programaid ?>" value="">
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


<?php

const base_url = "<?= base_url(); ?>";
require_once(__DIR__.'./templates/first_footer.php'); 
