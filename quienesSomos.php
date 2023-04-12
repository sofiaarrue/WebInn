<?php $pg = "quienesSomos"; ?>

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
    <meta name="description" content="Somos un equipo especializado en crear diseños funcionales y atractivos para tu hotel o alojamiento, que comparte una pasión por el turismo, el diseño y la programación.">
    <title>Conoce la empresa | WebInn</title>
</head>

<body id="quienesSomos">
    <header>
        <?php include_once("menu.php"); ?>
    </header>

    <main>
        <section class="qs__fondo">
            <div class="container">
                <div class="row py-4">
                    <div class="col-12" style="color:#fff;">
                        <h1>¿Quiénes somos?</h1>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-12 col-md-6 qs__img-container pb-3">
                        <img src="imagenes/qs__img1.png" alt="" class="qs__img">
                    </div>
                    <div class="col-12 col-md-6 qs__texto">
                        <p>Somos un equipo especializado en crear diseños <b>funcionales</b> y <b>atractivos</b>
                            para tu hotel o alojamiento, que comparte una <b>pasión por el turismo, el diseño y la
                                programación</b>.</p>
                    </div>
                </div>
        </section>
        <section class="porQueElegirnos">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img src="imagenes/Mnaranja.png" alt="" class="Mnaranja">
                        <div class="porQueElegirnos__h2container text-center">
                            <h2>Diseñamos y desarrollamos soluciones en las que creemos</h2>
                        </div>
                        <img src="imagenes/Mazul.png" alt="" class="Mazul">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 qs__texto qs__texto2">
                        <p>Nuestro objetivo es brindarle una solución a las necesidades de tu negocio, con
                            <b>pasión</b>,
                            <b>flexibilidad</b> y <b>compromiso</b>. Priorizamos la experiencia de todos y cada uno
                            de
                            los usuarios que visiten tu futura página web, para lograr una mayor <b>conversión</b>.
                        </p>
                    </div>
                    <div class="col-12 col-md-6 qs__img-container py-3">
                        <img src="imagenes/qs__img2.png" alt="" class="qs__img">
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
                            <p><i class="fa-solid fa-phone footer__i p-1"></i> <b>Tel:</b> +54 9 112262-7582</p>
                            <p><i class="fa-solid fa-envelope footer__i p-1"></i> <b>Email:</b> info@mansoweb.com </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>