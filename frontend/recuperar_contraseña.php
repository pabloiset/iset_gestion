<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesa el formulario de recuperación de contraseña
    $correo = $_POST['correo'];

    // Configuración de la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistema_escolar";

    // Conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Verifica si el correo electrónico existe en la base de datos
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Genera un código único para el restablecimiento
        $codigo_restablecimiento = uniqid();

        // Almacena el código en la base de datos junto con la fecha de expiración
        $stmt = $conn->prepare("UPDATE usuarios SET codigo_restablecimiento = ?, expiracion_codigo = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE correo = ?");
        $stmt->bind_param("ss", $codigo_restablecimiento, $correo);
        $stmt->execute();

        // Envia un correo electrónico con el enlace que contiene el código de restablecimiento
        $asunto = "Recuperación de Contraseña";
        $mensaje = "Hola, has solicitado restablecer tu contraseña. Haz clic en el siguiente enlace para continuar:\n\n";
        $mensaje .= "http://localhost/iset_gestion/recuperar_contraseña.php?codigo=$codigo_restablecimiento";

        // Envía el correo electrónico (puedes necesitar configurar la función mail() o utilizar un servicio externo)
        mail($correo, $asunto, $mensaje);

        // Muestra un mensaje al usuario indicando que se ha enviado un enlace de restablecimiento al correo electrónico proporcionado
        $mensaje_exito = "Se ha enviado un enlace de restablecimiento de contraseña a tu correo electrónico.";
        header('Location: recuperacion_exitosa.php');
        exit();
    } else {
        $mensaje_error = "La dirección de correo electrónico no está registrada en nuestro sistema.";
    }

    // Cierra la conexión a la base de datos
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Recuperar Contraseña - Iset_mdp</title>
    <link rel="stylesheet" type="text/css" href="./backend/css/login.css">
    <link rel="shortcut icon" href="./backend/img/favicon.png" />
</head>
<body>
    <div class="login-page">
        <div class="form">
            <img src="./backend/img/logo-dark.jpg" alt="iset logo" width="200" height="100" />
            <?php
            if (isset($mensaje_exito)) {
                echo '<div style="color:#008000;text-align:center;font-size:20px; font-weight:bold;">' . $mensaje_exito . '</div>';
            } elseif (isset($mensaje_error)) {
                echo '<div style="color:#FF0000;text-align:center;font-size:20px; font-weight:bold;">' . $mensaje_error . '</div>';
            }
            ?>
            <form class="login-form" autocomplete="off" method="post" role="form">
                <input required name="correo" type="email" placeholder="Ingrese su correo electrónico" />
                <button name='recuperar_contraseña' type="submit">Recuperar Contraseña</button>
                <p class="message"><a href="index.php">¿Has recordado tu contraseña? Inicia sesión</a></p>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script type="text/javascript" src="./backend/js/reenvio.js"></script>
</body>
</html>

