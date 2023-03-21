<?php
require "../Config/Global.php";

class Fechas
{

    public function __construct(){

    }

    
    public function insertar($programa, $programa_en, $nombre, $nombre_en, $precio, $imagen){
        $sql="INSERT INTO paquete (programa, programa_en, nombre, nombre_en, precio, imagen) 
        VALUES('$programa','$programa_en','$nombre','$nombre_en','$precio','$imagen')";
        
        return  $idproductonew=ejecutarConsulta_retornarID($sql);

        //  $sql2="INSERT INTO `detalle_stock` (idproducto, idtienda, stock) VALUES ('$idproductonew','374537', '$stockproducto');";
        //  return ejecutarConsulta($sql2);
    }

    //public function editar($idproducto,$idproductosublinea,$idunidadmedida,$codproducto,$nomproducto,$nomproductocorto,$codigoBarra,$imagen,$imagengrande,$idproductoestado,$idanexo_proveedor,$valorventa,$observacion,$idmarca,$preciopromocion,$stockproducto){
    public function editar($idpaquete,$programa, $programa_en, $nombre, $nombre_en, $precio, $imagen){
        $sql="UPDATE paquete SET programa='$programa',programa_en='$programa_en',nombre='$nombre',nombre_en='$nombre_en',precio='$precio',imagen='$imagen' WHERE id='$idpaquete'";
        return ejecutarConsulta($sql);
      /*   $sql2="UPDATE detalle_stock SET stock='$stockproducto' WHERE idproducto='$idproducto'"; */
         /* ejecutarConsulta($sql2); */
    }
    public function desactivar($idpaquete){
        $sql="UPDATE paquete SET idproductoestado='0' WHERE idproducto='$idpaquete'";
        return ejecutarConsulta($sql);
    }
    public function activar($idpaquete){
        $sql="UPDATE producto SET idproductoestado='1' WHERE idproducto='$idpaquete'";
        return ejecutarConsulta($sql);
    }
    
    
    public function loadDataOnScroll($idtienda,$limit,$offset){

            $sql="SELECT
            producto.idproducto,
            producto.idproductosublinea,
            producto.idunidadmedida,
            producto.codproducto,
            producto.nomproducto,
            producto.nomproductocorto AS nombrecorto,
            producto.codigobarra,
            producto.imagen,
            producto.imagengrande,
            producto.idproductoestado,
            producto.idanexo_proveedor,
            producto.valorventa AS precioventa,
            producto.observacion,
            producto.idmarca,
            producto.preciopromocion,
            detalle_stock.stock,
            tiendas.idstore,
            tiendas.nomtienda,
            marca.descripcion AS marca
            FROM
            producto
            INNER JOIN detalle_stock ON detalle_stock.idproducto = producto.idproducto
            INNER JOIN tiendas ON tiendas.idstore = detalle_stock.idtienda
            INNER JOIN marca ON marca.id = producto.idmarca
            WHERE tiendas.idstore = '$idtienda' AND stock >= 5 LIMIT $limit OFFSET $offset";
            return ejecutarConsulta($sql);	
    }
    public function mostrar($idpaquete){
        $sql="SELECT
        producto.idproductosublinea,
        producto.idunidadmedida,
        producto.nomproductocorto,
        producto.codigobarra,
        producto.imagen,
        producto.idmarca,
        producto.idproducto,
        sublinea.idproductosublinea,
        linea.idproductolinea
        FROM
        producto
        INNER JOIN sublinea ON sublinea.idproductosublinea = producto.idproductosublinea
        INNER JOIN linea ON sublinea.idproductolinea = linea.idproductolinea
        WHERE producto.idproducto='$idpaquete'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listar(){       
      /* $sql="SELECT id, nombre, paqueteid FROM  `fechasalida` ORDER BY id ASC"; */
      $sql="SELECT fechasalida.id, fechasalida.nombre AS fechas_salida_nombre, paquete.id AS paqueteid, paquete.programa, paquete.programa_en, paquete.nombre AS nombre_paquete, paquete.nombre_en AS nombre_paquete_en, paquete.precio, paquete.imagen
      FROM fechasalida
      INNER JOIN paquete ON fechasalida.paqueteid = paquete.id";
      return ejecutarConsulta($sql);
    }

    public function listarProductoEstado(){
		$sql="SELECT * FROM productoestado";
		return ejecutarConsulta($sql);		
    }
    public function listarSubLinea($idlinea){
        $sql="SELECT
sublinea.idproductosublinea,
sublinea.idproductolinea,
sublinea.nroproductosublinea,
sublinea.nomproductosublinea,
sublinea.imagenproductosublinea,
sublinea.condicion FROM sublinea WHERE idproductolinea='$idlinea' GROUP BY nomproductosublinea asc;";
		return ejecutarConsulta($sql);		
    }
/* 	*********************************
		Funciones Android
    ********************************* */
    public function listarproductostienda($idtienda){
        
        $sql="SELECT
        producto.idproducto,
        producto.idproductosublinea,
        producto.idunidadmedida,
        producto.codproducto,
        producto.nomproducto,
        producto.nomproductocorto AS nombrecorto,
        producto.codigobarra,
        producto.imagen,
        producto.imagengrande,
        producto.idproductoestado,
        producto.idanexo_proveedor,
        producto.valorventa AS precioventa,
        producto.observacion,
        producto.idmarca,
        producto.preciopromocion,
        detalle_stock.stock,
        tiendas.idstore,
        tiendas.nomtienda,
        marca.descripcion AS marca
        FROM
        producto
        INNER JOIN detalle_stock ON detalle_stock.idproducto = producto.idproducto
        INNER JOIN tiendas ON tiendas.idstore = detalle_stock.idtienda
        INNER JOIN marca ON marca.id = producto.idmarca
        WHERE tiendas.idstore = '$idtienda' AND stock >= 5";
		return ejecutarConsulta($sql);	
    }

    public function listarProductosSublineaTitulo($idtienda,$idsublinea){
            
    $sql="SELECT
    producto.idproducto,
    producto.idunidadmedida,
    producto.codproducto,
    producto.nomproducto,
    producto.nomproductocorto AS nombrecorto,
    producto.codigobarra,
    producto.imagen,
    producto.imagengrande,
    producto.idproductoestado,
    producto.idanexo_proveedor,
    producto.valorventa AS precioventa,
    producto.observacion,
    producto.idmarca,
    producto.preciopromocion,
    detalle_stock.stock,
    tiendas.idstore,
    tiendas.nomtienda,
    marca.descripcion AS marca,
    sublinea.idproductosublinea,
    sublinea.nomproductosublinea
    FROM
    producto
    INNER JOIN detalle_stock ON detalle_stock.idproducto = producto.idproducto
    INNER JOIN tiendas ON tiendas.idstore = detalle_stock.idtienda
    INNER JOIN marca ON marca.id = producto.idmarca
    INNER JOIN sublinea ON producto.idproductosublinea = sublinea.idproductosublinea
    WHERE tiendas.idstore = '$idtienda' AND stock >= 1 AND sublinea.idproductosublinea = $idsublinea LIMIT 1";
    return ejecutarConsulta($sql);	
    }
    public function listarProductosSublinea($idtienda,$idsublinea){
            
        $sql="SELECT
        producto.idproducto,
        producto.idunidadmedida,
        producto.codproducto,
        producto.nomproducto,
        producto.nomproductocorto AS nombrecorto,
        producto.codigobarra,
        producto.imagen,
        producto.imagengrande,
        producto.idproductoestado,
        producto.idanexo_proveedor,
        producto.valorventa AS precioventa,
        producto.observacion,
        producto.idmarca,
        producto.preciopromocion,
        detalle_stock.stock,
        tiendas.idstore,
        tiendas.nomtienda,
        marca.descripcion AS marca,
        sublinea.idproductosublinea,
        sublinea.nomproductosublinea
        FROM
        producto
        INNER JOIN detalle_stock ON detalle_stock.idproducto = producto.idproducto
        INNER JOIN tiendas ON tiendas.idstore = detalle_stock.idtienda
        INNER JOIN marca ON marca.id = producto.idmarca
        INNER JOIN sublinea ON producto.idproductosublinea = sublinea.idproductosublinea
        WHERE tiendas.idstore = '$idtienda' AND sublinea.idproductosublinea = '$idsublinea' ";
        return ejecutarConsulta($sql);	
        }
}
