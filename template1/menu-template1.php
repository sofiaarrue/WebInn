        <nav class="navbar" id="navbar">
            <div class="mx-3 nav-logo">
                <img src="imagenes/logo.png" alt="logo">
            </div>
            <ul class="navbar-ul mb-md-0" id="navbar-ul">
                <li class="nav-item">
                    <a class="nav-link" id="<?php echo ($pg == "inicio") ? "active" : ""; ?>" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="<?php echo ($pg == "unidades") ? "active" : ""; ?>" href="unidades.php">Unidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="<?php echo ($pg == "ubicacion") ? "active" : ""; ?>" href="ubicacion.php">Ubicación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="<?php echo ($pg == "galeria") ? "active" : ""; ?>" href="galeria.php">Galería</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="<?php echo ($pg == "servicios") ? "active" : ""; ?>" href="servicios.php">Servicios</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" id="<?php echo ($pg == "contacto") ? "active" : ""; ?>" href="contacto.php">Contacto</a>
                </li>
            </ul>
            <div class="toggle-menu align-items-center" id="toggle-menu">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="toggle-menu2 align-items-center" id="toggle-menu2">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </nav>
        <script src="../js/menu.js"></script>