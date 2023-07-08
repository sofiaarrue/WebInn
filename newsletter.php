<?php

if ($_POST) {
$nombre = $_POST["txtNombre"];
$correo = $_POST["txtCorreo"];
$check = $_POST["txtCheckbox1"];


if ($nombre != "" && $correo != "" && $check != "") {

// Varios destinatarios
$para = "";
$titulo = $nombre . ' se subscribió a tu Newsletter';

// mensaje
$cuerpo = "
Nombre: $nombre <br>
Correo: $correo <br>
";

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: contacto@flexywebs.com' . "\r\n";
$cabeceras .= 'From:' . $correo . "\r\n";

// Enviarlo
mail($para, $titulo, $cuerpo, $cabeceras);
}
}?>


<section class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center py-2">Enterate de todas nuestras ofertas y novedades</h3>
            </div>
        </div>
        <form action="<?php echo $pg . ".php"?>" method="post" class="pt-2">
            <div class="row mx-auto">
                <div class="col-12 col-md-6 my-1 text-center">
                    <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Nombre *" required>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <input type="email" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="Correo electrónico *" required>
                </div>
                <div class="col-12" style="display: flex; align-items:center;">
                    <input type="checkbox" id="txtCheckbox1" name="txtCheckbox1" class="my-3" required>
                    <label for="txtCheckbox1" style="font-size: 15px; color: #877560; display:inline;">  Quiero recibir noticias de Flexy Webs</label>
                </div>
                <div class="col-12 my-3 text-center">
                    <button type="submit" class="btn my-0">Subscribirme</button>
                </div>
            </div>
        </form>
    </div>
</section>