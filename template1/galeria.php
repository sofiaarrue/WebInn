<?php $pg = "galeria" ?>

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

<body>
    <header>
        <?php include_once("menu-template1.php"); ?>
    </header>
    <main>
        <section>
            <div class="container pb-3">
                <div class="row">
                    <div class="col-12 my-4">
                        <h1 class="galeria__h1">Galería</h1>
                    </div>
                </div>
                <div class="caja-galeria">
                    <img src="imagenes/imagen-fondo.png" alt="">
                    <img src="imagenes/alevision-co-lw3Lqe2K7xc-unsplash.jpg" alt="">
                    <img src="imagenes/fermin-rodriguez-penelas-hiMLzO_8Nz4-unsplash 1.png" alt="">
                    <img src="imagenes/frank-mckenna-OD9EOzfSOh0-unsplash.png" alt="">
                    <img src="imagenes/sasha-kaunas-xEaAoizNFV8-unsplash (1).jpg" alt="">
                    <img src="imagenes/tholaal-mohamed-8sKTHeGgrUM-unsplash.jpg" alt="">
                    <img src="imagenes/ambitious-creative-co-rick-barrett-PW4bkuUuE1k-unsplash.jpg" alt="">
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
                    <div class="col-12 col-md-4 col-lg-4 mas-sobre-nosotros__button-container mx-auto my-4">
                        <img class="mas-sobre-nosotros__button-container-img" src="imagenes/aparts.jpg" alt="habitacion" style="width: 343px; height: 287px;">
                        <a href="unidades.php"><button class="mas-sobre-nosotros__button-container-a">Unidades</button></a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 mas-sobre-nosotros__button-container mx-auto my-4">
                        <img class="mas-sobre-nosotros__button-container-img" src="imagenes/frank-mckenna-OD9EOzfSOh0-unsplash.png" alt="" style="width: 343px; height: 287px;">
                        <a href="ubicacion.php"><button class=" mas-sobre-nosotros__button-container-a">Ubicación</button></a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 mas-sobre-nosotros__button-container mx-auto my-4">
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
                        <div class="col-12 pt-2" style="display: flex; align-items: center;">
                            <input type="checkbox" id="txtCheckbox" name="txtCheckbox" class="my-3">
                            <label for="txtCheckbox" style="font-weight: 400; font-size: 15px; color: #877560;"> Quiero
                                recibir
                                noticias de Apartamentos Lorem</label>
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