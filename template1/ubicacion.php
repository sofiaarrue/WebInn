<?php $pg = "ubicacion" ?>

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
    <title>Ubicación</title>
</head>

<body>
    <header>
        <?php include_once("menu-template1.php"); ?>
    </header>
    <main>
        <section id="ubicacion-intro">
            <div class="ubicacion-intro__div">
                <h1>Ubicación</h1>
            </div>
        </section>
        <section class="ubicacion__donde-estamos my-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mt-5">
                        <h2>¿Dónde estamos?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center mt-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, asperiores. Aliquam quis
                            accusantium nesciunt non. Sequi ducimus laudantium error veritatis et doloribus illum,
                            asperiores eveniet, hic ea est sit mollitia.</p>
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
        <section class="ubicacion__acts-cercanas">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mt-3">
                        <h2>Actividades cercanas</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center mt-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, asperiores. Aliquam quis
                            accusantium nesciunt non. </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3 p-4 ubicacion__acts-cercanas-fondo">
                <div class="row">
                    <div class="col-12 col-md-6 my-2 ubicacion__acts-cercanas-img">
                        <img src="imagenes/fermin-rodriguez-penelas-MecrxdAPD1E-unsplash 1.png" alt="playa2" style="width: 90%;">
                    </div>
                    <div class="col-12 col-md-6 text-center my-auto">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti excepturi ullam ex
                            consectetur laudantium.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 text-center my-auto">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti excepturi ullam ex
                            consectetur laudantium.</p>
                    </div>
                    <div class="col-12 col-md-6 my-2 ubicacion__acts-cercanas-img">
                        <img style=" width: 90%;" class="img-float" src="imagenes/fermin-rodriguez-penelas-hiMLzO_8Nz4-unsplash 1.png" alt="playa3">
                    </div>
                </div>
            </div>
        </section>
        <section class="ubicacion__mapa">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 text-center ubicacion__mapa-div">
                        <a href="https://www.google.com.ar/maps" target="_blank"><img class="text-center ubicacion__mapa-img" style="width: 100%;" src="imagenes/googlemaps.png" alt="googlemaps"></a>
                    </div>
                </div>
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
                    <div class="col-12 col-md-4 mas-sobre-nosotros__button-container mx-auto my-3">
                        <img class="mas-sobre-nosotros__button-container-img" src="imagenes/sasha-kaunas-xEaAoizNFV8-unsplash (1).jpg" alt="habitacion" style="width: 343px; height: 287px;">
                        <a href="index.php"><button class=" mas-sobre-nosotros__button-container-a">Inicio</button></a>
                    </div>
                    <div class="col-12 col-md-4 mas-sobre-nosotros__button-container mx-auto my-3">
                        <img class="mas-sobre-nosotros__button-container-img" src="imagenes/tholaal-mohamed-8sKTHeGgrUM-unsplash.png" alt="" style="width: 343px; height: 287px;">
                        <a href="galeria.php"><button class=" mas-sobre-nosotros__button-container-a">Galería</button></a>
                    </div>
                    <div class="col-12 col-md-4 mas-sobre-nosotros__button-container mx-auto my-3">
                        <img class="mas-sobre-nosotros__button-container-img" src="imagenes/staff hotel.png" alt="" style="width: 343px; height: 287px;">
                        <a href="servicios.php"><button class=" mas-sobre-nosotros__button-container-a">Servicios</button></a>
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