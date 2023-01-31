<?php


require_once("Config/Config.php");
require_once("Config/Global.php");
$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Problemas con la conexión");



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["email_login"]) && isset($_POST["password_login"])) {


    switch ($_GET["op"]){

        case "verifyLoginAdminitrator":

            function verificarandroid($email_login,$password_login,$conexion)
                {
                    // $clavehash=hash("SHA256",$claveusuario);
                    $fecsal = mysqli_query($conexion, "SELECT * FROM sb_usuarios WHERE emailusuario = '$email_login' and claveusuario = '$password_login' AND condicionusuario='1' AND idperfil=6;") or
            
                    die("Problemas en el select:" . mysqli_error($conexion));

                    return $fecsal;
                }
            
                function listarmarcados($idusuario){
                    $sql="SELECT * FROM usuario_permiso WHERE idusuario='$idusuario'";
                    return ejecutarConsulta($sql);
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
                $_SESSION['nomusuario']=$fetch->nomusuario;
                $_SESSION['imagenusuario']=$fetch->imagenusuario;
                $_SESSION['dniusuario']=$fetch->dniusuario;
                $_SESSION['idtienda']=$fetch->idtienda;
                $marcados = $usuario->listarmarcados($fetch->idusuario);

                $valores=array();                
			    while ($per = $marcados->fetch_object())
				{
					array_push($valores, $per->idpermiso);
                }
                in_array(1,$valores)?$_SESSION['usuarios']=1:$_SESSION['usuarios']=0;
                in_array(2,$valores)?$_SESSION['productos']=1:$_SESSION['productos']=0;
                in_array(3,$valores)?$_SESSION['pedidos']=1:$_SESSION['pedidos']=0;
                in_array(4,$valores)?$_SESSION['pedidosgeneral']=1:$_SESSION['pedidosgeneral']=0;
                in_array(5,$valores)?$_SESSION['zonas']=1:$_SESSION['zonas']=0;                       

           // echo json_encode($fetch);

                array_push($resultado["login"],$fetch);
                
                $resultado["success"] = "1";
                $resultado["message"] = "success";
                echo json_encode($resultado);

            }else{
                $resultado["success"] = "0";
                $resultado["message"] = "error";
                echo json_encode($resultado);
            }
            
           
        

           /*  $rspta=$usuario->verificar($dniusuarioa, $clavehash,$idtienda);
            $fetch=$rspta->fetch_object();
            if (isset($fetch))
            {
                $_SESSION['idusuario']=$fetch->idusuario;
                $_SESSION['nomusuario']=$fetch->nomusuario;
                $_SESSION['imagenusuario']=$fetch->imagenusuario;
                $_SESSION['dniusuario']=$fetch->dniusuario;
                $_SESSION['idtienda']=$fetch->idtienda;
                $marcados = $usuario->listarmarcados($fetch->idusuario);
			$valores=array();                
			while ($per = $marcados->fetch_object())
				{
					array_push($valores, $per->idpermiso);
                }
                in_array(1,$valores)?$_SESSION['usuarios']=1:$_SESSION['usuarios']=0;
                in_array(2,$valores)?$_SESSION['productos']=1:$_SESSION['productos']=0;
                in_array(3,$valores)?$_SESSION['pedidos']=1:$_SESSION['pedidos']=0;
                in_array(4,$valores)?$_SESSION['pedidosgeneral']=1:$_SESSION['pedidosgeneral']=0;
                in_array(5,$valores)?$_SESSION['zonas']=1:$_SESSION['zonas']=0;                       
            }
            echo json_encode($fetch); */

            return;


          
        break;
    }
}