<?php $pg = "contacto";

if ($_POST) {
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];


    if ($nombre != "" && $correo != "" && $telefono != "" && $mensaje != "") {

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
        $cabeceras .= 'To: contacto@webinn.host' . "\r\n";
        $cabeceras .= 'From:' . $correo . "\r\n";

        // Enviarlo
        //mail($para, $titulo, $cuerpo, $cabeceras);
        header("Location: confirmacion_envio.php");
    }
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="description" content="Escribinos tu mensaje para un asesoramiento personalizado de la página web de tu hospedaje turístico">
    <title>Contacto | WebInn</title>
</head>

<body id="contacto">
    <header>
        <nav class="navbar" id="navbar">
            <div class="mx-3 nav-logo">
                <img src="imagenes/logo1.png" alt="logo">
            </div>
            <ul class="navbar-ul mb-md-0" id="navbar-ul">
                <li class="nav-item">
                    <i class="fa-solid fa-house"></i>
                    <a class="nav-link" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                    <i class="fa-solid fa-code"></i>
                    <a class="nav-link" href="disenoweb.html">Diseño Web</a>
                </li>
                <li class="nav-item">
                    <i class="fa-solid fa-pencil"></i>
                    <a class="nav-link" href="proyectos.html">Proyectos</a>
                </li>
                <li class="nav-item">
                    <i class="fa-solid fa-user"></i>
                    <a class="nav-link" href="quienessomos.html">Quienes somos</a>
                </li>
                <li class="nav-item me-4">
                    <i class="fa-solid fa-envelope"></i>
                    <a class="nav-link" id="active" href="contacto.html">Contacto</a>
                </li>
            </ul>
            <div class="toggle-menu align-items-center" id="toggle-menu">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="toggle-menu2 align-items-center" id="toggle-menu2">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </nav>
        <script src="js/menu.js"></script>
    </header>

    <main>
        <section class="contacto__intro">
            <h2>Quiero una propuesta para mi alojamiento</h1>
        </section>
        <section class="contact-form">
            <div class="flex-container">
                <div class="form__img">
                    <h3 class="my-3">Dejanos tu mensaje para un asesoramiento personalizado</h3>
                    <div class="img-container">
                        <img src="imagenes/logo1.png" alt="">
                    </div>
                </div>
                <form action="contacto.html" class="form" method="$_POST">
                    <div class="form__section">
                        <input type="text" name="txtNombre" id="txtNombre" class="form__input" placeholder="Nombre" required>
                    </div>
                    <div class="form__section">
                        <input type="email" name="txtCorreo" id="txtCorreo" class="form__input" placeholder="Email" required>
                    </div>
                    <div class="form__section">
                        <input type="tel" name="txtTelefono" id="txtTelefono" class="form__input" placeholder="Teléfono" required>
                    </div>
                    <div class="form__section">
                        <textarea class="form__input" name="txtMensaje" id="txtMensaje" placeholder="Escriba su mensaje aquí"></textarea>
                    </div>
                    <div>
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">Enviar</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="container-fluid contacto-footer">
            <div class="btn-whatsapp">
                <a href="https://api.whatsapp.com/send?phone=1122627582" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <div class="row footer__box py-4">
                <div class="col-12 col-md-5 footer__ul-box-contacto m-auto text-center mb-3">
                    <ul class="footer__ul">
                        <li class="footer__ul-li mb-3">
                            <a class="footer-link" href="index.html">Inicio</a>
                        </li>
                        <li class="footer__ul-li mb-3">
                            <a class="footer-link" href="servicio.html">Diseño Web</a>
                        </li>
                        <li class="footer__ul-li mb-3">
                            <a class="footer-link" href="proyectos.html">Proyectos</a>
                        </li>
                        <li class="footer__ul-li mb-3">
                            <a class="footer-link" href="quienessomos.html">Quienes somos</a>
                        </li>
                        <li class="footer__ul-li mb-3">
                            <a class="footer-link" href="contacto.html">Contacto</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-7 my-auto text-center">
                    <p><i class="fa-solid fa-phone footer__i p-1"></i> <b>Tel:</b> +54 11 2262-7582</p>
                    <p><i class="fa-solid fa-envelope footer__i p-1"></i> <b>Email:</b> info@mansoweb.com </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>