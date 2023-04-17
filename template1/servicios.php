<?php $pg = "servicios" ?>

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
    <title>Servicios</title>
</head>

<body>
    <header>
        <?php include_once("menu-template1.php"); ?>
    </header>
    <main>
        <section class="servicios__titulo">
            <div class="container">
                <div class="row">
                    <div class="col-12 nosotros__servicios text-center my-4">
                        <h2>Servicios del complejo</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="servicios__icons">
            <div class="container-fluid icons__container">
                <div class="row">
                    <div class="grid-item text-center col-6 col-lg-4 my-5">
                        <i class="fa-solid fa-car py-3" style="font-size: 50px;"></i><br>
                        <b>Estacionamiento privado</b>
                    </div>
                    <div class="grid-item text-center col-6 col-lg-4 my-5">
                        <i class="fa-solid fa-water-ladder py-3" style="font-size: 50px;"></i><br>
                        <b>Piscina climatizada</b>
                    </div>
                    <div class="grid-item text-center col-6 col-lg-4 my-5">
                        <i class="fa-solid fa-bell-concierge py-3" style="font-size: 50px;"></i><br>
                        <b>Recepción las 24hs</b>
                    </div>
                    <div class="grid-item text-center col-6 col-lg-4 my-5">
                        <i class="fa-solid fa-wifi py-3" style="font-size: 50px;"></i><br>
                        <b>Conexión a internet</b>
                    </div>
                    <div class="grid-item text-center col-6 col-lg-4 my-5">
                        <i class="fa-solid fa-umbrella-beach py-3" style="font-size: 50px;"></i><br>
                        <b>Servicios de playa</b>
                    </div>
                    <div class="grid-item text-center col-6 col-lg-4 my-5">
                        <i class="fa-solid fa-dumbbell py-3" style="font-size: 50px;"></i><br>
                        <b>Gimnasio</b>
                    </div>
                    <div class="grid-item text-center col-6 col-lg-4 my-5">
                        <i class="fa-solid fa-broom py-3" style="font-size: 50px;"></i><br>
                        <b>Servicio de limpieza</b>
                    </div>
                    <div class="grid-item text-center col-6 col-lg-4 my-5">
                        <i class="fa-solid fa-tree py-3" style="font-size: 50px;"></i><br>
                        <b>Vista al parque</b>
                    </div>
                    <div class="grid-item text-center col-6 col-lg-4 my-5">
                        <i class="fa-solid fa-dog py-3" style="font-size: 50px;"></i><br>
                        <b>Pet Friendly</b>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-12 nosotros__servicios text-center my-5">
                    <h2>Servicios en los departamentos</h2>
                </div>
            </div>
        </div>
        <section class="servicios__icons">
            <div class="container-fluid icons__container">
                <div class="row">
                    <div class="grid-item text-center col-6 col-lg-4 my-5"><i class="fa-solid fa-mug-saucer py-3" style="font-size: 50px;"></i><br><b>Desayuno continental</b></div>
                    <div class="grid-item text-center col-6 col-lg-4 my-5"><i class="fa-solid fa-broom py-3" style="font-size: 50px;"></i><br><b>Servicio de limpieza</b></div>
                    <div class="grid-item text-center col-6 col-lg-4 my-5"><i class="fa-solid fa-tv py-3" style="font-size: 50px;"></i><br><b>Television
                            Led</b></div>
                    <div class="grid-item text-center col-6 col-lg-4 my-5"><i class="fa-solid fa-temperature-full py-3" style="font-size: 50px;"></i><br><b>Aire acondicionado</b></div>
                    <div class="grid-item text-center col-6 col-lg-4 my-5"><i class="fa-solid fa-shirt py-3" style="font-size: 50px;"></i><br><b>Ropa
                            blanca</b></div>
                    <div class="grid-item text-center col-6 col-lg-4 my-5"><i class="fa-solid fa-soap py-3" style="font-size: 50px;"></i><br><b>Elementos de tocador</b></div>
                </div>
        </section>

        <section id="mas-sobre-nosotros" class="mb-5 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 my-4">
                        <h2>Más sobre nosotros</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4 mas-sobre-nosotros__button-container mx-auto my-4">
                        <img class="mas-sobre-nosotros__button-container-img" src="imagenes/aparts.jpg" alt="habitacion" style="width: 343px; height: 287px;">
                        <a href="unidades.php"><button class="mas-sobre-nosotros__button-container-a">Unidades</button></a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 mas-sobre-nosotros__button-container mx-auto my-4">
                        <img class="mas-sobre-nosotros__button-container-img" src="imagenes/frank-mckenna-OD9EOzfSOh0-unsplash.png" alt="" style="width: 343px; height: 287px;">
                        <a href="galeria.php"><button class="mas-sobre-nosotros__button-container-a">Ubicación</button></a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 mas-sobre-nosotros__button-container mx-auto my-4">
                        <img class="mas-sobre-nosotros__button-container-img" src="imagenes/alevision-co-lw3Lqe2K7xc-unsplash.jpg" alt="" style="width: 343px; height: 287px;">
                        <a href="galeria.php"><button class="mas-sobre-nosotros__button-container-a">Galería</button></a>
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
                            <label for="txtCheckbox" style="font-weight: 400; font-size: 15px; color: #877560;"> Quiero
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