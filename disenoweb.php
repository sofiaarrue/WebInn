<?php $pg = "disenoweb";
include("captcha.php"); ?>

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
    <link rel="shortcut icon" href="imagenes/logo_miniatura.png">
    <link rel="icon" href="imagenes/logo_miniatura.png">
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $claves["publica"]; ?>"></script>
    <meta name="description" content="Nuestro servicio incluye un diseño y programación web personalizado, así como la optimización SEO del sitio, el hosting y el dominio.">
    <title>Diseño Web para alojamientos | Flexy Webs</title>
</head>

<body id="diseñoWeb">
    <header>
        <?php include_once("menu.php"); ?>
    </header>
    <main>
        <section class="dw__intro">
            <div>
                <h1 class="dw__intro-h1 px-4">Conquistá con tu diseño web</h1>
            </div>
        </section>
        <section class="dw__propiedades">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row text-center">
                            <div class="col-12 col-md-3 my-2 text-center dw__propiedades-div-container">
                                <div class="dw__propiedades-div">
                                    <i class="fa-solid fa-mobile mb-3 dw__propiedades-i"></i>
                                    <h4 style="color: #080357;">Mobile First</h4>
                                    <p>Priorizamos el móvil con un diseño 100% responsivo</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 my-2 text-center dw__propiedades-div-container">
                                <div class="dw__propiedades-div">
                                    <i class="fa-solid fa-clock mb-3 dw__propiedades-i"></i>
                                    <h4 style="color: #080357;">Posicionamiento</h4>
                                    <p>Optimización en motores de búsqueda o SEO</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 my-2 text-center dw__propiedades-div-container">
                                <div class="dw__propiedades-div">
                                    <i class="fa-solid fa-lock mb-3 dw__propiedades-i"></i>
                                    <h4 style="color: #080357;">Seguridad</h4>
                                    <p>Conexión segura y cifrada gracias al certificado SSL</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 my-2 text-center dw__propiedades-div-container">
                                <div class="dw__propiedades-div">
                                    <i class="fa-solid fa-language mb-3 dw__propiedades-i"></i>
                                    <h4 style="color: #080357;">Administración de contenidos</h4>
                                    <p>Mantenimiento mensual del contenido de tu web</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 px-4 my-2">
                        <h2>Diseño, tecnología y estrategia</h2>
                    </div>
                    <div class="col-12 col-md-7 px-4">
                        <p>Tu página web es la puerta de entrada al mundo, por lo que su <b>funcionalidad</b> y
                            <b>apariencia visual</b> son factores determinantes.<br>
                            Nuestros proyectos estan diseñados para aumentar las visitas a tu sitio web y, de esa
                            manera, la <b>conversion</b>. <br>
                            Nos encargamos de que la experiencia del usuario (UX) sea óptima, basándonos en <b>tus
                                objetivos</b>.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="modalidadDeTrabajo">
            <div class="container">
                <div class="row">
                    <div class="col-12" style="color: #080357">
                        <h2>Modalidad de trabajo</h2>
                    </div>
                </div>
                <div class="row modalidadDeTrabajo__container">
                    <div class="col-12 col-md-6">
                        <div class="row my-2 mx-2 mdt__div">
                            <div class="col-2">
                                <div class="mdt__num">1</div>
                            </div>
                            <div class="col-10 mdt__p">
                                <div class="pasosTitle" id="pasosTitle">
                                    <h3>Proyecto y estrategia</h3>
                                    <i class="fa-solid fa-angles-down px-3 pb-2" id="toggle-down"></i>
                                </div>
                                <div class="pasosP" id="pasosP">
                                    <p>Acordamos con los clientes los <b>objetivos</b> del proyecto de manera
                                        personalizada.
                                        Diseñamos un <b>briefing</b> de modo de poder garantizar la satisfacción del
                                        sitio web.</p>
                                    <i class="fa-solid fa-angles-up px-3 pb-2" id="toggle-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row my-2 mx-2 mdt__div">
                            <div class="col-2">
                                <div class="mdt__num">2</div>
                            </div>
                            <div class="col-10 mdt__p">
                                <div class="pasosTitle" id="pasosTitle2">
                                    <h3>Diseño y maquetación</h3>
                                    <i class="fa-solid fa-angles-down px-3 pb-2" id="toggle-down2"></i>
                                </div>
                                <div class="pasosP" id="pasosP2">
                                    <p>Los diseños se basan en la <b>imagen corporativa</b> de nuestros clientes.
                                        Navegar por el sitio web será <b>intuitivo</b> y generará el deseo de interactuar.
                                        Diseñamos sitios <b>responsive</b>, <b>atractivos</b> y <b>user-friendly</b>.
                                    </p>
                                    <i class="fa-solid fa-angles-up px-3 pb-2" id="toggle-up2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row my-2 mx-2 mdt__div">
                            <div class="col-2">
                                <div class="mdt__num">3</div>
                            </div>
                            <div class="col-10 mdt__p">
                                <div class="pasosTitle" id="pasosTitle3">
                                    <h3>Programación</h3>
                                    <i class="fa-solid fa-angles-down px-3 pb-2" id="toggle-down3"></i>
                                </div>
                                <div class="pasosP" id="pasosP3">
                                    <p>En este punto, la maquetación previa pasará a ser <b>programada</b>, dándole
                                        <b>funcionalidad y optimización</b>.
                                        Los lenguajes que utilizamos son HTML5, CSS3, JavaScript y PHP 7.
                                    </p>
                                    <i class="fa-solid fa-angles-up px-3 pb-2" id="toggle-up3"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row my-2 mx-2 mdt__div">
                            <div class="col-2">
                                <div class="mdt__num">4</div>
                            </div>
                            <div class="col-10 mdt__p">
                                <div class="pasosTitle" id="pasosTitle4">
                                    <h3>Test y publicación</h3>
                                    <i class="fa-solid fa-angles-down px-3 pb-2" id="toggle-down4"></i>
                                </div>
                                <div class="pasosP" id="pasosP4">
                                    <p>Por último, comprobamos que la página web <b>funcione de manera correcta</b> en cada una de sus secciones.
                                        Publicamos la página previo a testearla en <b>todos los navegadores y dispositivos</b>.
                                    </p>
                                    <i class="fa-solid fa-angles-up px-3 pb-2" id="toggle-up4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center my-2">
                        <a href="contacto.php"><button class="btn">Presupuestar mi negocio</button></a>
                    </div>
                    <script src="js/modalidadDeTrabajo.js"></script>
                </div>
            </div>
        </section>
        <section class="porQueElegirnos mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img src="imagenes/Mnaranja.webp" alt="Item de diseño web" class="Mnaranja">
                        <div class="porQueElegirnos__h2container text-center">
                            <h2>El cambio que llevará a tu alojamiento al siguiente nivel</h2>
                        </div>
                        <img src="imagenes/Mazul.webp" alt="Item de diseño web" class="Mazul">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer style="margin-top: 7em;">
        <?php include_once("footer.php"); ?>
    </footer>
</body>

</html>