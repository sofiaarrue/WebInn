<?php

include("claves.php");

if ($_POST) {
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];
    $check = $_POST["txtCheckbox"];
    $token = $_POST["token"];

    $url = "https://www.google.com/recaptcha/api/siteverify";
    $peticion = "$url?secret=$claves[privada]&response=$token";

    $rta = file_get_contents($peticion);
    $json = json_decode($rta, true);
    $ok = $json["success"];

    if ($ok === false) {
        header("Location: $pg.php?error=Error en el captcha");
        die();
    }

    if ($json["score"] < 0.7) {
        header("Location: $pg.php?error=No, señor robot, usted no puede entrar");
        die();
    }

    if ($nombre != "" && $correo != "" && $telefono != "" && $mensaje != "" && $check != "" && $token != "") {
        // Varios destinatarios
        $para = "";
        $titulo = 'Recibiste un mensaje desde tu Web';

        // mensaje
        $cuerpo = "
        Nombre: $nombre <br>
        Correo: $correo <br>
        Telefono: $telefono <br>
        Mensaje: $mensaje
        ";

        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        // Cabeceras adicionales
        $cabeceras .= 'To: contacto@flexywebs.com' . "\r\n";
        $cabeceras .= 'From:' . $correo . "\r\n";

        // Enviarlo
        mail($para, $titulo, $cuerpo, $cabeceras);
        header("Location: confirmacion_envio.php");
    }
}
?>