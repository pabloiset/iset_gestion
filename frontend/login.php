<?php
session_start();
    if (isset($_SESSION['id'])){
        header('Location: frontend/administrador/escritorio.php');
    } 
include_once './backend/php/ctlogx.php'
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Colegio peruano - plataforma virtual</title>
    <link rel="stylesheet" type="text/css" href="./backend/css/login.css">
    <link rel="shortcut icon" href="./backend/img/favicon.png" />
  </head>
  <body>
    <div class="login-page">
      <div class="form">
        <img src="./backend/img/logo-dark.png" alt="Colegio peruano logo" />
        <?php 
                            if (isset($errMsg)) {
                                echo '
    <div style="color:#FF0000;text-align:center;font-size:20px; font-weight:bold;">'.$errMsg.'</div>
    ';  ;
                            }

                        ?>
        <form class="login-form" autocomplete="off" method="post"  role="form">
          <input required name="usuario" value="<?php if(isset($_POST['usuario'])) echo $_POST['usuario'] ?>"  autocomplete="off" type="text" placeholder="Ingrese nombre de usuario" />
          <input required  name="clave" value="<?php if(isset($_POST['clave'])) echo MD5($_POST['clave']) ?>" type="password" placeholder="Contraseña" />
          <button name='ctxlog' type="submit">Acceder</button>
          <p class="message"><a href="#">¿Has olvidado tu contraseña?</a></p>
        </form>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
         <script type="text/javascript" src="./backend/js/reenvio.js"></script>
  </body>
</html>
