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
    <title>Nuestros últimos proyectos | Flexy Webs</title>
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
                        <img src="imagenes/img_proyecto1-hd.png" alt="Proyecto moderno realizado por Flexy Webs adaptado a todos los dispositivos">
                    </div>
                    <div class="col-12 col-md-4 proyecto__text-container">
                        <div>
                            <h3>Web moderna</h3>
                            <p>Los distintos colores, las tipografías grandes y los componentes interactivos le darán a tu web un estilo altamente atractivo.</p>
                            <a href="template1/index.php" target="_blank"><button class="btn"><b>Ver proyecto</b></button></a>
                        </div>
                    </div>
                </div>
                <div class="row proyecto__container">
                    <div class="col-12 col-md-8 proyecto__img-container img2 text-center">
                        <img src="imagenes/img_proyecto2-hd.png" alt="Proyecto clásico realizado por Flexy Webs adaptado a todos los dispositivos" style="width: 90%;">
                    </div>
                    <div class="col-12 col-md-4 proyecto__text-container text2">
                        <div>
                            <h3>Web clásica</h3>
                            <p>Centrado en la información a comunicar, este diseño tiene como objetivo principal la facilidad de uso, distinguiéndose por su elegancia.</p>
                            <a href="proximamente.php"><button class="btn"><b>Ver proyecto</b></button></a>
                        </div>
                    </div>
                </div>
                <div class="row proyecto__container">
                    <div class="col-12 col-md-8 proyecto__img-container text-center">
                        <img src="imagenes/img_proyecto3-hd.png" alt="Proyecto minimalista por Flexy Webs adaptado a todos los dispositivos" style="width: 90%;">
                    </div>
                    <div class="col-12 col-md-4 proyecto__text-container">
                        <div>
                            <h3>Web minimalista</h3>
                            <p>Este estilo se reduce a lo esencial para combinar diseño y funcionalidad de una forma sencilla e inteligente, utilizando sólo los elementos mínimos y básicos.</p>
                            <a href="proximamente.php"><button class="btn"><b>Ver proyecto</b></button></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="margin-bottom: 3em;">
                        <h2>Y vos, ¿ya sabés cuál es el mejor diseño para tu alojamiento?</h2>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include_once("footer.php"); ?>
    </footer>
</body>

</html>