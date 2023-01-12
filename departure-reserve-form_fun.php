<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $Month = $_POST['month'];
    $year = $_POST['year'];
    $program = $_POST['program'];
    $fec = $_POST['fec'];

    // echo $Month."-".$year."-".$program;

     $conexion = mysqli_connect("localhost", "root", "", "arapaima") or
     die("Problemas con la conexión");
  
   mysqli_query($conexion, "INSERT INTO `temporal` (`id`, `clienteid`, `paqueteid`, `tipo_habitacionid`, `diaid`, `fecha`, `date_created`, `date_updated`) VALUES 
   
   (NULL, '1', '$program', '$Month', '$year', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)")
     or die("Problemas en el select" . mysqli_error($conexion));
  
   mysqli_close($conexion);
  

 }






?>