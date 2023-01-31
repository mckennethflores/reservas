<?php
require_once("Config/Config.php");

if(isset($_SESSION['languague_'])){
    
    $lang = $_SESSION['languague_'];
}else{
    $_SESSION['languague_'] = "es";
    $lang = $_SESSION['languague_'];
}

require_once("login_fun.php");

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= NOMBRE_EMPRESA ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/css/font-awesome.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="public/css/blue.css">

  <style>
    .login-page,
    .register-page {
      background: #8BC34A;
    }

    .form-group {
      margin-bottom: 0px;
    }

    label {
      font-size: 13px;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b><?= NOMBRE_EMPRESA ?></b></a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Ingrese sus datos de Acceso</p>
      <form method="post" id="frmAcceso">

        <div class="form-group has-feedback">
          <label for="">Usuario</label>
          <input type="text" id="email_login" name="email_login" value="" class="form-control"
            placeholder="Email">
          <span class="fa fa-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <label for="">Contraseña</label>
          <input type="password" id="password_login" name="password_login" value="" class="form-control"
            placeholder="Password">
          <span class="fa fa-key form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">

          </div><!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>


          </div><!-- /.col -->
        </div>
      </form>


    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->
  <script>
        const base_url = "<?= base_url(); ?>";
</script>
  <!-- jQuery -->
  <script src="public/js/jquery-3.1.1.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="public/js/bootstrap.min.js"></script>
  <!-- Bootbox -->
  <script src="public/js/bootbox.min.js"></script>

  <script type="text/javascript" src="js/login.js"></script>


</body>

</html>