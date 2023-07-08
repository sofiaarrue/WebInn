<nav class="navbar" id="navbar">
    <div class="mx-3 nav-logo">
        <img src="imagenes/logo1.webp" alt="logo">
    </div>
    <ul class="navbar-ul mb-md-0" id="navbar-ul">
        <li class="nav-item">
            <i class="fa-solid fa-house"></i>
            <a class="nav-link" id="<?php echo ($pg == "index") ? "active" : ""; ?>" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
            <i class="fa-solid fa-code"></i>
            <a class="nav-link" id="<?php echo ($pg == "disenoweb") ? "active" : ""; ?>" href="disenoweb.php">Diseño Web</a>
        </li>
        <li class="nav-item">
            <i class="fa-solid fa-pencil"></i>
            <a class="nav-link" id="<?php echo ($pg == "proyectos") ? "active" : ""; ?>" href="proyectos.php">Proyectos</a>
        </li>
        <li class="nav-item">
            <i class="fa-solid fa-user"></i>
            <a class="nav-link" id="<?php echo ($pg == "quienesSomos") ? "active" : ""; ?>" href="quienesSomos.php">Quienes somos</a>
        </li>
        <li class="nav-item me-4">
            <i class="fa-solid fa-envelope"></i>
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
<script src="js/menu.js"></script>