<?php

require_once("Config/Config.php");
$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Problemas con la conexión");

// Modelo



if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["programaid"])) {

    $programaid = $_GET["programaid"];



        switch ($_GET["op"]){


            case "listDateProgram":
            // $rspta = $calculatedelivery->listarDistritos($programaid);

            $fecsal = mysqli_query($conexion, "SELECT `id` AS fechasalidaid, `nombre`, `paqueteid` FROM `fechasalida` WHERE paqueteid = $programaid") or
            die("Problemas en el select:" . mysqli_error($conexion));

            $data= Array();
            while ($reg = mysqli_fetch_array($fecsal)) {

                $fechasalidaid = $reg['fechasalidaid'];
                $nombre = $reg['nombre'];
                $paqueteid = $reg['paqueteid'];
                    $data[]=array(
                        "fechasalidaid"=>$fechasalidaid,
                        "nombre"=>$nombre,
                        "paqueteid"=>$paqueteid
                    );
                }
                echo json_encode($data);
            break;
        }
}

?>