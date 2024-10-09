<?php $pg = "contacto";
include("captcha.php");
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
    <link rel="shortcut icon" href="imagenes/logo_miniatura.webp">
    <link rel="icon" href="imagenes/logo_miniatura.webp">
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $claves["publica"]; ?>"></script>
    <meta name="description" content="Escribinos tu mensaje para un asesoramiento personalizado de la página web de tu hospedaje turístico">
    <title>Contacto | FlexyWeb </title>
</head>

<body id="contacto">
    <header>
        <?php include_once("menu.php"); ?>
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
                        <img src="imagenes/Logo1.webp" alt="">
                    </div>
                </div>
                <form action="contacto.php" class="form" method="POST">
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
                    <div class="form__section my-2">
                        <input type="checkbox" id="txtCheckbox" name="txtCheckbox" required>
                        <label for="txtCheckbox" style="font-size: 15px; color: #877560;display:inline;"> He leído y acepto la <a href="privacidad.php">política de privacidad</a>.</label>
                    </div>
                    <input type="hidden" name="token" id="token">
                    <div>
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn" disabled>Enviar</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="container-fluid contacto-footer">
            <div class="btn-whatsapp">
                <a href="https://api.whatsapp.com/send?phone=91122627582" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <div class="row footer__box py-4">
                <div class="col-12 col-md-5 footer__ul-box-contacto m-auto text-center mb-3">
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
                <div class="col-12 col-md-7 my-auto text-center">
                    <p><a href="https://api.whatsapp.com/send?phone=91122627582" target="_blank" style="text-decoration: none; color: #fff;"><i class="fa-solid fa-phone footer__i p-1"></i> <b>Tel:</b> +54 9 11 2262-7582</p></a>
                    <p><a href="mailto:contacto@flexyweb.com.ar" target="_blank" style="text-decoration: none; color: #fff;"><i class="fa-solid fa-envelope footer__i p-1"></i> <b>Email: </b>contacto@flexyweb.com.ar</p></a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute(
                "<?php echo $claves["publica"]; ?>", {
                    action: "formulario"
                }
            ).then(function(rta_token) {
                const itoken = document.getElementById("token");
                const btn = document.getElementById("btnEnviar");
                itoken.value = rta_token;
                btn.disabled = false;
            })
        });
    </script>
</body>

</html>
