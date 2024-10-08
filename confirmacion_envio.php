<?php $pg = "confirmacion_envio"; ?>
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
    <meta name="description" content="Escribinos tu mensaje para un asesoramiento personalizado de la página web de tu hospedaje turístico">
    <title>Contacto | FlexyWeb</title>
</head>

<body id="contacto">

    <header>
        <?php include_once("menu.php"); ?>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 my-5 pb-2">
                <h1 style="color: #080357;">Gracias por contactarnos</h1>
                <h3 style="color: #FFC15E;">Nos comunicaremos en breve</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-sm-3 text-center">
                <img class="confirmacion-envio__button-container-img" src="imagenes/imgIntro-ce.webp" style="width:100%;" alt="">
                <a href="index.php"><button class="confirmacion-envio__button-container-a btn" style="position: relative; top: -2em;">Inicio</button></a>
            </div>
            <div class="col-6 col-sm-3 text-center">
                <img class="confirmacion-envio__button-container-img" src="imagenes/proyectoIntro-ce.webp" style="width:100%;" alt="">
                <a href="proyectos.php"><button class="confirmacion-envio__button-container-a btn" style="position: relative; top: -2em;">Proyectos</button></a>
            </div>
            <div class="col-6 col-sm-3 text-center">
                <img class="confirmacion-envio__button-container-img" src="imagenes/dwIntro-ce.webp" style="width:100%;" alt="">
                <a href="disenoweb.php"><button class="confirmacion-envio__button-container-a btn" style="position: relative; top: -2em;">Diseño web</button></a>
            </div>
            <div class="col-6 col-sm-3 text-center">
                <img class="confirmacion-envio__button-container-img" src="imagenes/quienessomos-ce.webp" style="width:100%;" alt="">
                <a href="quienesSomos.php"><button class="confirmacion-envio__button-container-a btn" style="position: relative; top: -2em;">Conocenos</button></a>
            </div>
        </div>
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

</body>

</html>