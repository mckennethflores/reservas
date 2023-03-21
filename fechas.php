<?php

require_once("Config/Config.php");

$_SESSION["idusuario"] = 542;
$_SESSION["nomusuario"] = "Wilson Gatica";
$_SESSION["imagenusuario"] = "perfil_default.jpg";
$_SESSION['dniusuario']= "8039852";
$_SESSION['pedidos']=1;

if (!isset($_SESSION["nomusuario"]))
{
  header("Location: login.php");
}
else
{
require 'header.php';


if ($_SESSION['pedidos']==1)
{
?>
      <div class="content-wrapper">
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Fechas en que se van a realizar los fechas
                           <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tblFechas" class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                                <th>Opciones</th>
                                <th>Fecha de inicio del programa</th>
                                <th>Programa elegido</th>
                                <th>Nombre del programa</th>
                                <!-- <th>Precio</th> -->
                            <!--  <th>Estado</th>
                                <th>Pedido</th> -->
                            </thead>
                            <tbody>                            
                            </tbody>
                            <tfoot>
                                <th>Opciones</th>
                                <th>Fecha de inicio del programa</th>
                                <th>Programa elegido</th>
                                <th>Nombre del programa</th>
                                <!-- <th>Precio</th> -->
                            <!--   <th>Estado</th>
                                <th>Pedido</th> -->
                            </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Programa:</label>
                            <input type="hidden" name="idprograma" id="idprograma">
                            <input type="text" class="form-control" name="programa" id="programa" maxlength="100" placeholder="Programa" >
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Programa Ingles:</label>
                            <input type="text" class="form-control" name="programa_en" id="programa_en" maxlength="100" placeholder="Programa Ingles" >
                          </div> 
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Nombres">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre Ingles:</label>
                            <input type="text" class="form-control" name="nombre_en" id="nombre_en" maxlength="100" placeholder="Nombre Ingles">
                          </div>                                              
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Precio:</label>
                            <input type="text" class="form-control" name="precio" id="precio"   placeholder="Precio" >
                          </div>                                              
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Imagen :</label>
                            <input type="text" class="form-control" name="imagen" id="imagen"   placeholder="imagen" >
                          </div>                                              
                          <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <!-- <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                              <thead style="background-color:#A9D0F5">
                                    <th>Opciones</th>
                                    <th>Artículo</th>
                                    <th>Cantidad</th>
                                    <th>Precio </th>

                                </thead>
                                <tfoot>
                                    <th>TOTAL</th>
                                    <th></th>
                                    <th></th>
                                    <th><h4 id="total">S/. 0.00</h4><input type="hidden" name="total_compra" id="total_compra"></th> 
                                </tfoot>
                                <tbody>
                                  
                                </tbody>
                            </table> -->
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>
                    </div>
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->
    </div>
<?php
}else
{
  require 'noacceso.php';
}
require 'footer.php';
?>

<script type="text/javascript" src="js/fechas.js"></script>

<?php 
}
ob_end_flush();
?>