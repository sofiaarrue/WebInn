<?php $pg = "inicio"; ?>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <meta name="description" content="WebInn provee páginas web especializadas en hospedaje, como hoteles, resorts, complejos turísticos, aparts, campings. También provee un servicio de Newsletter.">
    <title>WebInn | Páginas Web para alojamientos</title>
</head>

<body id="inicio">
    <header>
        <?php include_once("menu.php"); ?>
    </header>
    <main>
        <section class="intro">
            <div class="container">
                <div class="row textIntro">
                    <div class="col-12 col-md-8 mb-3">
                        <h1 class="mb-4">
                            Crea tu página Web de la mano de profesionales
                        </h1>
                        <h3 class="mb-4" style="color:#fff;">
                            Programadores y diseñadores web.
                        </h3>
                        <div class="text-center my-2">
                            <a href="disenoweb.php"><button class="btn"><b>Comenzá ahora</b></button></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center imgIntro">
                        <img src="imagenes/imgIntro.png" alt="" class="imgIntro-img">
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="nuestros-clientes my-3">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <h3>Nuestros clientes</h3>
                    </div>
                </div>
                <div class="row text-center my-4">
                    <div class="col-4 ">
                        <i class="bi bi-caret-left-fill"></i>
                    </div>
                    <div class="col-4">
                        <p style="color: #ccc">Hotel Lorem</p>
                    </div>
                    <div class="col-4">
                        <i class="bi bi-caret-right-fill"></i>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="websParaHoteles">
            <div class="container my-3">
                <div class="row">
                    <div class="websParaHoteles__img col-md-4 text-center">
                        <a href="diseñoweb.html">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <g>
                                    <path d="M472,56H40A32.042,32.042,0,0,0,8,88V360a32.042,32.042,0,0,0,32,32H204.9l-10.67,32H168a8,8,0,0,0-8,8v16H88a8,8,0,0,0,0,16H440a8,8,0,0,0,0-16H352V432a8,8,0,0,0-8-8H317.77L307.1,392H472a32.042,32.042,0,0,0,32-32V88A32.042,32.042,0,0,0,472,56ZM336,440v8H176v-8ZM211.1,424l10.67-32h68.46l10.67,32ZM488,360a16.021,16.021,0,0,1-16,16H40a16.021,16.021,0,0,1-16-16V344H488ZM143.66,256l-3,72h-9.32l-3-72Zm-14.22-16,5.34-32h2.44l5.34,32ZM136,192c-8.67,0-16-10.99-16-24,0-8.21,8.38-20.14,15.98-28.55C142.83,147.05,152,159.2,152,168,152,181.01,144.67,192,136,192Zm87.06-16,.94,1.89V184H192v-6.11l.94-1.89Zm-22.12-16L208,145.89,215.06,160ZM224,200V327a8.258,8.258,0,0,0,.07,1H191.93a8.258,8.258,0,0,0,.07-1V200Zm72-32h24v16h-8a8,8,0,0,0,0,16h8v16H296a8,8,0,0,0,0,16h24v16h-8a8,8,0,0,0,0,16h8v16H296a8,8,0,0,0,0,16h24v32H264V136h56v16H296a8,8,0,0,0,0,16Zm96,96v63a8.258,8.258,0,0,0,.07,1H359.93a8.258,8.258,0,0,0,.07-1V264Zm-32-16v-6.11l16-32,16,32V248Zm128,80H407.93a8.258,8.258,0,0,0,.07-1V240a8.081,8.081,0,0,0-.84-3.58l-24-48a8.009,8.009,0,0,0-14.32,0l-24,48A8.081,8.081,0,0,0,344,240v87a8.258,8.258,0,0,0,.07,1H336V128a8,8,0,0,0-8-8H256a8,8,0,0,0-8,8V328h-8.07a8.258,8.258,0,0,0,.07-1V176a8.081,8.081,0,0,0-.84-3.58l-24-48a8.009,8.009,0,0,0-14.32,0l-24,48A8.081,8.081,0,0,0,176,176V327a8.258,8.258,0,0,0,.07,1h-19.4l3.32-79.67c.01-.18,0-.36,0-.55v-.24a8.013,8.013,0,0,0-.1-.84v-.02l-7.4-44.41C161.78,195.26,168,182.52,168,168c0-20.56-23.83-43.33-26.55-45.86a8.017,8.017,0,0,0-10.9,0C127.83,124.67,104,147.44,104,168c0,14.52,6.22,27.26,15.51,34.27l-7.4,44.41v.02a8.013,8.013,0,0,0-.1.84v.24c0,.19-.01.37,0,.55L115.33,328H24V88A16.021,16.021,0,0,1,40,72H472a16.021,16.021,0,0,1,16,16Z">
                                    </path>
                                    <path d="M96,352H48a8,8,0,0,0,0,16H96a8,8,0,0,0,0-16Z"></path>
                                    <path d="M128,352h-8a8,8,0,0,0,0,16h8a8,8,0,0,0,0-16Z"></path>
                                    <path d="M208,208a8,8,0,0,0-8,8v88a8,8,0,0,0,16,0V216A8,8,0,0,0,208,208Z">
                                    </path>
                                    <path d="M376,272a8,8,0,0,0-8,8v24a8,8,0,0,0,16,0V280A8,8,0,0,0,376,272Z">
                                    </path>
                                    <path d="M48,104h64a8,8,0,0,0,0-16H48a8,8,0,0,0,0,16Z"></path>
                                    <path d="M48,128H64a8,8,0,0,0,0-16H48a8,8,0,0,0,0,16Z"></path>
                                    <path d="M432,312h32a8,8,0,0,0,0-16H432a8,8,0,0,0,0,16Z"></path>
                                    <path d="M456,288h8a8,8,0,0,0,0-16h-8a8,8,0,0,0,0,16Z"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-12">
                                <h3>Webs para alojamientos</h3>
                            </div>
                            <div class="col-12 websParaHoteles__p text-center">
                                <p>Somos un equipo especializado en crear diseños <b>funcionales</b> y <b>atractivos</b>
                                    para tu hotel o alojamiento. <b>Conocemos el rubro</b> y priorizamos la
                                    <b>conversión</b> y la experiencia del
                                    cliente.
                                </p>
                            </div>
                            <div class="col-12 text-center">
                                <a href="contacto.php"><button class="btn">Quiero un presupuesto</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nuestroServicio">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>Nuestro servicio incluye</h3>
                    </div>
                </div>
            </div>
            <section class="slider my-3">
                <div class="slider__container container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);" class="slider__icon" id="before">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg>
                    <div class="slider__body slider__body--show" data-id="1">
                        <div class="slider__body-itemscontainer text-center p-1 mx-1">
                            <img src="imagenes/nuestrosServicios.png" class="slider__img mb-5" alt="">
                            <p><b>Diseño exclusivo y personalizado</b></p>
                        </div>
                    </div>
                    <div class="slider__body" data-id="2">
                        <div class="text-center p-3 mx-1">
                            <img src="imagenes/nuestrosServicios2.png" class="slider__img mb-4" alt="">
                            <p><b>Desarrollo web profesional</b></p>
                        </div>
                    </div>
                    <div class="slider__body" data-id="3">
                        <div class="slider__body-itemscontainer text-center p-3 mx-1">
                            <img src="imagenes/nuestrosServicios3.png" class="slider__img mb-5" alt="">
                            <p><b>Adaptabilidad a todos los dispositivos</b></p>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);" class="slider__icon" id="next">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                    </svg>
                </div>
            </section>
            <script src="js/sliders.js"></script>
            <div class="container my-3">
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="disenoweb.php"><button class="btn">Quiero saber más</button></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="porQueElegirnos mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img src="imagenes/Mnaranja.png" alt="" class="Mnaranja">
                        <div class="porQueElegirnos__h2container text-center">
                            <h2>El cambio que llevará a tu hospedaje al siguiente nivel</h2>
                        </div>
                        <img src="imagenes/Mazul.png" alt="" class="Mazul">
                    </div>
                </div>
            </div>
        </section>
        <section class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-center py-2">Enterate de todas nuestras ofertas y novedades</h3>
                    </div>
                </div>
                <form action="" class="pt-2">
                    <div class="row mx-auto">
                        <div class="col-12 col-md-6 my-1 text-center">
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Nombre *" required>
                        </div>
                        <div class="col-12 col-md-6 text-center">
                            <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Correo electrónico *" required>
                        </div>
                        <div class="col-12">
                            <input type="checkbox" id="txtCheckbox" name="txtCheckbox" class="my-3" required>
                            <label for="txtCheckbox" style="font-size: 18px; line-height: 30px; color: #877560;"> Quiero
                                recibir noticias de WebInn</label>
                        </div>
                        <div class="col-12 my-3 text-center">
                            <button type="submit" class="btn my-0">Subscribirme</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <div class="container-fluid footer mt-0">
            <div class="btn-whatsapp">
                <a href="https://api.whatsapp.com/send?phone=91122627582" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
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