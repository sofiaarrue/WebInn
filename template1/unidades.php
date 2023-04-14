<?php $pg = "unidades" ?>

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
    <title>Unidades</title>
</head>

<body>
    <header>
        <?php include_once("menu-template1.php"); ?>
    </header>

    <main>
        <section>
            <div class="unidades-intro__div">
                <h1>Unidades</h1>
            </div>
        </section>
        <section class="nuestros-apartamentos my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h2 class="py-2">Nuestros apartamentos</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam perferendis
                            iusto dolore maiores cum sit, numquam asperiores illo esse odit debitis aliquid eligendi
                            aliquam
                            deserunt, non harum veniam, libero fugit.</p>

                        <p style="line-height: 40px; font-size: 25px; text-align:center; font-weight: bold;">Contamos
                            con: </p>
                        <ul style="text-align: center;">
                            <li> 6 apartamentos familiares</li>
                            <li> 8 apartamentos dobles </li>
                            <li> 4 apartamentos dobles superiores</li>
                        </ul>
                        <p style="line-height: 40px; font-size: 25px; text-align:center; font-weight: bold;">¿Con cuál
                            te
                            quedas?</p>
                    </div>
                    <div class="col-12 col-lg-6 nuestros-apartamentos__div-reloj">
                        <div class="nuestros-apartamentos__p-reloj">
                            <p>
                                <b>CHECK IN</b> <br>
                                A partir de las 15:00 hs <br>
                                <b>CHECK OUT</b> <br>
                                11:00 hs <br>
                                <b>LATE CHECK OUT </b><br>
                                Hasta las 18:00 hs <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="descripcion-unidad my-3">
            <div class="container">
                <div class="apart1 row mb-5">
                    <div class="col-12">
                        <div class="apart1__caja-img">
                            <img class="apart1__img" src="imagenes/Rectangle 26 (1).png" alt="">
                            <!--<i class="fa-solid fa-circle-arrow-left aparts-flecha"></i>
                        <i class="fa-solid fa-circle-arrow-right aparts-flecha"></i>-->
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="apart1__caja">
                            <h3>Apartamento doble superior</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque sunt odit similique,
                                odio atque vel id maiores voluptatem soluta officia quam aut velit libero hic vero
                                perferendis dolores illo nihil!</p>
                            <a href="contacto.html" class=" btn">Consultar disponibilidad</a>
                        </div>
                    </div>
                </div>
                <div class="apart2 row mb-4">
                    <div class="col-12">
                        <div class="apart2__caja-img">
                            <img class="apart2__img" src="imagenes/Rectangle 26.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="apart2__caja">
                            <h3 style="color: #fff;">Apartamento doble</h3>
                            <p style="color: #fff;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque sunt odit similique,
                                odio atque vel id maiores voluptatem soluta officia quam aut velit libero hic vero
                                perferendis dolores illo nihil!</p>
                            <a href="contacto.html" class=" btn">Consultar disponibilidad</a>
                        </div>
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
                    <div class="col-12 col-md-4 col-lg-4 mas-sobre-nosotros__button-container mx-auto my-4">
                        <img class="mas-sobre-nosotros__button-container-img" src="imagenes/sasha-kaunas-xEaAoizNFV8-unsplash (1).jpg" alt="habitacion" style="width: 343px; height: 287px;">
                        <a href="index.html"><button class="mas-sobre-nosotros__button-container-a">Inicio</button></a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 mas-sobre-nosotros__button-container mx-auto my-4">
                        <img class="mas-sobre-nosotros__button-container-img" src="imagenes/tholaal-mohamed-8sKTHeGgrUM-unsplash.png" alt="" style="width: 343px; height: 287px;">
                        <a href="galeria.html"><button class="mas-sobre-nosotros__button-container-a">Galería</button></a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 mas-sobre-nosotros__button-container mx-auto my-4">
                        <img class="mas-sobre-nosotros__button-container-img" src="imagenes/frank-mckenna-OD9EOzfSOh0-unsplash.png" alt="" style="width: 343px; height: 287px;">
                        <a href="ubicacion.html"><button class="mas-sobre-nosotros__button-container-a">Ubicación</button></a>
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