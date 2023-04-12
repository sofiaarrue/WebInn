<?php $pg = "proyectos"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/brands.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="description" content="Recorrido por los últimos proyectos completamente adaptables a todos los dispositivos realizados por WebInn.">
    <title>Nuestros últimos proyectos | WebInn</title>
</head>

<body id="proyectos">
    <header>
        <?php include_once("menu.php"); ?>
    </header>
    <main>
        <section class="proyectos__intro" style="color: #080357;">
            <h1>Conocé algunos de nuestros proyectos</h1>
        </section>
        <section class="proyectos__main my-5">
            <div class="container">
                <div class="row proyecto__container">
                    <div class="col-12 col-md-8 proyecto__img-container text-center">
                        <img src="imagenes/img_proyecto1.png" alt="">
                    </div>
                    <div class="col-12 col-md-4 proyecto__text-container">
                        <div>
                            <h3>Web moderna</h3>
                            <p>Los distintos colores, las tipografías grandes y los componentes interactivos le darán a tu web un estilo altamente atractivo.</p>
                            <a href="template1/index.html" target="_blank"><button class="btn"><b>Ver proyecto</b></button></a>
                        </div>
                    </div>
                </div>
                <div class="row proyecto__container">
                    <div class="col-12 col-md-8 proyecto__img-container img2 text-center">
                        <img src="imagenes/img_proyecto2.png" alt="" style="width: 90%;">
                    </div>
                    <div class="col-12 col-md-4 proyecto__text-container text2">
                        <div>
                            <h3>Web clásica</h3>
                            <p>Centrado en la información a comunicar, este diseño tiene como objetivo principal la facilidad de uso, distinguiéndose por su elegancia.</p>
                            <a href="" target="_blank"><button class="btn"><b>Ver proyecto</b></button></a>
                        </div>
                    </div>
                </div>
                <div class="row proyecto__container">
                    <div class="col-12 col-md-8 proyecto__img-container text-center">
                        <img src="imagenes/img_proyecto3.png" alt="" style="width: 90%;">
                    </div>
                    <div class="col-12 col-md-4 proyecto__text-container">
                        <div>
                            <h3>Web minimalista</h3>
                            <p>Este estilo se reduce a lo esencial para combinar diseño y funcionalidad de una forma sencilla e inteligente, utilizando sólo los elementos mínimos y básicos.</p>
                            <a href="" target="_blank"><button class="btn"><b>Ver proyecto</b></button></a>
                        </div>
                    </div>
                </div>
                <div class="row proyecto__container">
                    <div class="col-12">
                        <h2>Y vos, ¿ya sabés cuál es el mejor diseño para tu alojamiento?</h2>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container-fluid footer">
            <div class="btn-whatsapp">
                <a href="https://api.whatsapp.com/send?phone=1122627582" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 footer__form-container">
                    <form action="index.html" class="footer__form mx-3 p-3">
                        <h3 class="text-center">¿Hablamos?</h3>
                        <div class="form__section my-2">
                            <input type="text" name="txtNombre" class="form__input" placeholder="Nombre" required>
                        </div>
                        <div class="form__section my-2">
                            <input type="email" class="form__input" placeholder="Email" required>
                        </div>
                        <div class="form__section my-2">
                            <input type="tel" class="form__input" placeholder="Teléfono" required>
                        </div>
                        <div class="form__section my-2">
                            <textarea class="form__input" placeholder="Escriba su mensaje quí"></textarea>
                        </div>
                        <div class="text-center">
                            <button class="btn">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-6 footer__box m-auto">
                    <div class="row">
                        <div class="col-12 col-md-4 footer__ul-box m-auto text-center mb-3">
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
                        <div class="col-12 col-md-8 my-auto text-center">
                            <p><i class="fa-solid fa-phone footer__i p-1"></i> <b>Tel:</b> +54 11 2262-7582</p>
                            <p><i class="fa-solid fa-envelope footer__i p-1"></i> <b>Email:</b> info@mansoweb.com </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>