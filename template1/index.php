<?php $pg = "inicio" ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio</title>
</head>

<body id="inicio">
    <header>
        <?php include_once("menu-template1.php"); ?>
    </header>
    <main>
        <section id="bienvenidos">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1> Bienvenidos a<br> Apartamentos<br> Lorem</h1>
                    </div>
                </div>
            </div>
        </section>
        <section id="intro" class="my-5 ">
            <div class="container">
                <div class="row info">
                    <div class="col-12 col-lg-5 text-center">
                        <div class="elipse animate__animated animate__rotateIn">
                            <span class="intro__elipse-texto">Vení a disfrutar</span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="descripcion">
                            <p class="text-center descripcion__p">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                Natus eveniet
                                quae id, pariatur
                                deserunt libero porro consectetur voluptas rerum soluta animi iusto temporibus quam
                                aliquid
                                culpa officiis cum. Magnam, eligendi.<br><br>
                                Con todos nuestros servicios
                            </p>
                            <a href="servicios.php" style="text-decoration: none;">
                                <div class="descripcion__i px-5 mt-5">
                                    <i class="fa-solid fa-car"></i>
                                    <i class="fa-solid fa-mug-saucer"></i>
                                    <i class="fa-solid fa-water-ladder"></i>
                                    <i class="fa-solid fa-bell-concierge"></i>
                                    <i class="fa-solid fa-wifi"></i>
                                    <i class="fa-solid fa-umbrella-beach"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container my-4">
                <div class="row">
                    <div class="col-12 py-2">
                        <h2>Galería</h2>
                    </div>
                </div>
                <section class="slider">
                    <div class="slider__container container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);" class="slider__icon" id="before">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg>
                        <div class="slider__body slider__body--show" data-id="1">
                            <img src="imagenes/aparts.jpg" class="slider__img mb-5" alt="">
                        </div>
                        <div class="slider__body" data-id="2">
                            <img src="imagenes/hotelprueba2.avif" class="slider__img mb-4" alt="">
                        </div>
                        <div class="slider__body" data-id="3">
                            <img src="imagenes/fermin-rodriguez-penelas-MecrxdAPD1E-unsplash 1.png" class="slider__img mb-5" alt="">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);" class="slider__icon" id="next">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg>
                    </div>
                </section>
                <script src="js/sliders.js"></script>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="galeria.php" class="btn my-3">Ver galeria completa</a>
                    </div>
                </div>

            </div>
        </section>
        <section id="ubicacion" class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-4 mb-5">
                        <h2>Ubicación</h2>
                    </div>
                </div>
            </div>
            <div class="ubicacion__fondo">
                <div class="container ubicacion__box">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <img class="ubicacion__img" src="imagenes/mapa.png" alt="buenosaires">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 ubicacion__textomapa text-center align-items-center">
                            <h3>Apartamentos Lorem</h3>
                            <p>Lorem ipsum 1936<br>
                                Buenos Aires, Argentina<br>
                                Email: apartamentoslorem@hotel.com</p>
                            <a href="https://www.google.com.ar/maps" target="_blank" class="btn mt-2">Ver mapa</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="mas-sobre-nosotros" class="mb-5 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 my-2">
                        <h2>Más sobre nosotros</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4 mas-sobre-nosotros__button-container mx-auto my-4">
                        <img class="mas-sobre-nosotros__button-container-img" src="imagenes/aparts.jpg" alt="habitacion" style="width: 343px; height: 287px;">
                        <a href="unidades.php"><button class="mas-sobre-nosotros__button-container-a">Unidades</button></a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 mas-sobre-nosotros__button-container mx-auto my-4">
                        <img class="mas-sobre-nosotros__button-container-img" src="imagenes/tholaal-mohamed-8sKTHeGgrUM-unsplash.png" alt="" style="width: 343px; height: 287px;">
                        <a href="galeria.php"><button class="mas-sobre-nosotros__button-container-a">Galería</button></a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 mas-sobre-nosotros__button-container mx-auto my-4">
                        <img class="mas-sobre-nosotros__button-container-img" src="imagenes/staff hotel.png" alt="" style="width: 343px; height: 287px;">
                        <a href="servicios.php"><button class="mas-sobre-nosotros__button-container-a">Servicios</button></a>
                    </div>
                </div>
            </div>
        </section>
        <section id="newsletter" class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>¡Enterate de todas nuestras ofertas!</h2>
                        <h4 class="text-center py-2">Subscribite a nuestro Newsletter</h4>
                    </div>
                </div>
                <form action="" class="pt-2">
                    <div class="row mx-auto">
                        <div class="col-12 col-md-4 col-lg-4 my-1 text-center">
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Nombre *">
                        </div>
                        <div class="col-12 col-md-4 col-lg-4 my-1 text-center">
                            <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Correo electrónico *">
                        </div>
                        <div class="col-12 col-md-4 col-lg-4 my-1 text-center">
                            <button type="submit" class="btn">Subscribirme</button>
                        </div>
                    </div>
                    <div class="row mx-auto">
                        <div class="col-12 pt-2">
                            <input type="checkbox" id="txtCheckbox" name="txtCheckbox" class="my-3">
                            <label for="txtCheckbox" style="font-weight: 300; font-size: 15px; color: #877560;"> Quiero
                                recibir noticias de Apartamentos Lorem</label>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer id="footer" class="mt-4 mb-5">
        <div class="container">
            <div class="btn-whatsapp">
                <a href="https://api.whatsapp.com/send?phone=1122627582" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <div class="row">
                <div class="col-12 footer__box">
                    <i class="fa-brands fa-instagram footer__box-i1"></i>
                    <i class="fa-brands fa-facebook footer__box-i1"></i>
                    <i class="fa-brands fa-youtube footer__box-i1"></i>
                </div>
            </div>
            <div class="row text-center py-4">
                <div class="col-12 col-md-6 col-lg-6">
                    <p>Reservas <br> +541199999999</p>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <p>Atención al cliente <br> contacto@apartamentoslorem.com </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 footer__box">
                    <i class="fa-brands fa-paypal footer__box-i2"></i>
                    <i class="fa-solid fa-credit-card footer__box-i2"></i>
                    <i class="fa-solid fa-building-columns footer__box-i2"></i>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>