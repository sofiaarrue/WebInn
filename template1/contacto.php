<?php $pg = "contacto" ?>

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
    <title>Contacto</title>
</head>

<body id="contacto">
    <header>
        <?php include_once("menu-template1.php"); ?>
    </header>
    <main>
        <section class="contact-form">
            <div class="flex-container">
                <div class="form__img">
                    <h1 class="my-3">Consultas y reservas</h1>
                    <p class="text-center mb-5">Contactanos para obtener un asesoramiento personalizado</p>
                    <div class="img-container">
                        <img src="imagenes/logo.png" alt="">
                    </div>
                </div>
                <form action="contacto.php" class="form">
                    <div class="form__section">
                        <input type="text" name="txtNombre" class="form__input" placeholder="Nombre" required>
                    </div>
                    <div class="form__section">
                        <input type="email" class="form__input" placeholder="Email" required>
                    </div>
                    <div class="form__section">
                        <input type="tel" class="form__input" placeholder="Teléfono" required>
                    </div>
                    <div class="form__section">
                        <input type="text" class="form__input" onfocus="(this.type='date')" placeholder="Fecha de entrada" required>
                    </div>
                    <div class="form__section">
                        <input type="text" class="form__input" onfocus="(this.type='date')" placeholder="Fecha de salida" required>
                    </div>
                    <div class="form__section">
                        <input type="number" class="form__input" placeholder="Cantidad de adultos" required>
                    </div>
                    <div class="form__section">
                        <input type="number" class="form__input" placeholder="Cantidad de niños/as" required>
                    </div>
                    <div class="form__section">
                        <textarea class="form__input" placeholder="Escriba su mensaje quí"></textarea>
                    </div>
                    <div>
                        <button class="btn">Enviar</button>
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