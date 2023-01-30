<?php

require_once("Config/Config.php");
require_once("Config/Global.php");
$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Problemas con la conexión");

// Modelo



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET["email_input"])) {

    $email_input = $_GET["email_input"];



        switch ($_GET["op"]){


            case "validateEmail":
                // $rspta = $calculatedelivery->listarDistritos($programaid);

                $fecsal = mysqli_query($conexion, "SELECT * FROM sb_usuarios WHERE emailusuario = '$email_input';") or
                die("Problemas en el select:" . mysqli_error($conexion));

                //   $data= Array();
                while ($reg = mysqli_fetch_array($fecsal)) {

                
                    $idusuario = $reg['idusuario'];
                    $nomusuario = $reg['nomusuario'];
                    $emailusuario = $reg['emailusuario'];
                    
                        /* $data[]=array(
                            "idusuario" => $idusuario,
                            "nomusuario" => $nomusuario
                        ); */
                        $data= Array("idusuario" => $idusuario,
                        "nomusuario" => $nomusuario,
                        "emailusuario" => $emailusuario);
                    }
                    echo json_encode($data);
            break;

        }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["email_login"]) && isset($_POST["password_login"])) {





        switch ($_GET["op"]){


          

            case "loginUser":

                function verificarandroid($email_login,$password_login,$conexion)
                    {
                        // $clavehash=hash("SHA256",$claveusuario);
                        $fecsal = mysqli_query($conexion, "SELECT * FROM sb_usuarios WHERE emailusuario = '$email_login' and claveusuario = '$password_login' AND condicionusuario='1' AND idperfil=5;") or
                
                        die("Problemas en el select:" . mysqli_error($conexion));

                        return $fecsal;
                    }
                 
                $email_login = $_POST["email_login"];
                $password_login = $_POST["password_login"];

                $rspta=verificarandroid($email_login, $password_login,$conexion);

                $fetch=$rspta->fetch_object();
        
                if (isset($fetch))
                {
                    $resultado = array();
                    $resultado["login"] = array();

                     $_SESSION['idusuario']=$fetch->idusuario;
                   
                    array_push($resultado["login"],$fetch);
                    
                    $resultado["success"] = "1";
                    $resultado["message"] = "success";
                    echo json_encode($resultado);
    
                }else{
                    $resultado["success"] = "0";
                    $resultado["message"] = "error";
                    echo json_encode($resultado);
                }

                return;


               /*  $fecsal = mysqli_query($conexion, "SELECT * FROM sb_usuarios WHERE emailusuario = '$email_login' and claveusuario = '$password_login' AND condicionusuario='1' AND idperfil=5;") or
                
                die("Problemas en el select:" . mysqli_error($conexion)); */

                
                while ($reg = mysqli_fetch_array($fecsal)) {

                
                    $idusuario = $reg['idusuario'];
                    $nomusuario = $reg['nomusuario'];
                    $emailusuario = $reg['emailusuario'];
                    
                        /* $data[]=array(
                            "idusuario" => $idusuario,
                            "nomusuario" => $nomusuario
                        ); */
                        $data= Array("idusuario" => $idusuario,
                        "nomusuario" => $nomusuario,
                        "emailusuario" => $emailusuario);
                    }
                    echo json_encode($data);
            break;
        }
}



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["idusuario"])) {

    $month=isset($_POST["month"])? limpiarCadena($_POST["month"]):"";
    $year=isset($_POST["year"])? limpiarCadena($_POST["year"]):"";
    $program=isset($_POST["program"])? limpiarCadena($_POST["program"]):"";
    $fec=isset($_POST["fec"])? limpiarCadena($_POST["fec"]):"";
    $total=isset($_POST["total_input"])? limpiarCadena($_POST["total_input"]):"";
    $idusuario=isset($_POST["idusuario"])? limpiarCadena($_POST["idusuario"]):"";
    $tipodepago=isset($_POST["tipodepago"])? limpiarCadena($_POST["tipodepago"]):"";

    switch ($_GET["op"]){


        case 'listarproductostemporales':

             function listarproductostemporales($idusuario,$tipodepago,$recojoen,$total,$pagacon,$idstore,$subtotal,$delivery,$razonsocial,$ruc,$direccion,$vuelto)
            {
                 $sql7="SELECT idpedido, idestadopedido FROM pedidos WHERE idusuario = '$idusuario' ORDER BY  idpedido DESC LIMIT 1";
                 $verifyExistOrdersPending=ejecutarConsulta($sql7);
                 $idestadopedido = P_NOPEDIDO;
                 while ($reg=$verifyExistOrdersPending->fetch_object()){
                     $idestadopedido=$reg->idestadopedido;
                 }
               //  echo $info = "info: $idestadopedido";
             if($idestadopedido != P_PROCESO)
             {
         
                 $fecha = date('Y-m-d H:i:s');


                 $sql2="INSERT INTO `pedidos` (`idpedido`, `codigopedido`, `idusuario`, `fechapedido`, `idestadopedido`, `tipodepago`, `recojoen`, `total`, `pagacon`, `idstore`, `subtotal`, `delivery`, `razonsocial`, `ruc`, `direccion`, `vuelto`)
                      VALUES (NULL, 'ORD-$idusuario','$idusuario','$fecha','1','$tipodepago','$recojoen','$total','$pagacon','$idstore','$subtotal','$delivery','$razonsocial','$ruc','$direccion','$vuelto')";
                ejecutarConsulta($sql2);
                return;

                 $sql="SELECT * FROM paprotemp WHERE idusuario = $idusuario LIMIT 1";
                 $productoscliente=ejecutarConsulta($sql);
                 while ($reg=$productoscliente->fetch_object()){
                     $reg->idusuario;
         
                     $sql2="INSERT INTO `pedidos` (`idpedido`, `codigopedido`, `idusuario`, `fechapedido`, `idestadopedido`, `tipodepago`, `recojoen`, `total`, `pagacon`, `idstore`, `subtotal`, `delivery`, `razonsocial`, `ruc`, `direccion`, `vuelto`)
                      VALUES (NULL, 'PTV00-$reg->idusuario','$reg->idusuario','$fecha','1','$tipodepago','$recojoen','$total','$pagacon','$idstore','$subtotal','$delivery','$razonsocial','$ruc','$direccion','$vuelto')";
                    
                   return ejecutarConsulta($sql2);

                 }

             }
            }

                        //   if($pagacon==''){    $pagacon = '0.00';  }  if($vuelto==''){    $vuelto = '0.00';  }
                $rspta=listarproductostemporales($idusuario,$tipodepago, $recojoen ="PedidoOnline",$total,$pagacon = "0.00","321314",$subtotal = "0.00",$delivery= "0.00",$razonsoc = "-",$ruc = "-",$direccion = "-",$vuelto = "0.00");
                echo $rspta ? "Pedido registrado": "Pedido no se puedo registrar";

        break;

        case "loginUser":

            function verificarandroid($email_login,$password_login,$conexion)
                {
                    // $clavehash=hash("SHA256",$claveusuario);
                    $fecsal = mysqli_query($conexion, "SELECT * FROM sb_usuarios WHERE emailusuario = '$email_login' and claveusuario = '$password_login' AND condicionusuario='1' AND idperfil=5;") or
            
                    die("Problemas en el select:" . mysqli_error($conexion));

                    return $fecsal;
                }
             
            $email_login = $_POST["email_login"];
            $password_login = $_POST["password_login"];

            $rspta=verificarandroid($email_login, $password_login,$conexion);

            $fetch=$rspta->fetch_object();
    
            if (isset($fetch))
            {
                $resultado = array();
                $resultado["login"] = array();

                 $_SESSION['idusuario']=$fetch->idusuario;
               
                array_push($resultado["login"],$fetch);
                
                $resultado["success"] = "1";
                $resultado["message"] = "success";
                echo json_encode($resultado);

            }else{
                $resultado["success"] = "0";
                $resultado["message"] = "error";
                echo json_encode($resultado);
            }

            return;


           /*  $fecsal = mysqli_query($conexion, "SELECT * FROM sb_usuarios WHERE emailusuario = '$email_login' and claveusuario = '$password_login' AND condicionusuario='1' AND idperfil=5;") or
            
            die("Problemas en el select:" . mysqli_error($conexion)); */

            
            while ($reg = mysqli_fetch_array($fecsal)) {

            
                $idusuario = $reg['idusuario'];
                $nomusuario = $reg['nomusuario'];
                $emailusuario = $reg['emailusuario'];
                
                    /* $data[]=array(
                        "idusuario" => $idusuario,
                        "nomusuario" => $nomusuario
                    ); */
                    $data= Array("idusuario" => $idusuario,
                    "nomusuario" => $nomusuario,
                    "emailusuario" => $emailusuario);
                }
                echo json_encode($data);
        break;
    }
}


?>