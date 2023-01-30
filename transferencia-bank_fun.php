<?php
/* ob_start(); */


echo $IDUSUARIO = $_SESSION['idusuario'];

function listarRecojoEnTienda($idusuario)
    {
       $sql="SELECT
       pedidos.idpedido,
       sb_usuarios.nomusuario,
       pedidos.fechapedido,
       DATE_FORMAT(pedidos.fechapedido, '%d-%m-%Y %H:%i') AS fecha_,
       pedidos.recojoen,
       pedidos.tipodepago,
       pedidos.total,
       pedidos.delivery,
       pedidos.pagacon,
       pedidos.subtotal,
       pedidos.idstore,
       pedidos.idusuario
       FROM pedidos 
              INNER JOIN sb_usuarios ON sb_usuarios.idusuario = pedidos.idusuario
       
       WHERE pedidos.idusuario='$idusuario' ORDER BY  pedidos.idpedido DESC LIMIT 1";
          

       return ejecutarConsulta($sql);		
    }
?>