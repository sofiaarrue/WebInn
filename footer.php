<?php

if ($_POST) {
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];
    $check = $_POST["txtCheckbox"];


    if ($nombre != "" && $correo != "" && $telefono != "" && $mensaje !="" && $check != "") {

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



<div class="container-fluid footer mt-0">
    <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=91122627582" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 footer__form-container">
            <form action="<?php if ($pg == "inicio") {
                                echo "index.php";
                            } else {
                                echo $pg . ".php";
                            } ?>" method="post" class="footer__form mx-3 p-3">
                <h3 class="text-center">¿Hablamos?</h3>
                <div class="form__section my-2">
                    <input type="text" name="txtNombre" id="txtNombre" class="form__input" placeholder="Nombre" required>
                </div>
                <div class="form__section my-2">
                    <input type="email" name="txtCorreo" id="txtCorreo" class="form__input" placeholder="Email" required>
                </div>
                <div class="form__section my-2">
                    <input type="tel" name="txtTelefono" id="txtTelefono" class="form__input" placeholder="Teléfono" required>
                </div>
                <div class="form__section my-2">
                    <textarea class="form__input" name="txtMensaje" id="txtMensaje" placeholder="Escriba su mensaje quí"></textarea>
                </div>
                <div class="form__section my-2">
                    <input type="checkbox" id="txtCheckbox" name="txtCheckbox" required>
                    <label for="txtCheckbox" style="font-size: 15px; color: #877560; display:inline;"> He leído y acepto la <a href="privacidad.php">política de privacidad</a>.</label>
                </div>
                <div class="text-center">
                    <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">Enviar</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6 footer__box m-auto">
            <div class="row">
                <div class="col-12 col-md-4 footer__ul-box m-auto text-center mb-3">
                    <ul class="footer__ul">
                        <li class="footer__ul-li mb-3">
                            <a class="footer-link" href="index.php">Inicio</a>
                        </li>
                        <li class="footer__ul-li mb-3">
                            <a class="footer-link" href="disenoweb.php">Diseño Web</a>
                        </li>
                        <li class="footer__ul-li mb-3">
                            <a class="footer-link" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="footer__ul-li mb-3">
                            <a class="footer-link" href="quienesSomos.php">Quienes somos</a>
                        </li>
                        <li class="footer__ul-li mb-3">
                            <a class="footer-link" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-8 my-auto text-center">
                    <p><a href="https://api.whatsapp.com/send?phone=91122627582" target="_blank" style="text-decoration: none; color: #fff;"><i class="fa-solid fa-phone footer__i p-1"></i> <b>Tel:</b> +54 9 11 2262-7582</p></a>
                    <p><i class="fa-solid fa-envelope footer__i p-1"></i> <b>Email:</b> contacto@flexywebs.com</p>
                </div>
            </div>
        </div>
    </div>
</div>